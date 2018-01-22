<?php

namespace Production\ProductionBundle\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Production\ProductionBundle\Entity\WorkflowExecution;
use Production\ProductionBundle\Form\WorkflowExecutionType;

/**
 * WorkflowExecution controller.
 *
 */
class WorkflowExecutionController extends Controller
{

    /**
     * Lists all WorkflowExecution entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ProductionBundle:WorkflowExecution')->findAll();

        return $this->render('ProductionBundle:WorkflowExecution:index.html.twig', array(
            'entities' => $entities,
        ));
    }





    public function etapeuAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ProductionBundle:WorkflowExecution')->findAll();

        return $this->render('ProductionBundle:WorkflowExecution:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new WorkflowExecution entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new WorkflowExecution();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('workflowexecution_show', array('id' => $entity->getId())));
        }

        return $this->render('ProductionBundle:WorkflowExecution:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a WorkflowExecution entity.
     *
     * @param WorkflowExecution $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(WorkflowExecution $entity)
    {
        $form = $this->createForm(new WorkflowExecutionType(), $entity, array(
            'action' => $this->generateUrl('workflowexecution_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new WorkflowExecution entity.
     *
     */
    public function newAction()
    {
        $entity = new WorkflowExecution();
        $form   = $this->createCreateForm($entity);

        return $this->render('ProductionBundle:WorkflowExecution:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a WorkflowExecution entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProductionBundle:WorkflowExecution')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find WorkflowExecution entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ProductionBundle:WorkflowExecution:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing WorkflowExecution entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProductionBundle:WorkflowExecution')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find WorkflowExecution entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ProductionBundle:WorkflowExecution:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a WorkflowExecution entity.
    *
    * @param WorkflowExecution $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(WorkflowExecution $entity)
    {
        $form = $this->createForm(new WorkflowExecutionType(), $entity, array(
            'action' => $this->generateUrl('workflowexecution_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing WorkflowExecution entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProductionBundle:WorkflowExecution')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find WorkflowExecution entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('workflowexecution_edit', array('id' => $id)));
        }

        return $this->render('ProductionBundle:WorkflowExecution:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a WorkflowExecution entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ProductionBundle:WorkflowExecution')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find WorkflowExecution entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('workflowexecution'));
    }

    /**
     * Creates a form to delete a WorkflowExecution entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('workflowexecution_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

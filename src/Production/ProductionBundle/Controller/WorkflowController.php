<?php

namespace Production\ProductionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Production\ProductionBundle\Entity\Workflow;
use Production\ProductionBundle\Form\WorkflowType;

/**
 * Workflow controller.
 *
 */
class WorkflowController extends Controller
{

    /**
     * Lists all Workflow entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ProductionBundle:Workflow')->findAll();

        return $this->render('ProductionBundle:Workflow:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Workflow entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Workflow();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($entity);
            $em->flush();


            return $this->redirect($this->generateUrl('workflow_new'));
        }

        return $this->render('ProductionBundle:Workflow:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Workflow entity.
     *
     * @param Workflow $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Workflow $entity)
    {
        $form = $this->createForm(new WorkflowType(), $entity, array(
            'action' => $this->generateUrl('workflow_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Workflow entity.
     *
     */
    public function newAction()
    {
        $entity = new Workflow();
        $form   = $this->createCreateForm($entity);
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ProductionBundle:Workflow')->findAll();

        return $this->render('ProductionBundle:Workflow:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Workflow entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProductionBundle:Workflow')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Workflow entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ProductionBundle:Workflow:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Workflow entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProductionBundle:Workflow')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Workflow entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ProductionBundle:Workflow:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Workflow entity.
    *
    * @param Workflow $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Workflow $entity)
    {
        $form = $this->createForm(new WorkflowType(), $entity, array(
            'action' => $this->generateUrl('workflow_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Workflow entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProductionBundle:Workflow')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Workflow entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('workflow_edit', array('id' => $id)));
        }

        return $this->render('ProductionBundle:Workflow:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Workflow entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ProductionBundle:Workflow')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Workflow entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('workflow'));
    }

    /**
     * Creates a form to delete a Workflow entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('workflow_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

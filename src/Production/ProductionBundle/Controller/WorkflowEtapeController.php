<?php

namespace Production\ProductionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Production\ProductionBundle\Entity\WorkflowEtape;
use Production\ProductionBundle\Form\WorkflowEtapeType;

/**
 * WorkflowEtape controller.
 *
 */
class WorkflowEtapeController extends Controller
{

    /**
     * Lists all WorkflowEtape entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ProductionBundle:WorkflowEtape')->findAll();

        return $this->render('ProductionBundle:WorkflowEtape:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new WorkflowEtape entity.
     *
     */
    public function createAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = new WorkflowEtape();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $workflow = $request->request->get('workflow');
            $em = $this->getDoctrine()->getManager();
            $entities = $em->getRepository('ProductionBundle:Workflow')->find($workflow);
            $entity->setCustomer($entities);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('workflowetape_new'));
        }
        $entitiess = $em->getRepository('ProductionBundle:Workflow')->findAll();
        return $this->render('ProductionBundle:WorkflowEtape:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'entitiess' => $entitiess,
        ));
    }

    /**
     * Creates a form to create a WorkflowEtape entity.
     *
     * @param WorkflowEtape $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(WorkflowEtape $entity)
    {
        $form = $this->createForm(new WorkflowEtapeType(), $entity, array(
            'action' => $this->generateUrl('workflowetape_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new WorkflowEtape entity.
     *
     */
    public function newAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entity = new WorkflowEtape();
        $form   = $this->createCreateForm($entity);
        $entities = $em->getRepository('ProductionBundle:WorkflowEtape')->findAll();
        $entitiess = $em->getRepository('ProductionBundle:Workflow')->findAll();
        return $this->render('ProductionBundle:WorkflowEtape:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),'entities' => $entities,'entitiess' => $entitiess,
        ));
    }

    /**
     * Finds and displays a WorkflowEtape entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProductionBundle:WorkflowEtape')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find WorkflowEtape entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ProductionBundle:WorkflowEtape:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing WorkflowEtape entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProductionBundle:WorkflowEtape')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find WorkflowEtape entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ProductionBundle:WorkflowEtape:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a WorkflowEtape entity.
    *
    * @param WorkflowEtape $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(WorkflowEtape $entity)
    {
        $form = $this->createForm(new WorkflowEtapeType(), $entity, array(
            'action' => $this->generateUrl('workflowetape_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing WorkflowEtape entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProductionBundle:WorkflowEtape')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find WorkflowEtape entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('workflowetape_edit', array('id' => $id)));
        }

        return $this->render('ProductionBundle:WorkflowEtape:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a WorkflowEtape entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ProductionBundle:WorkflowEtape')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find WorkflowEtape entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('workflowetape'));
    }

    /**
     * Creates a form to delete a WorkflowEtape entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('workflowetape_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

<?php

namespace Production\ProductionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Production\ProductionBundle\Entity\ParProduit;
use Production\ProductionBundle\Form\ParProduitType;

/**
 * ParProduit controller.
 *
 */
class ParProduitController extends Controller
{

    /**
     * Lists all ParProduit entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ProductionBundle:ParProduit')->findAll();

        return $this->render('ProductionBundle:ParProduit:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new ParProduit entity.
     *
     */
    public function createAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = new ParProduit();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $workflow = $request->request->get('workflow');
            $entities = $em->getRepository('ProductionBundle:Workflow')->find($workflow);
            $entity->setCustomer($entities);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('produit_new'));
        }
        $entitiess = $em->getRepository('ProductionBundle:Workflow')->findAll();
        return $this->render('ProductionBundle:ParProduit:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'entitiess' => $entitiess,
        ));
    }

    /**
     * Creates a form to create a ParProduit entity.
     *
     * @param ParProduit $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(ParProduit $entity)
    {
        $form = $this->createForm(new ParProduitType(), $entity, array(
            'action' => $this->generateUrl('produit_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ParProduit entity.
     *
     */
    public function newAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entity = new ParProduit();
        $form   = $this->createCreateForm($entity);
        $entities = $em->getRepository('ProductionBundle:ParProduit')->findAll();
        $entitiess = $em->getRepository('ProductionBundle:Workflow')->findAll();
        return $this->render('ProductionBundle:ParProduit:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),'entities' => $entities,'entitiess' => $entitiess,

        ));
    }

    /**
     * Finds and displays a ParProduit entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProductionBundle:ParProduit')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ParProduit entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ProductionBundle:ParProduit:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ParProduit entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProductionBundle:ParProduit')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ParProduit entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ProductionBundle:ParProduit:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a ParProduit entity.
    *
    * @param ParProduit $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ParProduit $entity)
    {
        $form = $this->createForm(new ParProduitType(), $entity, array(
            'action' => $this->generateUrl('produit_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ParProduit entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProductionBundle:ParProduit')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ParProduit entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('produit_edit', array('id' => $id)));
        }

        return $this->render('ProductionBundle:ParProduit:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a ParProduit entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ProductionBundle:ParProduit')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ParProduit entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('produit'));
    }

    /**
     * Creates a form to delete a ParProduit entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('produit_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

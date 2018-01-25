<?php

namespace Production\ProductionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Production\ProductionBundle\Entity\Vendeur;
use Production\ProductionBundle\Form\VendeurType;

/**
 * Vendeur controller.
 *
 */
class VendeurController extends Controller
{

    /**
     * Lists all Vendeur entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ProductionBundle:Vendeur')->findAll();

        return $this->render('ProductionBundle:Vendeur:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Vendeur entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Vendeur();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('vendeur_new'));
        }

        return $this->render('ProductionBundle:Vendeur:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Vendeur entity.
     *
     * @param Vendeur $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Vendeur $entity)
    {
        $form = $this->createForm(new VendeurType(), $entity, array(
            'action' => $this->generateUrl('vendeur_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Vendeur entity.
     *
     */
    public function newAction()
    {
        $entity = new Vendeur();
        $form   = $this->createCreateForm($entity);
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('ProductionBundle:Vendeur')->findAll();
        return $this->render('ProductionBundle:Vendeur:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Vendeur entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProductionBundle:Vendeur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Vendeur entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ProductionBundle:Vendeur:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Vendeur entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProductionBundle:Vendeur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Vendeur entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ProductionBundle:Vendeur:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Vendeur entity.
    *
    * @param Vendeur $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Vendeur $entity)
    {
        $form = $this->createForm(new VendeurType(), $entity, array(
            'action' => $this->generateUrl('vendeur_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Vendeur entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProductionBundle:Vendeur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Vendeur entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('vendeur_edit', array('id' => $id)));
        }

        return $this->render('ProductionBundle:Vendeur:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Vendeur entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ProductionBundle:Vendeur')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Vendeur entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('vendeur'));
    }

    /**
     * Creates a form to delete a Vendeur entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('vendeur_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

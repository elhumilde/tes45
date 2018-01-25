<?php

namespace Production\ProductionBundle\Controller;

use Production\ProductionBundle\Entity\AffectationEtapeUtilisateur;
use Production\ProductionBundle\Entity\Oneligne;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Production\ProductionBundle\Entity\BonCommandeLigne;
use Production\ProductionBundle\Form\BonCommandeLigneType;

/**
 * BonCommandeLigne controller.
 *
 */
class BonCommandeLigneController extends Controller
{

    /**
     * Lists all BonCommandeLigne entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $production =$em->getRepository('UserBundle:User')->findBY(array('service'=>'PRODUCTION'));

        $entities = $em->getRepository('ProductionBundle:BonCommandeLigne')->findBY(array('affecter'=>'2'));

        return $this->render('ProductionBundle:BonCommandeLigne:index.html.twig', array(
            'entities' => $entities,
            'production' => $production,
        ));
    }

    public function rechercheAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();


        if($request->isMethod('get'))
        {

            $cfirme   =    $request->query->get('cfirme');
            $client   =    $request->query->get('client');
            $produit  =    $request->query->get('produit');
            $numero   =    $request->query->get('numero');

            $entities = $em->getRepository('ProductionBundle:BonCommandeLigne')->findB($client,$cfirme,$numero,$produit);

           //$produits  = $em->getRepository('telecontactBundle:MobileUtilisateurWeb')->bySearch($nom,$prenom,$email,$type,$date1,$date2);
           //$entitiesl = count($produits);
           //$entities  = $this->get('knp_paginator')->paginate($produits,$this->get('request')->query->get('page', 1),100);
        }

        $var=array('cfirme'=>$cfirme,'client'=>$client,'produit'=>$produit,'numero'=>$numero);

        $production =$em->getRepository('UserBundle:User')->findBY(array('service'=>'PRODUCTION'));

       // $entities = $em->getRepository('ProductionBundle:BonCommandeLigne')->findBY(array('affecter'=>'2'));

        return $this->render('ProductionBundle:BonCommandeLigne:index.html.twig', array(
            'entities' => $entities,
            'production' => $production,
            'var' => $var
        ));
    }


    public function affecterAction()
    {
        $em = $this->getDoctrine()->getManager();

        $production =$em->getRepository('UserBundle:User')->findBY(array('service'=>'PRODUCTION'));

        $entities = $em->getRepository('ProductionBundle:BonCommandeLigne')->findBY(array('affecter'=>'3'));

        return $this->render('ProductionBundle:BonCommandeLigne:affecter.html.twig', array(
            'entities' => $entities,
            'production' => $production,
        ));
    }

    public function productionAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();




        $entityadl=null;

        if($request->isMethod('Post')) {

            $users=$request->request->get('users');

            $oneligne= new Oneligne();

            foreach( $users as $id){
                $fir=explode("|",$id) ;



                $workflow = $em->getRepository('ProductionBundle:WorkflowEtape')->findBY(array('idWorkflow'=>$fir[1]));

                $entity = $em->getRepository('ProductionBundle:BonCommandeLigne')->find( $fir[1]);
                if($workflow){
                foreach( $workflow as $wf){


                 $etapes =$em->getRepository('ProductionBundle:WorkflowEtape')->find($fir[0]);

                $count_production =  $request->request->get('count_production');

                $production = $request->request->get('checkbox_production');




                if ($production == 'on') {


                    for ($i = 1; $i <= $count_production; $i++) {

                        $info_check = $request->request->get('checkbox_utilisateur_prod' . $i);
                        $info = $request->request->get('utilisateur_prod' . $i);
                        $info_cmt = $request->request->get('cmt_prod' . $i);

                        $contact = new AffectationEtapeUtilisateur();
                        if ($info_check == 'on') {

                            $entities = $em->getRepository('UserBundle:User')->find($info);
                            $contact->setUtilisateur($entities);
                            $contact->setBncommande($entity);
                            $contact->setEtape($etapes);
                            $contact->setAffecter('4');
                            $entity->setAffecter('3');
                        //  $contact->setUtilisateurE($this->container->get('security.context')->getToken()->getUser());
                            $contact->setDateAffectation(new \DateTime('now'));


                            $em->persist($contact);
                            $em->flush();
                        }

                    }

                }}
                    $oneligne->setLigneProduit($entity);
                    $oneligne->setDateCreation(new \DateTime('now'));

                    $em->persist($entity);
                    $em->persist($oneligne);
                    $em->flush();
                }
            else{
                $oneligne->setLigneProduit($entity);
                $oneligne->setDateCreation(new \DateTime('now'));
                $em->persist($entity);
                $em->persist($oneligne);
                $em->flush();

              }

            }}

        $production =$em->getRepository('UserBundle:User')->findBY(array('service'=>'PRODUCTION'));
        $entities = $em->getRepository('ProductionBundle:BonCommandeLigne')->findBY(array('affecter'=>'2'));

        return $this->render('ProductionBundle:BonCommandeLigne:index.html.twig', array(
            'entities' => $entities,
            'production' => $production,
        ));
    }


    /**
     * Creates a new BonCommandeLigne entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new BonCommandeLigne();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('boncommandeligne_show', array('id' => $entity->getId())));
        }

        return $this->render('ProductionBundle:BonCommandeLigne:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a BonCommandeLigne entity.
     *
     * @param BonCommandeLigne $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(BonCommandeLigne $entity)
    {
        $form = $this->createForm(new BonCommandeLigneType(), $entity, array(
            'action' => $this->generateUrl('boncommandeligne_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new BonCommandeLigne entity.
     *
     */
    public function newAction()
    {
        $entity = new BonCommandeLigne();
        $form   = $this->createCreateForm($entity);

        return $this->render('ProductionBundle:BonCommandeLigne:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a BonCommandeLigne entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $production =$em->getRepository('UserBundle:User')->findBY(array('service'=>'PRODUCTION'));
        $entity = $em->getRepository('ProductionBundle:BonCommandeLigne')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BonCommandeLigne entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ProductionBundle:BonCommandeLigne:show.html.twig', array(
            'entity'      => $entity,
            'production' =>$production,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing BonCommandeLigne entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProductionBundle:BonCommandeLigne')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BonCommandeLigne entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ProductionBundle:BonCommandeLigne:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a BonCommandeLigne entity.
    *
    * @param BonCommandeLigne $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(BonCommandeLigne $entity)
    {
        $form = $this->createForm(new BonCommandeLigneType(), $entity, array(
            'action' => $this->generateUrl('boncommandeligne_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing BonCommandeLigne entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProductionBundle:BonCommandeLigne')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BonCommandeLigne entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('boncommandeligne_edit', array('id' => $id)));
        }

        return $this->render('ProductionBundle:BonCommandeLigne:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a BonCommandeLigne entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ProductionBundle:BonCommandeLigne')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find BonCommandeLigne entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('boncommandeligne'));
    }

    /**
     * Creates a form to delete a BonCommandeLigne entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('boncommandeligne_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

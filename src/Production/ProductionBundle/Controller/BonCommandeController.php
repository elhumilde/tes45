<?php

namespace Production\ProductionBundle\Controller;

use Production\ProductionBundle\Entity\Welcome;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Production\ProductionBundle\Entity\BonCommande;
use Production\ProductionBundle\Form\BonCommandeType;
use Production\ProductionBundle\Domaine\NomDomaine;

/**
 * BonCommande controller.
 *
 */
class BonCommandeController extends Controller
{

    public function nonsoftdAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $id_avis = $request->request->get('id');
        $etat   =  $request->request->get('etat');

        $entity = $em->getRepository('ProductionBundle:BonCommande')->find($id_avis);
        $entity->setOrdre($etat);
        $em->persist($entity);
        $var=$em->flush();

        if($var){
            $email='yes';
        }
        else{

            $email='non';
        }

        $response = new JsonResponse();
        return $response->setData(array('nom' => $email));
    }


    public function rechercheAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();


        if($request->isMethod('get'))
        {

            $cfirme   =    $request->query->get('cfirme');
            $client   =    $request->query->get('client');

          $entities = $em->getRepository('ProductionBundle:BonCommande')->findB($client,$cfirme);

            //$produits  = $em->getRepository('telecontactBundle:MobileUtilisateurWeb')->bySearch($nom,$prenom,$email,$type,$date1,$date2);
            //$entitiesl = count($produits);
            //$entities  = $this->get('knp_paginator')->paginate($produits,$this->get('request')->query->get('page', 1),100);
        }

        $var=array('cfirme'=>$cfirme,'client'=>$client);

        // $entities = $em->getRepository('ProductionBundle:BonCommandeLigne')->findBY(array('affecter'=>'2'));
          return $this->render('ProductionBundle:BonCommande:index.html.twig', array(
            'entities' => $entities,
            'var' => $var
        ));
    }

    public function recherchedAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();


        if($request->isMethod('get'))
        {

            $cfirme   =    $request->query->get('cfirme');
            $client   =    $request->query->get('client');

            $entities = $em->getRepository('ProductionBundle:BonCommande')->findB($client,$cfirme);

            //$produits  = $em->getRepository('telecontactBundle:MobileUtilisateurWeb')->bySearch($nom,$prenom,$email,$type,$date1,$date2);
            //$entitiesl = count($produits);
            //$entities  = $this->get('knp_paginator')->paginate($produits,$this->get('request')->query->get('page', 1),100);
        }

        $var=array('cfirme'=>$cfirme,'client'=>$client);

        // $entities = $em->getRepository('ProductionBundle:BonCommandeLigne')->findBY(array('affecter'=>'2'));
        return $this->render('ProductionBundle:BonCommande:wc.html.twig', array(
            'entities' => $entities,
            'var' => $var
        ));
    }


    public function produitAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $production =$em->getRepository('UserBundle:User')->findBY(array('service'=>'PRODUCTION'));

        $entities = $em->getRepository('ProductionBundle:BonCommandeLigne')->findBY(array('numBc'=>$id));
        $entit = $em->getRepository('ProductionBundle:BonCommande')->find($id);


        return $this->render('ProductionBundle:BonCommande:produit.html.twig', array(
            'entities' => $entities,
            'production' => $production,
            'entit' => $entit
        ));
    }



    public function testAction()
    {
        $name1 = 'telecontact-vepec.ma';
// Not Valid Domain name valid are: .co.id, or.id, web.id ...
        $name2 = 'google.id';
// Not Valid Domain name valid are: .co, com.co, net.co, nom.co
        $name3 = 'notdomain.en.co';
        $name4 = 'http://www.ads-id.com/forums/member.php/736-ewwink';
        echo "<html><head><title>PHP Domain Name Validation</title></head><body>";
        if( NomDomaine::is_domain($name1,true)) echo "<strong>$name1</strong> = is Valid domain name<br>";
        else echo "<strong>$name1</strong> = is not Valid domain name <br />";
        if( NomDomaine::is_domain($name2)) echo "<strong>$name2</strong> = is Valid domain name<br>";
        else echo "<strong>$name2</strong> = is not Valid domain name, you can't register with TLD .id<br>";
        if( NomDomaine::is_domain($name3)) echo "<strong>$name3</strong> = is Valid domain name<br>";
        else echo "<strong>$name3</strong> = is not Valid domain name<br>";
        if( NomDomaine::is_domain($name4)) echo "$name4 = is Valid domain name<br>";
        else echo "<strong>$name4</strong> = is not Valid domain name because it is URL<br>";
// "true" mean clean or parse domain name from URL
        if( NomDomaine::is_domain($name4, true)) {
            echo "**** You can also call checkName::cleanURL() to parse domain from URL or use 'true' **** <br />";
            echo "<strong>".NomDomaine::cleanURL($name4)."</strong> = is Valid domain name <br />";
        }
        else echo "$name4 = is not Valid domain name <br />";
        echo "</body></html>";
        die('ici');

        $em = $this->getDoctrine()->getManager();

        $production =$em->getRepository('UserBundle:User')->findBY(array('service'=>'PRODUCTION'));

        $entities = $em->getRepository('ProductionBundle:BonCommandeLigne')->findBY(array('numBc'=>$id));
        $entit = $em->getRepository('ProductionBundle:BonCommande')->find($id);


        return $this->render('ProductionBundle:BonCommande:produit.html.twig', array(
            'entities' => $entities,
            'production' => $production,
            'entit' => $entit
        ));
    }

    /**
     * Lists all BonCommande entities.
     *
     */

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ProductionBundle:BonCommande')->findBy(array('valider'=>2));

        return $this->render('ProductionBundle:BonCommande:index.html.twig', array(
            'entities' => $entities,
        ));
    }


    public function textAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $idbc = $request->request->get('idbc');

        $entity = $em->getRepository('ProductionBundle:Welcome')->findOneBy(array('idCommande' => $idbc));

        $text = $request->request->get('text');


        $entity->setCommentaire($text);

        $em->persist($entity);

        $var=$em->flush();
        if($var){
            $email='yes';
        }
        else{

            $email='non';
        }

        $response = new JsonResponse();
        return $response->setData(array('nom' => $email));
    }


    public function enligneAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $idbc = $request->request->get('idbc');

        $entity = $em->getRepository('ProductionBundle:Welcome')->findOneBy(array('idCommande' => $idbc));

        $text = $request->request->get('text');

        $entity->setDateMise(new \DateTime($text));

        $em->persist($entity);

        $var=$em->flush();
        if($var){
            $email='yes';
        }
        else{

            $email='non';
        }

        $response = new JsonResponse();
        return $response->setData(array('nom' => $email));
    }


    public function reunionAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $idbc = $request->request->get('idbc');

        $entity = $em->getRepository('ProductionBundle:Welcome')->findOneBy(array('idCommande' => $idbc));

        $text = $request->request->get('text');

        $entity->setDateReunion(new \DateTime($text));

        $em->persist($entity);

        $var=$em->flush();
        if($var){
            $email='yes';
        }
        else{

            $email='non';
        }

        $response = new JsonResponse();
        return $response->setData(array('nom' => $email));
    }


    public function validerAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $idbc = $request->request->get('idbc');
        $text = $request->request->get('text');
        $entity = $em->getRepository('ProductionBundle:BonCommandeLigne')->find($text);
        $entity->setAffecter(2);

        $em->persist($entity);

        $var=$em->flush();
        if($var){
            $email='yes';
        }
        else{

            $email='non';
        }

        $response = new JsonResponse();
        return $response->setData(array('nom' => $email));
    }

    public function nonAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();


        $idbc = $request->request->get('idbc');
        $text = $request->request->get('text');
        $entity = $em->getRepository('ProductionBundle:BonCommande')->find($text);
        $entity->setAffecter(1);

        $em->persist($entity);

        $var=$em->flush();
        if($var){
            $email='yes';
        }
        else{

            $email='non';
        }

        $response = new JsonResponse();
        return $response->setData(array('nom' => $email));
    }



    public function validersoftAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $idbc = $request->request->get('idbc');
        $entity = $em->getRepository('ProductionBundle:BonCommande')->find($idbc);
        $entity->setValider(2);

        $em->persist($entity);

        $var=$em->flush();
        if($var){
            $email='yes';
        }
        else{

            $email='non';
        }

        $response = new JsonResponse();
        return $response->setData(array('nom' => $email));
    }

    public function nonsoftAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $idbc = $request->request->get('idbc');
        $entity = $em->getRepository('ProductionBundle:BonCommande')->find($idbc);
        $entity->setValider(1);

        $em->persist($entity);

        $var=$em->flush();
        if($var){
            $email='yes';
        }
        else{

            $email='non';
        }

        $response = new JsonResponse();
        return $response->setData(array('nom' => $email));
    }



    public function wfAction($id)
    {
        $em = $this->getDoctrine()->getManager();
       $var = new Welcome();
        $entities = $em->getRepository('ProductionBundle:BonCommande')->find($id);
        $entit = $em->getRepository('ProductionBundle:Welcome')->findOneBy(array('idCommande' => $id));

        if($entit){

        }
        else{
            $var->setDateTrait(new \DateTime('now'));
            $var->setCommanderev($entities);
            $em->persist($var);
            $em->flush();

        }
        $entities = $em->getRepository('ProductionBundle:BonCommande')->find($id);

        return $this->render('ProductionBundle:BonCommande:wf.html.twig', array(
            'entities' => $entities,
        ));
    }

    public function wcAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ProductionBundle:BonCommande')->findAll();

        return $this->render('ProductionBundle:BonCommande:wc.html.twig', array(
            'entities' => $entities,
        ));
    }



    /**
     * Creates a new BonCommande entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new BonCommande();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('commande_show', array('id' => $entity->getId())));
        }

        return $this->render('ProductionBundle:BonCommande:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a BonCommande entity.
     *
     * @param BonCommande $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(BonCommande $entity)
    {
        $form = $this->createForm(new BonCommandeType(), $entity, array(
            'action' => $this->generateUrl('commande_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new BonCommande entity.
     *
     */
    public function newAction()
    {
        $entity = new BonCommande();
        $form   = $this->createCreateForm($entity);

        return $this->render('ProductionBundle:BonCommande:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a BonCommande entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProductionBundle:BonCommande')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BonCommande entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ProductionBundle:BonCommande:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing BonCommande entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProductionBundle:BonCommande')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BonCommande entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ProductionBundle:BonCommande:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a BonCommande entity.
    *
    * @param BonCommande $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(BonCommande $entity)
    {
        $form = $this->createForm(new BonCommandeType(), $entity, array(
            'action' => $this->generateUrl('commande_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing BonCommande entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProductionBundle:BonCommande')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BonCommande entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('commande_edit', array('id' => $id)));
        }

        return $this->render('ProductionBundle:BonCommande:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a BonCommande entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ProductionBundle:BonCommande')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find BonCommande entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('commande'));
    }

    /**
     * Creates a form to delete a BonCommande entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('commande_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

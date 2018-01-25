<?php

namespace Production\ProductionBundle\Controller;

use Production\ProductionBundle\Entity\ExecutionEtapeDetail;
use Production\ProductionBundle\Entity\WorkflowExecution;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Production\ProductionBundle\Entity\BonCommande;
use Production\ProductionBundle\Entity\AffectationEtapeUtilisateur;
use Production\ProductionBundle\Form\AffectationEtapeUtilisateurType;

/**
 * AffectationEtapeUtilisateur controller.
 *
 */
class AffectationEtapeUtilisateurController extends Controller
{

    /**
     * Lists all AffectationEtapeUtilisateur entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('ProductionBundle:AffectationEtapeUtilisateur')->findBayclrefus($this->container->get('security.context')->getToken()->getUser());
        return $this->render('ProductionBundle:AffectationEtapeUtilisateur:index.html.twig', array(
            'entities' => $entities,
        ));
    }



    public function detaillAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();


        $email = $request->request->get('usern');
        $etape = $request->request->get('etape');
        $idbc =  $request->request->get('idbc');

        $etat =  $request->request->get('etat');

        $entity = $em->getRepository('ProductionBundle:WorkflowExecution')->findOneBy(array('idEtape' => $etape ,'idLigneBc' => $idbc));

        $detaill = new ExecutionEtapeDetail();

        $detaill->setDateDebut(new \DateTime('now'));
        if($etat=="0"){
            $detaill->setType(2);
            $entity->setEtat(2);
        }
        elseif($etat=="1"){

            $detaill->setType(2);
            $entity->setEtat(2);
        }
        elseif($etat=="2"){
            $detaill->setType(1);
            $entity->setEtat(1);
        }


        $detaill->setDetails($entity);


        $em->persist($entity);
        $em->persist($detaill);

        $em->flush();

        $email=$etat;



        $response = new JsonResponse();
        return $response->setData(array('nom' => $email));
    }



    public function formAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();


        $email = $request->request->get('usern');
        $etape = $request->request->get('etape');
        $idbc = $request->request->get('idbc');

        $ent = $em->getRepository('ProductionBundle:AffectationEtapeUtilisateur')->find($etape);
        $entity=new WorkflowExecution();

        $entity->setEtexuc($ent);
        $entity->setIdEtape($etape);
        $entity->setDateDebut(new \DateTime('now'));
        $entity->setIdUtilisateur($this->container->get('security.context')->getToken()->getUser()->getId());
        $entity->setIdLigneBc($idbc);
        $entity->setEtat(0);
        $entity->setFin(1);
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


    public function finAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $etape = $request->request->get('etape');
        $idbc = $request->request->get('idbc');

        $entity = $em->getRepository('ProductionBundle:WorkflowExecution')->findOneBy(array('idEtape' => $etape ,'idLigneBc' => $idbc));


        $entity->setDateFin(new \DateTime('now'));
        $entity->setFin(2);
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





    public function textAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $etape = $request->request->get('etape');
        $idbc = $request->request->get('idbc');

        $entity = $em->getRepository('ProductionBundle:WorkflowExecution')->findOneBy(array('idEtape' => $etape ,'idLigneBc' => $idbc));
        $email = $request->request->get('usern');
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


    /**
     * Creates a new AffectationEtapeUtilisateur entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new AffectationEtapeUtilisateur();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('affectation_show', array('id' => $entity->getId())));
        }

        return $this->render('ProductionBundle:AffectationEtapeUtilisateur:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a AffectationEtapeUtilisateur entity.
     *
     * @param AffectationEtapeUtilisateur $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(AffectationEtapeUtilisateur $entity)
    {
        $form = $this->createForm(new AffectationEtapeUtilisateurType(), $entity, array(
            'action' => $this->generateUrl('affectation_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new AffectationEtapeUtilisateur entity.
     *
     */
    public function newAction()
    {
        $entity = new AffectationEtapeUtilisateur();
        $form   = $this->createCreateForm($entity);

        return $this->render('ProductionBundle:AffectationEtapeUtilisateur:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a AffectationEtapeUtilisateur entity.
     *
     */
    public function showAction($id,$uid)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProductionBundle:AffectationEtapeUtilisateur')->find($id);

         /*var_dump(count($entity));
         die('here');
         */

        $entities = $em->getRepository('ProductionBundle:AffectationEtapeUtilisateur')->findBy(array('idLigneBc' => $uid),array('idEtape' => 'DESC'));


        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AffectationEtapeUtilisateur entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ProductionBundle:AffectationEtapeUtilisateur:show.html.twig', array(
            'entity'      => $entity,
            'entities'    => $entities,
            'idbc'  =>$uid,
            'id'=>$id,

        ));
    }

    /**
     * Displays a form to edit an existing AffectationEtapeUtilisateur entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProductionBundle:AffectationEtapeUtilisateur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AffectationEtapeUtilisateur entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ProductionBundle:AffectationEtapeUtilisateur:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a AffectationEtapeUtilisateur entity.
    *
    * @param AffectationEtapeUtilisateur $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(AffectationEtapeUtilisateur $entity)
    {
        $form = $this->createForm(new AffectationEtapeUtilisateurType(), $entity, array(
            'action' => $this->generateUrl('affectation_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing AffectationEtapeUtilisateur entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProductionBundle:AffectationEtapeUtilisateur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AffectationEtapeUtilisateur entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('affectation_edit', array('id' => $id)));
        }

        return $this->render('ProductionBundle:AffectationEtapeUtilisateur:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a AffectationEtapeUtilisateur entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ProductionBundle:AffectationEtapeUtilisateur')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find AffectationEtapeUtilisateur entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('affectation'));
    }

    /**
     * Creates a form to delete a AffectationEtapeUtilisateur entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('affectation_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }

    public function productionAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();




        $entityadl=null;

        if($request->isMethod('Post')) {

            $users=$request->request->get('users');



            foreach( $users as $id){
                $fir=explode("|",$id) ;

                        $entity = $em->getRepository('ProductionBundle:BonCommandeLigne')->find( $fir[1]);

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
                                    $contact->setDateAffectation(new \DateTime('now'));
                                    $em->persist($contact);
                                    $em->flush();
                                }

                            }

                        }



            }

            return $this->redirect($this->generateUrl('boncommandeligne_show',array('id'=> $fir[1])));
        }
        die('heress');
        $production = $em->getRepository('UserBundle:User')->findBY(array('service'=>'PRODUCTION'));
        $entities   = $em->getRepository('ProductionBundle:BonCommandeLigne')->findBY(array('affecter'=>'2'));

        return $this->render('ProductionBundle:BonCommandeLigne:index.html.twig', array(
            'entities'   => $entities,
            'production' => $production,
        ));
    }




}

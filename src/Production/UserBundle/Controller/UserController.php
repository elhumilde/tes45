<?php

namespace Production\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Httpfoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class UserController extends Controller {

    public function loginFbAction() {
        return $this->redirect($this->generateUrl("home"));
    }

    /**
     * @Template()
     */
    public function whoIsOnlineAction() {
        $users = $this->getDoctrine()->getManager()->getRepository('UserBundle:User')->getActive();

        return array('users' => $users);
    }
    
    /**
     * user json list
     */
    public function autocompleteAction() {
        $request = $this->get('request');
        $keyword = $request->get('term');
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('UserBundle:User')->autocomplete($keyword);
        return $this->render('UserBundle:User:autocomplete.json.twig', array(
                    'entities' => $entities
                ));
    }

}
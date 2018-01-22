<?php

namespace Production\ProductionBundle\Twig;
use Doctrine\ORM\EntityManager;


class ConfigExtension extends \Twig_Extension {

    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }
    public function getFilters()
    {
        return array(new \Twig_SimpleFilter('somme', array($this,'calculSomme')),new \Twig_SimpleFilter('production', array($this,'production')),new \Twig_SimpleFilter('productiond', array($this,'productiond')),new \Twig_SimpleFilter('productiont', array($this,'productiont')),new \Twig_SimpleFilter('liste', array($this,'liste')),new \Twig_SimpleFilter('candidat', array($this,'candidat')),new \Twig_SimpleFilter('phone', array($this,'phone')),new \Twig_SimpleFilter('distrib', array($this,'distrib')),new \Twig_SimpleFilter('EmailSuivie', array($this,'EmailSuivie')),new \Twig_SimpleFilter('Emailtest', array($this,'Emailtest')),new \Twig_SimpleFilter('rc', array($this,'rc')),new \Twig_SimpleFilter('fonction', array($this,'fonction')),new \Twig_SimpleFilter('cfrfor', array($this,'cfrfor')),new \Twig_SimpleFilter('countfor', array($this,'countfor')),new \Twig_SimpleFilter('countforna', array($this,'countforna')),new \Twig_SimpleFilter('countfornam', array($this,'countfornam')),new \Twig_SimpleFilter('countfornai', array($this,'countfornai')),new \Twig_SimpleFilter('contactforna', array($this,'contactforna')),new \Twig_SimpleFilter('contactds', array($this,'contactds')),new \Twig_SimpleFilter('tachei', array($this,'tachei')),new \Twig_SimpleFilter('tached', array($this,'tached')),new \Twig_SimpleFilter('tachedmd', array($this,'tachedmd')),new \Twig_SimpleFilter('affecter', array($this,'affecter')),new \Twig_SimpleFilter('count', array($this,'count')),new \Twig_SimpleFilter('countFin', array($this,'countFin')),new \Twig_SimpleFilter('affecterd', array($this,'affecterd')),new \Twig_SimpleFilter('affecterdmd', array($this,'affecterdmd')),new \Twig_SimpleFilter('affecteri', array($this,'affecteri')),new \Twig_SimpleFilter('tachecontact', array($this,'tachecontact')),new \Twig_SimpleFilter('tachecontactd', array($this,'tachecontactd')),new \Twig_SimpleFilter('tachecontactdmd', array($this,'tachecontactdmd')),new \Twig_SimpleFilter('tachecontacti', array($this,'tachecontacti')),new \Twig_SimpleFilter('tachec', array($this,'tachec')),new \Twig_SimpleFilter('cloturer', array($this,'cloturer')),new \Twig_SimpleFilter('cloturerd', array($this,'cloturerd')),new \Twig_SimpleFilter('cloturerdmd', array($this,'cloturerdmd')),new \Twig_SimpleFilter('clotureri', array($this,'clotureri')),new \Twig_SimpleFilter('contact', array($this,'contact')),new \Twig_SimpleFilter('contactd', array($this,'contactd')),new \Twig_SimpleFilter('contactdmd', array($this,'contactdmd')),new \Twig_SimpleFilter('inscriptions', array($this,'inscriptions')),new \Twig_SimpleFilter('alerts', array($this,'alerts')),new \Twig_SimpleFilter('alertsc', array($this,'alertsc')),new \Twig_SimpleFilter('sommeD', array($this,'calculSommeD')),new \Twig_SimpleFilter('userD', array($this,'calculUsereD')),new \Twig_SimpleFilter('userDs', array($this,'calculUsereDs')),new \Twig_SimpleFilter('userDss', array($this,'calculUsereDss')),new \Twig_SimpleFilter('chart', array($this,'calculChart')),new \Twig_SimpleFilter('users', array($this,'utilisateur')),new \Twig_SimpleFilter('ville', array($this,'ville')),new \Twig_SimpleFilter('commerce', array($this,'commerce')),new \Twig_SimpleFilter('archiveD', array($this,'archiveD')),new \Twig_SimpleFilter('archiveM', array($this,'archiveM')),new \Twig_SimpleFilter('article', array($this,'article')),new \Twig_SimpleFilter('group', array($this,'group')),new \Twig_SimpleFilter('items', array($this,'items')),new \Twig_SimpleFilter('itemsGroupe', array($this,'itemsGroupe')),new \Twig_SimpleFilter('itemsDate', array($this,'itemsDate')),new \Twig_SimpleFilter('itemsDateL', array($this,'itemsDateL')),new \Twig_SimpleFilter('rs', array($this,'rs')),new \Twig_SimpleFilter('raisonsociale', array($this,'raisonsociale')),new \Twig_SimpleFilter('EmailRecu', array($this,'EmailRecu')),new \Twig_SimpleFilter('filtrerAnon', array($this,'filtrerAnon')),new \Twig_SimpleFilter('BienvenuUser', array($this,'BienvenuUser')),new \Twig_SimpleFilter('ReferenceUser', array($this,'ReferenceUser')),new \Twig_SimpleFilter('enregistrerUser', array($this,'enregistrerUser')),new \Twig_SimpleFilter('miseneligneUser', array($this,'miseneligneUser')),new \Twig_SimpleFilter('EmailRecuD', array($this,'EmailRecuD')),new \Twig_SimpleFilter('EmailRecuF', array($this,'EmailRecuF')),new \Twig_SimpleFilter('EmailRecuFL', array($this,'EmailRecuFL')),new \Twig_SimpleFilter('EmailRecuFN', array($this,'EmailRecuFN')),new \Twig_SimpleFilter('EmailRecuFNT', array($this,'EmailRecuFNT')),new \Twig_SimpleFilter('EmailRecuFLT', array($this,'EmailRecuFLT')));


    }
    public function productiont($udid)
    {
        $logoConfig = $this->em->getRepository('ProductionBundle:AffectationEtapeUtilisateur')->findOneBy(array('idLigneBc'=> $udid ,'idEtape' => 3));;

        return $logoConfig;

    }

    public function productiond($udid)
    {
        $logoConfig = $this->em->getRepository('ProductionBundle:AffectationEtapeUtilisateur')->findOneBy(array('idLigneBc'=> $udid ,'idEtape' => 2));;

        return $logoConfig;

    }
    public function production($udid)
    {
        $logoConfig = $this->em->getRepository('ProductionBundle:AffectationEtapeUtilisateur')->findOneBy(array('idLigneBc'=> $udid ,'idEtape' => 1));;

        return $logoConfig;

    }
    public function EmailSuivie($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:DemandeDevisDetails')->findOneBy(array('emailExpediteur'=> $udid));;

        return $logoConfig;

    }
    public function liste($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:Phone')->findOneBy(array('id'=> $udid));;
        $entities = $this->em->getRepository('telecontactBundle:Liste')->findAll();
        $entitiesl=count($entities);
        return $entitiesl;

    }
    public function phone($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:Phone')->findOneBy(array('id'=> $udid));;

        return $logoConfig;

    }

    public function distrib($udid)
    {

        $logoConfig = $this->em->getRepository('telecontactBundle:Distribution')->findOneBy(array('id'=> $udid));

        return $logoConfig;
    }


    public function Emailtest($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:Suivie')->findOneBy(array('email'=> $udid));;

        return $logoConfig;

    }

    public function rc($udid)
    {

        $logoConfig = $this->em->getRepository('telecontactBundle:Rc')->findOneBy(array('cfirme'=> $udid));

        return  $logoConfig;

    }
    public function tachecontact($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:ContactAffectation')->findOneBy(array('idContact' => $udid));

        return $logoConfig;

    }

    public function tachecontacti($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:InscriptionsAffectation')->findOneBy(array('idInscrit' => $udid));

        return $logoConfig;

    }
    public function fonction($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:Fonctions')->findOneBy(array('id' => $udid));

        return $logoConfig;

    }
    public function tachecontactd($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:AnonnceAffectation')->findOneBy(array('idContact' => $udid));

        return $logoConfig;

    }

    public function tachecontactdmd($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:AnonnceAffectationmd')->findOneBy(array('idContact' => $udid));

        return $logoConfig;

    }


    public function candidat($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:Candidat')->findcouts($udid);
        return $logoConfig;
    }
    public function tachec($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:ContactAffectation')->findByc($udid);

        return $logoConfig;

    }
    public function tachei($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:InscriptionsAffectation')->findByc($udid);

        return $logoConfig;

    }
    public function tached($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:AnonnceAffectation')->findByc($udid);

        return $logoConfig;

    }

    public function tachedmd($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:AnonnceAffectationmd')->findByc($udid);

        return $logoConfig;

    }

    public function cloturer($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:ContactAffectation')->rechercher($udid);
        return $logoConfig ;

    }
    public function cloturerd($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:AnonnceAffectation')->rechercher($udid);
        return $logoConfig ;

    }
    public function cloturerdmd($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:AnonnceAffectationmd')->rechercher($udid);
        return $logoConfig ;

    }
    public function affecterdmd($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:AnonnceAffectationmd')->rechercherkr($udid);
        return $logoConfig ;
    }

    public function clotureri($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:InscriptionsAffectation')->rechercher($udid);
        return $logoConfig ;
    }
    public function affecter($udid,$idyes)
    {
        $logoConfig = $this->em->getRepository('ProductionBundle:AffectationEtapeUtilisateur')->findOneBy(array('idEtape' => $udid ,'affecter'=> 4,'idLigneBc' => $idyes));
        return $logoConfig ;

    }

    public function countFin($udid,$idyes)
    {
        $nbrEtapes = $this->em->getRepository('ProductionBundle:WorkflowEtape')->findBy(array('idWorkflow' => $udid ));
        $nbrEtapesAff = $this->em->getRepository('ProductionBundle:WorkflowExecution')->findBy(array('fin' => 2,'idLigneBc' =>$idyes ));
        $nbrEtapes=count($nbrEtapes);
        if ($nbrEtapes=='0'){
            $nbrEtapes=1;
        }
        $nbrEtapesAff=count($nbrEtapesAff);
        $new_width = ($nbrEtapesAff * 100) / $nbrEtapes;

        return $new_width ;

    }
    public function count($udid,$idyes)
    {
        $nbrEtapes = $this->em->getRepository('ProductionBundle:WorkflowEtape')->findBy(array('idWorkflow' => $udid ));
        $nbrEtapesAff = $this->em->getRepository('ProductionBundle:AffectationEtapeUtilisateur')->findBy(array('idLigneBc' => $idyes ));
        $nbrEtapes=count($nbrEtapes);
        if ($nbrEtapes=='0'){
            $nbrEtapes=1;
        }
        $nbrEtapesAff=count($nbrEtapesAff);
        $new_width = ($nbrEtapesAff * 100) / $nbrEtapes;

        return $new_width ;

    }
    public function affecterd($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:AnonnceAffectation')->rechercherkr($udid);
        return $logoConfig ;

    }
    public function affecteri($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:InscriptionsAffectation')->rechercherkr($udid);
        return $logoConfig ;

    }
    public function contact($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:Contact')->findOneBy(array('oid'=> $udid));
        return $logoConfig ;

    }
    public function contactd($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:Contactannonce')->findOneBy(array('oid'=> $udid));
        return $logoConfig ;

    }
    public function contactdmd($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:Contactannoncemd')->findOneBy(array('oid'=> $udid));
        return $logoConfig ;

    }

    public function countforna($ids)
    {
        $affectation = $this->em->getRepository('telecontactBundle:AnonnceAffectation')->findMay();

        $arr=array();
        $keys=null;
        if($affectation){
            foreach($affectation as $id){
                $i=0;
                $arr[$id->getIdContact()]=($id->getCmt());
            }

            $keys=array_keys($arr);
        }

        $logoConfig = $this->em->getRepository('telecontactBundle:Contactannonce')->countByTow($keys,$ids);

        return $logoConfig ;

    }
    public function countfornam($ids)
    {
        $affectation = $this->em->getRepository('telecontactBundle:AnonnceAffectationmd')->findMay();

        $arr=array();
        $keys=null;
        if($affectation){
            foreach($affectation as $id){
                $i=0;
                $arr[$id->getIdContact()]=($id->getCmt());
            }

            $keys=array_keys($arr);
        }

        $produits = $this->em->getRepository('telecontactBundle:Contactannoncemd')->findBayclN($keys);
        $entitiesl=count($produits);
        return $entitiesl ;
       }


    public function countfor($ids)
    {



        $logoConfig = $this->em->getRepository('telecontactBundle:RaisonSociale')->findcouts($ids);

        return $logoConfig ;

    }

    public function cfrfor($ids)
    {



        $logoConfig =$this->em->getRepository('telecontactBundle:Codefirme')->findOneBy(array('cfirme' => $ids));

        return $logoConfig ;

    }
    public function countfornai($ids)
    {




        $affectation = $this->em->getRepository('telecontactBundle:InscriptionsAffectation')->findMay();
        $arr=array();
        $keys=null;

        if($affectation){
            foreach($affectation as $id){
                $i=0;
                $arr[$id->getIdInscrit()]=($id->getCmt());
            }

            $keys=array_keys($arr);
        }
        $logoConfig = $this->em->getRepository('telecontactBundle:Inscriptions')->findBaycount($keys);


        return $logoConfig ;

    }


    public function contactforna($ids)
    {


        $affectation = $this->em->getRepository('telecontactBundle:ContactAffectation')->findMay();

        $arr=array();
        $keys=null;
        if($affectation){
            foreach($affectation as $id){
                $i=0;
                $arr[$id->getIdContact()]=($id->getCmt());
            }

            $keys=array_keys($arr);
        }

        $logoConfig = $this->em->getRepository('telecontactBundle:Contact')->findBycount($keys);


        return $logoConfig ;

    }
    public function contactds($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:Contactannonce')->findcount($udid);
        return $logoConfig ;
    }

    public function inscriptions($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:Inscriptions')->findOneBy(array('oid'=> $udid));
        return $logoConfig ;

    }


    public function article($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:Article')->findBy(array('idTheme'=> $udid));
        return $pass= (!$logoConfig) ? '0' :  count($logoConfig);

    }

    public function calculSomme($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:Marques')->findBy(array('udid'=> $udid));
        return $pass= (!$logoConfig) ? '0' :  count($logoConfig);

    }

    public function calculSommeD($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:Dirigeants')->findBy(array('udid'=> $udid));
        return $pass= (!$logoConfig) ? '0' : count($logoConfig);

    }
    public function calculUsereD($udid)
    {

        $logoConfig = $this->em->getRepository('telecontactBundle:MobileUtilisateurWeb')->findOneBy(array('idUser'=> $udid));
        return  $logoConfig;

    }

    public function calculUsereDs($udid)
    {

        $logoConfig = $this->em->getRepository('telecontactBundle:Phone')->findOneBy(array('id'=> $udid));
        return  $logoConfig;

    }

    public function calculUsereDss($udid)
    {

        $logoConfig = $this->em->getRepository('telecontactBundle:Distribution')->findOneBy(array('id'=> $udid));
        return  $logoConfig;

    }
    public function calculChart($udid)
    {

        $logoConfig = $this->em->getRepository('telecontactBundle:InscriptionsArchive')->findOneBy(array('udid'=> $udid));

         if(!$logoConfig)
             $pass=100;
         else
             $pass= $logoConfig->getCount()*3.030;

        return  $pass;

    }
    public function utilisateur($udid)
    {

        $logoConfig = $this->em->getRepository('telecontactBundle:Inscriptions')->findOneBy(array('udid'=> $udid));

        return  $logoConfig;

    }
    public function ville($udid)
    {

        $logoConfig = $this->em->getRepository('telecontactBundle:MobileVille')->findOneBy(array('id'=> $udid));
        $var=$logoConfig?$logoConfig->getVille():'pas disponible';

        return  $var;

    }
    public function commerce($udid)
    {

        $logoConfig = $this->em->getRepository('telecontactBundle:commercialvalidation')->findOneBy(array('udid'=> $udid));;

        return $logoConfig;

    }

    public function archiveD($udid)
    {

        $logoConfig = $this->em->getRepository('telecontactBundle:DirigeantsArchive')->findOneBy(array('oid'=> $udid));;

        return $logoConfig;

    }

    public function archiveM($udid)
    {

        $logoConfig = $this->em->getRepository('telecontactBundle:MarquesArchive')->findOneBy(array('oid'=> $udid));;

        return $logoConfig;

    }
    public function group($udid)
    {

        $logoConfig = $this->em->getRepository('telecontactBundle:BookGroups')->findOneBy(array('id'=> $udid));;

        return $logoConfig->getLibelle();

    }

    public function items($udid)
    {

        $logoConfig = $this->em->getRepository('telecontactBundle:BookItems')->findBy(array('idUser'=> $udid));;

        return count($logoConfig);

    }
    public function itemsGroupe($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:BookItems')->findByk($udid);
        return count($logoConfig);

    }

    public function itemsDate($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:BookItems')->findByd($udid);

        return $logoConfig;

    }
    public function itemsDateL($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:BookItems')->findBydl($udid);

        return $logoConfig;

    }


    public function BienvenuUser($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:UserEmails')->findOneBy(array('idUser'=> $udid,'typeEmail'=>'bienvenu'));;

        if($logoConfig){


            return $logoConfig;
        }
        else
            return $logoConfig;

    }
    public function ReferenceUser($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:UserEmails')->findOneBy(array('idUser'=> $udid,'typeEmail'=>'référencer'));;

        if($logoConfig){


            return $logoConfig;
        }
        else
            return $logoConfig;

    }
    public function enregistrerUser($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:UserEmails')->findOneBy(array('idUser'=> $udid,'typeEmail'=>'enregistrer création'));;

        if($logoConfig){


            return $logoConfig;
        }
        else
            return $logoConfig;

    }
    public function miseneligneUser($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:UserEmails')->findOneBy(array('idUser'=> $udid,'typeEmail'=>'mise en ligne'));;
        if($logoConfig){


        return $logoConfig;
        }
        else
            return $logoConfig;

    }


    public function filtrerAnon($udid)
    {
        $codefirme =$udid;

        $condition_code_entite = "code_firme=".$codefirme;

        $request = '<?xml version="1.0" encoding="UTF-8" ?>
	<search_requests>
	<search_request id="req_annonceur">
	<selection> '.$condition_code_entite.' </selection>
	<post_processing>

	sendxref(module);

	sendXrefHighlights();
	</post_processing>
	<options>
	<option name="maxFiles">1</option>
	<option name="startFiles">1</option>
	</options>
	</search_request>
	</search_requests>';
        // Initialisation de la session
        $ch = curl_init();
        // configuration des options
        curl_setopt($ch, CURLOPT_URL, "127.0.0.1:8277");
        //curl_setopt($ch, CURLOPT_URL, "100.1.1.245:8279");

        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 2);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
        // Ex&eacute;cution de la session
        $result=curl_exec($ch);
        // Fermeture des ressources
        curl_close($ch);

        $xml = new \SimpleXMLElement($result);

        $module =$xml->xpath("/search_answers/search_answer[@id='req_annonceur']/items/item[@hit=1]/item_data/data[@name='module']");

        list( , $module_A) = each($module);
        $logoConfig=(!empty($module_A))?  'Annonceur':'Inscrit';

        return $logoConfig;

    }

    public function EmailRecu($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:DemandeDevisDetails')->countEmailN($udid);

        return $logoConfig;

    }
    public function EmailRecuD($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:DemandeDevisDetails')->findOneBy(array('cfirme'=> $udid));;

        return $logoConfig;

    }
    public function EmailRecuF($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:DemandeDevisDetails')->countEmailD($udid);;

        return $logoConfig;

    }
    public function EmailRecuFL($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:DemandeDevisDetails')->countEmailDL($udid);;

        return $logoConfig;

    }
    public function EmailRecuFN($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:DemandeDevisDetails')->countEmailDN($udid);;

        return $logoConfig;

    }




    public function EmailRecuFLT($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:DemandeDevisDetails')->countEmailDLT($udid);;

        return $logoConfig;

    }
    public function EmailRecuFNT($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:DemandeDevisDetails')->countEmailDNT($udid);;

        return $logoConfig;

    }

    public function alerts($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:Alerts')->findBykl($udid);

        return $logoConfig;

    }
    public function alertsc($udid)
    {
        $logoConfig = $this->em->getRepository('telecontactBundle:Alerts')->findByc($udid);

        return $logoConfig;

    }


    public function rs($udid)
    {
        $condition_code_entite = "code_firme=".$udid;

        $request = '<?xml version="1.0" encoding="UTF-8" ?>
		<search_requests>
		<search_request id="req_annonceur">
		<selection> ' . $condition_code_entite . ' </selection>
		<post_processing>
		setCatalogAttribut(ville, catalogSortBy, catalogSortByFrequency);
		setCatalogAttribut(ville, catalogMinFrequency,1);
		setCatalogAttribut(ville, catalogLimit, 10);
		catalogBy(ville);

		setCatalogAttribut(region, catalogSortBy, catalogSortByFrequency);
		setCatalogAttribut(region, catalogMinFrequency,1);
		setCatalogAttribut(region, catalogLimit, 10);
		catalogBy(region);

		setCatalogAttribut(code_et_rubrique_str, catalogSortBy, catalogSortByFrequency);
		setCatalogAttribut(code_et_rubrique_str, catalogMinFrequency,1);
		setCatalogAttribut(code_et_rubrique_str, catalogLimit, 10);
		catalogBy(code_et_rubrique_str);



		setSortAttribut(score,sortDirection,sortDirectionDesc);
		setSortAttribut("rs_comp",sortDirection,sortDirectionAsc);
		sortby(score_combine(0.1),rs_comp);

		sendxref(rs_abr);
		sendxref(rs_comp);
		sendxref(www_statut);

		</post_processing>
		<options>
		<option name="maxFiles">1</option>
		<option name="startFiles">1</option>
		</options>
		</search_request>
		</search_requests>';
        // Initialisation de la session
        $ch = curl_init();
        // configuration des options
        curl_setopt($ch, CURLOPT_URL, "127.0.0.1:8277");
        //curl_setopt($ch, CURLOPT_URL, "100.1.1.245:8279");

        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 2);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
        // Ex&eacute;cution de la session
        $result = curl_exec($ch);
        // Fermeture des ressources
        curl_close($ch);


        $xml = new \SimpleXMLElement($result);

        $rs_comp  = $xml->xpath("/search_answers/search_answer[@id='req_annonceur']/items/item[@hit=1]/item_data/data[@name='rs_comp']");
        list( , $rs_comp_A) = each($rs_comp);

        return $rs_comp_A;

    }

    public function raisonsociale($udid)
    {
        $condition_code_entite = "code_firme=" . $udid . "";

        $request = '<?xml version="1.0" encoding="UTF-8" ?>
		<search_requests>
		<search_request id="req_annonceur">
		<selection> ' . $condition_code_entite . ' </selection>
		<post_processing>
		setCatalogAttribut(ville, catalogSortBy, catalogSortByFrequency);
		setCatalogAttribut(ville, catalogMinFrequency,1);
		setCatalogAttribut(ville, catalogLimit, 10);
		catalogBy(ville);

		setCatalogAttribut(region, catalogSortBy, catalogSortByFrequency);
		setCatalogAttribut(region, catalogMinFrequency,1);
		setCatalogAttribut(region, catalogLimit, 10);
		catalogBy(region);

		setCatalogAttribut(code_et_rubrique_str, catalogSortBy, catalogSortByFrequency);
		setCatalogAttribut(code_et_rubrique_str, catalogMinFrequency,1);
		setCatalogAttribut(code_et_rubrique_str, catalogLimit, 10);
		catalogBy(code_et_rubrique_str);



		setSortAttribut(score,sortDirection,sortDirectionDesc);
		setSortAttribut("rs_comp",sortDirection,sortDirectionAsc);
		sortby(score_combine(0.1),rs_comp);


					sendxref(rs_abr);
					sendxref(rs_comp);
					sendxref(adresse);
					sendxref(code_postal);
					sendxref(ville);
					sendxref(ordre_telephone);
					sendxref(email);
					sendxref(ordre_fax);
					sendxref(rubrique);
					sendxref(quartier);
					sendxref(region);
					sendxref(texte);
					sendxref(logo);
                    sendxref(effectif);
                    sendxref(forme_juridique);
                    sendxref(annee_inscription);
                    sendxref(capital);
                    sendxref(web);

					sendxref(module);

					sendxref(page);
					sendxref(catalogue_statut);
					sendxref(webinfo_link);
					sendxref(webinfo_statut);
					sendxref(reserv_link);

					sendxref(video);

					sendxref(longitude);
					sendxref(latitude);
					sendxref(pack_presence_statut);
					sendxref(pack_visibilite);
					sendxref(poids);
		</post_processing>
		<options>
		<option name="maxFiles">1</option>
		<option name="startFiles">1</option>
		</options>
		</search_request>
		</search_requests>';
        // Initialisation de la session
        $ch = curl_init();
        // configuration des options
        curl_setopt($ch, CURLOPT_URL, "127.0.0.1:8277");
        //curl_setopt($ch, CURLOPT_URL, "100.1.1.245:8279");

        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 2);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
        // Ex&eacute;cution de la session
        $result = curl_exec($ch);
        // Fermeture des ressources
        curl_close($ch);

        $xml = new \SimpleXMLElement($result);

        $req = "'req_annonceur'";

        $rs_abr = $xml->xpath("/search_answers/search_answer[@id=".$req."]/items/item[@hit=1]/item_data/data[@name='rs_abr']");
        $name = $xml->xpath("/search_answers/search_answer[@id=".$req."]/items/item[@hit=1]/item_data/data[@name='name']");                                  //code_entite
        $adresse = $xml->xpath("/search_answers/search_answer[@id=".$req."]/items/item[@hit=1]/item_data/data[@name='adresse']");
        $module =$xml->xpath("/search_answers/search_answer[@id=".$req."]/items/item[@hit=1]/item_data/data[@name='module']");
        $texte= $xml->xpath("/search_answers/search_answer[@id=".$req."]/items/item[@hit=1]/item_data/data[@name='texte']");
        $ville= $xml->xpath("/search_answers/search_answer[@id=".$req."]/items/item[@hit=1]/item_data/data[@name='ville']");
        $fax= $xml->xpath("/search_answers/search_answer[@id=".$req."]/items/item[@hit=1]/item_data/data[@name='ordre_fax']");
        $telephone= $xml->xpath("/search_answers/search_answer[@id=".$req."]/items/item[@hit=1]/item_data/data[@name='ordre_telephone']");
        $quartier= $xml->xpath("/search_answers/search_answer[@id=".$req."]/items/item[@hit=1]/item_data/data[@name='quartier']");
        $arrondissement= $xml->xpath("/search_answers/search_answer[@id=".$req."]/items/item[@hit=1]/item_data/data[@name='arrondissement']");
        $code_postal = $xml->xpath("/search_answers/search_answer[@id=".$req."]/items/item[@hit=1]/item_data/data[@name='code_postal']");

        //$texte= $xml->xpath("/search_answers/search_answer[@id=".$req."]/items/item[@hit=".$count_items_st."]/item_data/data[@name='texte']");
        $logo= $xml->xpath("/search_answers/search_answer[@id=".$req."]/items/item[@hit=1]/item_data/data[@name='logo']");//echo('logo'.$logo.'<br />');
        $web= $xml->xpath("/search_answers/search_answer[@id=".$req."]/items/item[@hit=1]/item_data/data[@name='web']");//echo('logo'.$logo.'<br />');
        //$www_statut= $xml->xpath("/search_answers/search_answer[@id=".$req."]/items/item[@hit=".$count_items_st."]/item_data/data[@name='www_statut']");//echo('logo'.$logo.'<br />');
        $email= $xml->xpath("/search_answers/search_answer[@id=".$req."]/items/item[@hit=1]/item_data/data[@name='email']");
        //$module_statut= $xml->xpath("/search_answers/search_answer[@id=".$req."]/items/item[@hit=".$count_items_st."]/item_data/data[@name='module_statut']");//echo('module statut '.$module_statut.'<br />');
        $webinfo_link= $xml->xpath("/search_answers/search_answer[@id=".$req."]/items/item[@hit=1]/item_data/data[@name='webinfo_link']");//echo('webinfo link '.$webinfo_link.'<br />');
        $webinfo_statut= $xml->xpath("/search_answers/search_answer[@id=".$req."]/items/item[@hit=1]/item_data/data[@name='webinfo_statut']");//echo('webinfo statut '.$webinfo_statut.'<br />');
        $reserv_link= $xml->xpath("/search_answers/search_answer[@id=".$req."]/items/item[@hit=1]/item_data/data[@name='reserv_link']");//echo('reserv link '.$reserv_link.'<br />');
        //$reserv_statut= $xml->xpath("/search_answers/search_answer[@id=".$req."]/items/item[@hit=".$count_items_st."]/item_data/data[@name='reserv_statut']");//echo('reserv_statut '.$reserv_statut.'<br />');
        $video= $xml->xpath("/search_answers/search_answer[@id=".$req."]/items/item[@hit=1]/item_data/data[@name='video']");//print_r($video);//echo('video '.$video.'<br />');
        $catalogue_statut = $xml->xpath("/search_answers/search_answer[@id=".$req."]/items/item[@hit=1]/item_data/data[@name='catalogue_statut']");//echo('page '.$page_trouver.'<br />');
        //$video_statut= $xml->xpath("/search_answers/search_answer[@id=".$req."]/items/item[@hit=".$count_items_st."]/item_data/data[@name='video_statut']");//echo('video statut '.$video_statut.'<br />');
        $longitude= $xml->xpath("/search_answers/search_answer[@id=".$req."]/items/item[@hit=1]/item_data/data[@name='longitude']");//echo('longitude '.$longitude.'<br />');
        $latitude= $xml->xpath("/search_answers/search_answer[@id=".$req."]/items/item[@hit=1]/item_data/data[@name='latitude']");//echo('latitude '.$latitude.'<br />');
        $page_trouver= $xml->xpath("/search_answers/search_answer[@id=".$req."]/items/item[@hit=1]/item_data/data[@name='page']");//echo('page '.$page_trouver.'<br />');
        //$page_trouver_statut= $xml->xpath("/search_answers/search_answer[@id=".$req."]/items/item[@hit=".$count_items_st."]/item_data/data[@name='page_statut']");

        $pack_presence_statut= $xml->xpath("/search_answers/search_answer[@id=".$req."]/items/item[@hit=1]/item_data/data[@name='pack_presence_statut']");//echo('page '.$page_trouver.'<br />');
        $pack_visibilite= $xml->xpath("/search_answers/search_answer[@id=".$req."]/items/item[@hit=1]/item_data/data[@name='pack_visibilite']");//echo('page '.$page_trouver.'<br />');
        $rs_comp = $xml->xpath("/search_answers/search_answer[@id=".$req."]/items/item[@hit=1]/item_data/data[@name='rs_comp']");
        $rubrique = $xml->xpath("/search_answers/search_answer[@id=".$req."]/items/item/item_data/data[@name='rubrique']");

        $effectif 				= $xml->xpath("/search_answers/search_answer[@id=".$req."]/items/item[@hit=1]/item_data/data[@name='effectif']");
        $forme_juridique 		= $xml->xpath("/search_answers/search_answer[@id=".$req."]/items/item[@hit=1]/item_data/data[@name='forme_juridique']");
        $date_creation			= $xml->xpath("/search_answers/search_answer[@id=".$req."]/items/item[@hit=1]/item_data/data[@name='annee_inscription']");
        $capital 				= $xml->xpath("/search_answers/search_answer[@id=".$req."]/items/item[@hit=1]/item_data/data[@name='capital']");

        list(, $email_A) = each($email);
        list(, $rs_abr_A) = each($rs_abr);
        list(, $name_A) = each($name);
        list(,$adresse_A) = each($adresse);
        list(, $fax_A) = each($fax);
        list(, $telephone_A) = each($telephone);
        list(, $quartier_A) = each($quartier);
        list(, $web_A) = each($web);
        list(, $arrondissement_A) = each($arrondissement);
        list(, $ville_A) = each($ville);
        list(, $rs_comp_A) = each($rs_comp);
        list(, $rubrique_A) = each($rubrique);

        if($effectif){
            list( , $effectif_A) = each($effectif);
            $effectif_A2 = $effectif_A->asXML();
            $ou_effectif_annonceur = $effectif_A2;

            $ou_effectif_annonceur = str_replace('<match>', '', $ou_effectif_annonceur);
            $ou_effectif_annonceur = str_replace('</match>', '', $ou_effectif_annonceur);
            $ou_effectif_annonceur = str_replace('<data name="effectif">', '', $ou_effectif_annonceur);
            $ou_effectif_annonceur = str_replace('</data>', '', $ou_effectif_annonceur);

            $effectif_A2 = str_replace('<match>', '<span class="match">', $effectif_A2);
            $effectif_A2 = str_replace('</match>', '</span>', $effectif_A2);
            $effectif_A2 = str_replace('<data name="effectif">', '', $effectif_A2);
            $effectif_A2 = str_replace('</data>', '', $effectif_A2);

        }
        if($forme_juridique){
            list( , $forme_juridique_A) = each($forme_juridique);
            $forme_juridique_A2 = $forme_juridique_A->asXML();
            $ou_forme_juridique_annonceur = $forme_juridique_A2;

            $ou_forme_juridique_annonceur = str_replace('<match>', '', $ou_forme_juridique_annonceur);
            $ou_forme_juridique_annonceur = str_replace('</match>', '', $ou_forme_juridique_annonceur);
            $ou_forme_juridique_annonceur = str_replace('<data name="forme_juridique">', '', $ou_forme_juridique_annonceur);
            $ou_forme_juridique_annonceur = str_replace('</data>', '', $ou_forme_juridique_annonceur);

            $forme_juridique_A2 = str_replace('<match>', '<span class="match">', $forme_juridique_A2);
            $forme_juridique_A2 = str_replace('</match>', '</span>', $forme_juridique_A2);
            $forme_juridique_A2 = str_replace('<data name="forme_juridique">', '', $forme_juridique_A2);
            $forme_juridique_A2 = str_replace('</data>', '', $forme_juridique_A2);

        }
        if($date_creation){
            list( , $date_creation_A) = each($date_creation);
            $date_creation_A2 = $date_creation_A->asXML();
            $ou_date_creation_annonceur = $date_creation_A2;

            $ou_date_creation_annonceur = str_replace('<match>', '', $ou_date_creation_annonceur);
            $ou_date_creation_annonceur = str_replace('</match>', '', $ou_date_creation_annonceur);
            $ou_date_creation_annonceur = str_replace('<data name="annee_inscription">', '', $ou_date_creation_annonceur);
            $ou_date_creation_annonceur = str_replace('</data>', '', $ou_date_creation_annonceur);

            $date_creation_A2 = str_replace('<match>', '<span class="match">', $date_creation_A2);
            $date_creation_A2 = str_replace('</match>', '</span>', $date_creation_A2);
            $date_creation_A2 = str_replace('<data name="annee_inscription">', '', $date_creation_A2);
            $date_creation_A2 = str_replace('</data>', '', $date_creation_A2);

        }
        if($capital){
            list( , $capital_A) = each($capital);
            $capital_A2 = $capital_A->asXML();
            $ou_capital_annonceur = $capital_A2;

            $ou_capital_annonceur = str_replace('<match>', '', $ou_capital_annonceur);
            $ou_capital_annonceur = str_replace('</match>', '', $ou_capital_annonceur);
            $ou_capital_annonceur = str_replace('<data name="capital">', '', $ou_capital_annonceur);
            $ou_capital_annonceur = str_replace('</data>', '', $ou_capital_annonceur);

            $capital_A2 = str_replace('<match>', '<span class="match">', $capital_A2);
            $capital_A2 = str_replace('</match>', '</span>', $capital_A2);
            $capital_A2 = str_replace('<data name="capital">', '', $capital_A2);
            $capital_A2 = str_replace('</data>', '', $capital_A2);

        }
      //  $tel=explode('||',$telephone_A) ;


        $var=array('capital'=>$capital,'effectif'=>$effectif,'date_creation'=>$date_creation,'forme_juridique'=>$forme_juridique,'email'=>$email_A,'rs_abr'=>$rs_abr_A,'name'=>$name_A,'adresse'=>$adresse_A,'fax'=>$fax_A,'telephone'=>$telephone_A,'quartier'=>$quartier_A,'arrondissement'=>$arrondissement_A,'web'=>$web_A,'ville'=>$ville_A,'rs_comp'=>$rs_comp_A,'rubrique'=>$rubrique_A);
        return $var;

    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName() {
        return 'config_extension';
    }

}
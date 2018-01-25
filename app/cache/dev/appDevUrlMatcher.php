<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/workflowexecution')) {
            // workflowexecution
            if (rtrim($pathinfo, '/') === '/workflowexecution') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'workflowexecution');
                }

                return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\WorkflowExecutionController::indexAction',  '_route' => 'workflowexecution',);
            }

            // workflowexecution_show
            if (preg_match('#^/workflowexecution/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'workflowexecution_show')), array (  '_controller' => 'Production\\ProductionBundle\\Controller\\WorkflowExecutionController::showAction',));
            }

            // workflowexecution_new
            if ($pathinfo === '/workflowexecution/new') {
                return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\WorkflowExecutionController::newAction',  '_route' => 'workflowexecution_new',);
            }

            // workflowexecution_create
            if ($pathinfo === '/workflowexecution/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_workflowexecution_create;
                }

                return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\WorkflowExecutionController::createAction',  '_route' => 'workflowexecution_create',);
            }
            not_workflowexecution_create:

            // workflowexecution_edit
            if (preg_match('#^/workflowexecution/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'workflowexecution_edit')), array (  '_controller' => 'Production\\ProductionBundle\\Controller\\WorkflowExecutionController::editAction',));
            }

            // workflowexecution_update
            if (preg_match('#^/workflowexecution/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_workflowexecution_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'workflowexecution_update')), array (  '_controller' => 'Production\\ProductionBundle\\Controller\\WorkflowExecutionController::updateAction',));
            }
            not_workflowexecution_update:

            // workflowexecution_delete
            if (preg_match('#^/workflowexecution/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_workflowexecution_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'workflowexecution_delete')), array (  '_controller' => 'Production\\ProductionBundle\\Controller\\WorkflowExecutionController::deleteAction',));
            }
            not_workflowexecution_delete:

            // workflowexecution_etapeu
            if ($pathinfo === '/workflowexecution/etapeu') {
                return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\WorkflowExecutionController::etapeuAction',  '_route' => 'workflowexecution_etapeu',);
            }

        }

        if (0 === strpos($pathinfo, '/affectation')) {
            // affectation
            if (rtrim($pathinfo, '/') === '/affectation') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'affectation');
                }

                return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\AffectationEtapeUtilisateurController::indexAction',  '_route' => 'affectation',);
            }

            // affectation_show
            if (preg_match('#^/affectation/(?P<id>[^/]++)/show/(?P<uid>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'affectation_show')), array (  '_controller' => 'Production\\ProductionBundle\\Controller\\AffectationEtapeUtilisateurController::showAction',));
            }

            // affectation_new
            if ($pathinfo === '/affectation/new') {
                return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\AffectationEtapeUtilisateurController::newAction',  '_route' => 'affectation_new',);
            }

            // affectation_create
            if ($pathinfo === '/affectation/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_affectation_create;
                }

                return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\AffectationEtapeUtilisateurController::createAction',  '_route' => 'affectation_create',);
            }
            not_affectation_create:

            // affectation_edit
            if (preg_match('#^/affectation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'affectation_edit')), array (  '_controller' => 'Production\\ProductionBundle\\Controller\\AffectationEtapeUtilisateurController::editAction',));
            }

            // affectation_update
            if (preg_match('#^/affectation/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_affectation_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'affectation_update')), array (  '_controller' => 'Production\\ProductionBundle\\Controller\\AffectationEtapeUtilisateurController::updateAction',));
            }
            not_affectation_update:

            // affectation_delete
            if (preg_match('#^/affectation/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_affectation_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'affectation_delete')), array (  '_controller' => 'Production\\ProductionBundle\\Controller\\AffectationEtapeUtilisateurController::deleteAction',));
            }
            not_affectation_delete:

            // affectation_production
            if ($pathinfo === '/affectation/production') {
                return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\AffectationEtapeUtilisateurController::productionAction',  '_route' => 'affectation_production',);
            }

            // affectation_form
            if ($pathinfo === '/affectation/form') {
                return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\AffectationEtapeUtilisateurController::formAction',  '_route' => 'affectation_form',);
            }

            // affectation_form_text
            if ($pathinfo === '/affectation/text') {
                return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\AffectationEtapeUtilisateurController::textAction',  '_route' => 'affectation_form_text',);
            }

            // affectation_form_fin
            if ($pathinfo === '/affectation/fin') {
                return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\AffectationEtapeUtilisateurController::finAction',  '_route' => 'affectation_form_fin',);
            }

            // affectation_detaill
            if ($pathinfo === '/affectation/detaill') {
                return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\AffectationEtapeUtilisateurController::detaillAction',  '_route' => 'affectation_detaill',);
            }

        }

        if (0 === strpos($pathinfo, '/boncommandeligne')) {
            // boncommandeligne
            if (rtrim($pathinfo, '/') === '/boncommandeligne') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'boncommandeligne');
                }

                return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\BonCommandeLigneController::indexAction',  '_route' => 'boncommandeligne',);
            }

            // boncommandeligne_affecter
            if ($pathinfo === '/boncommandeligne/affecter') {
                return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\BonCommandeLigneController::affecterAction',  '_route' => 'boncommandeligne_affecter',);
            }

            // boncommandeligne_show
            if (preg_match('#^/boncommandeligne/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'boncommandeligne_show')), array (  '_controller' => 'Production\\ProductionBundle\\Controller\\BonCommandeLigneController::showAction',));
            }

            // boncommandeligne_new
            if ($pathinfo === '/boncommandeligne/new') {
                return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\BonCommandeLigneController::newAction',  '_route' => 'boncommandeligne_new',);
            }

            // boncommandeligne_create
            if ($pathinfo === '/boncommandeligne/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_boncommandeligne_create;
                }

                return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\BonCommandeLigneController::createAction',  '_route' => 'boncommandeligne_create',);
            }
            not_boncommandeligne_create:

            // boncommandeligne_edit
            if (preg_match('#^/boncommandeligne/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'boncommandeligne_edit')), array (  '_controller' => 'Production\\ProductionBundle\\Controller\\BonCommandeLigneController::editAction',));
            }

            // boncommandeligne_update
            if (preg_match('#^/boncommandeligne/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_boncommandeligne_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'boncommandeligne_update')), array (  '_controller' => 'Production\\ProductionBundle\\Controller\\BonCommandeLigneController::updateAction',));
            }
            not_boncommandeligne_update:

            // boncommandeligne_delete
            if (preg_match('#^/boncommandeligne/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_boncommandeligne_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'boncommandeligne_delete')), array (  '_controller' => 'Production\\ProductionBundle\\Controller\\BonCommandeLigneController::deleteAction',));
            }
            not_boncommandeligne_delete:

            // boncommandeligne_production
            if ($pathinfo === '/boncommandeligne/production') {
                return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\BonCommandeLigneController::productionAction',  '_route' => 'boncommandeligne_production',);
            }

            // boncommandeligne_recherche
            if ($pathinfo === '/boncommandeligne/recherche') {
                return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\BonCommandeLigneController::rechercheAction',  '_route' => 'boncommandeligne_recherche',);
            }

        }

        if (0 === strpos($pathinfo, '/vendeur')) {
            // vendeur
            if (rtrim($pathinfo, '/') === '/vendeur') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'vendeur');
                }

                return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\VendeurController::indexAction',  '_route' => 'vendeur',);
            }

            // vendeur_show
            if (preg_match('#^/vendeur/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vendeur_show')), array (  '_controller' => 'Production\\ProductionBundle\\Controller\\VendeurController::showAction',));
            }

            // vendeur_new
            if ($pathinfo === '/vendeur/new') {
                return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\VendeurController::newAction',  '_route' => 'vendeur_new',);
            }

            // vendeur_create
            if ($pathinfo === '/vendeur/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_vendeur_create;
                }

                return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\VendeurController::createAction',  '_route' => 'vendeur_create',);
            }
            not_vendeur_create:

            // vendeur_edit
            if (preg_match('#^/vendeur/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vendeur_edit')), array (  '_controller' => 'Production\\ProductionBundle\\Controller\\VendeurController::editAction',));
            }

            // vendeur_update
            if (preg_match('#^/vendeur/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_vendeur_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vendeur_update')), array (  '_controller' => 'Production\\ProductionBundle\\Controller\\VendeurController::updateAction',));
            }
            not_vendeur_update:

            // vendeur_delete
            if (preg_match('#^/vendeur/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_vendeur_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vendeur_delete')), array (  '_controller' => 'Production\\ProductionBundle\\Controller\\VendeurController::deleteAction',));
            }
            not_vendeur_delete:

        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/clients')) {
                // clients
                if (rtrim($pathinfo, '/') === '/clients') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'clients');
                    }

                    return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\ClientsController::indexAction',  '_route' => 'clients',);
                }

                // clients_show
                if (preg_match('#^/clients/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'clients_show')), array (  '_controller' => 'Production\\ProductionBundle\\Controller\\ClientsController::showAction',));
                }

                // clients_commande
                if (preg_match('#^/clients/(?P<id>[^/]++)/commande$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'clients_commande')), array (  '_controller' => 'Production\\ProductionBundle\\Controller\\ClientsController::commandeAction',));
                }

                // clients_new
                if ($pathinfo === '/clients/new') {
                    return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\ClientsController::newAction',  '_route' => 'clients_new',);
                }

                // clients_create
                if ($pathinfo === '/clients/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_clients_create;
                    }

                    return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\ClientsController::createAction',  '_route' => 'clients_create',);
                }
                not_clients_create:

                // clients_edit
                if (preg_match('#^/clients/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'clients_edit')), array (  '_controller' => 'Production\\ProductionBundle\\Controller\\ClientsController::editAction',));
                }

                // clients_update
                if (preg_match('#^/clients/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_clients_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'clients_update')), array (  '_controller' => 'Production\\ProductionBundle\\Controller\\ClientsController::updateAction',));
                }
                not_clients_update:

                // clients_delete
                if (preg_match('#^/clients/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_clients_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'clients_delete')), array (  '_controller' => 'Production\\ProductionBundle\\Controller\\ClientsController::deleteAction',));
                }
                not_clients_delete:

            }

            if (0 === strpos($pathinfo, '/commande')) {
                // commande
                if (rtrim($pathinfo, '/') === '/commande') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'commande');
                    }

                    return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\BonCommandeController::indexAction',  '_route' => 'commande',);
                }

                // commande_show
                if (preg_match('#^/commande/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commande_show')), array (  '_controller' => 'Production\\ProductionBundle\\Controller\\BonCommandeController::showAction',));
                }

                // commande_produit
                if (preg_match('#^/commande/(?P<id>[^/]++)/produit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commande_produit')), array (  '_controller' => 'Production\\ProductionBundle\\Controller\\BonCommandeController::produitAction',));
                }

                // commande_new
                if ($pathinfo === '/commande/new') {
                    return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\BonCommandeController::newAction',  '_route' => 'commande_new',);
                }

                if (0 === strpos($pathinfo, '/commande/w')) {
                    // commande_wf
                    if (0 === strpos($pathinfo, '/commande/wf') && preg_match('#^/commande/wf/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'commande_wf')), array (  '_controller' => 'Production\\ProductionBundle\\Controller\\BonCommandeController::wfAction',));
                    }

                    // commande_wc
                    if ($pathinfo === '/commande/wc') {
                        return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\BonCommandeController::wcAction',  '_route' => 'commande_wc',);
                    }

                }

                if (0 === strpos($pathinfo, '/commande/recherche')) {
                    // commande_recherche
                    if ($pathinfo === '/commande/recherche') {
                        return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\BonCommandeController::rechercheAction',  '_route' => 'commande_recherche',);
                    }

                    // commande_recherched
                    if ($pathinfo === '/commande/recherched') {
                        return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\BonCommandeController::recherchedAction',  '_route' => 'commande_recherched',);
                    }

                }

                // commande_create
                if ($pathinfo === '/commande/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_commande_create;
                    }

                    return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\BonCommandeController::createAction',  '_route' => 'commande_create',);
                }
                not_commande_create:

                // commande_edit
                if (preg_match('#^/commande/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commande_edit')), array (  '_controller' => 'Production\\ProductionBundle\\Controller\\BonCommandeController::editAction',));
                }

                // commande_update
                if (preg_match('#^/commande/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_commande_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commande_update')), array (  '_controller' => 'Production\\ProductionBundle\\Controller\\BonCommandeController::updateAction',));
                }
                not_commande_update:

                // commande_delete
                if (preg_match('#^/commande/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_commande_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commande_delete')), array (  '_controller' => 'Production\\ProductionBundle\\Controller\\BonCommandeController::deleteAction',));
                }
                not_commande_delete:

                if (0 === strpos($pathinfo, '/commande/te')) {
                    // commande_test
                    if ($pathinfo === '/commande/test') {
                        return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\BonCommandeController::testAction',  '_route' => 'commande_test',);
                    }

                    // commande_form_text
                    if ($pathinfo === '/commande/text') {
                        return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\BonCommandeController::textAction',  '_route' => 'commande_form_text',);
                    }

                }

                // commande_form_enligne
                if ($pathinfo === '/commande/enligne') {
                    return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\BonCommandeController::enligneAction',  '_route' => 'commande_form_enligne',);
                }

                // commande_form_reunion
                if ($pathinfo === '/commande/reunion') {
                    return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\BonCommandeController::reunionAction',  '_route' => 'commande_form_reunion',);
                }

                // commande_form_valider
                if ($pathinfo === '/commande/valider') {
                    return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\BonCommandeController::validerAction',  '_route' => 'commande_form_valider',);
                }

                // commande_form_non
                if ($pathinfo === '/commande/non') {
                    return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\BonCommandeController::nonAction',  '_route' => 'commande_form_non',);
                }

                // commande_valider
                if ($pathinfo === '/commande/valider-soft') {
                    return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\BonCommandeController::validersoftAction',  '_route' => 'commande_valider',);
                }

                if (0 === strpos($pathinfo, '/commande/non-soft')) {
                    // commande_non
                    if ($pathinfo === '/commande/non-soft') {
                        return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\BonCommandeController::nonsoftAction',  '_route' => 'commande_non',);
                    }

                    // commande_nond
                    if ($pathinfo === '/commande/non-softd') {
                        return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\BonCommandeController::nonsoftdAction',  '_route' => 'commande_nond',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/workflowetape')) {
            // workflowetape
            if (rtrim($pathinfo, '/') === '/workflowetape') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'workflowetape');
                }

                return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\WorkflowEtapeController::indexAction',  '_route' => 'workflowetape',);
            }

            // workflowetape_show
            if (preg_match('#^/workflowetape/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'workflowetape_show')), array (  '_controller' => 'Production\\ProductionBundle\\Controller\\WorkflowEtapeController::showAction',));
            }

            // workflowetape_new
            if ($pathinfo === '/workflowetape/new') {
                return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\WorkflowEtapeController::newAction',  '_route' => 'workflowetape_new',);
            }

            // workflowetape_create
            if ($pathinfo === '/workflowetape/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_workflowetape_create;
                }

                return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\WorkflowEtapeController::createAction',  '_route' => 'workflowetape_create',);
            }
            not_workflowetape_create:

            // workflowetape_edit
            if (preg_match('#^/workflowetape/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'workflowetape_edit')), array (  '_controller' => 'Production\\ProductionBundle\\Controller\\WorkflowEtapeController::editAction',));
            }

            // workflowetape_update
            if (preg_match('#^/workflowetape/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_workflowetape_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'workflowetape_update')), array (  '_controller' => 'Production\\ProductionBundle\\Controller\\WorkflowEtapeController::updateAction',));
            }
            not_workflowetape_update:

            // workflowetape_delete
            if (preg_match('#^/workflowetape/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_workflowetape_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'workflowetape_delete')), array (  '_controller' => 'Production\\ProductionBundle\\Controller\\WorkflowEtapeController::deleteAction',));
            }
            not_workflowetape_delete:

        }

        if (0 === strpos($pathinfo, '/produit')) {
            // produit
            if (rtrim($pathinfo, '/') === '/produit') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'produit');
                }

                return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\ParProduitController::indexAction',  '_route' => 'produit',);
            }

            // produit_show
            if (preg_match('#^/produit/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_show')), array (  '_controller' => 'Production\\ProductionBundle\\Controller\\ParProduitController::showAction',));
            }

            // produit_new
            if ($pathinfo === '/produit/new') {
                return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\ParProduitController::newAction',  '_route' => 'produit_new',);
            }

            // produit_create
            if ($pathinfo === '/produit/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_produit_create;
                }

                return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\ParProduitController::createAction',  '_route' => 'produit_create',);
            }
            not_produit_create:

            // produit_edit
            if (preg_match('#^/produit/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_edit')), array (  '_controller' => 'Production\\ProductionBundle\\Controller\\ParProduitController::editAction',));
            }

            // produit_update
            if (preg_match('#^/produit/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_produit_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_update')), array (  '_controller' => 'Production\\ProductionBundle\\Controller\\ParProduitController::updateAction',));
            }
            not_produit_update:

            // produit_delete
            if (preg_match('#^/produit/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_produit_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_delete')), array (  '_controller' => 'Production\\ProductionBundle\\Controller\\ParProduitController::deleteAction',));
            }
            not_produit_delete:

        }

        if (0 === strpos($pathinfo, '/workflow')) {
            // workflow
            if (rtrim($pathinfo, '/') === '/workflow') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'workflow');
                }

                return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\WorkflowController::indexAction',  '_route' => 'workflow',);
            }

            // workflow_show
            if (preg_match('#^/workflow/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'workflow_show')), array (  '_controller' => 'Production\\ProductionBundle\\Controller\\WorkflowController::showAction',));
            }

            // workflow_new
            if ($pathinfo === '/workflow/new') {
                return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\WorkflowController::newAction',  '_route' => 'workflow_new',);
            }

            // workflow_create
            if ($pathinfo === '/workflow/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_workflow_create;
                }

                return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\WorkflowController::createAction',  '_route' => 'workflow_create',);
            }
            not_workflow_create:

            // workflow_edit
            if (preg_match('#^/workflow/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'workflow_edit')), array (  '_controller' => 'Production\\ProductionBundle\\Controller\\WorkflowController::editAction',));
            }

            // workflow_update
            if (preg_match('#^/workflow/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_workflow_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'workflow_update')), array (  '_controller' => 'Production\\ProductionBundle\\Controller\\WorkflowController::updateAction',));
            }
            not_workflow_update:

            // workflow_delete
            if (preg_match('#^/workflow/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_workflow_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'workflow_delete')), array (  '_controller' => 'Production\\ProductionBundle\\Controller\\WorkflowController::deleteAction',));
            }
            not_workflow_delete:

        }

        // production_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'production_homepage');
            }

            return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\DefaultController::indexAction',  '_route' => 'production_homepage',);
        }

        // production_homepage_test
        if ($pathinfo === '/test') {
            return array (  '_controller' => 'Production\\ProductionBundle\\Controller\\DefaultController::testAction',  '_route' => 'production_homepage_test',);
        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Production\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'Production\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Production\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'Production\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'Production\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'Production\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'Production\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'Production\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'Production\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'Production\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'Production\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'Production\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'Production\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/change-password/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'Production\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // fos_autocomplete
        if ($pathinfo === '/users/autocomplete') {
            return array (  '_controller' => 'BenUserBundle:User:autocomplete',  '_route' => 'fos_autocomplete',);
        }

        if (0 === strpos($pathinfo, '/group')) {
            // fos_user_group_list
            if ($pathinfo === '/group/list') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_group_list;
                }

                return array (  '_controller' => 'Production\\UserBundle\\Controller\\GroupController::listAction',  '_route' => 'fos_user_group_list',);
            }
            not_fos_user_group_list:

            // fos_user_group_new
            if ($pathinfo === '/group/new') {
                return array (  '_controller' => 'Production\\UserBundle\\Controller\\GroupController::newAction',  '_route' => 'fos_user_group_new',);
            }

            // fos_user_group_show
            if (preg_match('#^/group/(?P<groupname>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_group_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_show')), array (  '_controller' => 'Production\\UserBundle\\Controller\\GroupController::showAction',));
            }
            not_fos_user_group_show:

            // fos_user_group_edit
            if (preg_match('#^/group/(?P<groupname>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_edit')), array (  '_controller' => 'Production\\UserBundle\\Controller\\GroupController::editAction',));
            }

            // fos_user_group_delete
            if (preg_match('#^/group/(?P<groupname>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_group_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_delete')), array (  '_controller' => 'Production\\UserBundle\\Controller\\GroupController::deleteAction',));
            }
            not_fos_user_group_delete:

        }

        if (0 === strpos($pathinfo, '/manage')) {
            // ben_users
            if (rtrim($pathinfo, '/') === '/manage') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ben_users');
                }

                return array (  '_controller' => 'Production\\UserBundle\\Controller\\AdminController::indexAction',  '_route' => 'ben_users',);
            }

            // ben_users_ajax
            if ($pathinfo === '/manage/userslist') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ben_users_ajax;
                }

                return array (  '_controller' => 'Production\\UserBundle\\Controller\\AdminController::ajaxListAction',  '_route' => 'ben_users_ajax',);
            }
            not_ben_users_ajax:

            // ben_show_user
            if (0 === strpos($pathinfo, '/manage/show') && preg_match('#^/manage/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ben_show_user')), array (  '_controller' => 'Production\\UserBundle\\Controller\\AdminController::showAction',));
            }

            // ben_new_user
            if ($pathinfo === '/manage/new') {
                return array (  '_controller' => 'Production\\UserBundle\\Controller\\AdminController::newAction',  '_route' => 'ben_new_user',);
            }

            // ben_add_user
            if ($pathinfo === '/manage/add') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ben_add_user;
                }

                return array (  '_controller' => 'Production\\UserBundle\\Controller\\AdminController::addAction',  '_route' => 'ben_add_user',);
            }
            not_ben_add_user:

            // ben_edit_user
            if (0 === strpos($pathinfo, '/manage/edit') && preg_match('#^/manage/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ben_edit_user')), array (  '_controller' => 'Production\\UserBundle\\Controller\\AdminController::editAction',));
            }

            if (0 === strpos($pathinfo, '/manage/u')) {
                // ben_update_user
                if (0 === strpos($pathinfo, '/manage/update') && preg_match('#^/manage/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_ben_update_user;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ben_update_user')), array (  '_controller' => 'Production\\UserBundle\\Controller\\AdminController::updateAction',));
                }
                not_ben_update_user:

                if (0 === strpos($pathinfo, '/manage/users')) {
                    // ben_users_list
                    if ($pathinfo === '/manage/users/list') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_ben_users_list;
                        }

                        return array (  '_controller' => 'Production\\UserBundle\\Controller\\AdminController::usersListAction',  '_route' => 'ben_users_list',);
                    }
                    not_ben_users_list:

                    // ben_enable_users
                    if (0 === strpos($pathinfo, '/manage/users/active') && preg_match('#^/manage/users/active(?:/(?P<etat>[^/]++))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_ben_enable_users;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ben_enable_users')), array (  '_controller' => 'Production\\UserBundle\\Controller\\AdminController::enableUsersAction',  'etat' => 1,));
                    }
                    not_ben_enable_users:

                }

            }

            // ben_promote_users
            if (0 === strpos($pathinfo, '/manage/promote') && preg_match('#^/manage/promote(?:/(?P<role>[^/]++))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ben_promote_users;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ben_promote_users')), array (  '_controller' => 'Production\\UserBundle\\Controller\\AdminController::setRoleAction',  'role' => 'user',));
            }
            not_ben_promote_users:

            if (0 === strpos($pathinfo, '/manage/delete')) {
                // ben_delete_user
                if (preg_match('#^/manage/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ben_delete_user')), array (  '_controller' => 'Production\\UserBundle\\Controller\\AdminController::deleteAction',));
                }

                // ben_remove_users
                if ($pathinfo === '/manage/delete') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_ben_remove_users;
                    }

                    return array (  '_controller' => 'Production\\UserBundle\\Controller\\AdminController::removeUsersAction',  '_route' => 'ben_remove_users',);
                }
                not_ben_remove_users:

            }

            // ben_users_export
            if ($pathinfo === '/manage/export') {
                return array (  '_controller' => 'Production\\UserBundle\\Controller\\AdminController::exportAction',  '_route' => 'ben_users_export',);
            }

            // ben_profile_edit
            if (0 === strpos($pathinfo, '/manage/me/edit') && preg_match('#^/manage/me/edit/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ben_profile_edit')), array (  '_controller' => 'Production\\UserBundle\\Controller\\AdminController::editMeAction',));
            }

            // ben_profile_update
            if (0 === strpos($pathinfo, '/manage/_me') && preg_match('#^/manage/_me/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ben_profile_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ben_profile_update')), array (  '_controller' => 'Production\\UserBundle\\Controller\\AdminController::updateMeAction',));
            }
            not_ben_profile_update:

            // ben_pdf
            if (0 === strpos($pathinfo, '/manage/pdf') && preg_match('#^/manage/pdf/(?P<users>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ben_pdf')), array (  '_controller' => 'Production\\UserBundle\\Controller\\AdminController::pdfAction',));
            }

            // ben_badge_user
            if (0 === strpos($pathinfo, '/manage/badge') && preg_match('#^/manage/badge/(?P<users>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ben_badge_user')), array (  '_controller' => 'Production\\UserBundle\\Controller\\AdminController::showBadgeAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

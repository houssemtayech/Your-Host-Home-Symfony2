<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // esprit_darkom_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'esprit_darkom_homepage');
            }

            return array (  '_controller' => 'Esprit\\DarkomBundle\\Controller\\DefaultController::indexAction',  '_route' => 'esprit_darkom_homepage',);
        }

        // Client
        if ($pathinfo === '/Client') {
            return array (  '_controller' => 'Esprit\\DarkomBundle\\Controller\\UserController::ClientAction',  '_route' => 'Client',);
        }

        if (0 === strpos($pathinfo, '/A')) {
            // Admin
            if ($pathinfo === '/Admin') {
                return array (  '_controller' => 'Esprit\\DarkomBundle\\Controller\\UserController::AdminAction',  '_route' => 'Admin',);
            }

            // Annonceur
            if ($pathinfo === '/Annonceur') {
                return array (  '_controller' => 'Esprit\\DarkomBundle\\Controller\\UserController::AnnonceurAction',  '_route' => 'Annonceur',);
            }

        }

        // Erreur
        if ($pathinfo === '/erreur') {
            return array (  '_controller' => 'Esprit\\DarkomBundle\\Controller\\DefaultController::ErreurAction',  '_route' => 'Erreur',);
        }

        if (0 === strpos($pathinfo, '/update')) {
            // modifierClient
            if (0 === strpos($pathinfo, '/updateClient') && preg_match('#^/updateClient/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifierClient')), array (  '_controller' => 'Esprit\\DarkomBundle\\Controller\\ClientController::updateAction',));
            }

            // modifierAnnonceur
            if (0 === strpos($pathinfo, '/updateAnnonceur') && preg_match('#^/updateAnnonceur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifierAnnonceur')), array (  '_controller' => 'Esprit\\DarkomBundle\\Controller\\AnnonceurController::updateAction',));
            }

        }

        // ajoutEvennement
        if (0 === strpos($pathinfo, '/ajout') && preg_match('#^/ajout/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajoutEvennement')), array (  '_controller' => 'Esprit\\DarkomBundle\\Controller\\OffreController::ajouterEvtAction',));
        }

        // list
        if (0 === strpos($pathinfo, '/list') && preg_match('#^/list/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'list')), array (  '_controller' => 'Esprit\\DarkomBundle\\Controller\\OffreController::listeEvenement_orgAction',));
        }

        // esprit_darkom_supprimer
        if (0 === strpos($pathinfo, '/supprimer') && preg_match('#^/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_darkom_supprimer')), array (  '_controller' => 'Esprit\\DarkomBundle\\Controller\\OffreController::supprimerAction',));
        }

        // esprit_darkom_modifier1
        if (0 === strpos($pathinfo, '/update') && preg_match('#^/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_darkom_modifier1')), array (  '_controller' => 'Esprit\\DarkomBundle\\Controller\\OffreController::updateEvtAction',));
        }

        // esprit_darkom_mail_form
        if ($pathinfo === '/mail') {
            return array (  '_controller' => 'Esprit\\DarkomBundle\\Controller\\MailController::newAction',  '_route' => 'esprit_darkom_mail_form',);
        }

        if (0 === strpos($pathinfo, '/s')) {
            // esprit_darkom_mail_sendpage
            if ($pathinfo === '/sendmail') {
                return array (  '_controller' => 'Esprit\\DarkomBundle\\Controller\\MailController::sendmailAction',  '_route' => 'esprit_darkom_mail_sendpage',);
            }

            // esprit_darkom_mail_succ
            if ($pathinfo === '/succ') {
                return array (  '_controller' => 'Esprit\\DarkomBundle\\Controller\\MailController::indexAction',  '_route' => 'esprit_darkom_mail_succ',);
            }

        }

        // esprit_darkom_mail
        if ($pathinfo === '/email') {
            return array (  '_controller' => 'Esprit\\DarkomBundle\\Controller\\DefaultController::emailAction',  '_route' => 'esprit_darkom_mail',);
        }

        // esprit_darkom_rechercheOffre
        if ($pathinfo === '/recherche') {
            return array (  '_controller' => 'Esprit\\DarkomBundle\\Controller\\OffreController::rechercheOffreAction',  '_route' => 'esprit_darkom_rechercheOffre',);
        }

        // ajout_reclamation
        if ($pathinfo === '/ajoutReclamation') {
            return array (  '_controller' => 'Esprit\\DarkomBundle\\Controller\\ReclamationController::ajoutReclamationAction',  '_route' => 'ajout_reclamation',);
        }

        // list_reclamation
        if ($pathinfo === '/listReclamation') {
            return array (  '_controller' => 'Esprit\\DarkomBundle\\Controller\\ReclamationController::listReclamationAction',  '_route' => 'list_reclamation',);
        }

        if (0 === strpos($pathinfo, '/de')) {
            // delete_reclamation
            if (0 === strpos($pathinfo, '/deleteReclamation') && preg_match('#^/deleteReclamation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_reclamation')), array (  '_controller' => 'Esprit\\DarkomBundle\\Controller\\ReclamationController::deleteReclamationAction',));
            }

            // esprit_darkom_détalis
            if (0 === strpos($pathinfo, '/details') && preg_match('#^/details/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_darkom_détalis')), array (  '_controller' => 'Esprit\\DarkomBundle\\Controller\\OffreController::listedetails_orgAction',));
            }

        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
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

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
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

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'EspritUserBundle:Security:login',  '_route' => 'login',);
        }

        if (0 === strpos($pathinfo, '/trouver')) {
            // esprit_darkom_trouver_Commentaire_Non_Approuver
            if ($pathinfo === '/trouverCommentaireNonApprouver') {
                return array (  '_controller' => 'Esprit\\DarkomBundle\\Controller\\NoteController::trouverCommentaireNonApprouverAction',  '_route' => 'esprit_darkom_trouver_Commentaire_Non_Approuver',);
            }

            // esprit_darkom_trouver_Offre_Non_Approuver
            if ($pathinfo === '/trouverOffreNonApprouver') {
                return array (  '_controller' => 'Esprit\\DarkomBundle\\Controller\\OffreController::trouverOffreNonApprouverAction',  '_route' => 'esprit_darkom_trouver_Offre_Non_Approuver',);
            }

        }

        // esprit_darkom_accepter_commentaire
        if (0 === strpos($pathinfo, '/accepterCommentaire') && preg_match('#^/accepterCommentaire/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_darkom_accepter_commentaire')), array (  '_controller' => 'Esprit\\DarkomBundle\\Controller\\NoteController::accepterAction',));
        }

        // esprit_darkom_refuser_commentaire
        if (0 === strpos($pathinfo, '/refuserCommentaire') && preg_match('#^/refuserCommentaire/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_darkom_refuser_commentaire')), array (  '_controller' => 'Esprit\\DarkomBundle\\Controller\\NoteController::refuserAction',));
        }

        // esprit_darkom_accepter_offre
        if (0 === strpos($pathinfo, '/accepterOffre') && preg_match('#^/accepterOffre/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_darkom_accepter_offre')), array (  '_controller' => 'Esprit\\DarkomBundle\\Controller\\OffreController::accepterAction',));
        }

        // esprit_darkom_refuser_offre
        if (0 === strpos($pathinfo, '/refuserOffre') && preg_match('#^/refuserOffre/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_darkom_refuser_offre')), array (  '_controller' => 'Esprit\\DarkomBundle\\Controller\\OffreController::refuserAction',));
        }

        // esprit_darkom_afficher_Image
        if (0 === strpos($pathinfo, '/afficherImage') && preg_match('#^/afficherImage/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_darkom_afficher_Image')), array (  '_controller' => 'Esprit\\DarkomBundle\\Controller\\OffreController::afficherImageAction',));
        }

        if (0 === strpos($pathinfo, '/images')) {
            // esprit_darkom_my_image_route
            if (preg_match('#^/images/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_darkom_my_image_route')), array (  '_controller' => 'Esprit\\DarkomBundle\\Controller\\OffreController::photoAction',));
            }

            // esprit_darkom_my_image1_route
            if (0 === strpos($pathinfo, '/images1') && preg_match('#^/images1/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_darkom_my_image1_route')), array (  '_controller' => 'Esprit\\DarkomBundle\\Controller\\OffreController::photo1Action',));
            }

            // esprit_darkom_my_image2_route
            if (0 === strpos($pathinfo, '/images2') && preg_match('#^/images2/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_darkom_my_image2_route')), array (  '_controller' => 'Esprit\\DarkomBundle\\Controller\\OffreController::photo2Action',));
            }

        }

        // esprit_darkom_list_Image
        if ($pathinfo === '/listImage') {
            return array (  '_controller' => 'Esprit\\DarkomBundle\\Controller\\OffreController::listAction',  '_route' => 'esprit_darkom_list_Image',);
        }

        if (0 === strpos($pathinfo, '/Graphe')) {
            // esprit_graph_homepage
            if (0 === strpos($pathinfo, '/Graphe/hello') && preg_match('#^/Graphe/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_graph_homepage')), array (  '_controller' => 'Esprit\\GraphBundle\\Controller\\DefaultController::indexAction',));
            }

            // _grapheChartLine
            if ($pathinfo === '/Graphe/chartLine') {
                return array (  '_controller' => 'Esprit\\GraphBundle\\Controller\\GrapheController::ChartLineAction',  '_route' => '_grapheChartLine',);
            }

            // _grapheHistogramme
            if ($pathinfo === '/Graphe/histogramme') {
                return array (  '_controller' => 'Esprit\\GraphBundle\\Controller\\GrapheController::chartHistogrammeAction',  '_route' => '_grapheHistogramme',);
            }

            // _grapheChartLine1
            if ($pathinfo === '/Graphe/chartLine1') {
                return array (  '_controller' => 'Esprit\\GraphBundle\\Controller\\GrapheController::ChartLine1Action',  '_route' => '_grapheChartLine1',);
            }

            // _grapheHistogramme1
            if ($pathinfo === '/Graphe/histogramme1') {
                return array (  '_controller' => 'Esprit\\GraphBundle\\Controller\\GrapheController::chartHistogramme1Action',  '_route' => '_grapheHistogramme1',);
            }

        }

        if (0 === strpos($pathinfo, '/Front')) {
            // esprit_front_homepage
            if (0 === strpos($pathinfo, '/Front/hello') && preg_match('#^/Front/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_front_homepage')), array (  '_controller' => 'Esprit\\FrontBundle\\Controller\\DefaultController::indexAction',));
            }

            // esprit_OffreDetails
            if (0 === strpos($pathinfo, '/Front/Offre') && preg_match('#^/Front/Offre/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_OffreDetails')), array (  '_controller' => 'Esprit\\FrontBundle\\Controller\\DefaultController::offreAction',));
            }

            // esprit_AfficheCommentaire
            if (0 === strpos($pathinfo, '/Front/Commentaire') && preg_match('#^/Front/Commentaire/(?P<idOffre>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_AfficheCommentaire')), array (  '_controller' => 'Esprit\\FrontBundle\\Controller\\CommentaireController::listCommentaireAction',));
            }

            // esprit_ajoutCommentaire
            if ($pathinfo === '/Front/ajoutCommentaire') {
                return array (  '_controller' => 'Esprit\\FrontBundle\\Controller\\CommentaireController::ajoutCommentaireAction',  '_route' => 'esprit_ajoutCommentaire',);
            }

            // esprit_deleteCommentaire
            if (0 === strpos($pathinfo, '/Front/supprimerCommentaire') && preg_match('#^/Front/supprimerCommentaire/(?P<id>[^/]++)/(?P<idOffre>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_deleteCommentaire')), array (  '_controller' => 'Esprit\\FrontBundle\\Controller\\CommentaireController::deleteCommentaireAction',));
            }

            if (0 === strpos($pathinfo, '/Front/m')) {
                // esprit_updateCommentaire
                if (0 === strpos($pathinfo, '/Front/modifierCommentaire') && preg_match('#^/Front/modifierCommentaire/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_updateCommentaire')), array (  '_controller' => 'Esprit\\FrontBundle\\Controller\\CommentaireController::updateCommentaireAction',));
                }

                // esprit_map_homepage
                if ($pathinfo === '/Front/map') {
                    return array (  '_controller' => 'Esprit\\FrontBundle\\Controller\\DefaultController::indexAction',  '_route' => 'esprit_map_homepage',);
                }

            }

            // reserver
            if (0 === strpos($pathinfo, '/Front/reservation') && preg_match('#^/Front/reservation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reserver')), array (  '_controller' => 'Esprit\\FrontBundle\\Controller\\CommentaireController::reserverAction',));
            }

            // notemoyenne
            if (0 === strpos($pathinfo, '/Front/note') && preg_match('#^/Front/note/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'notemoyenne')), array (  '_controller' => 'Esprit\\FrontBundle\\Controller\\CommentaireController::noteAction',));
            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

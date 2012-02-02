<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * apptestUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class apptestUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _security_check
        if ($pathinfo === '/demo/secured/login_check') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        if (0 === strpos($pathinfo, '/demo')) {
            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        // _assetic_e95c551
        if ($pathinfo === '/css/blogger.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'e95c551',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_e95c551',);
        }

        // _assetic_e95c551_0
        if ($pathinfo === '/css/blogger_part_1_blog_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'e95c551',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_e95c551_0',);
        }

        // _assetic_e95c551_1
        if ($pathinfo === '/css/blogger_part_1_sidebar_2.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'e95c551',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_e95c551_1',);
        }

        // _assetic_dd41a20
        if ($pathinfo === '/css/dd41a20.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'dd41a20',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_dd41a20',);
        }

        // _assetic_dd41a20_0
        if ($pathinfo === '/css/dd41a20_part_1_51c56cc_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'dd41a20',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_dd41a20_0',);
        }

        // _assetic_dd41a20_1
        if ($pathinfo === '/css/dd41a20_part_1_51c56cc_part_1_blogger_1_2.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'dd41a20',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_dd41a20_1',);
        }

        // _assetic_dd41a20_2
        if ($pathinfo === '/css/dd41a20_part_1_51c56cc_part_1_blogger_part_1_blog_1_2_3.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'dd41a20',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_dd41a20_2',);
        }

        // _assetic_dd41a20_3
        if ($pathinfo === '/css/dd41a20_part_1_51c56cc_part_1_blogger_part_1_sidebar_2_3_4.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'dd41a20',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_dd41a20_3',);
        }

        // _assetic_dd41a20_4
        if ($pathinfo === '/css/dd41a20_part_1_51c56cc_part_1_screen_4_5.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'dd41a20',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_dd41a20_4',);
        }

        // _assetic_dd41a20_5
        if ($pathinfo === '/css/dd41a20_part_1_blogger_6.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'dd41a20',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_dd41a20_5',);
        }

        // _assetic_dd41a20_6
        if ($pathinfo === '/css/dd41a20_part_1_blogger_part_1_blog_1_7.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'dd41a20',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_dd41a20_6',);
        }

        // _assetic_dd41a20_7
        if ($pathinfo === '/css/dd41a20_part_1_blogger_part_1_sidebar_2_8.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'dd41a20',  'pos' => 7,  '_format' => 'css',  '_route' => '_assetic_dd41a20_7',);
        }

        // _assetic_dd41a20_8
        if ($pathinfo === '/css/dd41a20_part_1_screen_9.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'dd41a20',  'pos' => 8,  '_format' => 'css',  '_route' => '_assetic_dd41a20_8',);
        }

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
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
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // BloggerBlogBundle_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_BloggerBlogBundle_homepage;
            }
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'BloggerBlogBundle_homepage');
            }
            return array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\PageController::indexAction',  '_route' => 'BloggerBlogBundle_homepage',);
        }
        not_BloggerBlogBundle_homepage:

        // BloggerBlogBundle_about
        if ($pathinfo === '/about') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_BloggerBlogBundle_about;
            }
            return array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\PageController::aboutAction',  '_route' => 'BloggerBlogBundle_about',);
        }
        not_BloggerBlogBundle_about:

        // BloggerBlogBundle_contact
        if ($pathinfo === '/contact') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_BloggerBlogBundle_contact;
            }
            return array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\PageController::contactAction',  '_route' => 'BloggerBlogBundle_contact',);
        }
        not_BloggerBlogBundle_contact:

        // BloggerBlogBundle_blog_show
        if (preg_match('#^/(?P<id>\\d+)/(?P<slug>[^/]+?)(?:/(?P<comments>[^/]+?))?$#xs', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_BloggerBlogBundle_blog_show;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\BlogController::showAction',  'comments' => true,)), array('_route' => 'BloggerBlogBundle_blog_show'));
        }
        not_BloggerBlogBundle_blog_show:

        // BloggerBlogBundle_comment_create
        if (0 === strpos($pathinfo, '/comment') && preg_match('#^/comment/(?P<blog_id>\\d+)$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_BloggerBlogBundle_comment_create;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\CommentController::createAction',)), array('_route' => 'BloggerBlogBundle_comment_create'));
        }
        not_BloggerBlogBundle_comment_create:

        // acme_main_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\MainBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'acme_main_default_index'));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

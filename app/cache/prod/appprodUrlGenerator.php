<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       'BloggerBlogBundle_homepage' => true,
       'BloggerBlogBundle_about' => true,
       'BloggerBlogBundle_contact' => true,
       'BloggerBlogBundle_blog_show' => true,
       'BloggerBlogBundle_comment_create' => true,
       'acme_main_default_index' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function getBloggerBlogBundle_homepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\PageController::indexAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function getBloggerBlogBundle_aboutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\PageController::aboutAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/about',  ),));
    }

    private function getBloggerBlogBundle_contactRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\PageController::contactAction',), array (  '_method' => 'GET|POST',), array (  0 =>   array (    0 => 'text',    1 => '/contact',  ),));
    }

    private function getBloggerBlogBundle_blog_showRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'slug',), array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\BlogController::showAction',), array (  '_method' => 'GET',  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'slug',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),));
    }

    private function getBloggerBlogBundle_comment_createRouteInfo()
    {
        return array(array (  0 => 'blog_id',), array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\CommentController::createAction',), array (  '_method' => 'POST',  'blog_id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'blog_id',  ),  1 =>   array (    0 => 'text',    1 => '/comment',  ),));
    }

    private function getacme_main_default_indexRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\MainBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/hello',  ),));
    }
}

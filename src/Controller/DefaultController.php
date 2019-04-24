<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 01.04.2019
 * Time: 14:59
 */

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use AndreaSprega\Bundle\BreadcrumbBundle\Annotation\Breadcrumb;



/**
 * @Breadcrumb({"label" = "Home", "route" = "index"})
 */
class DefaultController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return $this->render('siteTemplates/mainpage.html.twig');
    }

}
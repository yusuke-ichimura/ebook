<?php

namespace Acme\EbookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * DefaultController.
 *
 * @Route("/top")
 */
class DefaultController extends Controller
{
//     public function indexAction()
//     {
//         return $this->render('AcmeEbookBundle:Default:index.html.twig');
//     }


//     /**
//      * @Route("/", name="homepage")
//      */
//     public function indexAction(Request $request)
//     {
//         // replace this example code with whatever you need
//         return $this->render('default/index.html.twig', array(
//             'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
//         ));
//     }


    /**
     * @Route("/", name="top")
     * @Template
     */
    public function indexAction(Request $request)
    {
//         return array();

        $url = 'test';

        return
            [
                'url' =>$url, //変数
            ];

//         $number = rand(0, 100);

//         return new Response(
//             '<html><body>Lucky number: '.$number.'</body></html>'
//             );
    }
}

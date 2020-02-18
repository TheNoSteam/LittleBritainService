<?php
/*
* This file is part of the PEC Platform $/PROJECT_NAME}.
*
* (c) PEC project engineers &amp; consultants
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace App\Controller;

use App\Service\LittleBritainGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ServiceFunController extends AbstractController {

    /**
     * @Route("/quotesGenerator", name="quotes_generator")
     * @param LittleBritainGenerator $britainGenerator
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function quotesGenerator(LittleBritainGenerator $britainGenerator) {
        //return new Response($britainGenerator->quotesGenerator()[1]);

        return $this->render('quotes.hml.twig', [
            'comedian'  => $britainGenerator->quotesGenerator()[0],
            'quote'     => $britainGenerator->quotesGenerator()[1]
        ]);
    }
}
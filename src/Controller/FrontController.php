<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class FrontController
 *
 * @author  Dzianis Kotau <jampire.blr@gmail.com>
 * @package App\Controller
 */
class FrontController extends AbstractController
{
    /**
     * @Route("/", name="main_page")
     */
    public function index(): Response
    {
        return $this->render('front/index.html.twig');
    }

    /**
     * @Route("/video-list", name="video_list")
     */
    public function videoList(): Response
    {
        $sampleVideos = [289729765,238902809,150870038,219727723,289879647,261379936,289029793,60594348,290253648];
        return $this->render('front/video_list.html.twig', [
            'sample_videos' => $sampleVideos,
        ]);
    }

    /**
     * @Route("/video-details", name="video_details")
     */
    public function videoDetails(): Response
    {
        return $this->render('front/video_details.html.twig');
    }
}

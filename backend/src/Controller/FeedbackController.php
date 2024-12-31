<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class FeedbackController extends AbstractController
{
    #[Route('/feedback', name: 'app_feedback')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new Custom Feedback controller!',
            'path' => 'src/Controller/FeedbackController.php',
        ]);
    }
}

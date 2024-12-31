<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request; 
use Symfony\Component\Routing\Attribute\Route;

class FeedbackController extends AbstractController
{
    #[Route('/submit-feedback', name: 'submit_feedback', methods: ['POST'])]
    public function submitFeedback(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if (!$data || !isset($data['Name'], $data['email'], $data['feedback'], $data['rating'])) {
            return $this->json(['error' => 'Invalid data'], 400);
        }
        return $this->json([
            'message' => 'Feedback submitted successfully',
            'data' => $data,
        ]);
    }
}

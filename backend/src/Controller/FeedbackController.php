<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Feedback;

class FeedbackController extends AbstractController
{
    /**
     * @Route("/submit-feedback", name="submit_feedback", methods={"POST"})
     */
    public function submitFeedback(Request $request, EntityManagerInterface $em): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if (!isset($data['Name'], $data['email'], $data['feedback'], $data['rating'])) {
            return new JsonResponse(['error' => 'Missing required fields'], 400);
        }

        try {
            $feedback = new Feedback();
            $feedback->setName($data['Name']);
            $feedback->setEmail($data['email']);
            $feedback->setMessage($data['feedback']);
            $feedback->setRating($data['rating']);

            $em->persist($feedback);
            $em->flush();

            return new JsonResponse(['status' => 'Feedback submitted successfully!'], 200);
        } catch (\Exception $e) {
            
            return new JsonResponse(['error' => 'An internal server error occurred: ' . $e->getMessage()], 500);
        }
    }
}

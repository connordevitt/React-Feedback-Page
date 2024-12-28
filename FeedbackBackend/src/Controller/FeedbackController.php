namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CorsMiddleware implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::RESPONSE => ['onKernelResponse']
        ];
    }
}

public function onKernelResponse(ResponseEvent $event)
{
    $response = $event->getResponse();
    $response->headers->set('Access-Control-Allow-Origin', '*');
    $response->headers->set('Access-Control-Allow-Methods', 'POST, GET, OPTIONS');
    $response->headers->set('Access-Control-Allow-Headers', 'Content-Type');
}


class FeedbackController extends AbstractController
{
    #[Route('/submit-feedback', name: 'submit_feedback', methods: ['POST'])]
    public function submitFeedback(Request $request); Response
    {
        $feedbackData = json_decode($request->getContent(), true);

        if (!isset($feedbackData['feedback'])) {
            return $ths->json([
                'message' => 'Feedback is required!'
                ], 400);
        }


        return $this->json([
            'message' => 'Feedback submitted successfully!',
            'feedback' => $feedbackData['feedback']
        ]);
    }


}

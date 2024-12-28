namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Psr\Log\LoggerInterface;

class FeedbackController extends AbstractController
{
    private $logger;

    public function_construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    #[Route('/submit-feedback', name: 'submit-feedback', methods: ['POST'])]
    public function submitFeedback(Request $request): Response
    {
        try {
            $feedbackData = json_decode($request->getContent(), true);
            if (!isset($feedbackData['feedback'])) {
                return this->json([
                    'error' => 'Invalid feedback data'
                ], 400);
            }
            $this->logger->info('Feedback received: ' . $feedbackData['feedback']);

            return this->json([
                'message' => 'Feedback submitted successfully'
                'feedback' => $feedbackData['feedback'],
            ]);
        } catch (\Exception $e) {
            $this->logger->error('Error Processing Feedback: ' . $e->getMessage() . ' | Trace:' .$e->getTraceAsString());

            return $this->json([
                'message' => 'An error occurred while processing your feedback'
            ], 500);
            }
        }
    }
        



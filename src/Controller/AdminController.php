<?php 
    namespace App\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Component\HttpFoundation\Request;
    use App\Entity\Tasks;

    class AdminController extends AbstractController {
        /**
         * @Route("/", name="home")
         * @return Response index.html.twig
         */
        public function index() {
            $data = [];
            $data['user'] = 'Hoang';
            $data['taskList'] = ['Make a dough', 'Spread toppings', 'Bake it up'];
            return $this->render("/todo/list.html.twig", $data);
        }

        /**
         * @Route("/task/save/{task_name}", name="create_new_task")
         */
        public function clients(Request $request, $task_name) {
            $entityManager = $this->getDoctrine()->getManager();

            $tasks = new Tasks();
            $tasks->setName($task_name);
            $tasks->setDeadline(30);

            $entityManager->persist($tasks);

            $entityManager->flush();

            return new Response("Hey! A new task has been saved with the id of: " . $tasks->getId());
        }
    }
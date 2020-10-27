<?php


namespace App\Controller;


use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController_old extends AbstractController
{
    /**
     * @Route("/user/create")
     * @return Response
     */
    public function create_user(): Response {
        return $this->render('User/create.html.twig');
    }

    /**
     * @Route("/user/view", name="user_view")
     * @return Response
     */
    public function view_user(): Response {
        return $this->render('User/view.html.twig');
    }
}
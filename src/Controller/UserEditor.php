<?php
namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserRepository;

class UserEditor extends AbstractController
{
    /**
     * @route("/users")
     * @return Response
     */
    public function show(UserRepository $userRepository)
    {
        $users = $userRepository->findAll();


        return $this->render('useredit.html.twig', ['users' => $users]);
    }

    /**
     * @route("/users/edit/{id}" , name="user_edit")
     * @return Response
     */
    public function edit(UserRepository $userRepository, int $id)
    {
        $user = $userRepository->findOneBy(['id'=>$id]);
        dump($user);


        return $this->render('useredit2.html.twig', ['user' => $user]);
    }




}

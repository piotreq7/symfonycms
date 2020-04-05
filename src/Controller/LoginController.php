<?php
namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class LoginController extends AbstractController
{
    /**
     * @route("/")
     * @return Response
     */
    public function show(EntityManagerInterface $em)
    {

//            $user = new User();
//            $user->setFirstName('kaska');
//            $user->setPassword("ttt");
//            $user->setEmail('333322@o2.pl');
//            $em->persist($user);
//            $em->flush();



        return $this->render('frontpage.html.twig');
    }




}

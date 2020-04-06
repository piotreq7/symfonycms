<?php
namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    /**
     * @route("/" , name="homepage")
     * @return Response
     */
    public function show()
    {




        return $this->render('frontpage.html.twig');
    }




}

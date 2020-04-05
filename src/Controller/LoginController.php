<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    /**
     * @route("/")
     * @return Response
     */
    public function show()
    {
        try {
            $number = random_int(0, 100);

        } catch (\Exception $e) {
            echo 'exception';
        }


        return $this->render('frontpage.html.twig', [
            'number' => $number,
        ]);
    }




}

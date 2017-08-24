<?php
/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 24/08/17
 * Time: 10:31
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Login controller.
 *
 * @Route("loginC")
 */
class LoginController extends Controller
{
    /**
     * Gestionamos login aplicacion
     *
     * @Route("/login", name="login")
     * @Method("POST")
     */
    public function loginAction(Request $request /*AuthenticationUtils $authUtils*/)
    {
        //$error = $authUtils->getLastAuthenticationError();
        //$lastUsername = $authUtils->getLastUsername();

        return $this->render('club/index.html.twig', array(
            //'last_username' => $lastUsername,
            //'error'         => $error,
        ));
    }
}
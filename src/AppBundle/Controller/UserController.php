<?php
/**
 * Created by PhpStorm.
 * User: macrich
 * Date: 16/08/2016
 * Time: 17:35
 */

namespace AppBundle\Controller;


use AppBundle\Entity\IvoUser;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\UserRegistrationForm;


/**
 * @Security("is_granted('ROLE_ADMIN')")
 * @Route("/admin")
 */
class UserController extends Controller
{
    /**
     * @Route("/register", name="user_register")
     */
    public function registerAction(Request $request)
    {
        $form = $this->createForm(UserRegistrationForm::class);

        $form->handleRequest($request);
        if ($form->isValid()) {
            /** @var IvoUser $user */
            $user = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            $this->addFlash('success', 'Added '.$user->getIvoUserId());
//            return $this->redirectToRoute('homepage');
        }


        return $this->render('security/register.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
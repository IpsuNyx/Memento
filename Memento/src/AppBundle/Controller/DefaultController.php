<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Step;
use AppBundle\Form\StepType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    const STEP_FORM = 'stepForm';

    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:default:index.html.twig', [
        ]);
    }

    public function addAction(Request $request)
    {
//        if ($request->isMethod('POST')){
//            $form = $request->request->get('content');
////            $parents = $form['parents'];
//            var_dump($form);exit;
//        }
        $step = new Step();


        $formBuilder = $this->createForm(StepType::class, $step);

        $formBuilder->handleRequest($request);
        if ($formBuilder->isSubmitted()) {
            if ($formBuilder->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($step);
                $em->flush();
                $this->addFlash('succes', 'Step added ! :D');
            } else {
                $this->addFlash('error', 'Invalid form');
            }
        }

        return $this->render('AppBundle:step:add.html.twig', [
            self::STEP_FORM => $formBuilder->createView()
        ]);
    }

    public function updateAction(Request $request)
    {

        // replace this example code with whatever you need
        return $this->render('AppBundle:default:index.html.twig', [
        ]);
    }

    public function removeAction(Request $request)
    {
        if ($request->isMethod('POST')){
            $em = $this->getDoctrine()->getManager();
            $step = $em->getRepository(Step::class)->find($request->request->get('id'));
            $em->remove($step);
            $em->flush();
            $this->addFlash('succes', 'Step removed whit success ! :D');
        }



        // replace this example code with whatever you need
        return $this->redirectToRoute('list');
    }

    public function getAction(Request $request)
    {

        // replace this example code with whatever you need
        return $this->render('AppBundle:default:index.html.twig', [
        ]);
    }

    public function listAction(Request $request)
    {
        $steps = $this->getDoctrine()->getManager()->getRepository(Step::class)->findAll();
        // replace this example code with whatever you need
        return $this->render('AppBundle:step:list.html.twig', [
            'steps' => $steps
        ]);
    }

}

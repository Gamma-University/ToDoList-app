<?php

namespace Keynetic\ToDoListBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Keynetic\ToDoListBundle\Entity\Todo;

class ToDoListController extends Controller {

    public function indexAction() {
        
        
        $toDoList = $this->getDoctrine()
                ->getManager()
                ->getRepository('KeyneticToDoListBundle:ToDo')
                ->findAll();
        
        // On crée un objet Todo
        
        $todo = new Todo();
        
        // Ajout des champs de l'entité au formulaire de création de nouvelle tâche
        $newToDoForm = $this->createFormBuilder($todo)
                ->add('description', 'text')
                ->getForm();
        
        $request = $this->get('request');

        // On vérifie qu'elle est de type POST
        if ($request->getMethod() == 'POST') {
            // On fait le lien Requête <-> Formulaire
            // À partir de maintenant, la variable $todo contient les valeurs entrées dans le formulaire par le visiteur
            $newToDoForm->bind($request);

            // On vérifie que les valeurs entrées sont correctes
            if ($newToDoForm->isValid()) {

                // On l'enregistre notre objet $todo dans la base de données
                $em = $this->getDoctrine()->getManager();
                $em->persist($todo);
                $em->flush();

                // Puis on redirige vers l'accueil
                return $this->redirect($this->generateUrl('accueil'));
            }
        }

        return $this->render('KeyneticToDoListBundle:ToDoList:index.html.twig', array(
                    'toDoList' => $toDoList,
                    'newToDoForm' => $newToDoForm->createView()));
    }

    public function modifierAction(Todo $todo) {
        
        // insert/update de la date de maj
        $todo->setLastModifiedOn(new \Datetime);
        
        // Ajout des champs de l'entité au formulaire
        $form = $this->createFormBuilder($todo)
                ->add('description', 'text')
                ->add('done', 'checkbox', array(
                    'label' => 'Done ',
                    'required' => false,))
                ->getForm();

        $supprimerForm = $this->createFormBuilder($todo)
                ->getForm();

        $request = $this->getRequest();

        if ($request->getMethod() == 'POST') {

            $supprimerForm->bind($request);

            if ($supprimerForm->isValid()) {
                // On supprime la tâche
                $em = $this->getDoctrine()->getManager();
                $em->remove($todo);
                $em->flush();

                // On définit un message flash
                $this->get('session')->getFlashBag()->add('info', 'tâche bien supprimée');

                // Puis on redirige vers l'accueil
                return $this->redirect($this->generateUrl('accueil'));
            }

            $form->bind($request);

            if ($form->isValid()) {
                // On enregistre la tâche
                $em = $this->getDoctrine()->getManager();
                $em->persist($todo);
                $em->flush();

                // On définit un message flash
                $this->get('session')->getFlashBag()->add('info', 'tâche bien modifiée');
                // Puis on redirige vers l'accueil
                return $this->redirect($this->generateUrl('accueil'));
            }
        }

        return $this->render('KeyneticToDoListBundle:ToDoList:modifier.html.twig', array(
                    'form' => $form->createView(),
                    'supprimerForm' => $supprimerForm->createView(),
                    'todo' => $todo
        ));
    }

}

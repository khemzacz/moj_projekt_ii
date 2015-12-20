<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\UzytkownikOcenaFilm;
use AppBundle\Form\UzytkownikOcenaFilmType;

/**
 * UzytkownikOcenaFilm controller.
 *
 */
class UzytkownikOcenaFilmController extends Controller
{

    /**
     * Lists all UzytkownikOcenaFilm entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:UzytkownikOcenaFilm')->findAll();

        return $this->render('AppBundle:UzytkownikOcenaFilm:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new UzytkownikOcenaFilm entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new UzytkownikOcenaFilm();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('uzytkownikocenafilm_show', array('id' => $entity->getId())));
        }

        return $this->render('AppBundle:UzytkownikOcenaFilm:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a UzytkownikOcenaFilm entity.
     *
     * @param UzytkownikOcenaFilm $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(UzytkownikOcenaFilm $entity)
    {
        $form = $this->createForm(new UzytkownikOcenaFilmType(), $entity, array(
            'action' => $this->generateUrl('uzytkownikocenafilm_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new UzytkownikOcenaFilm entity.
     *
     */
    public function newAction()
    {
        $entity = new UzytkownikOcenaFilm();
        $form   = $this->createCreateForm($entity);

        return $this->render('AppBundle:UzytkownikOcenaFilm:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a UzytkownikOcenaFilm entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:UzytkownikOcenaFilm')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find UzytkownikOcenaFilm entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:UzytkownikOcenaFilm:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing UzytkownikOcenaFilm entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:UzytkownikOcenaFilm')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find UzytkownikOcenaFilm entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:UzytkownikOcenaFilm:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a UzytkownikOcenaFilm entity.
    *
    * @param UzytkownikOcenaFilm $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(UzytkownikOcenaFilm $entity)
    {
        $form = $this->createForm(new UzytkownikOcenaFilmType(), $entity, array(
            'action' => $this->generateUrl('uzytkownikocenafilm_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing UzytkownikOcenaFilm entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:UzytkownikOcenaFilm')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find UzytkownikOcenaFilm entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('uzytkownikocenafilm_edit', array('id' => $id)));
        }

        return $this->render('AppBundle:UzytkownikOcenaFilm:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a UzytkownikOcenaFilm entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:UzytkownikOcenaFilm')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find UzytkownikOcenaFilm entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('uzytkownikocenafilm'));
    }

    /**
     * Creates a form to delete a UzytkownikOcenaFilm entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('uzytkownikocenafilm_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

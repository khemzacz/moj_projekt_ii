<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\UzytkownikOcenaKsiazka;
use AppBundle\Form\UzytkownikOcenaKsiazkaType;

/**
 * UzytkownikOcenaKsiazka controller.
 *
 */
class UzytkownikOcenaKsiazkaController extends Controller
{

    /**
     * Lists all UzytkownikOcenaKsiazka entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:UzytkownikOcenaKsiazka')->findAll();

        return $this->render('AppBundle:UzytkownikOcenaKsiazka:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new UzytkownikOcenaKsiazka entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new UzytkownikOcenaKsiazka();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('uzytkownikocenaksiazka_show', array('id' => $entity->getId())));
        }

        return $this->render('AppBundle:UzytkownikOcenaKsiazka:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a UzytkownikOcenaKsiazka entity.
     *
     * @param UzytkownikOcenaKsiazka $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(UzytkownikOcenaKsiazka $entity)
    {
        $form = $this->createForm(new UzytkownikOcenaKsiazkaType(), $entity, array(
            'action' => $this->generateUrl('uzytkownikocenaksiazka_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new UzytkownikOcenaKsiazka entity.
     *
     */
    public function newAction()
    {
        $entity = new UzytkownikOcenaKsiazka();
        $form   = $this->createCreateForm($entity);

        return $this->render('AppBundle:UzytkownikOcenaKsiazka:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a UzytkownikOcenaKsiazka entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:UzytkownikOcenaKsiazka')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find UzytkownikOcenaKsiazka entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:UzytkownikOcenaKsiazka:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing UzytkownikOcenaKsiazka entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:UzytkownikOcenaKsiazka')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find UzytkownikOcenaKsiazka entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:UzytkownikOcenaKsiazka:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a UzytkownikOcenaKsiazka entity.
    *
    * @param UzytkownikOcenaKsiazka $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(UzytkownikOcenaKsiazka $entity)
    {
        $form = $this->createForm(new UzytkownikOcenaKsiazkaType(), $entity, array(
            'action' => $this->generateUrl('uzytkownikocenaksiazka_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing UzytkownikOcenaKsiazka entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:UzytkownikOcenaKsiazka')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find UzytkownikOcenaKsiazka entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('uzytkownikocenaksiazka_edit', array('id' => $id)));
        }

        return $this->render('AppBundle:UzytkownikOcenaKsiazka:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a UzytkownikOcenaKsiazka entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:UzytkownikOcenaKsiazka')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find UzytkownikOcenaKsiazka entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('uzytkownikocenaksiazka'));
    }

    /**
     * Creates a form to delete a UzytkownikOcenaKsiazka entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('uzytkownikocenaksiazka_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

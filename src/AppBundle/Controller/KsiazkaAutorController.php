<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\KsiazkaAutor;
use AppBundle\Form\KsiazkaAutorType;

/**
 * KsiazkaAutor controller.
 *
 */
class KsiazkaAutorController extends Controller
{

    /**
     * Lists all KsiazkaAutor entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:KsiazkaAutor')->findAll();

        return $this->render('AppBundle:KsiazkaAutor:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new KsiazkaAutor entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new KsiazkaAutor();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ksiazkaautor_show', array('id' => $entity->getId())));
        }

        return $this->render('AppBundle:KsiazkaAutor:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a KsiazkaAutor entity.
     *
     * @param KsiazkaAutor $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(KsiazkaAutor $entity)
    {
        $form = $this->createForm(new KsiazkaAutorType(), $entity, array(
            'action' => $this->generateUrl('ksiazkaautor_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new KsiazkaAutor entity.
     *
     */
    public function newAction()
    {
        $entity = new KsiazkaAutor();
        $form   = $this->createCreateForm($entity);

        return $this->render('AppBundle:KsiazkaAutor:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a KsiazkaAutor entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:KsiazkaAutor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find KsiazkaAutor entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:KsiazkaAutor:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing KsiazkaAutor entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:KsiazkaAutor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find KsiazkaAutor entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:KsiazkaAutor:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a KsiazkaAutor entity.
    *
    * @param KsiazkaAutor $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(KsiazkaAutor $entity)
    {
        $form = $this->createForm(new KsiazkaAutorType(), $entity, array(
            'action' => $this->generateUrl('ksiazkaautor_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing KsiazkaAutor entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:KsiazkaAutor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find KsiazkaAutor entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('ksiazkaautor_edit', array('id' => $id)));
        }

        return $this->render('AppBundle:KsiazkaAutor:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a KsiazkaAutor entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:KsiazkaAutor')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find KsiazkaAutor entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ksiazkaautor'));
    }

    /**
     * Creates a form to delete a KsiazkaAutor entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ksiazkaautor_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

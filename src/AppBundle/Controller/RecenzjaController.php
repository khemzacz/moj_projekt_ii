<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\Recenzja;
use AppBundle\Form\RecenzjaType;

/**
 * Recenzja controller.
 *
 */
class RecenzjaController extends Controller
{

    /**
     * Lists all Recenzja entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Recenzja')->findAll();

        return $this->render('AppBundle:Recenzja:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Recenzja entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Recenzja();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('recenzja_show', array('id' => $entity->getId())));
        }

        return $this->render('AppBundle:Recenzja:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Recenzja entity.
     *
     * @param Recenzja $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Recenzja $entity)
    {
        $form = $this->createForm(new RecenzjaType(), $entity, array(
            'action' => $this->generateUrl('recenzja_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Recenzja entity.
     *
     */
    public function newAction()
    {
        $entity = new Recenzja();
        $form   = $this->createCreateForm($entity);

        return $this->render('AppBundle:Recenzja:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Recenzja entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Recenzja')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Recenzja entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:Recenzja:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Recenzja entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Recenzja')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Recenzja entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:Recenzja:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Recenzja entity.
    *
    * @param Recenzja $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Recenzja $entity)
    {
        $form = $this->createForm(new RecenzjaType(), $entity, array(
            'action' => $this->generateUrl('recenzja_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Recenzja entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Recenzja')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Recenzja entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('recenzja_edit', array('id' => $id)));
        }

        return $this->render('AppBundle:Recenzja:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Recenzja entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:Recenzja')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Recenzja entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('recenzja'));
    }

    /**
     * Creates a form to delete a Recenzja entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('recenzja_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

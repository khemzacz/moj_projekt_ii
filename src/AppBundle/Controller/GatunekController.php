<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\Gatunek;
use AppBundle\Form\GatunekType;

/**
 * Gatunek controller.
 *
 */
class GatunekController extends Controller
{

    /**
     * Lists all Gatunek entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Gatunek')->findAll();

        return $this->render('AppBundle:Gatunek:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Gatunek entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Gatunek();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('gatunek_show', array('id' => $entity->getIdgatunek())));
        }

        return $this->render('AppBundle:Gatunek:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Gatunek entity.
     *
     * @param Gatunek $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Gatunek $entity)
    {
        $form = $this->createForm(new GatunekType(), $entity, array(
            'action' => $this->generateUrl('gatunek_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Gatunek entity.
     *
     */
    public function newAction()
    {
        $entity = new Gatunek();
        $form   = $this->createCreateForm($entity);

        return $this->render('AppBundle:Gatunek:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Gatunek entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Gatunek')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Gatunek entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:Gatunek:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Gatunek entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Gatunek')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Gatunek entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:Gatunek:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Gatunek entity.
    *
    * @param Gatunek $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Gatunek $entity)
    {
        $form = $this->createForm(new GatunekType(), $entity, array(
            'action' => $this->generateUrl('gatunek_update', array('id' => $entity->getIdgatunek())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Gatunek entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Gatunek')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Gatunek entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('gatunek_edit', array('id' => $id)));
        }

        return $this->render('AppBundle:Gatunek:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Gatunek entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:Gatunek')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Gatunek entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('gatunek'));
    }

    /**
     * Creates a form to delete a Gatunek entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('gatunek_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

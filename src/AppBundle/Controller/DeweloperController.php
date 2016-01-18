<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\Deweloper;
use AppBundle\Form\DeweloperType;

/**
 * Deweloper controller.
 *
 */
class DeweloperController extends Controller
{

    /**
     * Lists all Deweloper entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Deweloper')->findAll();

        return $this->render('AppBundle:Deweloper:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Deweloper entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Deweloper();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('deweloper_show', array('id' => $entity->getIddeweloper())));
        }

        return $this->render('AppBundle:Deweloper:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Deweloper entity.
     *
     * @param Deweloper $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Deweloper $entity)
    {
        $form = $this->createForm(new DeweloperType(), $entity, array(
            'action' => $this->generateUrl('deweloper_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Deweloper entity.
     *
     */
    public function newAction()
    {
        $entity = new Deweloper();
        $form   = $this->createCreateForm($entity);

        return $this->render('AppBundle:Deweloper:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Deweloper entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Deweloper')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Deweloper entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:Deweloper:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Deweloper entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Deweloper')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Deweloper entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:Deweloper:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Deweloper entity.
    *
    * @param Deweloper $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Deweloper $entity)
    {
        $form = $this->createForm(new DeweloperType(), $entity, array(
            'action' => $this->generateUrl('deweloper_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Deweloper entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Deweloper')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Deweloper entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('deweloper_edit', array('id' => $id)));
        }

        return $this->render('AppBundle:Deweloper:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Deweloper entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:Deweloper')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Deweloper entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('deweloper'));
    }

    /**
     * Creates a form to delete a Deweloper entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('deweloper_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\Autor;
use AppBundle\Form\AutorType;

/**
 * Autor controller.
 *
 */
class AutorController extends Controller
{

    /**
     * Lists all Autor entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Autor')->findAll();

        return $this->render('AppBundle:Autor:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Autor entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Autor();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('autor_show', array('id' => $entity->getIdautor())));
        }

        return $this->render('AppBundle:Autor:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Autor entity.
     *
     * @param Autor $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Autor $entity)
    {
        $form = $this->createForm(new AutorType(), $entity, array(
            'action' => $this->generateUrl('autor_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Autor entity.
     *
     */
    public function newAction()
    {
        $entity = new Autor();
        $form   = $this->createCreateForm($entity);

        return $this->render('AppBundle:Autor:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Autor entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Autor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Autor entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:Autor:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Autor entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Autor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Autor entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:Autor:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Autor entity.
    *
    * @param Autor $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Autor $entity)
    {
        $form = $this->createForm(new AutorType(), $entity, array(
            'action' => $this->generateUrl('autor_update', array('id' => $entity->getIdautor())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Autor entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Autor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Autor entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('autor_edit', array('id' => $id)));
        }

        return $this->render('AppBundle:Autor:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Autor entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:Autor')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Autor entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('autor'));
    }

    /**
     * Creates a form to delete a Autor entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('autor_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\Ocena;
use AppBundle\Form\OcenaType;

/**
 * Ocena controller.
 *
 */
class OcenaController extends Controller
{

    /**
     * Lists all Ocena entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Ocena')->findAll();

        return $this->render('AppBundle:Ocena:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Ocena entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Ocena();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ocena_show', array('id' => $entity->getId())));
        }

        return $this->render('AppBundle:Ocena:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Ocena entity.
     *
     * @param Ocena $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Ocena $entity)
    {
        $form = $this->createForm(new OcenaType(), $entity, array(
            'action' => $this->generateUrl('ocena_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Ocena entity.
     *
     */
    public function newAction()
    {
        $entity = new Ocena();
        $form   = $this->createCreateForm($entity);

        return $this->render('AppBundle:Ocena:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Ocena entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Ocena')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ocena entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:Ocena:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Ocena entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Ocena')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ocena entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:Ocena:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Ocena entity.
    *
    * @param Ocena $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Ocena $entity)
    {
        $form = $this->createForm(new OcenaType(), $entity, array(
            'action' => $this->generateUrl('ocena_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Ocena entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Ocena')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ocena entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('ocena_edit', array('id' => $id)));
        }

        return $this->render('AppBundle:Ocena:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Ocena entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:Ocena')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Ocena entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ocena'));
    }

    /**
     * Creates a form to delete a Ocena entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ocena_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

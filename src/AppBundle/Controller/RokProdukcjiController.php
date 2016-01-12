<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\RokProdukcji;
use AppBundle\Form\RokProdukcjiType;

/**
 * RokProdukcji controller.
 *
 */
class RokProdukcjiController extends Controller
{

    /**
     * Lists all RokProdukcji entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:RokProdukcji')->findAll();

        return $this->render('AppBundle:RokProdukcji:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new RokProdukcji entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new RokProdukcji();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('rokprodukcji_show', array('id' => $entity->getIdrokprodukcji())));
        }

        return $this->render('AppBundle:RokProdukcji:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a RokProdukcji entity.
     *
     * @param RokProdukcji $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(RokProdukcji $entity)
    {
        $form = $this->createForm(new RokProdukcjiType(), $entity, array(
            'action' => $this->generateUrl('rokprodukcji_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new RokProdukcji entity.
     *
     */
    public function newAction()
    {
        $entity = new RokProdukcji();
        $form   = $this->createCreateForm($entity);

        return $this->render('AppBundle:RokProdukcji:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a RokProdukcji entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:RokProdukcji')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find RokProdukcji entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:RokProdukcji:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing RokProdukcji entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:RokProdukcji')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find RokProdukcji entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:RokProdukcji:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a RokProdukcji entity.
    *
    * @param RokProdukcji $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(RokProdukcji $entity)
    {
        $form = $this->createForm(new RokProdukcjiType(), $entity, array(
            'action' => $this->generateUrl('rokprodukcji_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing RokProdukcji entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:RokProdukcji')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find RokProdukcji entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('rokprodukcji_edit', array('id' => $id)));
        }

        return $this->render('AppBundle:RokProdukcji:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a RokProdukcji entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:RokProdukcji')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find RokProdukcji entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('rokprodukcji'));
    }

    /**
     * Creates a form to delete a RokProdukcji entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('rokprodukcji_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }


}

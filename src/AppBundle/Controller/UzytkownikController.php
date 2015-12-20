<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\Uzytkownik;
use AppBundle\Form\UzytkownikType;

/**
 * Uzytkownik controller.
 *
 */
class UzytkownikController extends Controller
{

    /**
     * Lists all Uzytkownik entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Uzytkownik')->findAll();

        return $this->render('AppBundle:Uzytkownik:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Uzytkownik entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Uzytkownik();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('uzytkownik_show', array('id' => $entity->getId())));
        }

        return $this->render('AppBundle:Uzytkownik:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Uzytkownik entity.
     *
     * @param Uzytkownik $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Uzytkownik $entity)
    {
        $form = $this->createForm(new UzytkownikType(), $entity, array(
            'action' => $this->generateUrl('uzytkownik_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Uzytkownik entity.
     *
     */
    public function newAction()
    {
        $entity = new Uzytkownik();
        $form   = $this->createCreateForm($entity);

        return $this->render('AppBundle:Uzytkownik:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Uzytkownik entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Uzytkownik')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Uzytkownik entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:Uzytkownik:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Uzytkownik entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Uzytkownik')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Uzytkownik entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:Uzytkownik:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Uzytkownik entity.
    *
    * @param Uzytkownik $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Uzytkownik $entity)
    {
        $form = $this->createForm(new UzytkownikType(), $entity, array(
            'action' => $this->generateUrl('uzytkownik_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Uzytkownik entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Uzytkownik')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Uzytkownik entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('uzytkownik_edit', array('id' => $id)));
        }

        return $this->render('AppBundle:Uzytkownik:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Uzytkownik entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:Uzytkownik')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Uzytkownik entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('uzytkownik'));
    }

    /**
     * Creates a form to delete a Uzytkownik entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('uzytkownik_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

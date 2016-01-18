<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\OcenaUztkownikFilm;
use AppBundle\Form\OcenaUztkownikFilmType;

/**
 * OcenaUztkownikFilm controller.
 *
 */
class OcenaUztkownikFilmController extends Controller
{

    /**
     * Lists all OcenaUztkownikFilm entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:OcenaUztkownikFilm')->findAll();

        return $this->render('AppBundle:OcenaUztkownikFilm:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new OcenaUztkownikFilm entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new OcenaUztkownikFilm();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ocenauztkownikfilm_show', array('id' => $entity->getId())));
        }

        return $this->render('AppBundle:OcenaUztkownikFilm:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a OcenaUztkownikFilm entity.
     *
     * @param OcenaUztkownikFilm $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(OcenaUztkownikFilm $entity)
    {
        $form = $this->createForm(new OcenaUztkownikFilmType(), $entity, array(
            'action' => $this->generateUrl('ocenauztkownikfilm_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new OcenaUztkownikFilm entity.
     *
     */
    public function newAction()
    {
        $entity = new OcenaUztkownikFilm(); #Tworzy entity
        $form   = $this->createCreateForm($entity);

        return $this->render('AppBundle:OcenaUztkownikFilm:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a OcenaUztkownikFilm entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:OcenaUztkownikFilm')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find OcenaUztkownikFilm entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:OcenaUztkownikFilm:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing OcenaUztkownikFilm entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:OcenaUztkownikFilm')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find OcenaUztkownikFilm entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:OcenaUztkownikFilm:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a OcenaUztkownikFilm entity.
    *
    * @param OcenaUztkownikFilm $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(OcenaUztkownikFilm $entity)
    {
        $form = $this->createForm(new OcenaUztkownikFilmType(), $entity, array(
            'action' => $this->generateUrl('ocenauztkownikfilm_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing OcenaUztkownikFilm entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:OcenaUztkownikFilm')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find OcenaUztkownikFilm entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('ocenauztkownikfilm_edit', array('id' => $id)));
        }

        return $this->render('AppBundle:OcenaUztkownikFilm:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a OcenaUztkownikFilm entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:OcenaUztkownikFilm')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find OcenaUztkownikFilm entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ocenauztkownikfilm'));
    }

    /**
     * Creates a form to delete a OcenaUztkownikFilm entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ocenauztkownikfilm_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

<?php

/**
 * @file
 * Contains \Drupal\dummy\Form\FruitAddForm.
 */

namespace Drupal\dummy\Form;

use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Base form controller for ShareMessage edit forms.
 */
class FruitAddForm extends EntityForm {

  /**
   * {@inheritdoc}.
   */
  public function form(array $form, FormStateInterface $form_state) {
    $fruit = $this->entity;

    $form['id'] = array(
      '#type' => 'machine_name',
      '#title' => $this->t('Machine Name'),
      '#required' => TRUE,
      '#default_value' => $fruit->id(),
    );

    $form['label'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Label'),
      '#required' => TRUE,
      '#default_value' => $fruit->getLabel(),
    );

    $form['name'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Name'),
      '#default_value' => $fruit->getName(),
    );

    $form['price'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Price'),
      '#default_value' => $fruit->getPrice(),
    );

    return parent::form($form, $form_state);;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $fruit = $this->entity;
    $status = $fruit->save();

    if ($status == SAVED_UPDATED) {
      drupal_set_message(t('Fruit %label has been updated.', array('%label' => $fruit->label())));
    }
    else {
      drupal_set_message(t('Fruit %label has been added.', array('%label' => $fruit->label())));
    }
    $form_state->setRedirect('dummy.fruit_list');
  }

}

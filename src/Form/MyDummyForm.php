<?php

/**
 * @file
 * Contains \Drupal\dummy\Form\MyDummyForm.
 */

namespace Drupal\dummy\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class MyDummyForm extends FormBase{

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'my_dummy_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['text_1'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Text 1'),
    ];
    $form['text_2'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Text 2'),
    ];
    $form['save'] = [
      '#type' => 'submit',
      '#value' => $this->t('Save'),
    ];
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    drupal_set_message($this->t('Thanks for submitting this form'));
  }
}

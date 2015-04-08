<?php

/**
 * @file
 * Contains \Drupal\dummy\Form\DummyConfigForm.
 */

namespace Drupal\dummy\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Symfony\Component\EventDispatcher\Event;
use Drupal\dummy\Event\DummyEvents;

class DummyConfigForm extends ConfigFormBase{

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'dummy_config_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['dummy.config'];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('dummy.config');
    $form['text_1'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Text 1'),
      '#default_value' => $config->get('text_1'),
    ];
    $form['text_2'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Text 2'),
      '#default_value' => $config->get('text_2'),
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
    $txt_1 = $form_state->getValue('text_1');
    if ($form_state->isValueEmpty('text_1')) {
      $form_state->setErrorByName('text_1', $this->t('Text 1 is required and can not be blank.'));
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

    // save the textbox 2 configuration.
    $config = $this->config('dummy.config')
    ->set('text_1', $form_state->getValue('text_1'))
    ->set('text_2', $form_state->getValue('text_2'))
    ->save();

    $dispatcher = \Drupal::service('event_dispatcher');
    $e = new Event();
    $event = $dispatcher->dispatch(DummyEvents::DUMMY_CONFIG_SAVED, $e);

    // clear the textbox 1 configuration.
    // clear() unsets the key from config object.
//    $config = $this->config('dummy.config')
//    ->clear('text_1')
//    ->save();
 
    // delete() delete / removes the config object.
//    $this->config('dummy.config')->delete();
    drupal_set_message($this->t('The configuration options have been saved.'));
  }
}

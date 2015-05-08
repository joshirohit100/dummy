<?php
/**
 * @file
 * Contains \Drupal\dummy\Controller\MyDummyController
 */

namespace Drupal\dummy\Controller;

use Drupal\Core\Controller\ControllerBase;

class MyDummyController extends ControllerBase {
  public function my_controller() {
    $build = array(
      '#type' => 'markup',
      '#markup' => $this->t('Hello Friends!'),
    );
    return $build;
  }

  public function my_controller2() {
    $build = array(
      '#type' => 'markup',
      '#markup' => $this->t('Hello Friends! This is second controller!'),
    );
    return $build;
  }

  function my_title_callback() {
    return $this->t('This is my dynamic title callback');
  }
}

?>

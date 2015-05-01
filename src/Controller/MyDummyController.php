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
}

?>

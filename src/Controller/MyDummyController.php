<?php
/**
 * @file
 * Contains \Drupal\dummy\Controller\MyDummyController
 */

namespace Drupal\dummy\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\NodeInterface;

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

  public function my_controller3($my_id) {
    $build = array(
      '#type' => 'markup',
      '#markup' => $this->t('Hello Friends! My ID is @my_id!', array('@my_id' => $my_id)),
    );
    return $build;
  }

  public function my_controller4(NodeInterface $node) {
    $build = array(
      '#type' => 'markup',
      '#markup' => $this->t('Node id @node_id title is @title' , array('@node_id' => $node->id(), '@title' => $node->getTitle())),
    );
    return $build;
  }

  public function my_controller5($dummy) {
    $build = array(
      '#type' => 'markup',
      '#markup' => $dummy,
    );
    return $build;
  }

  function my_title_callback() {
    return $this->t('This is my dynamic title callback');
  }
}

?>

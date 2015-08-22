<?php

/**
 * @file
 * Contains \Drupal\dummy\Plugin\Block\MyCustomBlock
 */

namespace Drupal\dummy\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Dummy' block.
 *
 * @Block (
 *   id = "my_custom_blockk",
 *   admin_label = @Translation("My Custom Blockk"),
 * )
 */

class MyCustomBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $my_form = \Drupal::formBuilder()->getForm('Drupal\dummy\Form\MyDummyForm');
    $render = \Drupal::service('renderer')->render($my_form);
    return array(
      //'#markup' => 'HHS JHJHJ ttt' . $render,
      '#markup' => $render,
    );
  }
}

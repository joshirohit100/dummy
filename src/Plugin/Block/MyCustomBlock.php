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
    return array(
      '#markup' => 'HHS JHJHJ',
    );
  }
}

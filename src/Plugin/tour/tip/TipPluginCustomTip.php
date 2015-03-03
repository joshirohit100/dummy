<?php

/**
 * @file
 * Contains \Drupal\dummy\Plugin\tour\tour\TipPluginCustomTip.
 */

namespace Drupal\dummy\Plugin\tour\tip;

use Drupal\tour\TipPluginBase;

/**
 * Displays an image as a tip.
 *
 * @Tip(
 *   id = "custom_tip",
 *   title = @Translation("Custom Tip")
 * )
 */
class TipPluginCustomTip extends TipPluginBase {

  /**
   * Text contains the name.
   *
   * @var string
   *   A text to be displayed.
   */
  protected $my_name;

  /**
   * {@inheritdoc}
   */
  public function getOutput() {
    $my_name = $this->get('my_name');
    $output = '<p>My name is <h3>' . $my_name . '</h3></p>';
    return array('#markup' => $output);
  }

}

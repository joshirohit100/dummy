<?php

/**
 * @file
 * Contains \Drupal\dummy\Plugin\CKEditorPlugin\DropCap.
 */

namespace Drupal\dummy\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "dropcap" plugin.
 *
 * @CKEditorPlugin(
 *   id = "dropcap",
 *   label = @Translation("Drop Cap"),
 * )
 */
class DropCap extends CKEditorPluginBase {

  /**
   * {@inheritdoc}
   */
  public function getFile() {
    return drupal_get_path('module', 'dummy') . '/js/plugins/dropcap/plugin.js';
  }

  /**
   * {@inheritdoc}
   */
  public function getConfig(Editor $editor) {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function getButtons() {
    $path = drupal_get_path('module', 'dummy') . '/js/plugins/dropcap';
    return [
      'DropCap' => [
        'label' => t('Drop Cap'),
        'image' => $path . '/dropcap.png',
      ],
    ];
  }

}

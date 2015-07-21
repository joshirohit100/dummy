<?php

/**
 * @file
 * Fruit entity defination.
 */

namespace Drupal\dummy\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;

/**
 * Entity class for the Fruit entity.
 *
 * @ConfigEntityType(
 *   id = "fruit",
 *   label = @Translation("Fruits"),
 *   handlers = {
 *     "list_builder" = "Drupal\dummy\Controller\FruitListBuilder",
 *     "form" = {
 *       "default" = "Drupal\dummy\Form\FruitAddForm",
 *       "edit" = "Drupal\dummy\Form\FruitAddForm",
 *     }
 *   },
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label"
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "title",
 *     "price",
 *   },
 *   links = {
 *     "edit-form" = "/admin/config/services/fruits/manage/{fruit}",
 *    }
 * )
 */
class Fruit extends ConfigEntityBase {

  /**
   * The machine name of this fruit.
   *
   * @var string
   */
  public $id;

  /**
   * The machine name of entity.
   *
   * @var string
   */
  public $label;

}

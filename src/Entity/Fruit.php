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
 *   admin_permission = "administer site configuration",
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
 *     "name",
 *     "price",
 *   },
 *   links = {
 *     "default" = "/admin/config/services/fruits/add",
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
   * The label of the fruit.
   *
   * @var string
   */
  public $label;

  /**
   * The name of the fruit.
   *
   * @var string
   */
  public $name;

  /**
   * The price of the fruit.
   *
   * @var string
   */
  public $price;

  /**
   * {@inheritdoc}
   */
  public function getName() {
    return $this->get('name');
  }

  /**
   * {@inheritdoc}
   */
  public function getPrice() {
    return $this->get('price');
  }

  /**
   * {@inheritdoc}
   */
  public function getLabel() {
    return $this->get('label');
  }

  /**
   * {@inheritdoc}
   */
  public function setPrice($price) {
    $this->set('price', $price);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function setName($name) {
    $this->set('name', $name);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function setLabel($label) {
    $this->set('label', $label);
    return $this;
  }

}

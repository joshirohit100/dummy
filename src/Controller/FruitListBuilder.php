<?php
/**
 * @file
 * Contains \Drupal\dummy\Controller\FruitListBuilder.
 */

namespace Drupal\dummy\Controller;

use Drupal\Core\Config\Entity\DraggableListBuilder;
use Drupal\Core\Entity\EntityInterface;

/**
 * Provides a entity list page for Fruits.
 */
class FruitListBuilder extends DraggableListBuilder {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'dummy_fruit_list';
  }

  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['label'] = $this->t('Label');
    $header['name'] = $this->t('Name');
    $header['price'] = $this->t('Price');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    $row['label'] = $this->getLabel($entity);
    $row['name'] = $entity->getName();
    $row['price'] = $entity->getPrice();
    return $row + parent::buildRow($entity);
  }

}

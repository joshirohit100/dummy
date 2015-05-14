<?php

/**
 * @file
 * contains \Drupal\dummy\DummyMyParamConverter
 */

namespace Drupal\Dummy;

use Drupal\Core\ParamConverter\ParamConverterInterface;
use Symfony\Component\Routing\Route;

class DummyMyParamConverter implements ParamConverterInterface {

  /**
   * {@inheritdoc}
   */
  public function convert($value, $definition, $name, array $defaults) {
    if (!empty($value)) {
      return 'Rohit';
    }
  }

  /**
   * {@inheritdoc}
   */
  public function applies($definition, $name, Route $route) {
    if (!empty($definition['type']) && $definition['type'] == 'my-param-converter') {
      return TRUE;
    }
    return FALSE;
  }
}

?>

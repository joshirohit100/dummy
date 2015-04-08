<?php
/**
 * @file
 * Contains \Drupal\dummy\Event\DummyEvents.
 */

namespace Drupal\dummy\Event;

/**
 * Contains all events thrown in this Dummy module.
 */
final class DummyEvents {

  /**
   * Event ID for when configuration form is saved.
   */
  const DUMMY_CONFIG_SAVED = 'dummy.config_save';
}

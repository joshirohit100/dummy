<?php
/**
 * @file
 * Contains \Drupal\dummy\EventSubscriber\DummyConfigEventSubscriber.
 */

namespace Drupal\dummy\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Drupal\dummy\Event\DummyEvents;

class DummyConfigEventSubscriber implements EventSubscriberInterface {

  /**
   * @inherotdoc
   */
  public static function getSubscribedEvents() {
    $events[DummyEvents::DUMMY_CONFIG_SAVED][] = array('onConfigSave', 0);
    return $events;
  }

  public function onConfigSave($event) {
    drupal_set_message("This is message from event system.");
  }

}

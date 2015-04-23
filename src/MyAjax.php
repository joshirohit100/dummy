<?php

/**
 * @file
 * Contains \Drupal\dummy\MyAjax.
 */

namespace Drupal\dummy;

use Drupal\Core\Ajax\OpenDialogCommand;
use Drupal\Core\Ajax\AjaxResponse;

class MyAjax {
  function ajaxSample() {
    $response = new AjaxResponse();
    $dialog_command = new OpenDialogCommand('#my-idd', 'My Title', 'This is my content');
    $response->addCommand($dialog_command);
    return $response;
  }
}
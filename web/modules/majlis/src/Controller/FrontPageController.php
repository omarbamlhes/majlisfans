<?php

namespace Drupal\majlis\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Majlisfans front page.
 */
class FrontPageController extends ControllerBase {

  /**
   * Builds the front page with empty markup.
   *
   * @return array
   *   A render array.
   */
  public function frontPage() {
    return [
      '#markup' => '',
    ];
  }

}


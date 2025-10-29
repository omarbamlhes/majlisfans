<?php

declare(strict_types=1);

namespace Drupal\majlis\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a form block.
 *
 * @Block(
 *   id = "majlis_form",
 *   admin_label = @Translation("Form"),
 *   category = @Translation("Custom"),
 * )
 */
final class FormBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build(): array {
    $build['content'] = [
      '#theme' => 'form_block',
      '#items' => [],
    ];
    return $build;
  }

}

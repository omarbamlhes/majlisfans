<?php

declare(strict_types=1);

namespace Drupal\majlis\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a about block.
 *
 * @Block(
 *   id = "majlis_about",
 *   admin_label = @Translation("About"),
 *   category = @Translation("Custom"),
 * )
 */
final class AboutBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build(): array {
    $build['content'] = [
      '#theme' => 'about_block',
      '#items' => [],
    ];
    return $build;
  }

}

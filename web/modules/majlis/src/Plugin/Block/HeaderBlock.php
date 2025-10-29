<?php

declare(strict_types=1);

namespace Drupal\majlis\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a header block.
 *
 * @Block(
 *   id = "majlis_header",
 *   admin_label = @Translation("Header"),
 *   category = @Translation("Custom"),
 * )
 */
final class HeaderBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build(): array {
    $build['content'] = [
      '#theme' => 'header_block',
      '#items' => [],
    ];
    return $build;
  }

}

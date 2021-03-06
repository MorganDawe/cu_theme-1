<?php

/**
 * @file
 * This is the template file for the object page for video
 *
 * Available variables:
 * - $islandora_content: The rendered output of the viewer configured for
 *   this module.
 * - $islandora_dublin_core: The DC datastream object
 * - $dc_array: The DC datastream object values as a sanitized array. This
 *   includes label, value and class name.
 * - $islandora_object_label: The sanitized object label.
 * - $parent_collections: An array containing parent collection(s) info.
 *   Includes collection object, label, url and rendered link.
 *
 * @see template_preprocess_islandora_video()
 * @see theme_islandora_video()
 */
?>

<div class="islandora-video-object islandora" vocab="http://schema.org/" prefix="dcterms: http://purl.org/dc/terms/" typeof="VideoObject">
  <div class="islandora-video-content-wrapper clearfix">
    <?php if ($islandora_content): ?>
      <div class="islandora-video-content object-content">
        <?php print $islandora_content; ?>
      </div>
    <?php endif; ?>
  </div>
  <div class="islandora-video-metadata">
    <?php print $description; ?>
    <?php print $metadata; ?>
  </div>
</div>

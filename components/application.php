<?php

/**
 * /components/application.php
 */
if (!isset($app_items) || !is_array($app_items)) return;
$section_classes = $section_classes ?? 'application container my-5';

// ★ ここを追加（再定義防止）
if (!function_exists('h')) {
    function h($s)
    {
        return htmlspecialchars($s ?? '', ENT_QUOTES, 'UTF-8');
    }
}
?>
<section class="<?= h($section_classes) ?>">
    <?php if (!empty($app_title)): ?>
        <h2><?= h($app_title) ?></h2>
    <?php endif; ?>
    <div class="schedule-group mt-3">
        <?php foreach ($app_items as $item): ?>
            <div class="application-btn schedule mt-5"
                data-start-date="<?= h($item['start'] ?? '') ?>"
                data-end-date="<?= h($item['end'] ?? '') ?>">
                <a href="<?= h($item['href'] ?? '#') ?>" target="_blank" rel="noopener">
                    <span class="label"><?= h($item['label'] ?? '') ?></span>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</section>
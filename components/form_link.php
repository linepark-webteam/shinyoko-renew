<?php

/**
 * /components/form_link.php
 * 受け取る変数:
 *   $form_items (必須): [
 *     ['label'=>..., 'href'=>..., 'start'=>..., 'end'=>...], ...
 *   ]
 *   $section_title (任意): 見出しテキスト（nullで非表示）
 *   $section_classes (任意): sectionのclass（デフォ: 'application container my-5'）
 */
if (!isset($form_items) || !is_array($form_items)) return;
$section_classes = $section_classes ?? 'application container my-5';

// 再定義防止
if (!function_exists('h')) {
    function h($s)
    {
        return htmlspecialchars($s ?? '', ENT_QUOTES, 'UTF-8');
    }
}
?>
<section class="<?= h($section_classes) ?>">
    <?php if (!empty($section_title)): ?>
        <h2><?= h($section_title) ?></h2>
    <?php endif; ?>
    <div class="schedule-group mt-3">
        <?php foreach ($form_items as $item): ?>
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
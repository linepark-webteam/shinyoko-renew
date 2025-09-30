<?php
/**
 * data/form_elements.php
 * 例会申込ボタンのデータ（必要に応じて増やす）
 * 
 * [
 *    'label' => 'ボタンに出す文言',
 *    'href'  => 'エントリーフォームURL（外部サイト）',
 *    'start' => '表示を開始させたい日時（ISO形式）' , ※省略、またはコメントアウトで非表示になる
 *    'end'   => '表示を終了させたい日時（ISO形式）',
 * ],
 */

$form_elements = [
    [
        'label' => '第22回 10月27日(月) 例会お申し込みフォーム',
        'href'  => 'https://www.shuseiclub.jp/shinyokohama/entry_form/index.php?e=9730',
        'start' => '2025-04-23T00:00:00+09:00',
        'end'   => '2025-10-27T23:59:59+09:00',
    ],
    [
        'label' => '第23回 11月24日(月) 例会お申し込みフォーム',
        'href'  => 'https://www.shuseiclub.jp/shinyokohama/entry_form/index.php?e=＊',
        // 'start' => '2025-11-24T00:00:00+09:00',
        'end'   => '2025-11-24T23:59:59+09:00',
    ],
    [
        'label' => '第24回 12月22日(月) 例会お申し込みフォーム',
        'href'  => 'https://www.shuseiclub.jp/shinyokohama/entry_form/index.php?e=＊',
        // 'start' => '2025-12-22T00:00:00+09:00',
        'end'   => '2025-12-22T23:59:59+09:00',
    ],
];

<?php

require_once 'functions.php';
require_once 'data.php';

/** @var string $page_content */
$page_content = render_template('templates/index.php', ['adverts' => $adverts]);

/** @var string $layout_content */
$layout_content = render_template('templates/layout.php', [
  'title' => 'YetiCave - Главная страница',
  'content' => $page_content,
  'adverts' => $adverts,
  'categories' => $categories
]);

print($layout_content);

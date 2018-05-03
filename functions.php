<?php

/**
 * Функция для форматирования суммы и добавления к ней знака рубля
 *
 * @param float $num
 * @return string
 */
function format_price($num) {
  $result = '';
  $ceiled = ceil($num);

  if ($ceiled < 1000) {
    $result = $ceiled;
  } else {
    $format_num = str_replace(',', ' ', number_format($ceiled));
    $result = $format_num . '<b class="rub">р</b>';
  }

  return $result;
}

/**
 *
 * Функция-шаблонизатор
 *
 * @param string $template_name
 * @param array $data
 * @return string
 */
function render_template($template_name, $data) {
  if (!file_exists($template_name)) {
    return '';
  }

  extract($data);
  ob_start();

  require $template_name;
  $content = ob_get_contents();

  ob_end_clean();

  return $content;
}

/**
 * Фильтрация для защиты от XSS
 *
 * @param string $str
 * @param bool $html_special
 * @return string
 */
function esc($str, $html_special = true) {
  $text = ($html_special) ? htmlspecialchars($str) : strip_tags($str);

  return $text;
}

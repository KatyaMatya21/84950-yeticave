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

/**
 * Функция для вычисления и вывода оставшегося времени до полуночи
 *
 * @return string
 */
function times_left() {
  date_default_timezone_set('Europe/Moscow');

  $current_date_ts = time();
  $tomorrow_date_ts = strtotime('tomorrow');
  $delta_s = $tomorrow_date_ts - $current_date_ts;

  $delta_m = floor($delta_s % 3600 / 60);
  $delta_h = floor($delta_s / 3600);

  return $delta_h . ':' . $delta_m;
}

<?php

/**
 * Ставки пользователей, которыми надо заполнить таблицу
 *
 * @var array[] $bets
 */
$bets = [
    ['name' => 'Иван', 'price' => 11500, 'ts' => strtotime('-' . rand(1, 50) .' minute')],
    ['name' => 'Константин', 'price' => 11000, 'ts' => strtotime('-' . rand(1, 18) .' hour')],
    ['name' => 'Евгений', 'price' => 10500, 'ts' => strtotime('-' . rand(25, 50) .' hour')],
    ['name' => 'Семён', 'price' => 10000, 'ts' => strtotime('last week')]
];

/**
 * Состояние пользователя
 *
 * @var boolean $is_auth
 */
$is_auth = (bool) rand(0, 1);

/** @var string $user_name */
$user_name = 'Константин';

/** @var string $user_avatar */
$user_avatar = 'img/user.jpg';

/** @var string[] $categories */
$categories = ['Доски и лыжи', 'Крепления', 'Ботинки', 'Одежда', 'Инструменты', 'Разное'];

/** @var array[] $adverts */
$adverts = [
  [
    'name' => '2014 Rossignol District Snowboard',
    'category' => $categories[0],
    'price' => 10999,
    'url' => 'img/lot-1.jpg'
  ],
  [
    'name' => 'DC Ply Mens 2016/2017 Snowboard',
    'category' => $categories[0],
    'price' => 159999,
    'url' => 'img/lot-2.jpg'
  ],
  [
    'name' => 'Крепления Union Contact Pro 2015 года размер L/XL',
    'category' => $categories[1],
    'price' => 8000,
    'url' => 'img/lot-3.jpg'
  ],
  [
    'name' => 'Ботинки для сноуборда DC Mutiny Charocal',
    'category' => $categories[2],
    'price' => 10999,
    'url' => 'img/lot-4.jpg'
  ],
  [
    'name' => 'Куртка для сноуборда DC Mutiny Charocal',
    'category' => $categories[3],
    'price' => 7500,
    'url' => 'img/lot-5.jpg'
  ],
  [
    'name' => 'Маска Oakley Canopy',
    'category' => $categories[4],
    'price' => 5400,
    'url' => 'img/lot-6.jpg'
  ]
];

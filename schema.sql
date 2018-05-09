-- Создание БД
CREATE DATABASE yeticave
  DEFAULT CHARACTER SET utf8
  DEFAULT COLLATE utf8_general_ci;

-- Обращение к БД
USE yeticave;

-- Создание таблицы для категорий
CREATE TABLE categories (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name CHAR(128)
);

-- Создание обычных индексов
CREATE INDEX n_text ON categories(name);

-- Создание таблицы для пользователей
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  date_signup DATETIME DEFAULT NOW(),
  email CHAR(128),
  name CHAR(128),
  password CHAR(128),
  avatar VARCHAR(512),
  contacts VARCHAR(1024)
);

-- Создание уникального индекса
CREATE UNIQUE INDEX email ON users(email);

-- Создание таблицы для лотов
CREATE TABLE lots (
  id INT AUTO_INCREMENT PRIMARY KEY,
  date_created DATETIME DEFAULT NOW(),
  name VARCHAR(512),
  info VARCHAR(1024),
  image VARCHAR(512),
  start_price INT,
  date_finished DATETIME,
  step INT,
  user_id INT,
  winner_id INT,
  category_id INT,
  FOREIGN KEY (user_id) REFERENCES users(id),
  FOREIGN KEY (winner_id) REFERENCES users(id),
  FOREIGN KEY (category_id) REFERENCES categories(id)
);

-- Создание обычных индексов
CREATE INDEX dc_dt ON lots(date_created);
CREATE INDEX n_text ON lots(name);
CREATE INDEX sp_int ON lots(start_price);
CREATE INDEX df_dt ON lots(date_finished);
CREATE INDEX ci_int ON lots(category_id);

-- Создание таблицы для ставок
CREATE TABLE bets (
  id INT AUTO_INCREMENT PRIMARY KEY,
  date_created DATETIME DEFAULT NOW(),
  price INT,
  user_id INT,
  lot_id INT,
  FOREIGN KEY (user_id) REFERENCES users(id),
  FOREIGN KEY (lot_id) REFERENCES lots(id)
);

-- Создание обычных индексов
CREATE INDEX dc_dt ON bets(date_created);
CREATE INDEX p_int ON bets(price);

-- Таблица пользователей (клиентов) магазина «Сокет» (ЛР8 / ЛР12)
-- Импорт: phpMyAdmin → выберите свою базу → вкладка «Импорт» → этот файл → «Вперед».
-- Если таблица «klienty» у вас уже есть, сначала удалите ее или переименуйте здесь.

SET NAMES utf8mb4;

CREATE TABLE IF NOT EXISTS `klienty` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(50) NOT NULL,
  `pass` VARCHAR(50) NOT NULL,
  `familiya` VARCHAR(100) NOT NULL DEFAULT '',
  `imya` VARCHAR(100) NOT NULL DEFAULT '',
  `email` VARCHAR(100) NOT NULL DEFAULT '',
  `telefon` VARCHAR(30) NOT NULL DEFAULT '',
  `gorod` VARCHAR(100) NOT NULL DEFAULT '',
  `adres` VARCHAR(255) NOT NULL DEFAULT '',
  `data_rozhdeniya` DATE NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `klienty` (`login`, `pass`, `familiya`, `imya`, `email`, `telefon`, `gorod`, `adres`, `data_rozhdeniya`) VALUES
('test', '123456', 'Иванов', 'Иван', 'ivanov@mail.ru', '+7 (900) 111-11-11', 'Москва', 'ул. Ленина, д. 5, кв. 12', '2003-04-15'),
('petrova', '123456', 'Петрова', 'Анна', 'petrova@mail.ru', '+7 (900) 222-22-22', 'Москва', 'ул. Гагарина, д. 10, кв. 3', '2002-09-01'),
('sidorov', '123456', 'Сидоров', 'Алексей', 'sidorov@yandex.ru', '+7 (900) 333-33-33', 'Зеленоград', 'корпус 1105, кв. 48', '2004-01-20'),
('kuznetsova', '123456', 'Кузнецова', 'Мария', 'kuznetsova@gmail.com', '+7 (900) 444-44-44', 'Химки', 'ул. Молодежная, д. 7, кв. 21', '2001-12-11'),
('smirnov', '123456', 'Смирнов', 'Дмитрий', 'smirnov@mail.ru', '+7 (900) 555-55-55', 'Москва', 'пр-т Мира, д. 44, кв. 90', '2003-07-30'),
('volkova', '123456', 'Волкова', 'Елена', 'volkova@yandex.ru', '+7 (900) 666-66-66', 'Солнечногорск', 'ул. Красная, д. 2, кв. 6', '2002-03-05'),
('morozov', '123456', 'Морозов', 'Никита', 'morozov@mail.ru', '+7 (900) 777-77-77', 'Москва', 'ул. Профсоюзная, д. 18, кв. 54', '2004-10-17'),
('lebedeva', '123456', 'Лебедева', 'Ольга', 'lebedeva@gmail.com', '+7 (900) 888-88-88', 'Зеленоград', 'корпус 1640, кв. 112', '2003-02-28'),
('kozlov', '123456', 'Козлов', 'Артем', 'kozlov@yandex.ru', '+7 (900) 999-99-99', 'Москва', 'ул. Арбат, д. 30, кв. 8', '2001-06-09'),
('novikova', '123456', 'Новикова', 'Дарья', 'novikova@mail.ru', '+7 (901) 000-00-00', 'Красногорск', 'ул. Речная, д. 4, кв. 77', '2004-08-23');

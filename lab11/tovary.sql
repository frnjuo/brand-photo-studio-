-- Таблица товаров для магазина «Сокет» (ЛР8 / ЛР11)
-- Импорт: phpMyAdmin → выберите свою базу → вкладка «Импорт» → этот файл → «Вперед».
-- Если таблица «tovary» у вас уже есть, сначала удалите ее или переименуйте здесь.

SET NAMES utf8mb4;

CREATE TABLE IF NOT EXISTS `tovary` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `kategoriya` VARCHAR(100) NOT NULL,
  `proizvoditel` VARCHAR(100) NOT NULL,
  `opisanie` TEXT,
  `harakteristiki` VARCHAR(255),
  `cena` INT NOT NULL,
  `kolichestvo` INT NOT NULL DEFAULT 0,
  `garantiya` INT NOT NULL DEFAULT 12,
  `image` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tovary` (`name`, `kategoriya`, `proizvoditel`, `opisanie`, `harakteristiki`, `cena`, `kolichestvo`, `garantiya`, `image`) VALUES
('Процессор AMD Ryzen 7 7800X3D', 'Процессоры', 'AMD', 'Игровой процессор с технологией 3D V-Cache для высокой производительности в играх.', '8 ядер, 16 потоков, AM5', 36990, 12, 36, 'images/1.jpg'),
('Процессор Intel Core i5-14600K', 'Процессоры', 'Intel', 'Универсальный процессор для игр и работы с возможностью разгона.', '14 ядер, 20 потоков, LGA1700', 27490, 8, 36, 'images/2.jpg'),
('Видеокарта MSI GeForce RTX 4070 SUPER', 'Видеокарты', 'MSI', 'Видеокарта для игр в разрешении 1440p с поддержкой DLSS 3 и трассировки лучей.', '12 ГБ GDDR6X, 2 вентилятора', 64990, 5, 36, 'images/3.jpg'),
('Видеокарта Sapphire Radeon RX 7800 XT', 'Видеокарты', 'Sapphire', 'Производительная видеокарта с большим объемом видеопамяти.', '16 ГБ GDDR6, 2 вентилятора', 56990, 3, 24, 'images/4.jpg'),
('Материнская плата ASUS TUF GAMING B650-PLUS', 'Материнские платы', 'ASUS', 'Надежная материнская плата для процессоров AMD Ryzen 7000 и новее.', 'AM5, DDR5, ATX', 18990, 7, 36, 'images/5.jpg'),
('Оперативная память Kingston FURY Beast 32 ГБ', 'Оперативная память', 'Kingston', 'Комплект из двух модулей памяти с радиаторами охлаждения.', 'DDR5, 2 x 16 ГБ, 6000 МГц', 10490, 20, 60, 'images/6.jpg'),
('SSD-накопитель Samsung 990 PRO 1 ТБ', 'Накопители', 'Samsung', 'Быстрый твердотельный накопитель для системы и игр.', 'M.2 NVMe, до 7450 МБ/с', 11990, 15, 60, 'images/7.jpg'),
('Блок питания be quiet! Pure Power 12 M 750W', 'Блоки питания', 'be quiet!', 'Тихий модульный блок питания с высоким КПД.', '750 Вт, 80 PLUS Gold', 11290, 9, 60, 'images/8.jpg'),
('Корпус DeepCool CH560', 'Корпуса', 'DeepCool', 'Просторный корпус с хорошей вентиляцией и стеклянной боковой панелью.', 'ATX, 4 вентилятора в комплекте', 7990, 6, 12, 'images/9.jpg'),
('Кулер для процессора DeepCool AK620', 'Охлаждение', 'DeepCool', 'Башенный кулер с двумя вентиляторами для мощных процессоров.', 'Башенный, 2 вентилятора, до 260 Вт', 5490, 4, 12, 'images/10.jpg');

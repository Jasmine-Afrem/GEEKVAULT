SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Harry Potter', 66.42),
(2, 'Iron Man', 86.14),
(3, 'Captain America', 88.7),
(4, 'Batman', 97.51),
(5, 'Wonder Woman', 76.88),
(6, 'Darth Vader', 64.78),
(7, 'Spider-Man', 82.28),
(8, 'Hulk', 69.73),
(9, 'Thor', 87.87),
(10, 'Black Widow', 61.61),
(11, 'Groot', 95.25),
(12, 'Deadpool', 97.59),
(13, 'Yoda', 68.2),
(14, 'R2-D2', 63.7),
(15, 'Luke Skywalker', 97.21),
(16, 'Princess Leia', 60.27),
(17, 'Chewbacca', 75.6),
(18, 'Kylo Ren', 96.78),
(19, 'Finn', 99.54),
(20, 'Poe Dameron', 88.87),
(21, 'Rey', 92.22),
(22, 'BB-8', 83.83),
(23, 'Elsa', 61.6),
(24, 'Anna', 75.65),
(25, 'Olaf', 70.71),
(26, 'Kristoff', 92.58),
(27, 'Sven', 80.93),
(28, 'Simba', 87.71),
(29, 'Mufasa', 63.87),
(30, 'Nala', 88.7),
(31, 'Timon', 65.71),
(32, 'Pumbaa', 93.83),
(33, 'Scar', 94.36),
(34, 'Rafiki', 74.6),
(35, 'Zazu', 98.28),
(36, 'Ariel', 68.82),
(37, 'Ursula', 73.15),
(38, 'Flounder', 95.5),
(39, 'Sebastian', 97.12),
(40, 'Belle', 72.42),
(41, 'Beast', 77.97),
(42, 'Gaston', 69.41),
(43, 'Lumiere', 94.77),
(44, 'Cogsworth', 75.67),
(45, 'Mrs. Potts', 83.38),
(46, 'Chip', 61.16),
(47, 'Maurice', 79.29),
(48, 'Lefou', 85.79),
(49, 'Stitch', 96.36),
(50, 'Lilo', 87.04);

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'Ion Popescu', 'ion.popescu@example.com', '5f4dcc3b5aa765d61d8327deb882cf99', '0740123456', 'Bucharest', '1234 Strada Principala, Sector 1, Bucharest, Romania'),
(2, 'Maria Ionescu', 'maria.ionescu@example.com', 'e99a18c428cb38d5f260853678922e03', '0740987654', 'Cluj-Napoca', '5678 Strada Mihai Viteazu, Cluj-Napoca, Romania'),
(3, 'Alexandru Georgescu', 'alexandru.georgescu@example.com', 'd41d8cd98f00b204e9800998ecf8427e', '0740765432', 'Timisoara', '9101 Strada Libertatii, Timisoara, Romania');


CREATE TABLE `users_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(1, 1, 1, 'Added to cart'),
(2, 1, 2, 'Added to cart'),
(3, 1, 3, 'Added to cart'),
(4, 2, 4, 'Added to cart'),
(5, 2, 5, 'Added to cart'),
(6, 2, 6, 'Added to cart'),
(7, 3, 7, 'Added to cart'),
(8, 3, 8, 'Added to cart'),
(9, 3, 9, 'Added to cart'),
(10, 1, 10, 'Confirmed'),
(11, 1, 11, 'Confirmed'),
(12, 2, 12, 'Added to cart'),
(13, 2, 13, 'Added to cart'),
(14, 3, 14, 'Added to cart'),
(15, 3, 15, 'Added to cart'),
(16, 3, 16, 'Confirmed'),
(17, 1, 17, 'Added to cart'),
(18, 2, 18, 'Added to cart'),
(19, 2, 19, 'Confirmed'),
(20, 3, 20, 'Added to cart'),
(21, 1, 21, 'Added to cart'),
(22, 1, 22, 'Confirmed'),
(23, 2, 23, 'Added to cart'),
(24, 2, 24, 'Added to cart'),
(25, 3, 25, 'Added to cart'),
(26, 3, 26, 'Confirmed'),
(27, 1, 27, 'Added to cart'),
(28, 2, 28, 'Added to cart'),
(29, 2, 29, 'Confirmed'),
(30, 3, 30, 'Added to cart');


ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `users_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`item_id`),
  ADD KEY `item_id` (`item_id`);

ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `users_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

ALTER TABLE `users_items`
  ADD CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);
COMMIT;


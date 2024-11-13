SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `login` (
  `id` int(5) NOT NULL,
  `gmail` varchar(40) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL,
  `user` varchar(40) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `login` (`id`, `gmail`, `address`, `user`, `pass`, `role`) VALUES
(1, NULL, NULL, 'admin1', '0123', 1),
(101, NULL, NULL, 'user01', '012345', 0);

ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

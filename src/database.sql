SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+05:30";

CREATE TABLE `Users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `First_Name` text NOT NULL,
  `Last_Name` text NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `Chat` (
  `ID` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `ChatName` text NOT NULL,
  `SentBy` text NOT NULL,
  `Message` text NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

COMMIT;
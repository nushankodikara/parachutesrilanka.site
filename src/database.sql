SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `Tickets` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Email` text NOT NULL,
  `Phone` text NOT NULL,
  `Msg` text NOT NULL,
  `completed` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `Users` (
  `ID` int(11) NOT NULL,
  `First_Name` text NOT NULL,
  `Last_Name` text NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `Tickets`
  ADD PRIMARY KEY (`ID`);

ALTER TABLE `Users`
  ADD PRIMARY KEY (`ID`);

ALTER TABLE `Tickets`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `Users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

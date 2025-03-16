SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `furniture_types` (
  `id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cost` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `furniture_types` (`id`, `name`, `cost`) VALUES
('2eb9e5d8-bea7-4198-9172-4806b1373866', 'Tables', 500.00),
('c578af3c-2e78-4768-835d-33cac4354694', 'Chairs', 150.00);

CREATE TABLE `furniture_types_rooms` (
  `id` char(36) NOT NULL,
  `furniture_type_id` char(36) NOT NULL,
  `room_id` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `furniture_types_rooms` (`id`, `furniture_type_id`, `room_id`) VALUES
('254a6207-52eb-43fb-af91-cb6a9877ea28', '2eb9e5d8-bea7-4198-9172-4806b1373866', '17719069-f1c8-4e88-a58e-20da0a0279ad'),
('45839152-9f10-465f-96f0-17d998ec9ebd', '2eb9e5d8-bea7-4198-9172-4806b1373866', '14589906-ae17-48c3-8a33-012619a122a6'),
('f41f883d-62b3-4dd1-94b1-aae4ad5fecea', 'c578af3c-2e78-4768-835d-33cac4354694', '14589906-ae17-48c3-8a33-012619a122a6');

CREATE TABLE `rooms` (
  `id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `building` varchar(255) NOT NULL,
  `capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `rooms` (`id`, `name`, `building`, `capacity`) VALUES
('14589906-ae17-48c3-8a33-012619a122a6', 'Tiered Lecture Theatre', 'LTB', 180),
('17719069-f1c8-4e88-a58e-20da0a0279ad', 'Learning in the Round', 'LTB', 150);

CREATE TABLE `room_bookings` (
  `id` char(36) NOT NULL,
  `room_id` char(36) NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime NOT NULL,
  `email` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


ALTER TABLE `furniture_types`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `furniture_types_rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `furniture_type_id` (`furniture_type_id`),
  ADD KEY `room_id` (`room_id`);

ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `room_bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_id` (`room_id`);


ALTER TABLE `furniture_types_rooms`
  ADD CONSTRAINT `furniture_types_rooms_ibfk_1` FOREIGN KEY (`furniture_type_id`) REFERENCES `furniture_types` (`id`),
  ADD CONSTRAINT `furniture_types_rooms_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`);

ALTER TABLE `room_bookings`
  ADD CONSTRAINT `room_bookings_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`);
COMMIT;

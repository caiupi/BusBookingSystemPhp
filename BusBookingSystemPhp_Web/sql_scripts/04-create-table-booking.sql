CREATE TABLE `busbookingsystem`.`booking` (
  `id` char(36) NOT NULL,
  `startDate` datetime NOT NULL,
  `endDate` datetime NOT NULL,
  `destination` text COLLATE utf8_unicode_ci NOT NULL,
  `busId` char(36) NOT NULL,
  `totalCost` decimal(6,2) NOT NULL, 
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
);

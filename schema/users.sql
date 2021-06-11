USE orgport;
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  id int AUTO_INCREMENT UNIQUE PRIMARY KEY,
  username VARCHAR(255),
  email VARCHAR(255),
  `password` VARCHAR(64),
  date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP()
)
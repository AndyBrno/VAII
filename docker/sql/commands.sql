CREATE TABLE `categories` (
                            `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
                            `name` text NOT NULL
);
CREATE TABLE `notes` (
                         `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
                         `user_id` int NOT NULL,
                         `id_cat` int NOT NULL,
                         `nadpis` text NOT NULL,
                         `poznamka` text NOT NULL
);

CREATE TABLE `users` (
                         `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
                         `nick` text NOT NULL,
                         `password` text NOT NULL
);

ALTER TABLE notes ADD FOREIGN KEY (id_cat) REFERENCES categories(id);
ALTER TABLE notes ADD FOREIGN KEY (user_id) REFERENCES users(id);

INSERT INTO users (nick, password) VALUES ('Brndy', '123');

INSERT INTO `categories` (`name`) VALUES ('Skola');
INSERT INTO `categories` (`name`) VALUES ('Praca');
INSERT INTO `categories` (`name`) VALUES ('Domov');

CREATE TABLE users (
    userId int NOT NULL AUTO_INCREMENT,
    username varchar(10) NOT NULL UNIQUE,
    firstname varchar(20) NOT NULL,
    lastname varchar(20) NOT NULL,
    email varchar(20) NOT NULL UNIQUE,
    password varchar(20) NOT NULL,
    confirmed tinyint(1) NOT NULL DEFAULT 0,
    PRIMARY KEY (userId)
);

INSERT INTO `users` (`userId`, `username`, `firstname`, `lastname`, `email`, `password`, `confirmed`) VALUES
(1, 'john', 'John', 'Smith', 'my@email.com', '123', 0);

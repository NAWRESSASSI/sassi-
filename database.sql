CREATE TABLE advert (
    id Int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    title varchar(50),
    description text (250)NOT NULL,
    posta_code Int (6) NOT NULL,
    city varchar(50) NOT NULL,
    type varchar(50) NOT NULL,
    price Int (50)NOT NULL,
    reservation_message varchar(250)NOT NULL,
)
CREATE TABLE lehed(
                      id int not null AUTO_INCREMENT primary key,
                      pealkiri varchar(50),
                      sisu TEXT);

insert into lehed(pealkiri, sisu)
values('ilm on kulm', 'aprill on kaes');
ALTER TABLE lehed ADD kuupaev date;
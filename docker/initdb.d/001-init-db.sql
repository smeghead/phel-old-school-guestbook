drop schema if exists guestbook;
create schema guestbook;
use guestbook;

drop table if exists messages;

create table messages (
  id int(10) not null primary key,
  name varchar(40) not null,
  message varchar(256)
);

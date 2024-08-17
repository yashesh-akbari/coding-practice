-- use db1;
-- SHOW tables;
-- create table movies(title varchar(20),year int(4),rating 
-- float(4));
-- insert into movies values("the god",1972,9.2);
-- insert into movies values("the martrix",1999,8.7);
-- insert into movies values("alien",1979,8.4);
-- Select * from movies WHERE rating>8 or year<1980;
-- insert into movies values("alien",1979,8.4);
-- select distinct * from movies;
-- delete from movies where rating=8.4 and year=1979;
-- DELETE FROM movies where rating=8.4
-- select * from movies order by rating ASC;
-- select title as Movies_name from movies;

/* delete and inquailty not work */
-- delete from movies where rating=8.4;
-- update movies set year=1980 where title="the god";
 
 -- alter
 -- alter table movies rename COLUMN title to movie_name;
--  alter table movies add id int;
-- alter table movies drop column id;
select * from movies;


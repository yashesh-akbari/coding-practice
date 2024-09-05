
-- show databases;
-- use db1;
-- show tables;
-- create table city(name varchar(20),email_id varchar(20),country varchar(20));
-- select * from city;

-- insert the values in table
-- insert into city values ("yashesh","yashesh@mail.co","india");
-- insert into city values ("sam","sam@mail.co","india");
-- insert into city values ("remy","rem@mail.co","france");
-- insert into city values ("luis","lusi@mail.co","england");

-- distinct pratices
-- select distinct * from city;
-- select distinct country from city order by country desc;
-- select * from city where country <> "france";

-- alter opration
-- alter table city rename column name to NAME;
-- alter table city add column id int;
-- alter table city drop column id; 


-- select * from city where country like '%i%';
-- select * from city where country in ("india","france");
-- select * from city where country="india" and NAME="yashesh";
-- select * from city where country="india" or NAME="yashesh";
-- select * from city where not country="india";
-- select count(distinct country) as country_no from city;
-- select country,count(*) from city group by country;
select * from city where country having ("india");
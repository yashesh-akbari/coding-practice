-- show databases;
-- use mydb;
-- show tables;
-- use db1;
-- create table emp(id int,name varchar(10),phone_no int(10));
-- select * from emp;
-- insert into emp values (4,"moon",972377708);
-- create table order_table(id int,order_id int,order_name varchar(20));
-- insert into order_table values (8,86347,"kjhjfdsjsqshfd");
-- select * from order_table;

-- alter table emp add salary int; 
-- alter table emp drop column salary;
-- select * from emp where id=(select max(id) from emp);
-- select * from emp join order_table where emp.id=order_table.id;
-- select * from emp join order_table; 
select * from emp;
-- insert into emp values (4,"moon",972377708);
select name,count(*) as num_emp from emp group by name;
 1. show databases 

 2. show tables 

 3. * from php_practise 

 4. name from php_practise 

 5. limit 30 (its show only limit data number. total 30 data) 

 6. limit 13,2 (its show only limit data number. 1st is starting point 2nd is how many we want to show) 

 7. order by name (its show the name by order acc to dec) 

 8. multiple order by id,name (its show the name & id both by order acc to dec) 

 9. order by name desc (its show the name by order dec to asc) 
 
 10. order by name desc limit 1 (its show the last name by order dec to asc) 

 11. ORDER BY time DESC (its show the lastest date data) 

 12. where id='50' (its show only limit data number. total 30 data) 

 13. where id !='50' 

 14. where id > '50' 

 15. id < '50' 

 16. id >= '50' 

 17. where id <= '50' 

 18. where name BETWEEN 10 AND 20 (its show only between 10 to 20 id number data 30) 

 19. where name like 'ban%' (its show anything who start with ban , % is wildcard) 

 20. where id like '_1' (its show one single number have before 1. ITS DEALS ONLY WITH NUMBER) 

 21. where id like 'b % h' (its show which have first letter b and last letter h )

 22. group by name (show it like facebook chat)

 23. SELECT sum(sub_total) FROM cart (get total of any colomn)

 24. SELECT  * FROM products WHERE start_date >= '2017-06-03' AND end_time  <= '2017-06-04'
 
 
 
 
 
JOIN :
 

create table menu(

 id int(11) AUTO_INCREMENT NOT null PRIMARY KEY,

 name varchar(200) NOT null

)



create table sub_menu(

 id int(11) AUTO_INCREMENT NOT null PRIMARY KEY,

 subname varchar(200) NOT null,

 menuid int(11) not null

)

_______________


create table make foreign key :


ALTER TABLE sub_menu

ADD FOREIGN KEY(menuid)
 
REFERENCES menu(id)


________________

SELECT 

sub_menu.menu_id,

sub_menu.subname,

menu.id 


FROM sub_menu 

JOIN menu 

ON sub_menu.menu_id = menu.id

WHERE menu.id LIKE '1'
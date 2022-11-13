CREATE database productos;

CREATE TABLE producto(
	codigo int primary key,
    nombre varchar(20),
    precio float
    
);

INSERT into producto values(1,'Zared',12.5);
select * from producto;
update producto set precio=13.523 where codigo=1; 

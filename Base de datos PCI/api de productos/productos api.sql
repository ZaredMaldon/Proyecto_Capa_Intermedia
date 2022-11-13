create database productos_api;

Create table Categorias(
	idCategoria 	bigint auto_increment unique not null,
    Categoria		varchar(30) not null unique,
    Descripcion		mediumtext not null,
    Fk_Usuario		bigint null,
    Constraint PK_Categorias primary key (idCategoria)
);

Create table Productos(
	NoProducto 			bigint 			auto_increment not null unique,
    NombreProducto		varchar(50)		not null,
    Precio				varchar(10) 	null,
    Fk_Categoria		bigint			not null,
    Imagen1				blob			null,
	Imagen2				blob			null,
	Imagen3				blob			null,
    Video				blob			null,
    Cantidad			int				not null,
    Valoracion			float			not null,
    Comentarios			text			null,
    Ventas				decimal			null,
    Existencia			boolean         not null,
    Constraint Pk_Productos primary key(NoProducto),
    Constraint Fk_Categoria1 foreign key(Fk_Categoria) references Categorias(idCategoria)
);



/*----------------------------------------------------------------------------------------------------------INSERT-----------------------------------------------------------------------------------------------*/
/*CATEGORIAS*/
INSERT into Categorias(Categoria,Descripcion,Fk_Usuario) values('Alimentos','Todas las cosas comestibles',2);
INSERT into Categorias(Categoria,Descripcion,Fk_Usuario) values('Ejercicio','Todo lo que se usa para ejercitar el cuerpo',2);
INSERT into Categorias(Categoria,Descripcion,Fk_Usuario) values('Bebidas','Todas las cosas bebiles',2);
/*PRODUCTOS*/
insert into productos(NombreProducto,Precio,Fk_Categoria,Cantidad,Valoracion,Ventas,Existencia) values('Coca Cola','$30',3,100,5.0,300,true);
insert into productos(NombreProducto,Precio,Fk_Categoria,Cantidad,Valoracion,Ventas,Existencia) values('Pesas 5 lb','$250',2,10,3.2,50,true);
insert into productos(NombreProducto,Precio,Fk_Categoria,Cantidad,Valoracion,Ventas,Existencia) values('Zucaritas','$48',1,300,4.5,100,true);


select*from productos;
select*from categorias;
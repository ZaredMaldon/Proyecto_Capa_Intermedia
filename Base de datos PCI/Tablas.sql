use Progra_web_capaintermedia;

create table Roles(/*ya creada*/
	idRol 	bigint auto_increment not null unique,
    Rol 	varchar(25) not null unique,
    Constraint Pk_Rol primary key(idRol)
);
create table Sexo(
	idSexo	smallint auto_increment not null unique,
    Sexo	varchar(12) not null unique,
    Constraint PK_Rol primary key(idSexo)
);
create table Usuarios(/*ya creada*/
	idUsuario 	bigint auto_increment not null unique,
    Usuario		varchar(50) not null unique,
    Contrasenia varchar(100) not null,
	Fk_Rol		bigint not null,
    Email		varchar(100) not null,
    Tipo		varchar(15) not null,
    Estatus		bool,
    Constraint PK_Usuario primary key(idUsuario),
    Constraint Fk_Rol foreign key (Fk_Rol) references Roles(idRol)
);

create table Personas(
	idPersona 			bigint 		auto_increment not null unique,
    Fk_Usuario 			bigint 		not null,
    Imagen 	   			blob 		null,
    Nombres				varchar(30) not null,
    APat				varchar(30) null,
    AMat				varchar(30) null,
    Fecha_Nacimiento	date		null,
    Sexo				smallint	not null,
    Fecha_ingreso 		date		not null,
    Constraint Pk_Personas primary key(idPersona),
    Constraint Fk_Usuario1 foreign key(Fk_Usuario) references Usuarios(idUsuario),
    Constraint Fk_Sexo foreign key(Sexo) references Sexo(idSexo)
);

Create table Categorias(
	idCategoria 	bigint auto_increment unique not null,
    Categoria		varchar(30) not null,
    Descripcion		mediumtext not null,
    Fk_Usuario		bigint not null,
    Estatus			bool not null,
    Constraint PK_Categorias primary key (idCategoria),
    Constraint Fk_Usuario2 foreign key(Fk_Usuario) references Usuarios(idUsuario)
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
    Tipo				varchar(11)		not null,
    Cantidad			int				not null,
    Valoracion			float			not null,
    Comentarios			text			null,
    Ventas				decimal			null,
    Existencia			boolean         not null,
    Constraint Pk_Productos primary key(NoProducto),
    Constraint Fk_Categoria1 foreign key(Fk_Categoria) references Categorias(idCategoria)
);

Create table Listas(
	Nombre_Lista 	varchar(30) not null,
    Descripcion	 	mediumtext	not null,
    Imagen			blob		null,
    tipo			varchar(25) not null,
    Fecha_Creacion	date		not null,
    Fk_Usuario		bigint		not null,
    Fk_Producto		bigint		not null,
    Constraint Pk_Listas	primary key(Nombre_Lista,Fk_Usuario,Fk_Producto,Fecha_Creacion),
    Constraint Fk_Usuario3  foreign key(Fk_Usuario) references Usuarios(idUsuario),
    constraint Fk_Producto1 foreign key(Fk_Producto)references Productos(NoProducto)
);

Create table PruebaProductos(
	id_prod         bigint auto_increment not null unique,
	Nombre_Lista 	varchar(30) not null,
    Precio		 	varchar(10) 	null
);


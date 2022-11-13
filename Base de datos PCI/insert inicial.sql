/*TABLA ROLES*/
insert into Roles (Rol) values ("Vendedor");
insert into Roles (Rol) values ("Cliente");
insert into Roles (Rol) values ("Administrador");
insert into Roles (Rol) values ("SuperAdministrador");/*4*/

/*TABLA SEXO*/
insert into Sexo(Sexo) values("Masculino");
insert into Sexo(Sexo) values("Femenino");
insert into Sexo(Sexo) values("Otro");

/*SuperAdministrador*/	
insert into Usuarios(Usuario,Contrasenia,Fk_Rol,Email)values("SuperAdmin","SuperAdmin01",4,"soyadmin@gmail.com");

select*from usuarios;


Select * from usuarios
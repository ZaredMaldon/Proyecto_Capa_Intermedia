Select* from Roles order by idRol;
Select*from Sexo order by idSexo;
Select*from Usuarios;
Select*from Personas;
commit;
Delete from usuarios where id=2;

/*           CATEGORIAS        */
Select*from Categorias;
CALL sp_Categorias(1,null, "Mascotas", "Bonitos", 9);
UPDATE Categorias set Categoria= 'Carros' where idCategoria = 2;/*Estatus=1(Activo),Estatus=0(Inactivo)*/
DELETE FROM Categorias WHERE idCategoria IN (22, 24);
DELETE FROM Categorias WHERE idCategoria =23;

SELECT c.idCategoria, c.Categoria, c.Descripcion, u.Usuario  FROM Categorias c
	INNER JOIN Usuarios u on c.Fk_Usuario = u.idUsuario 
    WHERE (c.idCategoria = 25) AND (c.Estatus = 1);

Select*from PruebaProductos;
DROP table PruebaProductos;
DELETE FROM PruebaProductos WHERE id_prod IN (18, 19);

/*Login*/
SELECT u.idUsuario,u.Usuario,u.Contrasenia,u.Tipo,u.Fk_Rol,r.Rol,u.Email,p.Imagen,p.Nombres,p.APat,p.AMat,p.Fecha_Nacimiento,p.Sexo as idSexo,s.Sexo,p.Fecha_ingreso,u.Estatus FROM Usuarios u
INNER JOIN Personas p on u.idUsuario=p.Fk_Usuario
INNER JOIN Roles r on u.Fk_Rol=r.idRol
INNER JOIN Sexo s on p.Sexo=s.idSexo
where (Usuario='Prueba 2' and Contrasenia='Prueba*2') and (Estatus=1);
/*where Usuario='$usuario' and Contrasenia='$usuario';*/

UPDATE Usuarios set Tipo='Privado'where idUsuario>11 and idUsuario<16;/*Estatus=1(Activo),Estatus=0(Inactivo)*/


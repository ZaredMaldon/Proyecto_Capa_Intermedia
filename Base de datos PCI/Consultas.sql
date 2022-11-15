Select* from Roles order by idRol;
Select*from Sexo order by idSexo;
Select*from Usuarios;
Select*from Personas;
commit;
Delete from usuarios where id=2;


SELECT u.idUsuario,u.Usuario,u.Contrasenia,u.Fk_Rol,u.Email,p.Imagen,p.Nombres,p.APat,p.AMat,p.Fecha_Nacimiento,p.Sexo,p.Fecha_ingreso FROM Usuarios u
INNER JOIN Personas p on u.idUsuario=p.Fk_Usuario
where Usuario='$usuario' and Contrasenia='$password';
/*where Usuario='$usuario' and Contrasenia='$password';*/

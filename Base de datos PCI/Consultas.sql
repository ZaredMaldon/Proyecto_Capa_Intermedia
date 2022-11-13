Select* from Roles order by idRol;
Select*from Sexo order by idSexo;
Select*from Usuarios;
Select*from Personas;
commit;
Delete from usuarios where id=2;
Select @@TRANCOUNT

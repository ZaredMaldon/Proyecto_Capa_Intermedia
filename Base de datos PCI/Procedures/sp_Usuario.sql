/*Usuario storeprocedure*/
DELIMITER $$
CREATE PROCEDURE sp_Usuario(IN Opc int,IN _id bigint,IN _usuario varchar(50),IN _password varchar(100),IN _rol int,IN _email varchar(100),
IN _imagen blob,IN _nombres varchar(50),IN _appat varchar(50), IN _apmat varchar(50), IN _nacimiento date, IN sexo int)
begin
declare fk_User bigint;
IF(Opc=1) then /*AGREGAR*/
START TRANSACTION;
	insert into Usuarios(Usuario,Contrasenia,Fk_Rol,Email)values(_usuario,_password,_rol,_email);
    
    set fk_User=@@identity;
    insert into Personas(Fk_Usuario,Nombres,APat,AMat,Fecha_Nacimiento,Sexo,Fecha_ingreso)values(fk_User,_nombres,_appat,_apmat,_nacimiento,_sexo,now());/*Falta agregar lo de la imagen*/
    
	If @@error_count = 0 then
	Commit;
	end if ;
	if @@error_count != 0 then
	Rollback;
	end if;

END IF;
IF(Opc=2) then /*MODIFICAR*/
	select * from usuarios;

END IF;
IF(Opc=3) then /*ELIMINAR*/
	select * from usuarios;

END IF;
END $$
DELIMITER ;

call sp_Usuario(1,null,'Zaza','Asdfgh*1',2,'zaredmaldonado@gmal.com', null,'Zared', 'rrrr', 'Maldonado',null,1);
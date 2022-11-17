/*Usuario storeprocedure*/
DELIMITER $$
CREATE PROCEDURE sp_Usuario(IN Opc int,IN _id bigint,IN _usuario varchar(50),IN _password varchar(100),IN _rol int,IN _email varchar(100),
IN _imagen longblob,IN _nombres varchar(50),IN _appat varchar(50), IN _apmat varchar(50), IN _nacimiento date, IN _sexo int,IN _tipo varchar(15))
begin
declare fk_User bigint;
IF(Opc=1) then /*AGREGAR*/
START TRANSACTION;
	insert into Usuarios(Usuario,Contrasenia,Fk_Rol,Email,Tipo,Estatus)values(_usuario,_password,_rol,_email,_tipo,1);
    
    set fk_User=@@identity;
    insert into Personas(Fk_Usuario,Nombres,APat,AMat,Fecha_Nacimiento,Sexo,Fecha_ingreso,Imagen)values(fk_User,_nombres,_appat,_apmat,_nacimiento,_sexo,now(),_imagen);
    
	If @@error_count = 0 then
	Commit;
	end if ;
	if @@error_count != 0 then
	Rollback;
	end if;

END IF;

IF(Opc=2) then /*ELIMINAR*/
START TRANSACTION;
	DELETE FROM Personas WHERE Fk_Usuario=_id;
	DELETE FROM Usuarios WHERE idUsuario = _id;
	If @@error_count = 0 then
		Commit;
	end if ;
	if @@error_count != 0 then
		Rollback;
	end if;
END IF;

IF(Opc=3) then /*MODIFICAR*/
START TRANSACTION;
	UPDATE Usuarios set Usuario=_usuario,Contrasenia=_password,Email=_email where idUsuario=_id;
    UPDATE Personas set Nombres=_nombres,APat=_appat,AMat=_apmat where FK_Usuario=_id;
	If @@error_count = 0 then
		Commit;
	end if ;
	if @@error_count != 0 then
		Rollback;
	end if;

END IF;
END $$
DELIMITER ;

call sp_Usuario(1,null,'Zaza','Asdfgh*1',2,'zaredmaldonado@gmal.com', null,'Zared', 'rrrr', 'Maldonado',null,1);

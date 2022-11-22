DELIMITER $$
CREATE PROCEDURE sp_Categorias(IN Opc int, IN _idCategoria bigint,IN _categoria varchar(30),IN _descripcion mediumtext,
IN _usuario bigint)
begin
IF(Opc=1) then /*AGREGAR*/
START TRANSACTION;
    insert into Categorias(Categoria,Descripcion,Fk_Usuario,Estatus)values(_categoria,_descripcion,_usuario,1);

    If @@error_count = 0 then
    Commit;
    end if ;
    if @@error_count != 0 then
    Rollback;
    end if;

END IF;

IF(Opc=2) then /*ELIMINAR*/
START TRANSACTION;
    UPDATE Categorias set Estatus= 0 WHERE Fk_Categorias=_idCategoria;
    If @@error_count = 0 then
        Commit;
    end if ;
    if @@error_count != 0 then
        Rollback;
    end if;
END IF;

IF(Opc=3) then /*MODIFICAR*/
START TRANSACTION;
    UPDATE Categorias set Categoria=_categoria,Descripcion=_descripcion where idCategoria=_idCategoria;
    If @@error_count = 0 then
        Commit;
    end if ;
    if @@error_count != 0 then
        Rollback;
    end if;

END IF;

IF(Opc=4) then /*MOSTRAR POR ID*/

/*idCategoria, Categoria, Descripcion, FK_Usuario, Estatus*/
    SELECT c.idCategoria, c.Categoria, c.Descripcion, u.Usuario  FROM Categorias c
    INNER JOIN Usuarios u on c.Fk_Usuario = u.idUsuario 
    WHERE (c.idCategoria = _idCategoria) AND (Estatus = 1);
END IF;
END $$
DELIMITER ;
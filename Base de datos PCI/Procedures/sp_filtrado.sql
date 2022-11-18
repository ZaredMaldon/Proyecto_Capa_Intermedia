DELIMITER $$
create procedure sp_filtrado(IN Opc int,in _idCategoria bigint,in _nombreProducto varchar(15))
begin
declare fk_User bigint;
IF(Opc=1) then /*todos*//* (Opc,null)*/
Select * from productos;
END IF;

IF(Opc=2) then /*por categoria*//*Opc,idCategoria*/
Select * from productos where fk_categoria=_idCategoria;

END IF;

END $$
DELIMITER ;

Select * from productos WHERE NombreProducto LIKE  '%$busqueda%' OR Valoracion LIKE  '%$busqueda%' ;/*Busqueda dinamica*/
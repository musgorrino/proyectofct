/*Vista 1*/
CREATE VIEW `grupo`
 AS select g.codigo as "Codigo grupo", g.abreviatura, denominacion, c.nombre as "Nombre de ciclo",p.nombre as "Tutor",r.nombre as "Tutor de practicas"
from grupos g,ciclos_formativos c,profesores p,profesores r
where g.ciclo=c.codigo and g.tutor=p.codigo and g.tutor_practicas=r.codigo;


/*Vista 2*/
CREATE
 ALGORITHM = UNDEFINED
 VIEW `profesor`
 AS SELECT p.codigo, codigointerprof, p.nombre,apellidos,telefono,email,
ifnull(t.nombre,"No es coordinador") as "Coordinador" 
FROM profesores p left outer join 
(familias_profesionales t) 
ON p.codigo=t.coordinador


CREATE VIEW `grupo`
 AS select g.codigo as "Codigo grupo", g.abreviatura, denominacion, c.nombre as "Nombre de ciclo",p.nombre as "Tutor",r.nombre as "Tutor de practicas"
from grupos g,ciclos_formativos c,profesores p,profesores r
where g.ciclo=c.codigo and g.tutor=p.codigo and g.tutor_practicas=r.codigo;

SELECT p.codigo, codigointerprof, p.nombre,apellidos,telefono,email,
ifnull(g.abreviatura,"No es tutor de un grupo") AS "Tutor de grupo",
ifnull(f.abreviatura,"No es tutor de practicas") as "Tutor de practicas",
ifnull(t.nombre,"No es coordinador") as "Coordinador" 
FROM profesores p left outer join 
((select codigo, abreviatura,tutor from grupos) g,(select codigo, abreviatura,tutor_practicas from grupos) f
,familias_profesionales t) 
ON (p.codigo=g.tutor or p.codigo=f.tutor_practicas) and p.codigo=t.coordinador

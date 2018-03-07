/*Vista 1*/
CREATE VIEW or replace`grupo`
 AS select g.codigo, g.abreviatura, denominacion, c.nombre as "Ciclo",p.nombre as "Tutor",r.nombre as "Practicas"
from grupos g,ciclos_formativos c,profesores p,profesores r
where g.ciclo=c.codigo and g.tutor=p.codigo and g.tutor_practicas=r.codigo;


/*Vista 2*/
CREATE or replace

 VIEW `profesor`
 AS SELECT p.codigo, codigointerprof, p.nombre,apellidos,telefono,email,
ifnull(t.nombre,"No es coordinador") as "Coordinador" 
FROM profesores p left outer join 
(familias_profesionales t) 
ON p.codigo=t.coordinador;



/*Vista 3*/
CREATE or replace VIEW `ciclo`
 AS SELECT c.codigo,c.nombre,c.abreviatura,c.nivel, p.nombre as 'familia'
 FROM  ciclos_formativos c, familias_profesionales p where c.familia=p.codigo;
 
/*Vista 4*/
CREATE OR REPLACE VIEW `familia`
 AS SELECT f.codigo,f.nombre,c.nombre as 'coordinador' FROM familias_profesionales f, profesores c
 WHERE c.codigo=coordinador;
 
/*Vista 5*/
CREATE OR REPLACE VIEW `responsaempre`
 AS SELECT r.codigo,r.nombre,e.nombre as 'empresa' FROM responsable r,empresas e  WHERE r.empresa=e.codigo;
 
/*Vista 6*/
CREATE OR REPLACE VIEW `alumno`
 AS SELECT a.*,c.nombre as "Nombre de ciclo",g.abreviatura,g.denominacion as "Clase",h.curso,p.nombre "Tutor",n.nombre as "Tutor de practicas"
from alumnos a,historial_alumnos h,grupos g,ciclos_formativos c,profesores p,profesores n
where h.alumno=a.codigo and h.grupo=g.codigo and g.ciclo=c.codigo and g.tutor=p.codigo and g.tutor_practicas=n.codigo;

/* Vista 7*/
CREATE OR REPLACE VIEW `asignacion`
 AS select e.nombre as "empresa", a.nombre as "alumno", curso,horario,trabajodesempeñado as "trabajo",contratacionalumno as "contratado"
from empresas e, alumnos a,asignaciones s
where e.codigo=s.codigoempresa and a.codigo=s.codigoalumno;
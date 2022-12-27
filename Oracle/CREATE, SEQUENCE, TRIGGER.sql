CREATE TABLE empleados (
idEmp number primary key,
nombre varchar2(50),
apellidos varchar2(50),
edad number(5)
)

ALTER TABLE empleados RENAME COLUMN nombre to nombres;

SELECT * FROM empleados;

CREATE SEQUENCE autoincrement
START WITH 1
INCREMENT By 1;

CREATE TRIGGER triautoin
BEFORE INSERT ON empleados
FOR EACH ROW
BEGIN
SELECT autoincrement.NEXTVAL INTO :NEW.idEmp FROM DUAL;
END;

INSERT INTO empleados (nombres, apellidos, edad) VALUES ('Roberto', 'Morales M', 23);
INSERT INTO empleados (nombres, apellidos, edad) VALUES ('Sebastián', 'Morales', 19);
INSERT INTO empleados (nombres, apellidos, edad) VALUES ('Alexander', 'Morales', 22);


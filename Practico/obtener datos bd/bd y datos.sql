CREATE TABLE `persona` (
  `Ci` varchar(8) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Apellido` varchar(45) DEFAULT NULL
);

INSERT INTO `persona`
(`Ci`,
`Nombre`,
`Apellido`)
VALUES
(53636064, "Gaspar", "Morales");

INSERT INTO `persona`
(`Ci`,
`Nombre`,
`Apellido`)
VALUES
(63636064, "Eduardo", "Piñero");

INSERT INTO `persona`
(`Ci`,
`Nombre`,
`Apellido`)
VALUES
(73636064, "Joaquin", "Sellanes");

select * from persona;
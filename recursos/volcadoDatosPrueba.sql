AGregar trabajadores

INSERT INTO `usuario` (`id`, `codigo`, `nombre`, `cedula`, `fechaNacimiento`, `fechaDeIngreso`, `direccion`, `telefono`, `codigoReferido`, `usuario`, `correo`, `password`, `activo`, `tipo`, `saldo`) VALUES
(11, 'trabajo1', 'Trabajador1','t1', '1992-05-31', '2019-04-04', 'avellaned', '349057', 'n/a', 'tra1', 'lina@hmotmail.co', '1234', 0, 1, 0),
(12, 'trabajo2', 'trabajador2','t2', '0000-00-00', '2019-04-04', 'avellaned', '349057', 'n/a', 'tra2', 'lina@hmotmail.co', '1234', 0, 1, 0),
(13, 'trabajo3', 'trabajador3','t3', '2019-04-06', '2019-04-04', 'avellaned', '349057', 'n/a', 'tra3', 'lina@hmotmail.co', '1234', 0, 1, 0),
(14, 'trabajo4', 'trabajador4','t4', '2019-04-06', '2019-04-04', 'avellaned', '345345', 'n/a', 'tra4', 'lina@hmotmail.co', '1234', 0, 1, 0),
(15, 'trabajo5', 'trabajador5','t5', '2019-04-24', '2019-04-04', 'avellaned', '315429', 'n/a', 'tra5', 'lina@hmotmail.co', '1234', 0, 1, 0),
(16, 'trabajo6', 'trabajador6','t6', '2019-05-30', '2019-04-04', 'avellaned', '318547', 'n/a', 'tra6', 'lina@hmotmail.co', '1234', 0, 1, 0);


Usuario nivel 1

INSERT INTO `usuario` (`id`, `codigo`, `nombre`, `cedula`, `fechaNacimiento`, `fechaDeIngreso`, `direccion`, `telefono`, `codigoReferido`, `usuario`, `correo`, `password`, `activo`, `tipo`, `saldo`) VALUES
(17, 'usuario1', 'usr1','u1', '1992-05-31', '2019-04-04', 'avellaned', 'tel349057', 'trabajo1', 'usuario1', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(18, 'usuario2', 'usr2','u2', '0000-00-00', '2019-04-04', 'avellaned', 'tel349057', 'trabajo1', 'usuario2', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(19, 'usuario3', 'usr3','u3', '2019-04-06', '2019-04-04', 'avellaned', 'tel349057', 'trabajo1', 'usuario3', 'lina@hmotmail.co', '1234', 0, 2, 300000),

2do nivel del id17 
(20, 'usuario11', 'usr11','us11', '1992-05-31', '2019-04-04', 'avellaned', '349057', 'usuario1', 'usuario11', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(21, 'usuario12', 'usr12','us12', '0000-00-00', '2019-04-04', 'avellaned', '349057', 'usuario1', 'usuario12', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(22, 'usuario13', 'usr13','us13', '2019-04-06', '2019-04-04', 'avellaned', '349057', 'usuario1', 'usuario13', 'lina@hmotmail.co', '1234', 0, 2, 300000),

(23, 'usuario21', 'usr21','us21', '1992-05-31', '2019-04-04', 'avellaned', '349057', 'usuario2', 'usuario21', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(24, 'usuario22', 'usr22','us22', '0000-00-00', '2019-04-04', 'avellaned', '349057', 'usuario2', 'usuario22', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(25, 'usuario23', 'usr23','us23', '2019-04-06', '2019-04-04', 'avellaned', '349057', 'usuario2', 'usuario23', 'lina@hmotmail.co', '1234', 0, 2, 300000),

(26, 'usuario31', 'usr31','us31', '1992-05-31', '2019-04-04', 'avellaned', '349057', 'usuario3', 'usuario31', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(27, 'usuario32', 'usr32','us32', '0000-00-00', '2019-04-04', 'avellaned', '349057', 'usuario3', 'usuario32', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(28, 'usuario33', 'usr33','us33', '2019-04-06', '2019-04-04', 'avellaned', '349057', 'usuario3', 'usuario33', 'lina@hmotmail.co', '1234', 0, 2, 300000),

3er nivel del id17

(30, 'usuario111', 'usr111','us1', '1992-05-31', '2019-04-04', 'avellaned', '349057', 'usuario11', 'usuario111', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(31, 'usuario112', 'usr112','us2', '0000-00-00', '2019-04-04', 'avellaned', '349057', 'usuario11', 'usuario112', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(32, 'usuario113', 'usr113','us3', '2019-04-06', '2019-04-04', 'avellaned', '349057', 'usuario11', 'usuario113', 'lina@hmotmail.co', '1234', 0, 2, 300000),

(33, 'usuario121', 'usr121','us1', '1992-05-31', '2019-04-04', 'avellaned', '349057', 'usuario12', 'usuario121', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(34, 'usuario122', 'usr122','us2', '0000-00-00', '2019-04-04', 'avellaned', '349057', 'usuario12', 'usuario122', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(35, 'usuario123', 'usr123','us3', '2019-04-06', '2019-04-04', 'avellaned', '349057', 'usuario12', 'usuario123', 'lina@hmotmail.co', '1234', 0, 2, 300000),

(36, 'usuario131', 'usr131','us1', '1992-05-31', '2019-04-04', 'avellaned', '349057', 'usuario13', 'usuario131', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(37, 'usuario132', 'usr132','us2', '0000-00-00', '2019-04-04', 'avellaned', '349057', 'usuario13', 'usuario132', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(38, 'usuario133', 'usr133','us3', '2019-04-06', '2019-04-04', 'avellaned', '349057', 'usuario13', 'usuario133', 'lina@hmotmail.co', '1234', 0, 2, 300000),


(39, 'usuario211', 'usr211','us1', '1992-05-31', '2019-04-04', 'avellaned', '349057', 'usuario21', 'usuario211', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(40, 'usuario212', 'usr212','us2', '0000-00-00', '2019-04-04', 'avellaned', '349057', 'usuario21', 'usuario212', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(41, 'usuario213', 'usr213','us3', '2019-04-06', '2019-04-04', 'avellaned', '349057', 'usuario21', 'usuario213', 'lina@hmotmail.co', '1234', 0, 2, 300000),

(42, 'usuario221', 'usr221','us1', '1992-05-31', '2019-04-04', 'avellaned', '349057', 'usuario22', 'usuario221', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(43, 'usuario222', 'usr222','us2', '0000-00-00', '2019-04-04', 'avellaned', '349057', 'usuario22', 'usuario222', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(44, 'usuario223', 'usr223','us3', '2019-04-06', '2019-04-04', 'avellaned', '349057', 'usuario22', 'usuario223', 'lina@hmotmail.co', '1234', 0, 2, 300000),

(45, 'usuario231', 'usr231','us1', '1992-05-31', '2019-04-04', 'avellaned', '349057', 'usuario23', 'usuario231', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(46, 'usuario232', 'usr232','us2', '0000-00-00', '2019-04-04', 'avellaned', '349057', 'usuario23', 'usuario232', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(47, 'usuario233', 'usr233','us3', '2019-04-06', '2019-04-04', 'avellaned', '349057', 'usuario23', 'usuario233', 'lina@hmotmail.co', '1234', 0, 2, 300000),

(48, 'usuario311', 'usr311','us1', '1992-05-31', '2019-04-04', 'avellaned', '349057', 'usuario31', 'usuario311', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(49, 'usuario312', 'usr312','us2', '0000-00-00', '2019-04-04', 'avellaned', '349057', 'usuario31', 'usuario312', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(50, 'usuario313', 'usr313','us3', '2019-04-06', '2019-04-04', 'avellaned', '349057', 'usuario31', 'usuario313', 'lina@hmotmail.co', '1234', 0, 2, 300000),

(51, 'usuario321', 'usr321','us1', '1992-05-31', '2019-04-04', 'avellaned', '349057', 'usuario32', 'usuario321', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(52, 'usuario322', 'usr322','us2', '0000-00-00', '2019-04-04', 'avellaned', '349057', 'usuario32', 'usuario322', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(53, 'usuario323', 'usr323','us3', '2019-04-06', '2019-04-04', 'avellaned', '349057', 'usuario32', 'usuario323', 'lina@hmotmail.co', '1234', 0, 2, 300000),

(54, 'usuario331', 'usr331','us1', '1992-05-31', '2019-04-04', 'avellaned', '349057', 'usuario33', 'usuario331', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(55, 'usuario332', 'usr332','us2', '0000-00-00', '2019-04-04', 'avellaned', '349057', 'usuario33', 'usuario332', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(56, 'usuario333', 'usr333','us3', '2019-04-06', '2019-04-04', 'avellaned', '349057', 'usuario33', 'usuario333', 'lina@hmotmail.co', '1234', 0, 2, 300000),

4to nivel del id17

(57, 'usuario1111', 'usr1111','us1', '1992-05-31', '2019-04-04', 'avellaned', '349057', 'usuario111', 'usuario1111', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(58, 'usuario1112', 'usr1112','us2', '0000-00-00', '2019-04-04', 'avellaned', '349057', 'usuario111', 'usuario1112', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(59, 'usuario1113', 'usr1113','us3', '2019-04-06', '2019-04-04', 'avellaned', '349057', 'usuario111', 'usuario1113', 'lina@hmotmail.co', '1234', 0, 2, 300000),

(60, 'usuario1121', 'usr1121','us1', '1992-05-31', '2019-04-04', 'avellaned', '349057', 'usuario112', 'usuario1121', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(61, 'usuario1122', 'usr1122','us2', '0000-00-00', '2019-04-04', 'avellaned', '349057', 'usuario112', 'usuario1122', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(62, 'usuario1123', 'usr1123','us3', '2019-04-06', '2019-04-04', 'avellaned', '349057', 'usuario112', 'usuario1123', 'lina@hmotmail.co', '1234', 0, 2, 300000),

(63, 'usuario1131', 'usr1131','us1', '1992-05-31', '2019-04-04', 'avellaned', '349057', 'usuario113', 'usuario1131', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(64, 'usuario1132', 'usr1132','us2', '0000-00-00', '2019-04-04', 'avellaned', '349057', 'usuario113', 'usuario1132', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(65, 'usuario1133', 'usr1133','us3', '2019-04-06', '2019-04-04', 'avellaned', '349057', 'usuario113', 'usuario1133', 'lina@hmotmail.co', '1234', 0, 2, 300000),


(66, 'usuario1211', 'usr1211','us1', '1992-05-31', '2019-04-04', 'avellaned', '349057', 'usuario121', 'usuario1211', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(67, 'usuario1212', 'usr1212','us2', '0000-00-00', '2019-04-04', 'avellaned', '349057', 'usuario121', 'usuario1212', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(68, 'usuario1213', 'usr1213','us3', '2019-04-06', '2019-04-04', 'avellaned', '349057', 'usuario121', 'usuario1213', 'lina@hmotmail.co', '1234', 0, 2, 300000),

(69, 'usuario1221', 'usr1221','us1', '1992-05-31', '2019-04-04', 'avellaned', '349057', 'usuario122', 'usuario1221', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(70, 'usuario1222', 'usr1222','us2', '0000-00-00', '2019-04-04', 'avellaned', '349057', 'usuario122', 'usuario1222', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(71, 'usuario1223', 'usr1223','us3', '2019-04-06', '2019-04-04', 'avellaned', '349057', 'usuario122', 'usuario1223', 'lina@hmotmail.co', '1234', 0, 2, 300000),

(72, 'usuario1231', 'usr1231','us1', '1992-05-31', '2019-04-04', 'avellaned', '349057', 'usuario123', 'usuario1231', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(73, 'usuario1232', 'usr1232','us2', '0000-00-00', '2019-04-04', 'avellaned', '349057', 'usuario123', 'usuario1232', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(74, 'usuario1233', 'usr1233','us3', '2019-04-06', '2019-04-04', 'avellaned', '349057', 'usuario123', 'usuario1233', 'lina@hmotmail.co', '1234', 0, 2, 300000),

(75, 'usuario1311', 'usr1311','us1', '1992-05-31', '2019-04-04', 'avellaned', '349057', 'usuario131', 'usuario1311', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(76, 'usuario1312', 'usr1312','us2', '0000-00-00', '2019-04-04', 'avellaned', '349057', 'usuario131', 'usuario1312', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(77, 'usuario1313', 'usr1313','us3', '2019-04-06', '2019-04-04', 'avellaned', '349057', 'usuario131', 'usuario1313', 'lina@hmotmail.co', '1234', 0, 2, 300000),

(78, 'usuario1321', 'usr1321','us1', '1992-05-31', '2019-04-04', 'avellaned', '349057', 'usuario132', 'usuario1321', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(79, 'usuario1322', 'usr1322','us2', '0000-00-00', '2019-04-04', 'avellaned', '349057', 'usuario132', 'usuario1322', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(80, 'usuario1323', 'usr1323','us3', '2019-04-06', '2019-04-04', 'avellaned', '349057', 'usuario132', 'usuario1323', 'lina@hmotmail.co', '1234', 0, 2, 300000),

(81, 'usuario1331', 'usr1331','us1', '1992-05-31', '2019-04-04', 'avellaned', '349057', 'usuario133', 'usuario1331', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(82, 'usuario1332', 'usr1332','us2', '0000-00-00', '2019-04-04', 'avellaned', '349057', 'usuario133', 'usuario1332', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(83, 'usuario1333', 'usr1333','us3', '2019-04-06', '2019-04-04', 'avellaned', '349057', 'usuario133', 'usuario1333', 'lina@hmotmail.co', '1234', 0, 2, 300000),

(84, 'usuario2111', 'usr2111','us1', '1992-05-31', '2019-04-04', 'avellaned', '349057', 'usuario211', 'usuario2111', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(85, 'usuario2112', 'usr2112','us2', '0000-00-00', '2019-04-04', 'avellaned', '349057', 'usuario211', 'usuario2112', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(86, 'usuario2113', 'usr2113','us3', '2019-04-06', '2019-04-04', 'avellaned', '349057', 'usuario211', 'usuario2113', 'lina@hmotmail.co', '1234', 0, 2, 300000),

(87, 'usuario2121', 'usr2121','us1', '1992-05-31', '2019-04-04', 'avellaned', '349057', 'usuario212', 'usuario2121', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(88, 'usuario2122', 'usr2122','us2', '0000-00-00', '2019-04-04', 'avellaned', '349057', 'usuario212', 'usuario2122', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(89, 'usuario2123', 'usr2123','us3', '2019-04-06', '2019-04-04', 'avellaned', '349057', 'usuario212', 'usuario2123', 'lina@hmotmail.co', '1234', 0, 2, 300000),

(90, 'usuario2131', 'usr2131','us1', '1992-05-31', '2019-04-04', 'avellaned', '349057', 'usuario213', 'usuario2131', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(91, 'usuario2132', 'usr2132','us2', '0000-00-00', '2019-04-04', 'avellaned', '349057', 'usuario213', 'usuario2132', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(92, 'usuario2133', 'usr2133','us3', '2019-04-06', '2019-04-04', 'avellaned', '349057', 'usuario213', 'usuario2133', 'lina@hmotmail.co', '1234', 0, 2, 300000),


(93, 'usuario2211', 'usr2211','us1', '1992-05-31', '2019-04-04', 'avellaned', '349057', 'usuario221', 'usuario2211', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(94, 'usuario2212', 'usr2212','us2', '0000-00-00', '2019-04-04', 'avellaned', '349057', 'usuario221', 'usuario2212', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(95, 'usuario2213', 'usr2213','us3', '2019-04-06', '2019-04-04', 'avellaned', '349057', 'usuario221', 'usuario2213', 'lina@hmotmail.co', '1234', 0, 2, 300000),

(96, 'usuario2221', 'usr2221','us1', '1992-05-31', '2019-04-04', 'avellaned', '349057', 'usuario222', 'usuario2221', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(97, 'usuario2222', 'usr2222','us2', '0000-00-00', '2019-04-04', 'avellaned', '349057', 'usuario222', 'usuario2222', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(98, 'usuario2223', 'usr2223','us3', '2019-04-06', '2019-04-04', 'avellaned', '349057', 'usuario222', 'usuario2223', 'lina@hmotmail.co', '1234', 0, 2, 300000),

(99, 'usuario2231', 'usr2231','us1', '1992-05-31', '2019-04-04', 'avellaned', '349057', 'usuario223', 'usuario2231', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(100, 'usuario2232', 'usr2232','us2', '0000-00-00', '2019-04-04', 'avellaned', '349057', 'usuario223', 'usuario2232', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(101, 'usuario2233', 'usr2233','us3', '2019-04-06', '2019-04-04', 'avellaned', '349057', 'usuario223', 'usuario2233', 'lina@hmotmail.co', '1234', 0, 2, 300000),

(102, 'usuario2311', 'usr2311','us1', '1992-05-31', '2019-04-04', 'avellaned', '349057', 'usuario231', 'usuario2311', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(103, 'usuario2312', 'usr2312','us2', '0000-00-00', '2019-04-04', 'avellaned', '349057', 'usuario231', 'usuario2312', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(104, 'usuario2313', 'usr2313','us3', '2019-04-06', '2019-04-04', 'avellaned', '349057', 'usuario231', 'usuario2313', 'lina@hmotmail.co', '1234', 0, 2, 300000),

(105, 'usuario2321', 'usr2321','us1', '1992-05-31', '2019-04-04', 'avellaned', '349057', 'usuario232', 'usuario2321', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(106, 'usuario2322', 'usr2322','us2', '0000-00-00', '2019-04-04', 'avellaned', '349057', 'usuario232', 'usuario2322', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(107, 'usuario2323', 'usr2323','us3', '2019-04-06', '2019-04-04', 'avellaned', '349057', 'usuario232', 'usuario2323', 'lina@hmotmail.co', '1234', 0, 2, 300000),

(108, 'usuario2331', 'usr2331','us1', '1992-05-31', '2019-04-04', 'avellaned', '349057', 'usuario233', 'usuario2331', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(109, 'usuario2332', 'usr2332','us2', '0000-00-00', '2019-04-04', 'avellaned', '349057', 'usuario233', 'usuario2332', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(110, 'usuario2333', 'usr2333','us3', '2019-04-06', '2019-04-04', 'avellaned', '349057', 'usuario233', 'usuario2333', 'lina@hmotmail.co', '1234', 0, 2, 300000),

(111, 'usuario3111', 'usr3111','us1', '1992-05-31', '2019-04-04', 'avellaned', '349057', 'usuario311', 'usuario3111', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(112, 'usuario3112', 'usr3112','us2', '0000-00-00', '2019-04-04', 'avellaned', '349057', 'usuario311', 'usuario3112', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(113, 'usuario3113', 'usr3113','us3', '2019-04-06', '2019-04-04', 'avellaned', '349057', 'usuario311', 'usuario3113', 'lina@hmotmail.co', '1234', 0, 2, 300000),

(114, 'usuario3121', 'usr3121','us1', '1992-05-31', '2019-04-04', 'avellaned', '349057', 'usuario312', 'usuario3121', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(115, 'usuario3122', 'usr3122','us2', '0000-00-00', '2019-04-04', 'avellaned', '349057', 'usuario312', 'usuario3122', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(116, 'usuario3123', 'usr3123','us3', '2019-04-06', '2019-04-04', 'avellaned', '349057', 'usuario312', 'usuario3123', 'lina@hmotmail.co', '1234', 0, 2, 300000),

(117, 'usuario3131', 'usr3131','us1', '1992-05-31', '2019-04-04', 'avellaned', '349057', 'usuario313', 'usuario3131', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(118, 'usuario3132', 'usr3132','us2', '0000-00-00', '2019-04-04', 'avellaned', '349057', 'usuario313', 'usuario3132', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(119, 'usuario3133', 'usr3133','us3', '2019-04-06', '2019-04-04', 'avellaned', '349057', 'usuario313', 'usuario3133', 'lina@hmotmail.co', '1234', 0, 2, 300000),


(120, 'usuario3211', 'usr3211','us1', '1992-05-31', '2019-04-04', 'avellaned', '349057', 'usuario321', 'usuario3211', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(121, 'usuario3212', 'usr3212','us2', '0000-00-00', '2019-04-04', 'avellaned', '349057', 'usuario321', 'usuario3212', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(122, 'usuario3213', 'usr3213','us3', '2019-04-06', '2019-04-04', 'avellaned', '349057', 'usuario321', 'usuario3213', 'lina@hmotmail.co', '1234', 0, 2, 300000),

(123, 'usuario3221', 'usr3221','us1', '1992-05-31', '2019-04-04', 'avellaned', '349057', 'usuario322', 'usuario3221', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(124, 'usuario3222', 'usr3222','us2', '0000-00-00', '2019-04-04', 'avellaned', '349057', 'usuario322', 'usuario3222', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(125, 'usuario3223', 'usr3223','us3', '2019-04-06', '2019-04-04', 'avellaned', '349057', 'usuario322', 'usuario3223', 'lina@hmotmail.co', '1234', 0, 2, 300000),

(126, 'usuario3231', 'usr3231','us1', '1992-05-31', '2019-04-04', 'avellaned', '349057', 'usuario323', 'usuario3231', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(127, 'usuario3232', 'usr3232','us2', '0000-00-00', '2019-04-04', 'avellaned', '349057', 'usuario323', 'usuario3232', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(128, 'usuario3233', 'usr3233','us3', '2019-04-06', '2019-04-04', 'avellaned', '349057', 'usuario323', 'usuario3233', 'lina@hmotmail.co', '1234', 0, 2, 300000),

(129, 'usuario3311', 'usr3311','us1', '1992-05-31', '2019-04-04', 'avellaned', '349057', 'usuario331', 'usuario3311', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(130, 'usuario3312', 'usr3312','us2', '0000-00-00', '2019-04-04', 'avellaned', '349057', 'usuario331', 'usuario3312', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(131, 'usuario3313', 'usr3313','us3', '2019-04-06', '2019-04-04', 'avellaned', '349057', 'usuario331', 'usuario3313', 'lina@hmotmail.co', '1234', 0, 2, 300000),

(132, 'usuario3321', 'usr3321','us1', '1992-05-31', '2019-04-04', 'avellaned', '349057', 'usuario332', 'usuario3321', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(133, 'usuario3322', 'usr3322','us2', '0000-00-00', '2019-04-04', 'avellaned', '349057', 'usuario332', 'usuario3322', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(134, 'usuario3323', 'usr3323','us3', '2019-04-06', '2019-04-04', 'avellaned', '349057', 'usuario332', 'usuario3323', 'lina@hmotmail.co', '1234', 0, 2, 300000),

(135, 'usuario3331', 'usr3331','us1', '1992-05-31', '2019-04-04', 'avellaned', '349057', 'usuario333', 'usuario3331', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(136, 'usuario3332', 'usr3332','us2', '0000-00-00', '2019-04-04', 'avellaned', '349057', 'usuario333', 'usuario3332', 'lina@hmotmail.co', '1234', 0, 2, 300000),
(137, 'usuario3333', 'usr3333','us3', '2019-04-06', '2019-04-04', 'avellaned', '349057', 'usuario333', 'usuario3333', 'lina@hmotmail.co', '1234', 0, 2, 300000);


/* Drop Tables */

DROP TABLE IF EXISTS condor.contenido;
DROP TABLE IF EXISTS condor.respuestas;
DROP TABLE IF EXISTS condor.preguntas;
DROP TABLE IF EXISTS condor.evaluaciones;
DROP TABLE IF EXISTS condor.lecciones;
DROP TABLE IF EXISTS condor.capitulos;
DROP TABLE IF EXISTS condor.ponderaciones;




/* Create Tables */

CREATE TABLE condor.capitulos
(
	-- Identificador del capitulo
	id_capitulo serial NOT NULL,
	-- Nombre del capitulo
	nb_capitulo char(150) NOT NULL UNIQUE,
	-- Descripción del capitulo
	desc_capitulo text NOT NULL,
	PRIMARY KEY (id_capitulo)
) WITHOUT OIDS;


CREATE TABLE condor.lecciones
(
	-- Identificador de la leccion
	id_leccion serial NOT NULL,
	nb_leccion char(150) NOT NULL UNIQUE,
	-- Descripción de la lección
	-- 
	desc_leccion text NOT NULL,
	-- Identificador del capitulo
	id_capitulo int NOT NULL,
	PRIMARY KEY (id_leccion)
) WITHOUT OIDS;


CREATE TABLE condor.contenido
(
	-- Identificador del contenido
	-- 
	id_contenido serial NOT NULL,
	-- Descripción del contenido
	desc_contenido text NOT NULL,
	-- Fuentes del contenido
	fuen_contenido text NOT NULL,
	-- Identificador de la leccion
	id_leccion int NOT NULL,
	PRIMARY KEY (id_contenido)
) WITHOUT OIDS;


CREATE TABLE condor.evaluaciones
(
	-- Identicador de la evaluación
	id_evaluacion serial NOT NULL,
	-- Fecha de la Evaluación
	fech_evaluacion timestamp with time zone,
	-- Identificador de la leccion
	id_leccion int NOT NULL,
	-- Resultado de la Evaluación
	result_evaluacion int,
	-- Indentificador de la ponderacion
	id_ponderacion int NOT NULL,
	PRIMARY KEY (id_evaluacion)
) WITHOUT OIDS;


CREATE TABLE condor.preguntas
(
	-- Identificador de la pregunta
	id_pregunta serial NOT NULL,
	-- Pregunta a realizar
	p_pregunta char(150) UNIQUE,
	-- Identicador de la evaluación
	id_evaluacion int NOT NULL,
	-- Indentificador de la ponderacion
	id_ponderacion int NOT NULL,
	PRIMARY KEY (id_pregunta)
) WITHOUT OIDS;


CREATE TABLE condor.respuestas
(
	-- Identificador de la respuesta
	-- 
	id_respuesta serial NOT NULL,
	-- Respuesta a la pregunta
	resp_respuesta char(150) UNIQUE,
	-- Tipo de respuesta si es verdadera o falsa
	tp_respuesta boolean NOT NULL,
	-- Identificador de la pregunta
	id_pregunta int NOT NULL,
	PRIMARY KEY (id_respuesta)
) WITHOUT OIDS;


CREATE TABLE condor.ponderaciones
(
	-- Indentificador de la ponderacion
	id_ponderacion serial NOT NULL,
	-- Puntos de la ponderacion
	-- 
	punt_ponderacion int,
	PRIMARY KEY (id_ponderacion)
) WITHOUT OIDS;



/* Create Foreign Keys */

ALTER TABLE condor.lecciones
	ADD FOREIGN KEY (id_capitulo)
	REFERENCES condor.capitulos (id_capitulo)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE condor.contenido
	ADD FOREIGN KEY (id_leccion)
	REFERENCES condor.lecciones (id_leccion)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE condor.evaluaciones
	ADD FOREIGN KEY (id_leccion)
	REFERENCES condor.lecciones (id_leccion)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE condor.preguntas
	ADD FOREIGN KEY (id_evaluacion)
	REFERENCES condor.evaluaciones (id_evaluacion)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE condor.respuestas
	ADD FOREIGN KEY (id_pregunta)
	REFERENCES condor.preguntas (id_pregunta)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE condor.preguntas
	ADD FOREIGN KEY (id_ponderacion)
	REFERENCES condor.ponderaciones (id_ponderacion)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE condor.evaluaciones
	ADD FOREIGN KEY (id_ponderacion)
	REFERENCES condor.ponderaciones (id_ponderacion)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;



/* Comments */

COMMENT ON COLUMN condor.capitulos.id_capitulo IS 'Identificador del capitulo';
COMMENT ON COLUMN condor.capitulos.nb_capitulo IS 'Nombre del capitulo';
COMMENT ON COLUMN condor.capitulos.desc_capitulo IS 'Descripción del capitulo';
COMMENT ON COLUMN condor.lecciones.id_leccion IS 'Identificador de la leccion';
COMMENT ON COLUMN condor.lecciones.desc_leccion IS 'Descripción de la lección
';
COMMENT ON COLUMN condor.lecciones.id_capitulo IS 'Identificador del capitulo';
COMMENT ON COLUMN condor.contenido.id_contenido IS 'Identificador del contenido
';
COMMENT ON COLUMN condor.contenido.desc_contenido IS 'Descripción del contenido';
COMMENT ON COLUMN condor.contenido.fuen_contenido IS 'Fuentes del contenido';
COMMENT ON COLUMN condor.contenido.id_leccion IS 'Identificador de la leccion';
COMMENT ON COLUMN condor.evaluaciones.id_evaluacion IS 'Identicador de la evaluación';
COMMENT ON COLUMN condor.evaluaciones.fech_evaluacion IS 'Fecha de la Evaluación';
COMMENT ON COLUMN condor.evaluaciones.id_leccion IS 'Identificador de la leccion';
COMMENT ON COLUMN condor.evaluaciones.result_evaluacion IS 'Resultado de la Evaluación';
COMMENT ON COLUMN condor.evaluaciones.id_ponderacion IS 'Indentificador de la ponderacion';
COMMENT ON COLUMN condor.preguntas.id_pregunta IS 'Identificador de la pregunta';
COMMENT ON COLUMN condor.preguntas.p_pregunta IS 'Pregunta a realizar';
COMMENT ON COLUMN condor.preguntas.id_evaluacion IS 'Identicador de la evaluación';
COMMENT ON COLUMN condor.preguntas.id_ponderacion IS 'Indentificador de la ponderacion';
COMMENT ON COLUMN condor.respuestas.id_respuesta IS 'Identificador de la respuesta
';
COMMENT ON COLUMN condor.respuestas.resp_respuesta IS 'Respuesta a la pregunta';
COMMENT ON COLUMN condor.respuestas.tp_respuesta IS 'Tipo de respuesta si es verdadera o falsa';
COMMENT ON COLUMN condor.respuestas.id_pregunta IS 'Identificador de la pregunta';
COMMENT ON COLUMN condor.ponderaciones.id_ponderacion IS 'Indentificador de la ponderacion';
COMMENT ON COLUMN condor.ponderaciones.punt_ponderacion IS 'Puntos de la ponderacion
';




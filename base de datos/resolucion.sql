CREATE DATABASE IF NOT EXISTS resolucion;
use resolucion;


CREATE TABLE IF NOT EXISTS tipo_resolucion (
  id_tipo_resolucion int not null auto_increment,
  descripcion varchar(200) not null,
  primary key (id_tipo_resolucion)
);

CREATE TABLE IF NOT EXISTS area (
  id_area int not null auto_increment,
  nombre varchar(200) not null,
  primary key (id_area)
);

CREATE TABLE IF NOT EXISTS resolucion (
  id_resolucion int NOT NULL auto_increment,
  tipo_resolucion int NOT NULL,
  area int not null,
  nro_resolucion varchar(100) NOT NULL,
  nro_registro int NOT NULL,
  fecha_registro date NOT NULL,
  folio int(4) NOT NULL,
  descripcion varchar(600) NOT NULL,
  PRIMARY KEY  (id_resolucion),
  FOREIGN key (tipo_resolucion) references tipo_resolucion(id_tipo_resolucion),
  FOREIGN KEY (area) references area(id_area)
)  ;

CREATE TABLE IF NOT EXISTS usuario (
  dni char(8) not null,
  nombre varchar(400) NOT NULL,
  password varchar(200) NOT NULL,
  PRIMARY KEY  (dni)
) ;




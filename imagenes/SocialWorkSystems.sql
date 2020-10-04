use 3586464_socialws;

CREATe table curso(
ID_curso int not null auto_increment primary key,
nom_curso varchar(6) not null
)Engine = InnoDB;

create table nivel_usuario(
ID_nivel int not null auto_increment primary key,
desc_nivel varchar(40) not null
)Engine = InnoDB;

create table usuario(
DOC_user int not null primary key,
tipo_doc_user varchar(6) not null,
nom_user varchar(25) not null,
ape_user varchar(25) not null,
fenac_user date not null,
ciudad_naci varchar(50) not null,
ID_curso int,
nombre_foto varchar(100),
ruta_foto varchar(250),
horas int default 0,
usuario varchar(30) not null,
contraseña varchar(60) not null,
ID_nivel int not null,
foreign key (ID_curso) references curso(ID_curso) on delete cascade on update cascade,
foreign key (ID_nivel) references nivel_usuario(ID_nivel) on delete cascade on update cascade
)Engine = InnoDB;

create table documento(
ID_doc int not null auto_increment primary key,
DOC_user int not null,
nombre_doc varchar(100),
ruta_doc varchar(250),
fecha_subida datetime not null,
horas_trabaj int not null,
foreign key (DOC_user) references usuario(DOC_user) on delete cascade on update cascade
)Engine = InnoDB;

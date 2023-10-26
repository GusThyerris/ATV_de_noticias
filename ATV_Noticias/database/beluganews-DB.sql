create database beluganews;
use beluganews;

create table usuario (	id int auto_increment primary key,
						nome varchar(35) not null,
						tipo char(1) not null,
						ativo boolean
);

insert into usuario values (0, 'gustavo paiva', 0, 1);

select * from usuario;

select * from usuario u inner join login l on u.id = l.id;

create table login (id int,
					email varchar(35) unique not null,
                    senha char(8) not null,
                    foreign key (id) references usuario (id)
);
 
insert into login values (1, 'gustavo@gmail.com', 1234);

create table noticia (	num_noticia int auto_increment primary key,
						tipo char(1) not null,
                        titulo varchar(50) unique not null,
                        corpo varchar (1000) not null,
                        id_autor int,
                        id_editor int,
                        foreign key (id_autor) references usuario (id),
                        foreign key (id_editor) references usuario (id)
);
create database MecanicaGomes;
use MecanicaGomes;

create table cliente(
	id_cliente integer auto_increment,
	nome varchar(60),
    email varchar(45) not null,
    senha varchar(45) not null,
	endereco varchar(60),
	telefone varchar(45),
	primary key(id_cliente)
);

	insert into cliente( nome, email,senha,endereco,telefone)
	values('Irlan','irlan@gmail.com','1234', 'Rua A', 'xx - xxxxx - xxxx');


create table peca(
	id_peca integer auto_increment,
	nome varchar(60),
	preco varchar(45),
	estoque varchar(45),
    imagem varchar(60),
	primary key(id_peca)
);

	insert into peca( nome, preco, estoque,imagem)
	values('Catraca de freio','120', '10','images/catracaDeFreio.png'),
    ('Feixe de Mola','70', '30','images/feixeDeMola.jpg'),('Juntas de Cabecote','120', '15','images/juntas.jpg'),
    ('Bracadeira','120', '15','images/brassadeira.jpg'),('Cuica de Freio','250', '15','images/cuicaDeFreio.jpg'),
    ('Farol','120', '15','images/farol.jpg'), 
    ('Lona de Freio','120', '15','images/lonaDeFreio.jpg'),('Maneco','120', '15','images/maneco.jpg'), 
    ('Parafuso de Centro','120', '15','images/ParafusoCentro.jpg'),('Pastilha de freio','120', '15','images/pastilha-de-freio.jpg'),
    ('Reparo de valvula','120', '15','images/reparoValvula.jpg'),('Cinematico do Rodoar','90', '15','images/Cinematico-do-Rodoar.jpg');



create table peca_cliente(
	id_peca_cliente integer auto_increment,
    id_cliente_fk integer,
    id_peca_fk integer,
    data_compra varchar(45),
    primary key(id_peca_cliente),
    foreign key(id_cliente_fk) references cliente(id_cliente),
    foreign key(id_peca_fk) references peca(id_peca)
);

create table pagamento( 
	id_pagamento integer not null,
    tipo varchar(60),
	primary key(id_pagamento)
);

create table cliente_pagamento(
	id_cliente_pag integer auto_increment,
    id_pagamento_fk integer,
    id_cliente_fk integer,
    valor_total varchar(45),
    primary key(id_cliente_pag),
    foreign key(id_cliente_fk) references cliente(id_cliente),
    foreign key(id_pagamento_fk) references pagamento(id_pagamento)
);

    
    
create table servico( 
	id_servico integer auto_increment,
	preco varchar(45),
    tipo varchar(60),
	primary key(id_servico)
);

    
create table funcionario( 
	id_funcionario integer not null auto_increment,
	telefone varchar(45),
    endereco varchar(60),
    nome varchar(60),
    salario varchar(45),
    senha varchar(45),
	primary key(id_funcionario)
);


create table servico_funcionario(
	id_serv_func integer auto_increment ,
    id_servico_fk integer,
	id_funcionario_fk integer,
    id_cliente_fk integer,
    data_inicio varchar(45),
    data_fim varchar(45),
    primary key(id_serv_func),
	foreign key(id_servico_fk) references servico(id_servico),
    foreign key(id_funcionario_fk) references funcionario(id_funcionario),
    foreign key(id_cliente_fk) references cliente(id_cliente)
);

create table contato (

 id integer primary key auto_increment,
 nome varchar(45),
 email varchar(45),
 endereco varchar(45),
 descricao varchar(45),
 data_servico varchar(45)


);
create database DBcrud;

use DBcrud;

drop table TB_cliente;

select * from TB_cliente;
select * from TB_funcionarios;

/*criando a tabela de clientes*/
create table TB_cliente(
	id_cliente int primary key auto_increment,
    nome_fantasia varchar(40),
    cnpj varchar(18),
    telefone varchar(18),
    email varchar(40)
);
/*criando a tabela de funcionarios*/
create table TB_funcionarios(
	id_cliente int primary key auto_increment,
    nome_funcionario varchar(40),
    email varchar(40),
    cpf varchar(13),
    cargo varchar(40)
);

/*inserindo valores manuais TB_cliente*/
insert into TB_cliente(
	nome_fantasia,
    cnpj,
    telefone,
    email 
)
values(
	"Guilherme Ramos",
    "12.456.789/0001-90",
    "+55(16)99291-9192",
    "guilherminho@gmail.com"
);
/*inserindo valores manuais TB_funcionarios*/
insert into TB_funcionarios(
    nome_funcionario,
    email,
    cpf,
    cargo 
)
values(
	"Gabriel Campos",
    "gabrielzim@gmail.com",
    "123.456,789-90",
    "ads"
);
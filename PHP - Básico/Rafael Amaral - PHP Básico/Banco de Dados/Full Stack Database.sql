create database if not exists fseletro
default character set utf8mb4;

use fseletro;

create table produtos(
	id_produto int auto_increment not null, 
    categoria varchar(100),
    descricao varchar(500),
    preco_antigo float(8,2),
    preco_venda float(8,2),
    imagem varchar(100),
	primary key (id_produto)
)default charset utf8mb4;

insert into produtos 
(categoria, descricao, preco_antigo, preco_venda, imagem)

values 
("geladeiras", "Geladeira Brastemp Frost Free Duplex 462 Litros", 4099.00, 3599.00, "Imagens/Geladeira%20Brastemp%20Frost%20Free%20Duplex%20462%20Litros.png"),
("geladeiras", "Geladeira Consul Frost Free Duplex 340 Litros", 3859.00, 3699.00, "Imagens/Geladeira%20Consul%20Frost%20Free%20Duplex%20340%20Litros.png"),
("geladeiras", "Geladeira Panasonic Frost Free Duplex 425 Litros", 5799.00, 4689.00, "Imagens/Geladeira%20Panasonic%20Frost%20Free%20Duplex%20425%20Litros.jpg"),
("fogoes", "Fogão 4 Bocas Esmaltec com Forno Limpa Fácil", 589.00, 469.00, "Imagens/Fog%C3%A3o%204%20Bocas%20Esmaltec%20com%20Forno%20Limpa%20F%C3%A1cil.jpg"),
("fogoes", "Fogão 5 Bocas Brastemp Inox", 5799.00, 4689.00, "Imagens/Fog%C3%A3o%205%20Bocas%20Brastemp%20Inox%20com%20Acendimento%20Autom%C3%A1tico.jpg"),
("microondas", "Microondas Midea 20 Litros", 499.00, 399.00, "Imagens/Microondas%20Midea%2020%20Litros.jpg"),
("microondas", "Microondas Electrolux 20 Litros", 599.00, 429.00, "Imagens/Microondas%20Electrolux%2020%20Litros.jpg"),
("microondas", "Microondas Electrolux 20 Litros", 699.00, 548.90, "Imagens/Microondas%20Electrolux%2034%20Litros.jpg"),
("lava_roupas", "Lavadora de Roupas Consul 12kg", 1699.00, 1549.00, "Imagens/Lavadora%20de%20Roupas%20Consul%2012kg.jpg"),
("lava_roupas", "Lavadora de Roupas Brastemp 15kg", 2699.00, 1999.00, "Imagens/Lavadora%20de%20Roupas%20Brastemp%2015kg.jpg"),
("lava_loucas", "Lava-Louças Electrolux 8 Serviços", 2399.00, 2199.00, "Imagens/Lava-Lou%C3%A7as%20Electrolux%208%20Servi%C3%A7os.jpg"),
("lava_loucas", "Lava-Louças Electrolux 10 Serviços", 3699.00, 2799.00, "Imagens/Lava-Lou%C3%A7as%20Electrolux%2010%20Servi%C3%A7os.jpg");

create table pedidos(
	id_pedido int auto_increment not null,
    cliente varchar(50) not null,
    endereco varchar(150) not null,
    telefone varchar(14) not null,
    produto varchar(30) not null,
    valor_unitario int not null,
    quantidade int not null default '1',
    valor_total int not null,
    primary key (id_pedido)
)default charset = utf8mb4;
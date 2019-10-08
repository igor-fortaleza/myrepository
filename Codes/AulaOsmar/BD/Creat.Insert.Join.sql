CREATE DATABASE WebLoja
GO

use WebLoja
go

Create Table Fabricante(
	ID int identity not null,
	Descricao varchar(100) not null,

	Constraint PK_Fabric Primary Key (ID),
	Constraint UN_Fabric Unique(Descricao)
)
go

Create Table Produtos(
	ID int identity not null,
	Descricao varchar(100) not null,
	FabricanteID int null,

	Constraint PK_Prod Primary Key(ID),
	Constraint UN_Prod UNIQUE(Descricao),
	Constraint FK_FabricProd Foreign Key (FabricanteID) References Fabricante(ID)
)


insert Fabricante Values ('Microsoft')
INSERT Produtos VALUES ('Teclado', 1), ('Mouse', 1), ('Monitor', 1)
INSERT Produtos(Descricao) Values ('Porta-Notebook')
select * from Produtos


INSERT Produtos(Descricao, FabricanteID) VALUES ('Monitor 16.5', 2)

select * from Produtos P left join Fabricante F on p.FabricanteID = f.ID 
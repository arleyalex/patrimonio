select * from categoria;
select * from predio;
select * from sala;
select * from bempatrimonial;


select bempatrimonial.descricao, categoria.nome from bempatrimonial, categoria
where categoria.codigo = bempatrimonial.codcat
union
select sala.codpredio, predio.nome from sala, predio
where predio.codigo = sala.codpredio;

SELECT bempatrimonial.descricao, categoria.nome, predio.nome
from bempatrimonial, categoria, predio
where bempatrimonial.codcat=categoria.codigo and c;

--, predio, categoria;
inner join categoria on (bempatrimonial.codcat = categoria.codigo)
inner join sala on (sala.codpredio = predio.codigo)
inner join predio on (predio.codigo = sala.codpredio);
;
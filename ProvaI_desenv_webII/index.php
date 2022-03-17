<?php

require('autoload.php');

$head = new Head("Prova I - Desenv Web II");
$head->addProp(new Link("https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css", "stylesheet", "sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl", "anonymous"));

$body          = new Body();

$container     = new Div("container");

$areaprincipal = new Div("row");

$miolo         = new Div("col-sm-40 bg-secundary text-white");

if(isset($_GET["action"]))
{
	switch ($_GET["action"]) 
	{
		case 'cadastrar':
			$miolo->addElementToDiv(new FormularioRegioes(null));
			break;

		case 'alterar':
			if(isset($_GET["id"]) && !empty($_GET["id"]))
			{
				$miolo->addElementToDiv(new FormularioRegioes($_GET["id"]));
			} 
			break;

		case 'deletar':
			if(isset($_GET["id"]) && !empty($_GET["id"]))
			{
				$conn = new Conexao();
				$conn->getConn()->prepare("DELETE FROM REGIAO WHERE IDRegiao = " . $_GET["id"])->execute();

				$miolo->addElementToDiv(new CrudRegioes('Regiões'));
			} 
			break;

		default:
			$miolo->addElementToDiv(new CrudRegioes('Regiões'));
			break;
	}
} 

else 
{
	$miolo->addElementToDiv(new CrudRegioes('Regiões'));
}

$areaprincipal->addElementToDiv($miolo);

$container->addElementToDiv($areaprincipal);

$body->addProp($container);

echo (new Html("pt-br", $head, $body));
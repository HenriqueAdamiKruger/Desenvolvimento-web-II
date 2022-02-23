<?php
include "lib2/li.class.php";
include "lib2/ul.class.php";
include "lib2/html.class.php";
include "lib2/meta.class.php";
include "lib2/title.class.php";
include "lib2/doctype.class.php";
include "lib2/body.class.php";
include "lib2/head.class.php";

$doctype = new doctype("html");
$body    = new body("<h1>TESTE HTML - HENRIQUE</h1>");
$meta    = new meta('charset="UTF-8"');
$metaII  = new meta('http-equiv="X-UA-Compatible" content="IE=edge"');
$metaIII = new meta('name="viewport" content="width=device-width, initial-scale=1.0"');
$title   = new title('Template - HTML');

$head = new head($meta . $metaII . $metaIII . $title . $body);

$html = new html("pr-br",($head));

echo $doctype;

echo $html;
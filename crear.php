<?php

$datos=array();

$datos[]=array
(
    "id"=>"1",
    "nombre"=>"Pedro Pérez",
    "correo"=>"pedro@gmail.com",
);

$datos[]=array
(
    "id"=>"2",
    "nombre"=>"Juan Martínez",
    "correo"=>"juanito@gmail.com",
);

$datos[]=array
(
    "id"=>"3",
    "nombre"=>"Jorge Yáñez",
    "correo"=>"gorge@gmail.com",
);
header('Content-Type: text/html; charset=utf-8');
$doc=new DOMDocument();

$doc->formatOutput=true;

$r=$doc->createElement("usuarios");

$doc->appendChild($r);

foreach($datos as $dato)
{
    $p=$doc->createElement("personas");
    
    $id=$doc->createElement("id");
    $id->appendChild($doc->createTextNode($dato["id"]));
    $p->appendChild($id);
    
    $nom=$doc->createElement("nombre");
    $nom->appendChild($doc->createTextNode($dato["nombre"]));
    $p->appendChild($nom);
    
    $correo=$doc->createElement("correo");
    $correo->appendChild($doc->createTextNode($dato["correo"]));
    $p->appendChild($correo);
    
    $r->appendChild($p);
}

echo $doc->saveXML();

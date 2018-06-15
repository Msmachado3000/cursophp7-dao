<?php 

require_once("config.php");

//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);

// Carrega Um Usuario
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

//Carrega uma lista de todos os usuarios
//$lista = Usuario::getList(); // Isso pode ser assim porque é static a funcção getList
//echo json_encode($lista); 

//Carrega uma lista de usuario buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usuario pelo login e senha
//$usuario = new Usuario();
//$usuario -> login("msmachado3000", "12345");
//echo $usuario;

$aluno = new Usuario("aluno2", "lkjhk&");

$aluno->insert();

echo $aluno;

 ?>
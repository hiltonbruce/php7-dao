<?php

  require_once("config.php");

  $sql = new Sql();

  // $usuarios = $sql->select("SELECT * FROM tb_usuarios");
  //
  // echo json_encode($usuarios);

  // Carrega um só usuário
  // $root = new Usuario();
  // $root->loadById(5);

  // echo $root;

  // Carrega uma lista de usuários
  // $lista = Usuario::getList();
  // echo json_encode($lista);

  //Carrega uma lista de usuários buscando pelo login
  // $search = Usuario::search('o');
  // echo json_encode($search);

  //Carrega um usário usando o login e a senha
  // $usuario = new Usuario();
  // $usuario->login('root','!@#$%123');
  // echo $usuario;
//Criando novo usuário
  // $alt = rand(5, 10);
  // $aluno = new Usuario('aluno'.$alt,'@lun0'.$alt);
  //
  // $aluno->insert();
  //
  // echo $aluno;

  $usuario = new Usuario();

  $usuario->loadById(12);

  $usuario->update('professor','!@#$%*');

  echo $usuario;
 ?>

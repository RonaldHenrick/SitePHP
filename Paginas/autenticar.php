<?php
  $db_host = 'localhost';
  $db_user = 'root';
  $db_pass = 'rfsn199171';

  $mysqli = new mysqli($db_host, $db_user, $db_pass);

  if($mysqli->connect_error){
    die('Erro ao conectar com o banco de dados: ' . $mysqli->connect_error);
  }

  $username = $_POST['username'];
  $password = $_POST['password'];
  $user_type = $_POST['user_type'];

  $query = "SELECT id, username, user_type FROM usuarios WHERE username =? AND password = ? AND user_type = ?";
  $stmt = $mysqli->prepare($query);
  $stmt->execute();
  $stmt->store_result();

  if($stmt->num_rows == 1){
    $stmt->bind_result($user_id,$user_username,$user_type);
    $stmt->fetch();
    $_SESSION['user_id'] = $user_id;
    $_SESSION['user_username'] = $user_username;
    $_SESSION['user_type'] = $user_type;

    switch ($user_type) {
      case 'aluno':
          header('Location: aluno.php');
          break;
      case 'administrador':
          header('Location: administrador.php');
          break;
      case 'professor':
          header('Location: professor.php');
          break;
  }
} else {
  // Login falhou
  header('Location: login.php?erro=1');
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<?php
if(isset($_POST['submit'])) {
  $nome = $_POST['nome'];
  $cognome = $_POST['cognome'];
  $nickname=$_POST['nickname'];
  $passwd=$_POST['passwd'];

  $conn = mysqli_connect("localhost", "Francesco", "1234", "esercizio");

  $sql = "INSERT INTO utenti (nome, cognome, nickname, passwd)
  VALUES ('$nome', '$cognome','$nickname','$passwd')";

  if (mysqli_query($conn, $sql)) {
    echo "Registrazione effettuata con successo";
  } else {
    echo "Errore nella registrazione: " . mysqli_error($conn);
  }
  mysqli_close($conn);
}

?>
<div class="container my-5">
  <div class="card mx-auto" style="width: 500px;">
    <div class="card-body">
    <form method="POST">
  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome" placeholder="Inserisci il tuo nome">
  </div>
  <div class="form-group">
    <label for="cognome">Cognome</label>
    <input type="text" class="form-control" id="cognome" name="cognome" placeholder="Inserisci il tuo cognome">
  </div>
  <div class="form-group">
    <label for="nickname">Nickname</label>
    <input type="text" class="form-control" id="nickname" name="nickname" placeholder="Scegli un nickname">
  </div>
  <div class="form-group">
    <label for="passwd">Password</label>
    <input type="passwd" class="form-control" id="passwd" name="passwd" placeholder="Scegli una password">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Registrati</button>
</form>

</div>
</div>
</div>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>


















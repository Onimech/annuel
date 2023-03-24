<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="mise_en_page.css">
	<title> Connexion </title>
</head>
<body>
<h1> Connexion </h1>
<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"> Adresse mail </label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"> </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"> Mot de passe </label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
  </div>
  <button type="submit" class="btn btn-primary">Se connecter</button>
</form>
</body>
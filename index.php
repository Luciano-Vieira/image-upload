<!DOCTYPE html>
<?php
		session_start();
?>
<html>
    <head>

<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta charset="UTF-8">
        <title>colecionador de dados</title>

<link rel="stylesheet" href="./bootstrap.css">
    </head>
    <body>
<div class="container">
        <h1>Introduza os dados para serem colectados</h1>
		<?php
				if(isset($_SESSION["error"]))
						//echo "<p> $_SESSION['error'] </p>";
		?>
    <div class="form-group">
        <form class="form" enctype="multipart/form-data" method="POST" action="colect.php" >
            <fieldset>
                <legend>Informação pessoal</legend>
                <label for="nome">Nome:</label> <br>
                <input class="form-control" id="nome" type="text" name="name" placeholder="digita o teu nome"><br>
                <label for="nasc">Data de nascimento:</label> <br>
                <input class="form-control" id="nasc" type="date" name="data_nasc" placeholder="digita a tua data de nascimento"><br>
                <label for="email">Email:</label> <br>
                <input class="form-control" id="email" type="email" name="email" placeholder="digita o teu email"><br>
                <label for="foto">Fotografia:</label> <br>
                <input class="form-control" id="foto" type="file" name="fotografia" accept="image/*" ><br>
                <label for="senha">Senha:</label> <br>
                <input class="form-control" id="senha" type="password" name="senha" placeholder="digita a tua senha"><br>
            </fieldset>
            <fieldset>
                <legend>Outras informações</legend>
                <label for="gene">Género:</label> <br>
                M<input class="" id="gene" type="radio" name="genero" value="Masculino"><br>
                F<input id="gene" type="radio" name="genero" value="Femenino"><br>
                <label for="sim">Aceito os termos e condições</label><input id="sim" type="checkbox" name="term_cond" value="sim">
            </fieldset>
            <button class="btn btn-success btn-block form-control" type="submit">Enviar</button>
        </form>
        </div>
</div>
    </body>
</html>

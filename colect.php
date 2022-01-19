<?php

$redir = "index.php";
if (isset($_POST["name"]) && isset($_POST["data_nasc"])  && isset($_FILES["fotografia"])   && isset($_POST["email"]) && isset($_POST["senha"]) ) {
    $extensao = strtolower(substr($_FILES['fotografia']['name'],-4));
	 $new_name = date("Y.m.d-H.i.s") . $extensao; 
	 $dir = './imagens/'; 
	 move_uploaded_file($_FILES['fotografia']['tmp_name'], $dir.$new_name);
	$name = $_POST["name"];
    $data_nasc = $_POST["data_nasc"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    echo "<h1>Dados pessoais</h1>
    				<p>Nome: $name</p>
    				<p>Nome: $data_nasc</p>
    				<p>Nome: $email</p>
    				<p>Nome: $senha</p>";  

	echo '<div class="alert alert-success" role="alert" align="center"> 
	<img src="./imagens/' . $new_name . '" class="img img-responsive img-thumbnail" width="200"> <br>
	</div>';
}else {
	$_SESSION["error"] = "Atenção:Campos em branco";
    header("Location:$redir");
}

if (isset($_POST["genero"]) && isset($_POST["term_cond"])) {
    $genero = $_POST["genero"];
    $term_cond = $_POST["term_cond"];
    
    echo 	"<h1>Outros dados:</h1>
    				<p>Género: $genero</p>
    				<p>Nome: $term_cond</p>";
   
}else {
	$_SESSION["error"] = "Atenção:Campos em branco";
    header("Location:$redir");
}

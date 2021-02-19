<?php include_once"config.php";?>
<?php 
$nome = $_POST['nome'];
$ra = $_POST['ra'];
$email = $_POST['email'];
$turma = $_POST['turma'];
$conn = mysqli_connect($servidor,$dbusuario,$dbsenha,$dbname);

mysqli_select_db($conn,'$dbname');
$sql = "INSERT INTO alunos (nome,ra,email,turma) VALUES ('$nome','$ra','$email','$turma')";

if(mysqli_query($conn,$sql)){
    echo "<script>alert('Salvei seus dados!'); window.location = 'index.php';</script>";
}
else{
    echo "deu erro ". $sql . "<br>" . mysqli_error($conn);   
}
mysqli_close($conn);

?>
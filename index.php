<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <lengend>Formulario</lengend>
        <form action="insere_aluno.php" method="post">
            <label for="nome">Nome:</label><br>
            <input type="text" id="inome" name="nome" required><br>
           
            <label for="ra">RA:</label><br>
            <input type="text" id="ira" name="ra" required><br>

            <label for="nome">Email:</label><br>
            <input type="email" id="iemail" name="email" required><br>

            Turma:<select name="turma">
                <option >A</opition>
                <option>B</opition>
                <option>C</opition>
                  </select><br>
               <input type="submit" >

        </form>
    </fieldset>
    
    <?php
    
    ?>
</body>
</html>


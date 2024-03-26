<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="imagex/png" href="../assets/group.png">
    
    <title>SCD: Cadastro</title>
</head>
<body>
    <header>
        <img class="icon" src="../assets/group.png"/>
        <nav>
            <a href="../index.php">Inicio</a>
            <a href="">Incluir</a>
            <a href="formlistadev.php?op=lista">lista</a>
        </nav>
    </header>
    <section class="home">
        <?php
            $operacao = $_REQUEST['op'];
            if($operacao=="alterar") {
                include("../controller/devcontroller.php");
                $res = DevController::resgatarPorCpf($_REQUEST["cpf"]);
                $qtd = $res->rowCount();
                $row = $res->fetch(PDO::FETCH_OBJ);
                $nome = $row->nome;
                $cpf = $row->cpf;
                $email = $row->email;
                $telefone = $row->telefone;
                $cargo = $row->id_cargo;
                $git = $row->gitlink;
                $operacao = "alterar";

            } else {
                $nome = "";
                $cpf = "";
                $email = "";
                $telefone = "";
                $cargo = "";
                $git = "";
                $operacao = "incluir";
            }
           
            print "<div class='center'>";
            print "<form class='form-center' method='post' action='../controller/processadev.php'>";
            print "<label class='label' for='nome'>Nome: </label>";
            print "<input class='input' type='text' name='nome' value=" . $nome . ">";
            print "<label class='label' for='cpf'>CPF:</label>";
            print "<input class='input' type='text' name='cpf' value=" . $cpf . ">";

            print "<label class='label' for='email'>E-mail:</label>";
            print "<input class='input' type='text' name='email' value=" . $email . ">";



            print "<label class='label' for='telefone'>Telefone:</label>";
            print "<input class='input' type='text' name='telefone' value=" . $telefone . ">";

            print "<label class='label' for='telefone'>Github:</label>";
            print "<input class='input' type='text' name='git' placeholder='Nome do perfil do Github' value=" . $git . ">";

            print "<input type='hidden' name='op' value='$operacao'>";

            print "<label class='label for='select'>Cargo</label>";
            print "<select name='select' class='select'>";
            print "<option class='select' value='1'>Trainer</option>";
            print "<option class='select' value='2'>Desenvolvedor front-end</option>";
            print "<option class='select' value='3'>Desenvolvedor full-stack</option>";
            print "</select>";


            print "<input class='submit' type='submit' value='$operacao'>";

            print "</form>";
            print "</div>";
            
            
            
        ?>
    </section>
</body>
</html>
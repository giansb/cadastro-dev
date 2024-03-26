<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../index.css">
    <link rel="shortcut icon" type="imagex/png" href="../assets/group.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCD: Cadastros</title>
</head>
<body>
    <header>
        <img class="icon" src="../assets/group.png"/>
        <nav>
            <a href="../index.php">Inicio</a>
            <a href="formdev.php?op=incluir">Incluir</a>
            <a href="">lista</a>
        </nav>
    </header>

    <?php
        include("../controller/devcontroller.php");
        $res = DevController::listarDevs();
        $qtd = $res->rowCount();
        if($qtd>0){
            print "<div class='home'>";
            print "<table class='table'>";
            print "<tr>";
            print "<th>Dev</th>";
            print "<th>Nome</th>";
            print "<th>E-mail</th>";
            print "<th>Github</th>";
            print "<th>Cargo</th>";
            print "<th></th>";
            print "</tr>";
            while($row = $res->fetch(PDO::FETCH_OBJ)) {

                $cargo_nome = "";
                switch ($row->id_cargo) {
                    case '1':
                        $cargo_nome = "TRAINER";
                        break;
                    case '2':
                        $cargo_nome = "FRONT-END";
                        break;
                    case '3':
                        $cargo_nome = "FULL-STACK";
                        break;
                    
                    default:
                        # code...
                        break;
                }

                print "<tr>";
                print "<td>" . "<img style='width: 150px' src='https://github.com/" . $row->gitlink . ".png'/>" . "</td>";
                print "<td>" . $row->nome . "</td>";
                print "<td>" . $row->email . "</td>";
                print "<td>" . '<a href="https://github.com/'. $row->gitlink .'/" target=”_blank”>'. $row->gitlink .'</a>' . "</td>";
                print "<td>" . $cargo_nome . "</td>";

                print "<td>
                    <button class='button-alterar' onclick=\"location.href='../view/formdev.php?op=alterar&cpf=" . $row->cpf ."';\">Alterar</button>
                    <button class='button-remover' onclick=\"if(confirm('Tem certeza que deseja excluir?')) {
                        location.href='../controller/processadev.php?op=excluir&cpf=" . $row->cpf . "'; }
                        else {false;}\">Excluir</button>
                    </td>";

                print "<tr>";

                

                echo "</form>";
                print "</tr>";           
            }

            print "</table>";
            print "</div>";
        } else {
            print "<div class='home'>";
            echo "<h1>Nenhum registro encontrado</h1>";
            print "</div>";
        }
    ?>
</body>
</html>
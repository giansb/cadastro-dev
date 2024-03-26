<?php
    switch($_REQUEST['op']) {
        case "incluir":
            incluir();
            
            break;
        case "alterar":
            alterar();
            break;
        case "excluir":
            excluir();
            break;
        case "listar":
            listar();
        default:
        echo "não encontrou chave";
    }

    function incluir() {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $cpf = $_POST["cpf"];
        $cargo = $_POST["select"];
        $telefone = $_POST["telefone"];
        $git = $_POST["git"];

        include("devcontroller.php");

        $control = new DevController();
        $control->cadastrarDev($nome, $email, $cpf, $cargo, $telefone, $git);
    }

    function alterar() {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $cpf = $_POST["cpf"];
        $cargo = $_POST["select"];
        $telefone = $_POST["telefone"];
        $git = $_POST["git"];

        include("devcontroller.php");

        $control = new DevController();
        $control->alterarDev($nome, $email, $cpf, $cargo, $telefone, $git);
    }

    function excluir() {
        $cpf = $_REQUEST['cpf'];
        include("devcontroller.php");
        $control = new DevController();
        $control->excluirDev($cpf);
    }

    function listar() {
        include("..view/formlistadev.php");
    }
?>
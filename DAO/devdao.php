<?php
    class DevDao {
        public function cadastrarDev(DevModel $dev) {
            include_once 'conexao.php';
            $conex = new Conexao();
            $conex->fazConexao();
           
            
             $sql = "INSERT INTO usuario (cpf, nome, email, id_cargo, telefone, gitlink) VALUES ('{$dev->getCpf()}', '{$dev->getNome()}', '{$dev->getEmail()}', '{$dev->getCargo()}' , '{$dev->getTelefone()}', '{$dev->getGit()}')";

             $conex->conn->query($sql); 

             if($conex) {
                
                print "<script>alert('Dev salvo com sucesso')</script>";
                echo "<script>window.location.href = '../view/formdev.php?op=incluir';</script>";
                
                
             } else {
                print "<script>alert('Ops! Aconteceu algum erro inesperado')</script>";
             }

            
        }

    public function listarDevs() {
        include_once 'conexao.php';
        $sql = "SELECT * FROM usuario ORDER BY nome";
        $conex = new Conexao();
        $conex->fazConexao();

        return $conex->conn->query($sql); 
    }

    public function excluirDev($cpf) {
        include_once 'conexao.php';
        $conex = new Conexao();
        $conex->fazConexao();

        $sql = "DELETE FROM usuario where cpf ='$cpf'";

        $res = $conex->conn->query($sql);

        if($res) {
            echo "<script>alert('Desenvolvedor deletado com sucesso')</script>";
            echo "<script>window.location.href = '../view/formlistadev.php?op=listar';</script>";
        } else {
            echo "<script>alert('Ops! Ocorreu algum erro ao deletar o desenvolvedor')</script>";
        }

    }
    
    public function resgatarPorCpf($cpf) {
        include_once 'conexao.php';
        $conex = new Conexao();
        $conex->fazConexao();

        $sql = "SELECT  * FROM usuario WHERE cpf='$cpf'";
        return $conex->conn->query($sql); 
    }

    public function alterarDev(DevModel $dev) {
        include_once 'conexao.php';
        $conex = new Conexao();
        $conex->fazConexao();

        $sql = "UPDATE usuario SET cpf='{$dev->getCpf()}', nome='{$dev->getNome()}', email='{$dev->getEmail()}', id_cargo='{$dev->getCargo()}' , telefone='{$dev->getTelefone()}' , gitlink='{$dev->getGit()}' WHERE cpf='{$dev->getCpf()} '";

        $res = $conex->conn->query($sql);

        if($res) {
            echo "<script>alert('Desenvolvedor alterado com sucesso')</script>";
            echo "<script>window.location.href = '../view/formlistadev.php?op=listar';</script>";
        } else {
            echo "<script>alert('Ops! Ocorreu algum erro ao alterar o desenvolvedor')</script>";
        }
    }

    }


    
?>
<?php
    class DevController{
        public static function cadastrarDev($nome, $email, $cpf, $cargo, $telefone, $git) {
            include("../model/devmodel.php");
            $dev = new DevModel($nome, $email, $cpf, $cargo, $telefone, $git);
            $dev->cadastrarDev($dev);
        }

        public static function listarDevs() {
            include("../model/devmodel.php");
            $model = new DevModel(null, null, null, null, null, null);
            return $model->listarDevs();
        }

        public static function resgatarPorCpf($cpf) {
            include("../model/devmodel.php");
            $model = new DevModel(null, null, null, null, null, null);
            return $model->resgatarPorCpf($cpf);
        }

        public static function alterarDev($nome, $email, $cpf, $cargo, $telefone, $git) {
            include("../model/devmodel.php");
            $dev = new DevModel($nome, $email, $cpf, $cargo, $telefone, $git);
            $dev->alterarDev($dev);
        }

        public static function excluirDev($cpf) {
            include("../model/devmodel.php");
            $dev = new DevModel(null, null, null, null, null, null);
            $dev->excuirDev($cpf);
        }


    }
?>
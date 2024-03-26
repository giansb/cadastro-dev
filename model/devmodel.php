<?php
    class DevModel {
        protected $nome;
        protected $cpf;
        protected $email;
        protected $cargo;
        protected $telefone;
        protected $git;

    
        public function __construct($nome, $email, $cpf, $cargo, $telefone, $git) {
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->email = $email;
            $this->cargo = $cargo;
            $this->telefone = $telefone;
            $this->git = $git;
        }

        public function getnome() {
            return $this->nome;
        }

        public function getCpf() {
            return $this->cpf;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getCargo() {
            return $this->cargo;
        }

        public function getTelefone() {
            return $this->telefone;
        }

        public function getGit() {
            return $this->git;
        }

        public function setNome($nome) {
            $this->nome = $nome;
            return $this;    
        }

        public function setCpf($cpf) {
            $this->cpf = $cpf;
            return $this;    
        }

        public function setEmail($email) {
            $this->email = $email;
            return $this;    
        }

        public function setCargo($cargo) {
            $this->cargo = $cargo;
            return $this;    
        }

        public function setTelefone($telefone) {
            $this->telefone = $telefone;
            return $this;    
        }

        public function setGit($git) {
            $this->git = $git;
            return $this;
        }

        public function cadastrarDev(DevModel $dev) {
            include("../dao/devdao.php");
            $model = new DevDao();
            $model->cadastrarDev($dev);
        }

        public function listarDevs() {
            include("../dao/devdao.php");
            $model = new DevDao(null);
            return $model->listarDevs();
        }

        public function resgatarPorCpf($cpf) {
            include("../dao/devdao.php");
            $model = new DevDao(null);
            return $model->resgatarPorCpf($cpf);
        }

        public function alterarDev(DevModel $dev) {
            include_once "../dao/devdao.php";
            $dev = new DevDao();
            $dev->alterarDev($this);
        }

        public function excuirDev($cpf) {
            include_once "../dao/devdao.php";
            $dev = new DevDao();
            $dev->excluirDev($cpf);
        }
    }
?>
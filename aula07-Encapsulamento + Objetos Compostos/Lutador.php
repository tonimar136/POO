<?php
    require_once 'int_lutadores.php';
    
    class Lutador implements IntLutadores {
        #Atributos
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;
        
        #Construtor
        public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em) {
            $this->nome = $no;
            $this->nacionalidade = $na;
            $this->idade = $id;
            $this->altura = $al;
            $this->setPeso($pe);
            $this->vitorias = $vi;
            $this->derrotas = $de;
            $this->empates = $em;
        }
        
        
        
        public function apresentar() {
            echo 'Lutador:' . $this->getNome() . '<br>';
            echo 'Origem:' . $this->getNacionalidade() . '<br>';
            echo $this->getIdade() . ' anos <br>';
            echo $this->getAltura() . 'm de altura <br>';
            echo 'Pesando' . $this->getPeso() . 'Kg <br>';
            echo 'Ganhou:' . $this->getVitorias() . '<br>';
            echo 'Perdeu:' . $this->getDerrotas() . '<br>';
            echo 'Empatou:' . $this->getEmpates() . '<br>';
        }
        public function status() {
            echo '<p>---------------------------------</p>';
            echo $this->getNome() . '<br>';
            echo 'Peso ' . $this->getPeso() . '<br>';
            echo $this->getVitorias() . ' vitórias <br>';
            echo $this->getDerrotas() . ' derrotas <br>';
            echo $this->getEmpates() . ' empates <br>';
        }
        public function ganharLuta(){
            $this->setVitorias($this->getVitorias() + 1);
        }
        public function perderLuta(){
            $this->setDerrotas($this->getDerrotas() + 1);
        }
        public function empatarLuta(){
            $this->setEmpates($this->getEmpates() + 1);
        }
        
        
        
        private function getNome() {
            return $this->nome;
        }

        private function getNacionalidade() {
            return $this->nacionalidade;
        }

        private function getIdade() {
            return $this->idade;
        }

        private function getAltura() {
            return $this->altura;
        }

        private function getPeso() {
            return $this->peso;
        }

        private function getCategoria() {
            return $this->categoria;
        }

        private function getVitorias() {
            return $this->vitorias;
        }

        private function getDerrotas() {
            return $this->derrotas;
        }

        private function getEmpates() {
            return $this->empates;
        }
        
        

        private function setNome($nome){
            $this->nome = $nome;
        }

        private function setNacionalidade($nacionalidade){
            $this->nacionalidade = $nacionalidade;
        }

        private function setIdade($idade){
            $this->idade = $idade;
        }

        private function setAltura($altura){
            $this->altura = $altura;
        }

        private function setPeso($peso){
            $this->peso = $peso;
            $this->setCategoria();
        }

        private function setCategoria(){
            if($this->peso < 52.2){
                $this->categoria = 'Inválido';
            }elseif($this->peso <= 70.3) {
                $this->categoria = 'Leve';
            }elseif($this->peso <= 83.9){
                $this->categoria = 'Médio';
            }elseif($this->peso <= 120.2){
                $this->categoria = 'Pesado';
            }else{
                $this->categoria = 'Inválido';
            }
        }

        private function setVitorias($vitorias){
            $this->vitorias = $vitorias;
        }

        private function setDerrotas($derrotas){
            $this->derrotas = $derrotas;
        }

        private function setEmpates($empates){
            $this->empates = $empates;
        }


    }
?>
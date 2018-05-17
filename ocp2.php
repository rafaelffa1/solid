<?php 

	// OCP - (Open Close Principle) Faz com que a classe seja aberto para extensão e fechado para modificação
	// Basicamente o objeto não pode extender suas funcionalidades tendo que modificalo toda vez que um recurso nova seja inserido isso violaria o SRP e OCP.
	// Sendo necessario fazer uma interface que comporte outros recursos que passa para o objeto principal que esta sendo utilizada

	/* No codigo usamos um exemplo de upload de arquivo onde queremos mostrar o progresso do upload de um arquivo
	Nesse primeiro código vai demonstrar a vioalção do OCP porque se quisermos alterar para que a classe "Progresso"
	mostre o progresso de uma música digamos, teriamos que modificar o progresso e isso violaria tanto OCP quanto o SRP */



	// --------------------------------------->>  1°

	class Arquivo{

		public $tamanho;
		public $envio;

	}

	class Progresso{

		private $arquivo;

		function __construct(Arquivo $arquivo){
			$this->arquivo = $arquivo;
		}

		function getPorcentagem(){
			return $this->file->envio * 100 / $this->file->tamanho;
		}

	}

	// ---------------------------------------- >>


	// --------------------------------------- >> 2°

	class Arquivo implements MensurarProgresso {
		private $tamanho;
		private $envio;

		public $nome;

		function setTamanho($tamanho){
			$this->tamanho = $tamanho;
		}

		function getTamanho(){
			return $tamanho;
		}

		// Functions de envio get ,set
	}

	class Musica implements MensurarProgresso {
		private $tamanho;
		private $envio;

		public $nome;

		function setTamanho($tamanho){
			$this->tamanho = $tamanho;
		}

		function getTamanho(){
			return $tamanho;
		}
	}

	class MensurarProgresso{
		function getTamanho();
		function getEnvio();
	}

	class Progresso{

		private $mensurarProgresso;

		function __construct(MensurarProgresso $mensurarProgresso){
			$this->mensurarProgresso = $mensurarProgresso;
		}

		function getPorcentagem(){
			return $this->mensurarProgresso->getTamanho() * 100 / $this->mensurarProgresso->getEnvio();
		}

	}

	//  -------------------------------------- >>








<?php 

	// O ISP (Interface Segregation Principle 
	// Preveni metodos serem usadas desnecessariamente por outras classes
	// Preveni classes que tenham metodos desnecessarios.
	//  Um cliente não pode ser forçado a implementar uma interface que nao usa.
	
	
	// No codigo abaixo vamos utilizar o exemplo de Pokemon temos o Charmander que vai receber as funções "ataque e defesa" e
	// temos o Metopod que também receberá essas funções mas o Metapod não faz ataque ele só defende
	// Então no 1° código vai violar o DIP por que a classe Metapod vai receber uma função que não vai ser utiliza.
	// No segundo código vamos abordar um jeito que separe essas funcionalidades com uma interface especifica para cada um.


	// 1°
	interface PokemonInterface {
		public function ataque();
		public function defesa();
		public function voltarParaPokebola();
	}


	class Charmander implements PokemonInterface{
		public function ataque();
		public function defesa();
		public function voltarParaPokebola();
	}

	class Metapod implements PokemonInterface{
		public function ataque(); // vai vim também por causa da nossa interface
		public function defesa();
		public function voltarParaPokebola();

	}

	// Cliente
	class ash {
		public function euEscolhoVoce(PokemonInterface $pokemon){
			public function ataque();
			public function defesa();
			public function voltarParaPokebola();
		}
	}
	


	// 2°

	interface PokemonBatalhaInterface(){
		public function batalha();
	}

	interface PokemonRecuadoInterface(){
		public function defesa();
		public function voltarParaPokebola();
	}

	interface PokemonOfensivoInterface(){
		public function ataque();
	}


	class Charmander implements PokemonBatalhaInterface, PokemonOfensivoInterface, PokemonRecuadoInterface{
		public function ataque();
		public function defesa();
		public function voltarParaPokebola();

		public function batalha(){
			$this->ataque()
			$this->defesa();
			$this->voltarParaPokebola();
		}
	}


	class Metapod implements PokemonBatalhaInterface, PokemonRecuadoInterface{
		public function defesa();
		public function voltarParaPokebola();

		public function batalha(){

			$this->defesa();
			$this->voltarParaPokebola();
		}

	}


	class ash {
		public function euEscolhoVoce(PokemonBatalhaInterface $pokemon){
			$this->batalha();
		}
	}
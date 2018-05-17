<?php 

	// DIP (Dependency Inversion Principle) -  Modulos de alto nivel não podem depender de modulos de baixo nivel
	// O cliente não deve se preocupar com as funções que fazem ele executar ele somente tem que executalas


	//  No codigo abaixo demonstro ainda com o exemplo de Pokemon que as interces uitlizadas para a batalha e
	// a classe Charmander e Ash são um bom exemplo de modulos de alto nivel e baixo nivel

	

	interface PokemonBatalhaInterface(){
		public function ataque();
		public function defesa();
		public function voltarParaPokebola();
	}


	class Charmander implements PokemonBatalhaInterface {
		public function ataque();
		public function defesa();
		public function voltarParaPokebola();

		public function batalha(){
			$this->ataque()
			$this->defesa();
			$this->voltarParaPokebola();
		}
	}


	class ash {
		public function euEscolhoVoce(PokemonBatalhaInterface $pokemon){
			$this->batalha();
		}
	}
<?php 

	/* Basicamente (Single Responsibility Principle) - Principio da responsabilidade unica 
	Faz com que o desenvolvedor veja a parte de negocio mais detalhada, que na hora de fazer a codificação 
	das classes as funções que nela existam seja de resposabilidade unica para cada autor; */

	// No caso de uma farmacia o remedio tem suas funções proprias.
	// Nesse primeiro codigo ele também tem o metodo save() e viola o SRP porque toda vez que mudar a persistencia tera que mudar a classe


	// Ja no segundo tiramos o save da classe Remedio e colocamos no SaveRemdios

	// 1°
	class Remedio {

		function setNome($nome){
			// Setar o nome
		}

		function getNome(){
			return 
		}

		function saveRemedio(){

		}

	}


	// 2°

	class Remedio {

		function setNome($nome){
			// Setar o nome
		}

		function getNome(){
			return 
		}

	}	

	class SaveRemedios {

		function save(Remedio $remedio){
			return funcaox($remedio->getNome());
		}

	}




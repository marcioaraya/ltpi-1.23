<?php

class Televisao {
	
	// atributos
	private $status;
	private $canal;
	private $volume;
	
	// métodos
	public function __construct(){	
    /* este método é o construtor desta classe
    O construtor é o método chamado quando é criada uma instância da classe.
	Por exemplo: 
	   $tv1 = new Televisao();
	   
    No PHP é padronizado o nome __construct() como nome do método construtor.
    Em outras linguagens, como Java, o construtor tem o mesmo nome da classe
    */

    /*
      para acessar um atributo ou método dentro de uma classe, é necessário
      usar o "$this->"
      Observe que não é necessário colocar o $ na frente dos nomes de atributos
      O correto é $this->canal 
      $this->$canal é incorreto (não precisa o $ na frete do canal)
    */	
		$this->status = false;
		$this->canal = 3;
		$this->volume = 10;
	}
	
	public function ligaDesliga(){
		# ! = negação no PHP
		$this->status = !$this->status;
	}
	
	public function aumentaCanal(){
		if ($this->status) {
			if ($this->canal > 100) {
				$this->canal = 3;
			} else {
				$this->canal++;
			}
			
		}
	}
	
	public function diminuiCanal(){
		if ($this->status) {
			if ($this->canal <= 3) {
				$this->canal = 100;
			} else {
				$this->canal--;
			}
			
		}
	}
	
	public function aumentaVolume(){
		if ($this->status) {
			if ($this->volume < 100) {
				$this->volume++;
			}
			
		}
	}
	
	public function diminuiVolume(){
		if ($this->status) {
			if ($this->volume > 0) {
				$this->volume--;
			}
		}
	}

    public function mostraCanal(){
		return $this->canal;
	}
	
	public function mostraVolume(){
		return $this-volume;
	}
	
}


?>
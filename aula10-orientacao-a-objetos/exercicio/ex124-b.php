<?php

class Televisao {
	
	// atributos
	private $status;
	private $canal;
	private $volume;
	
	// métodos
	public function __construct(){	
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
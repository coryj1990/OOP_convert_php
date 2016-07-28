<?php

class Massconvert{

	public function setlbs($lbs){
		$this->initlbs = $lbs;
	}

	public function setkgs($kgs){
		$this->initkgs = $kgs;
	}

	public function setstone($stone){
		$this->initstone = $stone;
	}

	public function lbstokgs(){
		$this->conv = ($this->initlbs)*(0.4536);
		return $this ->conv;
	}

	public function stonetokgs(){
		$this->conv = ($this->initstone)*(0.4536/0.07143);
		return $this ->conv;
	}

	public function kgstolbs(){
		$this->conv = ($this->initkgs)*(1.0/0.4536);
		return $this ->conv;
	}

	public function stonetolbs(){
		$this->conv = ($this->initstone)*(1.0/0.07143);
		return $this ->conv;
	}

	public function lbstostone(){
		$this->conv = ($this->initlbs)*(0.07143);
		return $this ->conv;
	}

	public function kgstostone(){
		$this->conv = ($this->initkgs)*(0.07143/0.4536);
		return $this ->conv;
	}
} 



class Tempconvert{

	public function setF($f){
		$this->f = $f;
	}

	public function setC($c){
		$this->c = $c;
	}

	public function ctof(){
		$this ->conv = ((($this ->c)*(9.0/5.0))+32);
		return $this ->conv;
	}

	public function ftoc(){
		$this ->conv = (($this ->f) - 32)*(5.0/9.0);
		return $this ->conv;
	}
} 

class Distconvert {

	public function setmi($mi){
		$this ->initmi = $mi;
	}

	public function setkm($km){
		$this ->initkm = $km;
	}

	public function mitokm(){
		$this ->conv = ($this ->initmi)*(1.609);
		return $this ->conv;
	}

	public function kmtomi(){
		$this ->conv = ($this ->initkm)*(1.0/1.609);
		return $this ->conv;
	}	

}


?>
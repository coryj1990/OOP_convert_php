<?php

class Massconvert{

	public $lbs;
	public $kgs;
	public $stone;

	public function setlbs($lbs){
		$this -> initlbs = $lbs;
	}

	public function setkgs($kgs){
		$this -> initkgs = $kgs;
	}

	public function setstone($stone){
		$this -> initstone = $stone;
	}

	public function tokgs(){
	if ($lbs != nil) {
		$conv = $lbs*0.4536;
		return $conv;
		}
	elseif ($stone != nil) {
		$conv = $stone *(0.4536/0.07143);
		return $conv;
		}
	}

	public function tolbs(){
	if ($kgs != nil) {
		$conv = $kgs*(1.0/0.4536);
		return $conv;
		}
	elseif ($stone != nil) {
		$conv = $stone*(1.0/0.07143);
		return $conv;
		}
	}

	public function tostone(){
	if ($lbs != nil) {
		$conv = $lbs*0.07143;
		return $conv;
		}
	elseif ($kgs != nil) {
		$conv = $kgs*(0.07143/0.4536);
		return $conv;
		}
	}
} 

class Tempconvert{

	public $f;
	public $c;

	public function setf($f){
		$this->f = $f;
	}

	public function setC($c){
		$this->c = $c;
	}

	public function ctof(){
		$conv = (($c*(9.0/5.0))+32);
		return $conv;
	}

	public function fartoc(){
		$conv = (($f-32)*(5.0/9.0));
		return $conv;
	}
} 

class Distconvert {

	public $mi;
	public $km;

	public function setmi($mi){
		$this-> initmi = $mi;
	}

	public function setkm($km){
		$this-> initkm = $km;
	}

	public function mitokm(){
		$conv = $mi*1.609;
	}

	public function kmtomi(){
		$conv = ($km*(1.0/1.609));
	}	

}



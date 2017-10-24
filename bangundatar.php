<?php

class bangundatar{
	public $p,$l;
	public $s;
	public $a,$t;

    function set_luas1 ($panjang,$lebar){
		$this->p=$panjang;
		$this->l=$lebar;
	}
	function get_luas1(){
		return $this->p * $this->l;
    }     
    function get_keliling1(){
		return 2 * $this->p + 2 * $this->l;
	}
	function set_luas2 ($sisi){
		$this->s=$sisi;
	}
	function get_luas2(){
		return $this->s * $this->s;
    }     
    function get_keliling2(){
		return 4 * $this->s;
    }     
    function set_luas3 ($alas,$tinggi){         
    $this->a=$alas;
	$this->t=$tinggi;     
	}     
	function get_luas3(){        
	 return 1/2 * $this->a * $this->t; 	
	}
	function get_keliling3(){        
	 return 3 * $this->a; 	
	}		
}
$luasbangundatar = new bangundatar;
$luasbangundatar->set_luas1(5,12);
$luasbangundatar->set_luas2(30);
$luasbangundatar->set_luas3(15,20);
echo "Luas Persegi panjang :".$luasbangundatar->get_luas1().'<br>';
echo "Keliling Persegi Panjang :".$luasbangundatar->get_keliling1().'<br>';
echo "Luas persegi :".$luasbangundatar->get_luas2().'<br>';
echo "Keliling persegi :".$luasbangundatar->get_keliling2().'<br>';
echo "Luas segitiga :".$luasbangundatar->get_luas3().'<br>';
echo "Keliling Segitiga :".$luasbangundatar->get_keliling3().'<br>';
?>
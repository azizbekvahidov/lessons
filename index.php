<?php
    
class Form{
	private function arrToStr($attr){
		$str="";
		foreach($attr as $k=>$v){
			$str.="$k='$v' ";
		}
		return $str;
	}
	public function Input($attr){
		$str=$this->arrToStr($attr);
		return "<input $str/>";
	}
	public function TextArea($attr){
		$str=$this->arrToStr($attr);
		return "<textarea $str/>";
	}
	public function Password($attr){
		$str=$this->arrToStr($attr);
		return "<input type=\"password\"$str\">";
	}
	public function Submit($attr){
		$str=$this->arrToStr($attr);
		return "<input type=\"submit\"$str\">";
	}
	public function Open($attr){
		$str=$this->arrToStr($attr);
		return "<form $str>";
	}
	public function close()
	{
		return "</form>";
	}
}

class SmartForm extends Form{
	public function TextArea($attr) {
	$this->str='';
	foreach ($attr as $k=>$v){
	$this->str=$this->str.' '.$k.'='.'"'.$v.'"'.' ';
	if ($k='name' and isset($_REQUEST[$v])){
	$this->str=$this->str.'value='.$_REQUEST[$v].' ';
	}
	}
	return $this->str;
	}
	}

$form=new Form();
echo $form->open(['action'=>'', 'method'=>'GET']);
echo $form->input(['type'=>'text', 'placeholder'=>'Ваше имя', 'name'=>'name']);
echo "<br>";
echo $form->Password(['placeholder'=>'Ваш пароль', 'name'=>'pass']);
echo "<br>";
echo $form->submit(['value'=>'Отправить']);
echo $form->close();
echo $form->TextArea(['placeholder'=>'123', 'value'=>'!!!']);  
echo $form->TextArea(['placeholder'=>'123', 'value'=>'!!!']);  
echo $form->TextArea(['placeholder'=>'123', 'value'=>'!!!']);  



?>
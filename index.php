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



class SmartForm extends Form{
	private $message;

	public function getMessage(){
		return "message => $this->message";
	}

	public function setMessage($message){
		$this->message = $message;
	}

}

?>
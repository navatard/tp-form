<?php 



 class Form 
 {
 	private $data;
 	
 	public function __construct($data = array())
 	{
 		$this->data = $data;
 	 
 	 echo "<h1>";
	 echo "$data";
	 echo "</h1>";

 	}

 	public function addinput ($type, $name, $value, $placeholder){

 		if ($type == 'radio' || $type == 'checkbox') {
 			echo "<input type='$type' name = '$name' value = '$value'>$placeholder<br><br>";
 		}else{
 			echo "<input type='$type' name = '$name' value = '$value' placeholder='$placeholder'><br><br>";
 		}

 	}

 	public function addtextarea ($message){
 		echo "<textarea value='$message' name='$message' placeholder='$message'></textarea><br><br/>";
 	}

 	public function addselect ($nick, $multiple, $options = array()){
 		echo "<select name='$nick' $multiple>";
 		foreach ($options as $option) {
 			echo "<option value='$option'>$option</option>";
 		}
 		echo "</select><br/><br/>";
 	}

 }
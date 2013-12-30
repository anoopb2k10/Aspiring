<?php
	
	//mapping array for language to it's sign
	$character = array ("C"=>"*","Java"=>"[]");
	
	/**
		function for displaying information
	*/
	function info()
	{
		echo "Language Chosen:      ".$_POST['Language']."<br />";
		echo "Question Statement:   ".$_POST['ques_stat']."<br />";
		echo "Function name:        ".$_POST['func_name']."<br />";
		echo "Return Type:          ".$_POST['returnType']."<br />";
		echo "Return Type Dimension:".$_POST['returnDimension']."<br />";
		if($_POST['Language']!="C")
		echo "Class name:           ".$_POST['class_name']."<br />";
		echo "Number of arguments:  ".$_POST['num_args']."<br />";
		
		echo "<br />";
		for ($i=0; $i < $_POST['num_args']; $i++) { 
			echo "Variable_".$i." name: ".$_POST['namefields'.$i]."<br/>";
			echo "Variable_".$i." type: ".$_POST['typefields_'.$i]."<br/>";
			echo "Dimension: ".$_POST['dimfields_'.$i]."<br />";
			echo "<br />";
		}
	}
		
		
	/**
	common code for ALL languages
	return string
	*/
	function common()
	{
			global $character;
			$tmp_code=$_POST['returnType'];
			for ($i=0; $i < $_POST['returnDimension']; $i++) { 
				 $tmp_code.=$character[$_POST['Language']];
			}
			$tmp_code.=" ".$_POST['func_name']."(";
			for ($i=0; $i < $_POST['num_args']; $i++) { 
				$tmp_code.=$_POST['typefields_'.$i];
				
				
				
				for ($it=0; $it < $_POST['dimfields_'.$i]; $it++){
					$tmp_code.=$character[$_POST['Language']];
					
				}
				
				$tmp_code.=" ".$_POST['namefields'.$i];
				$tmp_code.=",";
			}

			if (($_POST['num_args'])>0){
				$tmp_code=rtrim($tmp_code,",");
			}

			$tmp_code.="){". PHP_EOL .PHP_EOL.
			"//Write your code here".
			 PHP_EOL.PHP_EOL ."}";
			return $tmp_code;
	}
	
	/**
		function for generating C default code
		
		return string
	*/
	
	function C()
	{	
			$c_code=common();
			return $c_code;	
	}
	
	
	/**
		function for generating Java default code
		
		return string
	*/
	function Java()
	{
		$java_code="public class ".$_POST['class_name']."{".PHP_EOL;
		$java_code.="public ".common().PHP_EOL."}";
		return $java_code;
	}
	
		//This line will call the function for selected language
		$code=$_POST['Language']();
		 
		// Calling info() to display information
		info();
		
		//Showing the default code in text area
		echo '<textarea name="code_sec" rows="18" cols="80" >' . $code . '</textarea>';
		

?>
<?php

	echo "Language Chosen:      ".$_POST['Language']."<br />";
	echo "Question Statement:   ".$_POST['ques_stat']."<br />";
	echo "Function name:        ".$_POST['func_name']."<br />";
	echo "Return Type:          ".$_POST['returnType']."<br />";
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
	function C()
	{	
			$c_code='#include <'." stdio.h>".'> <br />';
			$c_code.=$_POST['returnType']." ".$_POST['func_name']."(";
			for ($i=0; $i < $_POST['num_args']; $i++) { 
				$c_code.=$_POST['typefields_'.$i];
				
				
				
				for ($it=0; $it < $_POST['dimfields_'.$i]; $it++){
					$c_code.="*";
					
				}
				
				$c_code.=" ".$_POST['namefields'.$i];
				$c_code.=",";
			}

			if (($_POST['num_args'])>0){
				$c_code=rtrim($c_code,",");
			}

			$c_code.="){<br />
			//Write your code here
			 <br />}";
			return $c_code;
	}
	function Java()
	{
		$java_code="import java.util.* <br />";
		$java_code.="public class ".$_POST['class_name']."{<br />";
		$java_code.="public ".$_POST['returnType']." ".$_POST['func_name']."(";
		for ($i=0; $i < $_POST['num_args']; $i++) { 
			$java_code.=$_POST['typefields_'.$i];
			
			for ($it=0; $it < $_POST['dimfields_'.$i]; $it++){
						$java_code.="[]";
						
					}
					
					$java_code.=" ".$_POST['namefields'.$i];
					$java_code.=",";
			
			
			
		}

		if (($_POST['num_args'])>0){
			$java_code=rtrim($java_code,",");
		}

		$java_code.="){<br />
		//Write your code here
		<br />}<br />}";
		return $java_code;
	}
	
	
	/*if($_POST['Language']=="C")
		{
			$code=C();
		}
	else if($_POST['Language']=="Java")
		{
			$code=Java();
		}*/
		$code=$_POST['Language']();
		 
		echo "<br />".$code."<br />";
		
		
?>
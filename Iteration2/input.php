<!DOCTYPE html>
<html>
<head>
	<title>Input</title>
	<script type="text/javascript" src="scripts/jquery.js"></script>
	<script type="text/javascript">
		function disp_args()
		{
			
			var counter=$('input#num_args').val();
			$('#arguments').append("<br />")
			for (var i = 0; i < counter; i++) {
				$("#arguments").append(
					'<label>Variable_'+i+' name:</label><input id="field_' + i + '" name="namefields'+i + '" type="text" /><br />'+
					'<label>Variable_'+i+' type</label>'+
					'<input type="radio" name="typefields_'+i+'" value="int" checked="true"/>Integer'+
					'<input type="radio" name="typefields_'+i+'" value="char" />Char <br />'+
					'<label>Dimensionality of argument</label>'+
					'<input type="radio" name="dimfields_'+i+'" value="0" checked="true"/>0'+
					'<input type="radio" name="dimfields_'+i+'" value="1" />1'+
					'<input type="radio" name="dimfields_'+i+'" value="2" />2<br /><br />'
				)	
			};
		}
	</script>
</head>
<body>
	<form method="post" action="backend.php">
		<textarea name="ques_stat" rows="10" cols="40">Question Statement</textarea><br/>
		<label>Language :</label>
		<select name="Language">
		<option name=Language value="C" checked="true">C</option>
		<option name=Language value="Java">Java</option>
		</select><br/>
		
		<label>Function Name :</label>
		<input type="text" name="func_name"/><br />
		<label>Return type:</label>
		<input type="radio" name="returnType" value="int" checked="true"/>Integer
		<input type="radio" name="returnType" value="char" />Char <br />
					
		<label>Class Name	 :   </label>
		<input type="text" name="class_name"/>&nbsp;(*only for Java)<br />

		<label>#of arguments :</label>
		<input type="text" id="num_args" name="num_args" value="2"/>
		<input type="button" value="Go" onclick='disp_args()' /><br /> 
		<div id="arguments"></div>
		<input type="submit" >
	</form>
</body>
</html>

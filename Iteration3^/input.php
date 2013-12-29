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
					'<table width="300" border="2"><tr><td>'+
					'<label>Variable_'+i+' name:</label></td><td><input id="field_' + i + '" name="namefields'+i + '" type="text" /></td></tr><br />'+
					'<tr><td><label>Variable_'+i+' type</label></td>'+
					'<td>'+
					'<input type="radio" name="typefields_'+i+'" value="int" checked="true"/>Integer'+
					'<input type="radio" name="typefields_'+i+'" value="char" />Char <br />'+
					'</td></tr>'+
					'<tr><td><label>Dimensions</label></td>'+
					'<td>'+
					'<input type="radio" name="dimfields_'+i+'" value="0" checked="true"/>0'+
					'<input type="radio" name="dimfields_'+i+'" value="1" />1'+
					'<input type="radio" name="dimfields_'+i+'" value="2" />2<br />'+
					'</td></tr>'+
					'</table>'
				)	
			};
		}
	</script>
</head>
<body>
	<form method="post" action="backend.php">
		<table width="500" border="1">
		<tr>
		<textarea name="ques_stat" rows="10" cols="40">Question Statement</textarea><br/>
		</tr>
		<tr>
		<td>
		<label align="center">Language :</label>
		</td>
		<td>
		<select name="Language">
		<option name=Language value="C" checked="true">C</option>
		<option name=Language value="Java">Java</option>
		</select><br/>
		</td>
		</tr>
		
		<tr>
		<td>
		<label>Function Name :</label>
		</td>
		<td>
		<input type="text" name="func_name"/><br />
		</td>
		</tr>
		
		<tr>
		<td>
		<label>Class Name	 :   </label>
		</td>
		<td>
		<input type="text" name="class_name"/>(*Java)<br />
		</td>
		</tr>
		
		<tr>
		<td>
		<label>Return type:</label>
		</td>
		<td>
		<input type="radio" name="returnType" value="int" checked="true"/>Integer
		<input type="radio" name="returnType" value="char" />Char <br />
		</td>
		</tr>
		
		<tr>
		<td>
		<label>Return type Dimension:</label>
		</td>
		<td>
		<input type="radio" name="returnDimension" value=0 checked="true"/>0
		<input type="radio" name="returnDimension" value=1 />1
		<input type="radio" name="returnDimension" value=2 />2<br />
		</td>
		</tr>
		
		<tr>
		<td>
		<label>#of arguments :</label>
		</td>
		<td>
		<input type="text" id="num_args" name="num_args" value="2"/>
		<input type="button" value="Go" onclick='disp_args()' /><br /> 
		
		<div id="arguments"></div>
		</td>
		</tr>
		
		
		<tr>
		<td>
		<input type="submit" >
		</td>
		</tr>
		</table>
	</form>
	
</body>
</html>

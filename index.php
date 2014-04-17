<!DOCTYPE html>
<html>
<script type="text/javascript" src="jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="script.js"></script>
<link type='text/css' rel='stylesheet' href='style.css' />
<body>
	<table>
		<tr>
			<td>
				Select the operation 
				<select onchange="SetFunctionName()" id="selectOperation">
					<option value=""></option>
				 	<option value="IsPrimeNo">Prime no</option>
				 	<option value="PerfectNoSeries">Perfect no series</option>
				 	<option value="PerfectNoSeries">Perfect no series</option>
<!--				<option value="GetBinary">Binary no</option>-->
				</select>			
			</td>
		</tr>
		<tr>
			<td>
				<form name="BasicCode" action="" method="POST" id="func">
					Enter the no/range: <input type="text" name="value" id="funcInput"> 
					<input type="submit" value="Submit">
				</form>			
			</td>
		</tr>
		<tr>
			<td>
				<p id="result"></p>
			</td>
		</tr>
	</table>	
</body>
</html>

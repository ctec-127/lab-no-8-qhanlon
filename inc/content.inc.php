<div class="container">

	<div id="wrapper">
		<h1>Temperature Converter</h1>
		<h4>CTEC 127 - PHP with SQL 1</h4>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div class="section">
				<label for="temp">Temperature</label>
				<input type="text" value="<?php if (isset($_POST['originaltemp'])) echo $_POST['originaltemp'];?>" name="originaltemp" size="7" maxlength="7" id="temp">

				<select name="originalunit">
					<option value="--Select--"<?php if($originalUnit == "--Select--") echo ' selected="selected"';?>>--Select--</option>
					<option value="celsius"<?php if($originalUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
					<option value="farenheit"<?php if($originalUnit == "farenheit") echo ' selected="selected"';?>>Farenheit</option>
					<option value="kelvin"<?php if($originalUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
				</select>
			</div>
			<div class="section">
				<label for="convertedtemp">Converted Temperature</label>
				<input type="text" value="<?php if (isset($_POST['originaltemp'])) echo round($convertedTemp, 1);?>" 
				name="convertedtemp" size="7" maxlength="7" id="convertedtemp">

				<select name="conversionunit">
					<option value="--Select--"<?php if($conversionUnit == "--Select--") echo ' selected="selected"';?>>--Select--</option>
					<option value="celsius"<?php if($conversionUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
					<option value="farenheit"<?php if($conversionUnit == "farenheit") echo ' selected="selected"';?>>Farenheit</option>
					<option value="kelvin"<?php if($conversionUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
				</select>
			</div>
			<input type="submit" value="Convert"/>   
		</form>
	</div><!-- end wrapper div-->
</div>
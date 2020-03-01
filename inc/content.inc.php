<div class="container">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3">Temperature Converter</h1>
            <p class="lead">CTEC 127 - PHP with SQL 1</p>
        </div>
    </div>
    <div id="wrapper">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="row">
                <div class="col-sm-12 col-xs-12 col-md-6">
                    <label for="temp">Temperature</label>
                    <input type="text" value="<?php if (isset($_POST['originaltemp'])) echo $_POST['originaltemp'];?>" name="originaltemp" size="7" maxlength="7" id="temp" class="form-control">
                    <label for="originalunit">Original Unit</label>
                    <select name="originalunit" class="form-control selectpicker">
                        <option value="--Select--" <?php if($originalUnit == "--Select--") echo ' selected="selected"';?>>--Select--</option>
                        <option value="celsius" <?php if($originalUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
                        <option value="farenheit" <?php if($originalUnit == "farenheit") echo ' selected="selected"';?>>Farenheit</option>
                        <option value="kelvin" <?php if($originalUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
                    </select>
                </div>
                <div class="section col-xs-12 col-sm-12 col-md-6">
                    <label for="convertedtemp">Converted Temperature</label>
                    <input type="text" value="<?php if (isset($_POST['originaltemp'])) echo round($convertedTemp, 1);?>" name="convertedtemp" size="7" maxlength="7" id="convertedtemp" class="form-control">
                    <label for="conversionunit">Converted Unit</label>
                    <select name="conversionunit" class="form-control">
                        <option value="--Select--" <?php if($conversionUnit == "--Select--") echo ' selected="selected"';?>>--Select--</option>
                        <option value="celsius" <?php if($conversionUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
                        <option value="farenheit" <?php if($conversionUnit == "farenheit") echo ' selected="selected"';?>>Farenheit</option>
                        <option value="kelvin" <?php if($conversionUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
                    </select>
                </div> 
            </div>
            <br>
            <input type="submit" value="Convert" class="btn btn-secondary" />
            <br><br>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <h2>Formulas</h2>
                    <hr>
                    <p>
                    <strong>Celsius (C) -> Fahrenheit: </strong> (C&#730; × 9/5) + 32 <br>
                    <strong>Celsius (C) -> Kelvin: </strong> C&#730; + 273.15 <br>
                    <strong>Fahrenheit (F) -> Kelvin: </strong> (F&#730; − 32) × 5/9 + 273.15  <br>
                    <strong>Fahrenheit (F) -> Celsius: </strong> (F&#730; − 32) × 5/9 <br>
                    <strong>Kelvin (K) -> Celsius:</strong> K&#730; − 273.15  <br>
                    <strong>Kelvin (K) -> Fahrenheit:</strong> (K&#730; − 273.15) × 9/5 + 32 
                    </p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <h2>Brief Information</h2>
                    <hr>
                    <p>
                        <strong>Celsius</strong> - The standard measurement of temperature used around the world. <br>
                        <strong>Fahrenheit</strong> - Fewer than a dozen countries in the world still use Fahrenheit because they like alcohol. <br>
                        <strong>Kelvin</strong> - The measurement used in science because water is a thing.
                    </p>
                </div>
            </div>
        </form>
    </div><!-- end wrapper div-->
</div>
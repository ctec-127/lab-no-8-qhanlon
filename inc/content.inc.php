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

                <div class="section col-12">

                    <div class="col-6">
                        <label for="temp">Temperature</label>
                        <input type="text" value="<?php if (isset($_POST['originaltemp'])) echo $_POST['originaltemp'];?>" name="originaltemp" size="7" maxlength="7" id="temp" class="form-control">
                    </div>
                    <div class="col-6">
                        <select name="originalunit" class="form-control selectpicker">
                            <option value="--Select--" <?php if($originalUnit == "--Select--") echo ' selected="selected"';?>>--Select--</option>
                            <option value="celsius" <?php if($originalUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
                            <option value="farenheit" <?php if($originalUnit == "farenheit") echo ' selected="selected"';?>>Farenheit</option>
                            <option value="kelvin" <?php if($originalUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="section col-6">
                    <label for="convertedtemp">Converted Temperature</label>
                    <input type="text" value="<?php if (isset($_POST['originaltemp'])) echo round($convertedTemp, 1);?>" name="convertedtemp" size="7" maxlength="7" id="convertedtemp" class="form-control">

                    <select name="conversionunit" class="form-control">
                        <option value="--Select--" <?php if($conversionUnit == "--Select--") echo ' selected="selected"';?>>--Select--</option>
                        <option value="celsius" <?php if($conversionUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
                        <option value="farenheit" <?php if($conversionUnit == "farenheit") echo ' selected="selected"';?>>Farenheit</option>
                        <option value="kelvin" <?php if($conversionUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
                    </select>
                </div>
                <input type="submit" value="Convert" class="btn btn-secondary" />

            </div>
        </form>
    </div><!-- end wrapper div-->
</div>
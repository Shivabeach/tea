<h3>Complete Fermenting record</h3>
<?php
		$form = [
			"id" => "ajax"
		];
		echo form_open("forms/insert", $form);

				$numb = [
			"name"     => "numb",
			"class" => 'input-small'
		];
		echo form_input($numb);
		echo "<label>Bottle Number</label>";
		echo "<p>";

		$mix = [
			"name" => "mix",
			"placeholder" => "Notes"
		];
		echo "<p>";
		echo form_textarea($mix);
		echo "</p>";
		
		$success = [
			"id" => "success",
			"name" => "success",
			"class" => "input-med",
			"placeholder" => "Success?"
		];
		echo form_input($success);
		echo "<label>Successful?</label>";
		echo "</p>";
		echo "<p>";
		$days = [
			"name" => "days",
			"class" => "input-small",
			"id" => "days",
		];
		echo form_input($days);
		echo "<label>Days Fermenting</label>";
		echo "</p>";
		$ph = [
			"name" => "ph",
			"class" => "input-small",
			"id" => "ph",
		];
		echo "<p>";
		echo form_input($ph);
		echo "<label>Finished PH</label>";
		echo "</p>";
		echo "<button type='submit' id='submit' value='Submit'>Submit</button>";
		echo "<button type='reset' value='reset'>Reset</button>";
		echo form_close();
		
?>
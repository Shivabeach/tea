<?php

$form = [
  "id" => "herbal"
];
echo form_open("", $form);

$needs = [
  "id" => "needs",
  "class" => "input-large",
  "name" => "needs"
];
echo "<p>Needs: " . form_input($needs) . "</p>";

$sub = [
  "type" => "submit",
  "value" => "Submit",
  "id" => "submit"
];
echo '<button type="submit" value="submit" id="submit">Submit</button>';








?>

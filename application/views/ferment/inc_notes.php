<h3>Notes Entry</h3>
<p><?php echo validation_errors();?></p>
<p id="display"></p>
<?php
$form = [
	"id" => 'ajax'
];
echo form_open('forms/notes', $form);

$date = [
	'name' => 'date',
	'type' => 'date',
	'placeholder' => 'Date'
];
echo "<p>";
echo form_input($date);
echo "</p>";

$note = [
	'name' => 'note',
	'placeholder' => 'Main Note'
];
echo "<p>";
echo form_textarea($note);
echo "</p>";

$recording = [
	'name' => 'recording',
	'placeholder' => 'Data for note'
];
echo "<p>";
echo form_textarea($recording);
echo "</p>";

echo "<button type='submit' id='submit' value='Submit'>Submit</button>";
echo "<button type='reset' value='reset'>Reset</button>";
echo form_close();

<header>
  <div class="fs-6 top"><?=ucwords($top);?></div>
</header>
<div class="container">

  <div class="container-left">
    <div class="container-inner">
      <div class="container-inner flex height1 center fs-4">
        <div id="demo12"></div>
      </div>
      <div class="fs-5">Tea Links</div>
			<?php include "application/views/pages/menu.html";?>
    </div>


  </div>
  <div class="container-main">
    <div class="container-inner">
      <p class="inner-center-text">
				This is my record of fermentations of hot peppers to make sauces with.
			</p>
    </div>
    <div class="container-inner">
      <p class="inner-center-text">
        Data input
      </p>
            <!-- start, peppers(weight), salt(used), mix(what peppers), success, days(length) -->
      <fieldset>
        <legend>Ferment Record</legend>
          <?php
            $open = [
              "id" => "ajax"
            ];
            echo form_open("forms/ferm", $open);

            $numb = [
              "id" => "numb",
              "name" => "numb",
              "class" => "input-small",
              "placeholder" => "Jar Num",
            ];

            echo form_input($numb);


            $start = [
              "id" => "start",
              "name" => "start",
              "class" => "input-med",
              "placeholder" => "Start Date",
              "type" => "date"
            ];
            echo form_input($start);

            $peppers = [
              "id" => "peppers",
              "name" => "peppers",
              "class" => "input_small",
              "placeholder" => "Weight"
            ];
            echo form_input($peppers);

            $salt = [
              "id" => "salt",
              "name" => "salt",
              "class" => "input_small",
              "placeholder" => "Salt"
            ];
            echo form_input($salt);

            $mix = [
              "id" => "mix",
              "name" => "mix",
              "placeholder" => "Whats in it"
            ];
            echo form_textarea($mix);

            echo "<button type='submit' id='submit' value='Submit'>Submit</button>";
            echo "<button type='reset' value='reset'>Reset</button>";
            echo form_close();

          ?>
      </fieldset>
      <hr class="mid-hr">
      <!-- form for salt -->
      <fieldset>
        <legend>Salt Calculation</legend>
          <?php
            $formid = [
            "id" => "salted"
          ];
            echo form_open("", $formid);
            ?>
          <p>Pepper Weight</p>
          <?php
          $weight = [
            "id" => "weight",
            "class" => "input-med",
            "name" => "weight"
          ];
          echo form_input($weight);?>  Grams of peppers
          <?php
          echo "<button type='submit' id='submited' value='Submit'>Submit</button>";
          echo form_close();
          ?>
          <p>Solution required: <span id="answer"></span></p>

      </fieldset>
    </div>



  </div>
  <div class="container-right">
    <div class="container-inner">
      <div class="main-title fs-5">Sample Teas</div>
      <div id="display"></div>
    </div>
    <div class="container-inner">
      <ol>
        <li>Determine product weight</li>
        <li> Determine water weight</li>
        <li>The 2 above can be weighed together</li>
        <li>Multiply water and product weight in grams x .03</li>
        <li></li>
        <li></li>
      </ol>
    </div>
  </div>

</div>
<footer>
  <div class="card1">
    <p><?=$ool;?></p>
  </div>

  <div class="card2">
    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds.
      <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
    </p>
  </div>
<script src="<?php echo base_url('assets/js/spec.min.js');?>" defer></script>
</footer>

<header>
  <div class="fs-6 top"><?=ucwords($top);?></div>
</header>
<div class="container">

  <div class="container-left">
    <div class="container-inner flex height1 center fs-4">
      <div id="demo12"></div>
    </div>
    <div class="container-inner">
      <div class="fs-5">Tea Links</div>
      <?php include 'menu.html';?>
    </div>
    
  </div>
  <div class="container-main">
    <div class="container-inner">
      <p class="inner-center-text">

        This is my record of purchased and sample tea's that I have recieved mostly from Zhen tea in Canada.
      </p>
      <p class="inner-center-text">
        The center column is for purchased tea. The column on the right side is for sample teas sent with purchases
      </p>

      <div class="main-title fs-5"><?=$tea_form;?></div>
      <section class="tea-display">
			<!-- tea input form -->
        <fieldset>
          <legend>Enter Tea Info</legend>
          <?php
                  $arg = [
                    "id" => "ajax"
                  ];
                  echo form_open("forms/tearecorder", $arg);
                  // tea name
                  $arg1 = [
                    "name"        => "teaName",
                    "id"          => "teaname",
                    "class"       => "input-large",
                    "placeholder" => "Tea Name"
                  ];
                  echo form_input($arg1);
                  // tea type

                  $arg2 = [
                    ""       => "Type",
                    "Green"  => "Green",
                    "White"  => "White",
                    "Yellow" => "Yellow",
                    "Oolong" => "Oolong",
                    "Black"  => "Black",
                    "Dark"   => "Dark"
                  ];

                  echo form_dropdown('teaType', $arg2);

                  $arg3 = [
                    ""    => "Repurchase?",
                    "Yes" => "Yes",
                    "No"  => "No"
                  ];
                  echo form_dropdown('buyAgain', $arg3);

                  $arg4 = [
                    "name"        => "lastPurchase",
                    "id"          => "lastpurchase",
                    "placeholder" => "last Purchase",
                    "class"       => "input-large",
                    "type"        => "date"
                  ];
                  echo form_input($arg4);
                  $arg5 = [
                    "name"        => "cost",
                    "id"          => "cost",
                    "class"       => "input-large",
                    "type"        => "number",
                    "placeholder" => "Cost"
                  ];
                  echo form_input($arg5);

                  $arg6 = [
                    "name"        => "amount",
                    "id"          => "amount",
                    "class"       => "input-large",
                    "type"        => "number",
                    "placeholder" => "Bags"
                  ];
                  echo form_input($arg6);
                  $arg7 = [
                    "name"        => "orderedQty",
                    "id"          => "orderedqty",
                    "class"       => "input-large",
                    "type"        => "number",
                    "placeholder" => "Grams"
                  ];
                  echo form_input($arg7);
                  $arg8 = [
                    "name"        => "comment",
                    "id"          => "comment",
                    "placeholder" => "Comments"
                  ];
                  echo form_textarea($arg8);

                  echo "<button type='submit' id='submit' value='Submit'>submit</button>";
                  echo "<button type='reset' value='reset'>Reset</button>";
                    ?>

        </fieldset>

      </section>
    </div>



  </div>
  <div class="container-right">
    <div class="container-inner">
      <div class="main-title fs-5">Sample Teas</div>
      <section class="tea-display">
				<div id="display"></div>

      </section>
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

</footer>

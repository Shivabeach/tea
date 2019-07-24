<header>
  <div class="fs-6 top"><?=ucwords($top);?></div>
</header>
<div class="container">

  <div class="container-left">
    <div class="container-inner">
    	<div class="container-inner flex height1 center fs-4">
      	<div id="demo12"></div>
    	</div>
      <div class="fs-5">Site Links</div>
			<?php 
      include APPPATH."/views/pages/menu.html";?>
    </div>
		
  </div>
  <div class="container-main">
    <div class="container-inner">
      
			<section>
        <?php
          echo $calendar;
          ?>
				<!-- calendar -->
			</section>
    </div>
		
  </div>  <!-- end of main -->
  
</div> <!-- end of container -->
<footer>
  <div class="card1">
      <?php
      $con = [
        'id' => 'ajax'
      ];
      echo form_open('forms/entry', $con);

      $arg1 = [
        'id'          => 'datepicker',
        'name'        => 'date',
        'type'        => "date",
        'placeholder' => "Date"
      ];
      echo form_input($arg1);
      echo "<br>";
      $arg2 = [
        'id'          => "data",
        'name'        => "data",
        'placeholder' => "Data Content"
      ];
      echo form_textarea($arg2);
      echo "<br>";
      $arg3 = [
        'type' => "submit",
        'value' => "Submit"
      ];
      echo
      form_submit($arg3);

      $arg4 = [
        'value' => "Reset",
        'type' => "reset"
      ];
      echo
      form_submit($arg4);
      ?>
  </div>

  <div class="card2">
    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds.
      <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
    </p>
  </div>

</footer>

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
			<?php include APPPATH."views/pages/menu.html";?>
    </div>
		
  </div>
  <div class="container-main">
    <div class="container-inner">
      <p class="inner-center-text">
				<p>Notes on how to do things as I go.</p>
			</p>
			<section>
				<?php
				foreach($notehead as $row):?>
				<dl>
					<?php $bad_date = $row->date;
					$good = nice_date($bad_date, "F d, Y");?>
					<dt><?php echo  $good . " - " . $row->note;?></dt>
					<dd><?php echo auto_typography($row->recording);?> </dd>
				</dl>
				<?php endforeach;?>
			</section>
    </div>
		
  </div>  <!-- end of main -->
  <div class="container-right">
    <div class="container-inner">
      <div class="main-title fs-5">Input</div>
      <!-- include file here -->

      <?php 
      $menu = [
      	"inc_notes.php"
      ];
      if(in_array("inc_notes.php",$menu))
      {
      	include "inc_notes.php";
			}
			?>
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

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
				Recording Pepper history
			</p>

		<section>
      <h4>2019 Peppers</h4>
      <?php foreach($average1 as $row):?>
      <p>The average number of days a ferment has gone is <?php echo round($row->days, 2);?> or <?php echo round($row->days/7, 2);?> weeks </p>
    <?php endforeach;?>
    <?php foreach($acid as $row):?>
      <p>The average ph of the ferments is <?php echo round($row->ph, 2);?> </p>
    <?php endforeach;?>
    <?php foreach($sums1 as $row): ?>
      <p>We have processed <?php echo $row->peppers;?> grams of peppers, or <?=$row->peppers * 0.035274;?> ounces</p>
    <?php endforeach;?>
			<!-- display  -->

		</section>

    </div>

  </div>  <!-- end of main -->
  <div class="container-right">
    <div class="container-inner">
      <div class="main-title fs-5">Input</div>
      <!-- php form here to input peppers -->
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

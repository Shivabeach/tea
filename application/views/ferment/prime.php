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
				This is my record of fermentations of hot peppers to make sauces with.
			</p>

		<section>
			<?php
				$this->table->set_heading('Jar #', 'Start', 'Peppers', 'Salt', 'Mixture', 'Success', 'Days', 'PH');
				foreach ($display as $row) {
					$peppers = ['data' => $row->peppers, 'class' => 'peppers'];
					$mix = ['data' => $row->mix, 'class' => 'left-aligned text-small'];
					$this->table->add_row (
						$row->numb,
						$row->start,
						$peppers,
						$mix,
						$row->success,
						$row->days,
						$row->ph
					);
				}
				echo $this->table->generate();
			 ?>

		</section>

    </div>

  </div>  <!-- end of main -->
  <div class="container-right">
    <div class="container-inner">
      <div class="main-title fs-5">Input</div>
      <?php

      include "update.php";

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

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
      <?php include 'menu.html';?>
    </div>
    
  </div>
  <div class="container-main">
    <div class="container-inner">
      <p class="inner-center-text">
				This is my record of purchased and sample tea's that I have recieved mostly from Zhen tea in Canada.
			</p>

      <div class="main-title fs-5">Tea</div>
      <section class="tea-display">

        <?php
					$this->table->set_heading('Last Bought', 'orderedQty', 'total', 'Rating');
					foreach($mingle as $row){
						$this->table->add_row(
							$row->lastPurchase,
							$row->orderedQty,
							$row->total,
							$row->rating
						);
					}
					echo $this->table->generate();
				?>
        </table>
      </section>
    </div>
  </div>
  <div class="container-right">
    <div class="container-inner">
      <div class="main-title fs-5">Details</div>

			<?php
			foreach($mustang as $row) {
      echo auto_typography($row->teaName);
			echo auto_typography($row->teaType);
			echo auto_typography($row->comment);
      }
      ?>

    </div>
  </div>
        <!-- use if(isset($variable)) -->
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

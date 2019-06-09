<header>
  <div class="fs-6 top"><?=ucwords($top);?></div>
</header>
<div class="container">

  <div class="container-left">
    <div class="container-inner">
      <div class="fs-5">Tea Links</div>
			<?php include 'menu.html';?>
    </div>
		<div class="container-inner">
			<?php
				$arg = [
					"id" => "ajax69"
				];
				echo
				form_open('pages/singles', $arg);
				$arg1 = [
					"id" => "teaname",
					"name" => "single"
				];
				echo form_input($arg1);
				echo form_submit('submit', 'Submit'),nbs(4), form_reset("reset", "Reset");

				echo form_close();


			?>
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

      <div class="main-title fs-5"><?=$ool;?></div>
      <section class="tea-display">

        <?php
					$this->table->set_heading('Tea Name', 'Last Bought', 'Rating');

					foreach($oolong as $row){
						$cell1 = ['data' => $row->teaName, 'class' => 'teaname animated rubberBand'];
						$this->table->add_row(
							$cell1,
							$row->lastPurchase,
							$row->rating);
					}
					echo $this->table->generate();

				?>
        </table>
      </section>
    </div>

    <div class="container-inner">
      <div class="main-title fs-5"><?=$typeb;?></div>
      <section class="tea-display">

        <?php
					$this->table->set_heading('Tea Name', 'Last Bought', 'Rating');
					foreach($black as $row){
						$cell1 = ['data' => $row->teaName, 'class' => 'teaname'];
						$this->table->add_row(
							$cell1,
							$row->lastPurchase,
							$row->rating);
					}
					echo $this->table->generate();

				?>
        </table>
      </section>
    </div>

    <div class="container-inner">
      <div class="main-title fs-5"><?=$typey;?></div>
      <section class="tea-display">

        <?php
					$this->table->set_heading('Tea Name', 'Last Bought', 'Rating');
					foreach($yellow as $row){
						$cell1 = ['data' => $row->teaName, 'class' => 'teaname'];
						$this->table->add_row(
							$cell1,
							$row->lastPurchase,
							$row->rating);
					}
					echo $this->table->generate();

				?>
        </table>
      </section>
    </div>

    <div class="container-inner">
      <div class="main-title fs-5"><?=$typeg;?></div>
      <section class="tea-display">

        <?php
					$this->table->set_heading('Tea Name', 'Last Bought', 'Rating');
					foreach($green as $row){
						$cell1 = ['data' => $row->teaName, 'class' => 'teaname'];
						$this->table->add_row(
							$cell1,
							$row->lastPurchase,
							$row->rating);
					}
					echo $this->table->generate();

				?>
        </table>
      </section>
    </div>

  </div>
  <div class="container-right">
    <div class="container-inner">
      <div class="main-title fs-5">Sample Teas</div>
      <section class="tea-display">

        <?php
				$this->table->set_heading('Tea Name', 'Type', 'Buy Again');
				foreach($sample as $row){
					$cell1 = ['data' => $row->teaName, 'class' => 'teaname'];
					$this->table->add_row(
						$cell1,
						$row->teaType,
						$row->buyAgain);
				}
				echo $this->table->generate();

			?>
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

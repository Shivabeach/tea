<header>
  <div class="fs-6 top"><?=ucwords($top);?></div>
</header>
<div class="container">

  <div class="container-left">
    <div class="container-inner">
      <div class="fs-5">Tea Links</div>
      <menu class="shopping-menu">
        <ul class="shopping-list">
          <li> <a rel="external" href="https://zhentea.ca">Zhen Tea</a> </li>
          <li> <a rel="external"
              href="https://www.zhentea.ca/shop/chinese-tea/?swoof=1&product_cat=black-tea&really_curr_tax=28-product_cat">Black
              Tea</a> </li>
          <li><a rel="external"
              href="https://www.zhentea.ca/shop/chinese-tea/?swoof=1&product_cat=oolong-tea&really_curr_tax=28-product_cat">Oolong
              Tea</a></li>
          <li><a rel="external"
              href="https://www.zhentea.ca/shop/chinese-tea/?swoof=1&product_cat=green-tea&really_curr_tax=28-product_cat">Green
              Tea</a></li>
        </ul>
      </menu>
      <div class="fs-5">Site Links</div>
      <menu class="shopping-menu">
        <ul class="shopping-list">
          <li><a href="/">Home</a></li>
          <li><a rel="external" href="http://version31/pages/todo">ToDo</a></li>
        </ul>
      </menu>
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
					$this->table->set_heading('ID', 'Tea Name', 'Last Bought', 'Rating');
					foreach($oolong as $row){
						$this->table->add_row(
							$row->id,
							$row->teaName,
							$row->lastPurchase,
							$row->rating);
					}
					echo $this->table->generate();

				?>
        </table>
      </section>
    </div>

    <div class="container-inner">
      <div class="main-title fs-5">Black Tea</div>
      <section class="tea-display">

        <?php
					$this->table->set_heading('ID', 'Tea Name', 'Last Bought', 'Rating');
					foreach($black as $row){
						$this->table->add_row(
							$row->id,
							$row->teaName,
							$row->lastPurchase,
							$row->rating);
					}
					echo $this->table->generate();

				?>
        </table>
      </section>
    </div>

    <div class="container-inner">
      <div class="main-title fs-5">Yellow Tea</div>
      <section class="tea-display">

        <?php
					$this->table->set_heading('ID', 'Tea Name', 'Last Bought', 'Rating');
					foreach($yellow as $row){
						$this->table->add_row(
							$row->id,
							$row->teaName,
							$row->lastPurchase,
							$row->rating);
					}
					echo $this->table->generate();

				?>
        </table>
      </section>
    </div>

    <div class="container-inner">
      <div class="main-title fs-5">Green Tea</div>
      <section class="tea-display">

        <?php
					$this->table->set_heading('ID', 'Tea Name', 'Last Bought', 'Rating');
					foreach($green as $row){
						$this->table->add_row(
							$row->id,
							$row->teaName,
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
					$this->table->add_row(
						$row->teaName,
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

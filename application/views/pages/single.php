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

      <div class="main-title fs-5"><?=$name;?></div>
      <section class="tea-display">

        <?php
					$this->table->set_heading('ID', 'Last Bought', 'orderedQty', 'total', 'Rating', 'comment');
					foreach($oolong as $row){
						$this->table->add_row(
							$row->lastPurchase,
							$row->rating,
							$row->comment
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
      <div class="main-title fs-5">Sample Teas</div>

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

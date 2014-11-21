<?php
$active = str_replace('.php', '', substr(__FILE__, strrpos(__FILE__, '/')+1));

include('data.php');
include('header.php');
?>
    
<h2>Why is Cooling Important?</h2>
<p>
	Explain the concept of CPU/GPU cooling, and why it's needed (cite standard temperatures for processors). Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, et temporibus, facere perferendis veniam beatae non debitis, numquam blanditiis necessitatibus vel mollitia dolorum laudantium, voluptate dolores iure maxime ducimus fugit.
</p>

<h2>CPU Cooling</h2>
<p>
	Cover methods of keeping the processor cool; heatsinks, liquid cooling, etc.
</p>

<h3>Heatsinks</h3>
<p>
	This type of cooling is recommended for new PC builders, due to its simplicity. Discuss standard heatsink cooling systems, how to choose a heatsink, making sure it's compatible with the motherboard, etc.
</p>
<div class="row">
	<div class="col-md-8 col-md-offset-2 guide-img">
		<?php echo img(array('src'=>'files/img/guides/choosing-computer-components/heatsink.png', 'class'=>'img-responsive')); ?>
		<div class="img-caption">
			A diagram of how a heatsink disperses heat.<br />
			Photo credit: <?php echo anchor('http://wikipedia.org', 'wikipedia.org', array('target'=>'_blank')); ?>
		</div>
	</div>
</div>

<h3>Liquid Cooling</h3>
<p>
	Go over various liquid cooling methods, their advantages over heatsinks, how to set them up, choosing a brand, etc.
</p>
<ul>
	<li>Internal systems - Description and dis/advantages</li>
	<li>External systems - Description and dis/advantages</li>
	<li>Integrated systems - Description and dis/advantages</li>
</ul>
<div class="row">
	<div class="col-md-8 col-md-offset-2 guide-img">
		<?php echo img(array('src'=>'files/img/guides/choosing-computer-components/water-cooling.png', 'class'=>'img-responsive')); ?>
		<div class="img-caption">
			A standard external liquid cooling diagram.<br />
			Photo credit: <?php echo anchor('http://pantherproducts.co.uk', 'pantherproducts.co.uk', array('target'=>'_blank')); ?>
		</div>
	</div>
</div>

<hr />

<h2>Case Cooling</h2>
<p>
	Go over how case cooling differs from CPU cooling, standard fan placement, etc. Explain fan dimensions and how they fit into the case.
</p>

<?php include('footer.php'); ?>
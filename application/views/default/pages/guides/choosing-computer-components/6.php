<?php
$active = 6;

include('data.php');
include('header.php');

$prev_page = $contents[4];
$next_page = $contents[6];
$prev_url = site_url('guides/'.$guide_uri.'/5');
$next_url = site_url('guides/'.$guide_uri.'/7');
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
	Discuss standard heatsink cooling systems, how to choose a heatsink, making sure it's compatible with the motherboard, etc.
</p>

<h3>Liquid Cooling</h3>
<p>
	Go over various liquid cooling methods, their advantages over heatsinks, how to set them up, choosing a brand, etc.
</p>
<ul>
	<li>Internal systems - Description and dis/advantages</li>
	<li>External systems - Description and dis/advantages</li>
	<li>Integrated systems - Description and dis/advantages</li>
</ul>

<hr />

<h2>Case Cooling</h2>
<p>
	Go over how case cooling differs from CPU cooling, standard fan placement, etc.
</p>

<?php include('footer.php'); ?>
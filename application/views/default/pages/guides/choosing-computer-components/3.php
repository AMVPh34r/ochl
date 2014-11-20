<?php
$active = str_replace('.php', '', substr(__FILE__, strrpos(__FILE__, '/')+1));

include('data.php');
include('header.php');
?>
    
<h2>What is the Motherboard?</h2>
<p>
	The motherboard is the "main hub" of the rest of the computer. Its job is to take input from and send output to all other components. And while it doesn't do much work itself past routing electricity, it's one of the most important components in any computer. Thankfully, there isn't much variation in motherboard types, so picking out the one that's right for you is simple.
</p>

<h2>Picking a Size</h2>
<div class="row">
	<div class="col-md-6 col-md-offset-3 guide-img">
		<?php echo img(array('src'=>'files/img/guides/choosing-computer-components/motherboard-sizes.png', 'class'=>'img-responsive')); ?>
		<div class="img-caption">
			A comparison of various motherboard dimensions.<br />
			Photo credit: <?php echo anchor('http://howtogeek.com', 'howtogeek.com', array('target'=>'_blank')); ?>
		</div>
	</div>
</div>
<p>
	The biggest difference between different motherboards is their size. There are six different standard sizes used in modern computers: FlexATX, MicroATX, Mini ATX, Standard ATX, Extended ATX and Workstation ATX. Picking the size that's right for you is as simple as deciding how big you want your computer to be. Flex and Mico ATX motherboards are made for smaller cases, which is useful if you want to be able to move your computer around with ease. Standard and Extended ATX boards provide more room for other components, extra slots for graphics cards, and are intended for larger cases. Keep in mind if you want to get a powerful graphics card (or multiple graphics cards) or use water cooling in your computer, you will likely need a larger motherboard.
</p>

<h2>Extra Features</h2>
<p>
	Some motherboards come with a few extra features not standard in all computers. These can range from built-in WiFi and Bluetooth, to extra video outputs for multiple monitors. Picking out these features is entirely up to personal preference, so keep an eye out if that interests you.
</p>

<?php include('footer.php'); ?>
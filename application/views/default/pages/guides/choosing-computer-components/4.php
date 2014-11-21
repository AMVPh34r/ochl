<?php
$active = str_replace('.php', '', substr(__FILE__, strrpos(__FILE__, '/')+1));

include('data.php');
include('header.php');
?>
    
<h2>What is RAM?</h2>
<div class="row">
	<div class="col-md-6 col-md-offset-3 guide-img">
		<?php echo img(array('src'=>'files/img/guides/choosing-computer-components/RAM.jpg', 'class'=>'img-responsive')); ?>
		<div class="img-caption">
			A stick of DDR3 RAM.<br />
			Photo credit: <?php echo anchor('http://eteknix.com', 'eteknix.com', array('target'=>'_blank')); ?>
		</div>
	</div>
</div>
<p>
	Random Access Memory (RAM) can be considered the computer's "short-term" memory. It's where the computer stores data for any programs it is currently using for quick and easy access. Having more RAM allows you to run more applications simultaneously.
</p>

<h2>How Much do I Need?</h2>
<p>
	How much RAM you use depends again on how you expect to be using your computer. Most modern smartphones have 1-2 Gigabytes (GB), laptops tend to have 4GB, and desktops have anywhere from 8-32GB. Here's a simplified list to help you decide how much you need.
</p>
<ul>
	<li>If you plan on doing little more than surfing the web and word processing, you won't need more than 4GB. 2GB is sufficient for very basic usage, but will not give you much longevity.</li>
	<li>If you want to run many programs at once (e.g. many web browser tabs, photo editing, etc), you should aim for anywhere between 4-8GB. If you can get a good price, going for 8GB never hurts.</li>
	<li>If you plan on doing intensive processes such as video editing or gaming, you will definitely want at least 8GB. Most games won't display a significant improvement with more than 8GB, but for rendering video or 3D animations, the more RAM the better.</li>
</ul>

<!-- <h2>Picking a Brand</h2>
<p>
	Discuss brand options for memory, and any differences between them. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque est ligula, ornare eu convallis in, tempor et ipsum. Vivamus eleifend urna ut lacinia dignissim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
</p>

<h2>Making sure it's compatible</h2>
<p>
	Cover DDR/2/3 RAM types, speeds, etc. Anything that could factor into compatibility with the motherboard. Morbi sed blandit nulla. Etiam ac odio gravida urna sagittis vestibulum. Ut mollis nunc nec libero porta, quis faucibus ex pellentesque. Nullam fermentum augue urna, et interdum felis ullamcorper sed. Vivamus ac sem pharetra, hendrerit erat consectetur, feugiat tortor. Etiam justo quam, placerat non tempor non, condimentum ut sem. Aenean fringilla luctus finibus. Suspendisse euismod, ligula ut blandit gravida, nibh nulla mollis arcu, at congue velit metus id magna. Integer vel eros orci. Vivamus aliquam libero at felis molestie, eu egestas quam placerat. Vivamus in mollis neque.
</p> -->
<?php include('footer.php'); ?>
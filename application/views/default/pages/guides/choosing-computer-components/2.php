<?php
$active = str_replace('.php', '', substr(__FILE__, strrpos(__FILE__, '/')+1));

include('data.php');
include('header.php');
?>

<h2>What is the Processor?</h2>
<p>
	The Central Processing Unit, often called the Processor or CPU, is one of the most important components. It's what makes a computer compute. Every time a computer needs to perform an operation, as basic as moving the mouse to complex calculations in video games, the processor does the work. There are many different existing types of processors, built for different tasks. Some are meant for general use and are less powerful, others made for video editing or gaming, still others made to be used in online servers. So how do you know which is best for you?
</p> 

<h2>Picking a Brand</h2>
<div class="row">
	<div class="col-md-6 col-md-offset-3 guide-img">
		<?php echo img(array('src'=>'files/img/guides/choosing-computer-components/cpu-intel-amd.png', 'class'=>'img-responsive')); ?>
		<div class="img-caption">
			Left: Intel's socket-based CPU type. Right: AMD's pin-based CPU.<br />
			Photo credit: <?php echo anchor('http://pcadvisor.co.uk', 'pcadvisor.co.uk', array('target'=>'_blank')); ?>
		</div>
	</div>
</div>
<p>
	There are two main manufacturers of CPUs: Intel and Advanced Micro Devices (AMD). Which is best for you depends on what kind of PC you're looking to build, and what your priorities are. Even within the two brands, there is a huge variety of CPU models, but a simple general rule is that Intel processors are more powerful at a higher price, and AMD processors, while overall less powerful, are more fairly priced. If money is less of a hinderance and you want the most powerful computer, Intel is the way to go. If you care more about saving money or don't need a blazing fast machine, AMD will suit you just fine.
</p>
<p>
	One note of importance is that Intel and AMD processors differ in their physical builds. Which brand you choose (and to an extent, which model) will affect what other hardware you can choose from due to compatibility limitations. This will be covered in greater detail in the graphics cards section of this guide.
</p>

<h2>How Many Cores?</h2>
<p>
	All modern processors contain multiple microprocessors, allowing for computing work to be broken down and shared among them, dramatically increasing speed and efficiency. These are called multi-core processors, and have become the standard for all computers as well as tablets and smartphones.
</p>
<p>
	When choosing the processor for your computer, you should decide how many cores you need. Objectively deciding the number of cores based on your expected usage is complicated, so here's a very simplified guide to help you make that decision:
</p>
<ul>
	<li>If you just plan on surfing the internet and doing simple text-based work (e.g. word processing, spreadsheets, etc.), 2 cores are adequate, but you will be limited in what you can do. For comparison, some laptops and most smartphones use dual-core processors.</li>
	<li>If you want to do more intensive work such as photo or video editing, or gaming, you will need at least a quad-core (4-core) processor.</li>
	<li>While processors with up to 12 cores exist, you will almost certainly never need such a powerful processor in day-to-day computing. This is only an option to consider if you simply want the most powerful machine you can possibly build.</li>
</ul>

<h2>Choosing the Speed</h2>
<ul>
	<li>Gigahertz, or Ghz is the speed of the processor.</li>
	<li>If you plan on editing, you will want a processor with more then 3.0GHz.</li>
	<li>If you plan on gaming, you will want more then 2.5.</li>
	<li>If you just plan on surfing the Internet, 2.0 is fine.</li>
</ul>

<?php include('footer.php'); ?>
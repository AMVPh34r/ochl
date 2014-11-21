<?php
$active = str_replace('.php', '', substr(__FILE__, strrpos(__FILE__, '/')+1));

include('data.php');
include('header.php');
?>
    
<h2>Storage</h2>
<p>
	Every computer needs a hard drive or some form of persistent storage so you can actually save files. Thankfully choosing a hard drive is one of the easiest parts of building your computer.
</p>

<h2>How Much Space?</h2>
<p>
	The biggest question in choosing a hard drive is how much space you need. Most laptops have single hard drives between 500-750GB, and most dekstops have around 1 Terabyte (TB, 1,000GB) of storage space. There is theoretically no limit to the amount of storage space you can add, but as with all other components, you reach a point where you'll never use it to its full potential.
</p>

<h2>HDD or SSD?</h2>
<p>
	As of recent years, a new type of hard drive has become standard in some computers. Called the Solid State Drive (SSD), these drives don't use magnetism and moving parts the same way most Hard Disk Drives (HDDs) do. This makes them both more durable and much, much faster. Why do you want a fast hard drive? The higher the read/write speed of your drive, the quicker your computer can access stored data. The most noticable effect his has is time used to start up your computer, as well as loading times in vieo games.
</p>
<p>
	So do you need an SSD? First off, if you plan on moving your computer around a lot it's probably a good idea. Accidentally dropping a computer with a spinning HDD could be potentially devastating to your files, dropping an SSD will likely have no effect whatsoever. If you want an insanely fast boot time (as little as 10 seconds), an SSD might be for you. One downside to note, however, is price. SSDs are noticably more expensive per GB than HDDs, you could spend $200 on a 2TB hard drive, or the same amount on an SSD an eighth of the price (250GB).
</p>

<?php include('footer.php'); ?>
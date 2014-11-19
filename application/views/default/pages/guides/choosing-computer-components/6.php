<?php
$active = str_replace('.php', '', substr(__FILE__, strrpos(__FILE__, '/')+1));

include('data.php');
include('header.php');
?>
    
<h2>What is the Graphics Card?</h2>
<p>
	Explain the purpose of the GPU, how it affects performance for different activities, etc. How does it differ from the CPU? What aspects of the computer uitlize the GPU? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, et temporibus, facere perferendis veniam beatae non debitis, numquam blanditiis necessitatibus vel mollitia dolorum laudantium, voluptate dolores iure maxime ducimus fugit.
</p>

<h2>Do I need a Graphics Card?</h2>
<p>
	Most laptops simply use integrated graphics, explain what this is. Under what circumstances will integrated graphics work, and when will you need a dedicated GPU? Explain how to decide if you actually need to buy a graphics card or not. Aliquam convallis urna eget aliquet viverra. Donec ut est et mi luctus finibus. Etiam odio dui, feugiat vitae lorem malesuada, tempor euismod arcu. Quisque et enim tortor. Proin id mattis purus, et viverra sem. Sed finibus nisi cursus, placerat ipsum vel, vulputate lacus.
</p>

<h2>Picking a Manufacturer</h2>
<p>
	Introduce the two main manufacturers, AMD and Nvidia. Reiterate compatibility with Intel/AMD CPUs. Explain price/performance between the two. Ut eu neque tincidunt, condimentum eros a, faucibus lacus. Quisque pretium varius dui, in tempus arcu. Fusce iaculis enim non ante tempor, id dapibus enim viverra. Ut ullamcorper dui gravida tristique semper. Quisque placerat nec lacus eget interdum. Vivamus at orci vel sapien ullamcorper mattis in at turpis. Mauris sit amet tortor nec lacus maximus venenatis a in nunc.
</p>

<h2>Model Numbers - What do they mean?</h2>
<p>
	Explain how to read the model numbers for cards for each of the two manufacturers. In general, higher numbers are better. What makes a GTX 980 different from a 970? Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id suscipit lacus. Aenean est lectus, accumsan ac elementum eget, sodales ut ante. Suspendisse mollis tempus justo ac volutpat. Praesent vitae facilisis nunc, in egestas est. Etiam ultrices tellus a elit luctus, vel feugiat mauris feugiat. Maecenas elementum tortor purus, at porttitor massa accumsan sit amet. Vestibulum tortor nisi, pretium quis bibendum quis, posuere ac mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
</p>

<h2>vRAM</h2>
<p>
	Explain what vRAM is and how it differs from normal RAM. How much vRAM do you need? How does the computer use vRAM? Pellentesque tincidunt ullamcorper iaculis. Quisque malesuada dignissim magna, sed vehicula tortor pharetra a. Nullam fringilla ligula a purus egestas, vel tincidunt est pellentesque. Nulla pharetra convallis orci pellentesque aliquam. Pellentesque eleifend et lacus vitae lobortis.
</p>

<h2>Running with Multiple GPUs</h2>
<p>
	Introduce the idea of running multiple GPUs, SLI/CrossFire. Describe how this affects performance and support for multiple monitors. What are the advantages/disadvantages? Mauris fermentum porttitor venenatis. Pellentesque eleifend nisi sapien, nec euismod nulla aliquam nec. Morbi non lorem ipsum. Morbi sit amet orci ultricies, rutrum arcu sit amet, tempus lorem. Quisque scelerisque hendrerit arcu fermentum euismod. Fusce lacinia turpis lacus, id finibus justo vehicula a. Pellentesque feugiat turpis eget ligula efficitur cursus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
</p>


<hr />
<ul>
	<li>If you just plan on surfing the internet or doing text editing, you can get away without using a GPU.</li>
	<li>When picking a graphics card, look at the model number. This means that a GTX 980 is better than a GTX 970, and an r9 280 is better than an r9 270.</li>
	<li>If you plan of gaming, then you will want to buy the most expensive GPU you can afford. </li>
	<li>Amount of ram is important, but pay attention to bandwidth, GDDR5 > DDR4 > DDR3...</li>
	<li>GDDR 5 has twice the bandwidth of DDR3; so if you have the choice, get GDDR 5.</li>
	<li>If you want a mid-high end GPU to preform to its full potential, you will need to look out for bottlenecks. You will need processors with more then 2 cores, and monitor with 1920x1080 resolution.</li>
	<li>Compatibility is important. First and foremost, make sure your GPU fits in the case. Then check if your power supply has enough 6 and 8 pin connectors, and if you have enough volts to run your GPU.</li>
	<li>You are able to run multiple GPUs. If you have a second GPU in your computer you will only get around 25-50% of its potential, and that continues to scale down the more you have. This is also only necessary when trying to play at 4k resolution, or running three or more monitors.</li>
</ul>


<?php include('footer.php'); ?>
<?php
$active = 2;

include('data.php');
include('header.php');

$prev_page = $contents[0];
$next_page = $contents[2];
$prev_url = site_url('guides/'.$guide_uri.'/1');
$next_url = site_url('guides/'.$guide_uri.'/3');
?>

<h2>What is the Processor?</h2>
<p>
	Here we will explain the purpose and importance of the CPU, what it does and how the computer uses it. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tristique eleifend ligula. Etiam lobortis aliquet rhoncus. Cras condimentum rutrum tortor sit amet consectetur. Quisque rutrum tellus libero, eget ultricies justo elementum eleifend. Integer maximus sollicitudin lobortis. Praesent tincidunt, nisi elementum ullamcorper lacinia, neque urna vehicula ligula, sit amet auctor odio mauris quis nisi. Aenean efficitur ac elit quis tempus. Praesent dignissim leo dolor. Vivamus tincidunt tortor sed nibh ornare, non cursus mi auctor. Aliquam rhoncus, enim eu tincidunt faucibus, arcu tortor vehicula orci, nec volutpat enim felis sodales nulla. Suspendisse vestibulum ultricies nunc eu sagittis.
</p> 

<h2>Picking a Brand</h2>
<p>
	State the two main CPU manufacturers, Intel and AMD. Explain the differences between the two and make note of compatibility issues. Also touch on how they work with other hardware (Intel/Nvidia vs AMD/Radeon). Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla condimentum quis eros non placerat. Proin sollicitudin, sapien in porttitor hendrerit, nisi ante elementum eros, vel bibendum neque odio vel felis. Nam at sagittis risus, quis rhoncus justo. Duis tellus nibh, aliquet ut ligula sit amet, ullamcorper commodo nisl. Cras feugiat sapien in tellus rhoncus, in scelerisque elit pretium. Nunc volutpat lectus ut lobortis euismod. Cras et risus nec odio bibendum ornare. Vestibulum vitae urna elementum, congue velit gravida, vestibulum sapien. Duis non tortor at tortor tincidunt posuere a efficitur felis.
</p>
<ul>
	<li>AMD is generally for low budget builds.</li>
	<li>Intel’s are more powerful and more expensive.</li>
	<li>Intel CPUs are not compatible with AMD motherboards, and vice versa.</li>
</ul>

<h2>How Many Cores?</h2>
<p>
	Describe the basic idea of a CPU "core" and how number of cores affects CPU power. Possibly touch on threading. Sed rutrum felis felis, ut malesuada lectus placerat vitae. Phasellus sit amet elit lectus. Curabitur hendrerit neque quis vehicula cursus. In cursus nulla non tortor mollis auctor. Proin at nibh ligula. Proin dictum tellus eu felis pretium lacinia. Cras laoreet, dolor in volutpat pretium, arcu sapien condimentum ante, ac rhoncus metus felis id elit. Nam eu facilisis eros. Sed sed enim id turpis ornare semper non id nulla. Mauris tempus vestibulum mauris ac tristique. Duis mollis lorem at leo pellentesque efficitur. Nulla suscipit orci ac elit auctor hendrerit. Curabitur ut sapien cursus, fringilla libero sit amet, vestibulum leo. Maecenas vitae ante tristique, tincidunt quam convallis, elementum sem.
</p>
<ul>
	<li>If you just plan on surfing the internet, 2 cores are adequate, but you will be limited in what you can do.</li>
	<li>If you want to do editing, you will need 4 or more.</li>
	<li>General rule is more cores are better.</li>
</ul>

<h2>Choosing the Speed</h2>
<p>
	Explain how CPU speed is measured and how core number factors into this speed. Ut porttitor sapien nec pellentesque lacinia. Phasellus facilisis rutrum dolor et facilisis. Maecenas orci mauris, dictum in hendrerit nec, rutrum a sem. Maecenas sed eleifend magna. Integer posuere est vel metus tincidunt fringilla at vitae ipsum. Mauris nec ornare ante. Mauris eget molestie ex, in auctor mauris. Sed nisl nisl, lacinia in tellus vel, sollicitudin consequat nulla. Pellentesque hendrerit tempus purus, non venenatis est laoreet sed. Phasellus et magna non magna bibendum aliquam in sit amet quam. Etiam et vehicula odio.
</p>
<ul>
	<li>Gigahertz, or Ghz is the speed of the processor.</li>
	<li>If you plan on editing, you will want more then 3.0</li>
	<li>If you plan in gaming, you will want more then 2.5</li>
	<li>If you just plan of surfing the Internet, 2.0 is fine.</li>
</ul>

<?php include('footer.php'); ?>
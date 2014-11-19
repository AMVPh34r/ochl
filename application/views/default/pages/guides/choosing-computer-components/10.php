<?php
$active = 10;

include('data.php');
include('header.php');

$prev_page = $contents[$active-2];
$next_page = NULL;
$prev_url = site_url('guides/'.$guide_uri.'/'.($active-1));
$next_url = NULL;
?>
    
<h2>Prehipherals</h2>
<p>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, et temporibus, facere perferendis veniam beatae non debitis, numquam blanditiis necessitatibus vel mollitia dolorum laudantium, voluptate dolores iure maxime ducimus fugit.
</p>

<hr />
<p>
	And that's it! Congratulations, you've just designed your very own computer! All that's left is to acquire the parts and put it all together. Keep an eye out for a future guide covering the actual assembly process.
</p>

<?php include('footer.php'); ?>
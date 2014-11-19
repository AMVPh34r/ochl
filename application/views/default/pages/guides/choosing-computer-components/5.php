<?php
$active = 5;

include('data.php');
include('header.php');

$prev_page = $contents[$active-2];
$next_page = $contents[$active];
$prev_url = site_url('guides/'.$guide_uri.'/'.($active-1));
$next_url = site_url('guides/'.$guide_uri.'/'.($active+1));
?>
    
<h2>Storage</h2>
<p>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, et temporibus, facere perferendis veniam beatae non debitis, numquam blanditiis necessitatibus vel mollitia dolorum laudantium, voluptate dolores iure maxime ducimus fugit.
</p>

<?php include('footer.php'); ?>
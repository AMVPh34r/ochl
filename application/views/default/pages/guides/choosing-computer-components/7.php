<?php
$active = 7;

include('data.php');
include('header.php');

$prev_page = $contents[5];
$next_page = $contents[7];
$prev_url = site_url('guides/'.$guide_uri.'/6');
$next_url = site_url('guides/'.$guide_uri.'/8');
?>
    
<h2>Power Supply</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, et temporibus, facere perferendis veniam beatae non debitis, numquam blanditiis necessitatibus vel mollitia dolorum laudantium, voluptate dolores iure maxime ducimus fugit.</p>

<?php include('footer.php'); ?>
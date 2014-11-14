<?php
$active = 4;

include('data.php');
include('header.php');

$prev_page = $contents[2];
$next_page = $contents[4];
$prev_url = site_url('guides/'.$guide_uri.'/3');
$next_url = site_url('guides/'.$guide_uri.'/5');
?>
    
<h2>Page 4 Heading</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, et temporibus, facere perferendis veniam beatae non debitis, numquam blanditiis necessitatibus vel mollitia dolorum laudantium, voluptate dolores iure maxime ducimus fugit.</p>

<?php include('footer.php'); ?>
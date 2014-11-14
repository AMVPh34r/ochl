<?php
$active = 8;

include('data.php');
include('header.php');

$prev_page = $contents[6];
$next_page = $contents[8];
$prev_url = site_url('guides/'.$guide_uri.'/7');
$next_url = site_url('guides/'.$guide_uri.'/9');
?>
    
<h2>Case</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, et temporibus, facere perferendis veniam beatae non debitis, numquam blanditiis necessitatibus vel mollitia dolorum laudantium, voluptate dolores iure maxime ducimus fugit.</p>

<?php include('footer.php'); ?>
<?php
$active = 6;

include('data.php');
include('header.php');

$prev_page = $contents[4];
$next_page = $contents[6];
$prev_url = site_url('guides/'.$guide_uri.'/5');
$next_url = site_url('guides/'.$guide_uri.'/7');
?>
    
<h2>Cooling</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, et temporibus, facere perferendis veniam beatae non debitis, numquam blanditiis necessitatibus vel mollitia dolorum laudantium, voluptate dolores iure maxime ducimus fugit.</p>

<?php include('footer.php'); ?>
<?php
$active = 9;

include('data.php');
include('header.php');

$prev_page = $contents[7];
$next_page = NULL;
$prev_url = site_url('guides/'.$guide_uri.'/8');
$next_url = NULL;
?>
    
<h2>Page 9 Heading</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, et temporibus, facere perferendis veniam beatae non debitis, numquam blanditiis necessitatibus vel mollitia dolorum laudantium, voluptate dolores iure maxime ducimus fugit.</p>

<?php include('footer.php'); ?>
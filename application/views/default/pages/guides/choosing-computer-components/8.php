<?php
$active = 8;

include('data.php');
include('header.php');

$prev_page = $contents[6];
$next_page = $contents[8];
$prev_url = site_url('guides/'.$guide_uri.'/7');
$next_url = site_url('guides/'.$guide_uri.'/9');
?>
    
<h2>Case Sizes</h2>
<p>
	Show what motherboard sizes fit into what size cases. Account for oversized graphics cards as well. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, et temporibus, facere perferendis veniam beatae non debitis, numquam blanditiis necessitatibus vel mollitia dolorum laudantium, voluptate dolores iure maxime ducimus fugit.
</p>

<h2>Picking the Best Look</h2>
<p>
	Mention the various case styles there are to choose from, and their price ranges. Talk about any extra features to look for, such as integrated water cooilng/fans, front-panel USB ports, or LCD displays for monitoring hardware. Pellentesque augue risus, faucibus a blandit vitae, sagittis non odio. Integer mattis viverra vulputate. Etiam a risus id leo laoreet malesuada sed nec ligula. Sed ullamcorper dolor ac ligula tempus tincidunt. Pellentesque arcu libero, mattis quis ipsum sed, porta posuere lacus. Curabitur nibh odio, pharetra quis metus eget, scelerisque consectetur ipsum.
</p>

<?php include('footer.php'); ?>
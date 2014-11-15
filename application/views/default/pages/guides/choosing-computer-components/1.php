<?php
$active = 1;

include('data.php');
include('header.php');

$prev_page = NULL;
$next_page = $contents[1];
$prev_url = NULL;
$next_url = site_url('guides/'.$guide_uri.'/2');
?>

<h2>Why Build a Computer?</h2>
<p>
	So you've decided that you need a new computer. Maybe your current one isn't powerful enough, maybe it recently crashed, or maybe it's just getting old and needs to be replaced. Why should you spend the time picking out parts and building it yourself when you could just run to the nearest store and buy something off the shelf? There are a number of reasons why building your computer yourself is considered a good idea, ranging from customizability to price.
</p><br />

<h4>Free of bloatware.</h4>
<p>
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse consectetur consectetur urna sit amet pulvinar. Nullam venenatis luctus turpis, in dictum lacus commodo vitae. Fusce egestas vel dolor nec dapibus. Maecenas blandit, neque at eleifend bibendum, ante libero fringilla sem, fermentum dignissim magna sapien ac ligula. Suspendisse condimentum vel urna a elementum. Quisque ac pharetra nibh. Fusce at pulvinar ante. Sed nec sapien in ipsum tempus ultrices. Sed nisl arcu, bibendum vel sodales laoreet, luctus id magna. Nullam vel volutpat mi.
</p><br />

<h4>Better price/performance.</h4>
<p>
	Mauris et mollis dui. Integer congue nec lacus vel placerat. Vestibulum sit amet nisi aliquam, facilisis tortor a, aliquet dolor. Aenean consequat sit amet leo et pretium. Suspendisse dui sem, varius non sapien sed, tincidunt tempus justo. Sed lacinia, massa vehicula egestas vestibulum, orci nibh tristique metus, in congue libero metus vel urna. Curabitur eget nibh sed ex porta accumsan et quis ex. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
</p><br />

<h4>You can make it yours.</h4>
<p>
	Vivamus auctor convallis lectus, ut volutpat massa. Nunc id faucibus lorem, ut dictum purus. Morbi ac feugiat dui. Cras venenatis est eu justo mollis, et luctus augue semper. Integer egestas magna vel molestie condimentum. Mauris varius nisi mauris, et molestie nisl vestibulum eu. Proin blandit maximus erat sed suscipit. Phasellus ut molestie nulla. Proin a massa eget sapien consectetur suscipit.
</p>

<?php include('footer.php'); ?>
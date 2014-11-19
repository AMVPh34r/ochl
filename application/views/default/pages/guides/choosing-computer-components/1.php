<?php
$active = 1;

include('data.php');
include('header.php');

$prev_page = NULL;
$next_page = $contents[$active];
$prev_url = NULL;
$next_url = site_url('guides/'.$guide_uri.'/'.($active+1));
?>

<h2>Why Build a Computer?</h2>
<p>
	So you've decided that you need a new computer. Maybe your current one isn't powerful enough, maybe it recently crashed, or maybe it's just getting old and needs to be replaced. Why should you spend the time picking out parts and building it yourself when you could just run to the nearest store and buy something off the shelf? There are a number of reasons why building your computer yourself is considered a good idea, ranging from customizability to price.
</p><br />

<h4>Free of bloatware.</h4>
<p>
	When you buy a computer from the store, you pay for the convenience. Most tech stores install a host of widgets and applications on all their computers before selling them. These applications serve purposes ranging from virus scanners to hardware monitors, and while that may sound useful, more often than not the programs only end up slowing the computer down (hence the name "bloatware"), and there are always better alternative programs that serve the same purposes. On top of that, some applications actively monitor computer usage and send that information back to the store, so if you are concerned about privacy you likely won't want these programs on your computer. By building your own computer, you get to install the operating system yourself, providing you the slimmest and fastest out-of-the-box experience.
</p><br />

<h4>Better price/performance.</h4>
<p>
	Perhaps the most convincing argument for building your own PC is price. When you buy from a retailer, they have already bought their computers from the computer manufacturer, who has in turn bought the individual parts from several other manufacturers. The end result is a significant markup in price. By buying individal components yourself, you can cut out the middleman and get a much more powerful computer for the same price, or settle for less and save yourself some money.
</p><br />

<h4>You can make it yours.</h4>
<p>
	The most you're likely to get in terms of customizability from a store is a few different case sizes, and maybe some color choices. When building yourself, you get to choose each individual part that goes into the computer, giving you the ability to create exactly what you need or want. Need more hard drive space? Not a problem. Want a window in the case so you can see inside? You can do that. Building your own PC gives you the absolute maximum in customizability.
</p>

<hr />
<p>
	Ready to get started? Excellent, go ahead and click the button below to continue on to the first step: choosing your processor.
</p>

<?php include('footer.php'); ?>
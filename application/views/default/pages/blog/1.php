<?php
$post = array(
	'title' => "Blog Post",
	'author' => "Author",
	'date' => "August 24, 2013",
	'time' => "9:00 PM",
	'lead' => "Welcome to the home of the Organization for Computer Hardware Learning!",
	'body' => "<p>If you're reading this, you are likely a student of UNC Charlotte, and have an interest in learning more about computer hardware, and our organization aims to provide an environment for you to do just that. If you’d like to learn more about us or get in contact with us, click the \"About Us\" link.</p>
            	<p>Currently group meetings are scheduled for every Wednesday at 6:30 PM in Atkins 120, with our first interest meeting being 9/17. Anyone with a passing interest in our group is welcome to show up. We will be going over our club schedule for the semester, as well as answering any questions you may have. Food and drinks will be provided. We hope to see you there!</p>"
);
?>

<!-- Page Content -->
<div class="container">
    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo $post['title']; ?>
                <small>by <a href="#"><?php echo $post['author']; ?></a>
                </small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li class="active">Post</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    <!-- Content Row -->
    <div class="row">
        <!-- Blog Post Content Column -->
        <div class="col-lg-8">
            <!-- Blog Post -->
            <hr />
            <!-- Date/Time -->
            <p><i class="fa fa-clock-o"></i> Posted on <?php echo $post['date']; ?> at <?php echo $post['time']; ?></p>
            <hr />
            <!-- Preview Image -->
            <img class="img-responsive" src="http://placehold.it/900x300" alt="">
            <hr />
            <!-- Post Content -->
            <p class="lead"><?php echo $post['lead']; ?></p>
            <?php echo $post['body']; ?>
            <hr />
        </div>
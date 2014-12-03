<?php
$post = array(
	'title' => "First Meeting a Success",
	'author' => "William McKinley",
	'date' => "September 19, 2014",
	'time' => "10:27 AM",
	'image' => "",
	'lead' => "",
	'body' => "<p>Hello from the Organization for Computer Hardware Learning! We had our first meeting Wednesday and it was a great success, thanks to all that attended. We explained in greater detail what out purpose is and what we will be doing over the course of the semester, and answered some questions. We are currently working on our logo and website, so expect to hear more about that in the future.</p>
            	<p>Remember Meetings are every Wednesday at 6:30, in Adkins 120.</p>"
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
                <li><?php echo anchor('home', 'Home'); ?></li>
                <li><?php echo anchor('blog', 'Blog'); ?></li>
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
            <?php
            if ($post['image'] != '') {
                echo img(array('src'=>'files/img/blog/'.$post['image'], 'class'=>'img-responsive blog-post-img'));
                echo '<hr />';
            }
            ?>
            <!-- Post Content -->
            <p class="lead"><?php echo $post['lead']; ?></p>
            <?php echo $post['body']; ?>
            <hr />
        </div>
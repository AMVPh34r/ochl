<?php
$post = array(
	'title' => "Moving Off Campus",
	'author' => "William McKinley",
	'date' => "October 8, 2014",
	'time' => "9:08 AM",
	'image' => "",
	'lead' => "",
	'body' => "<p>Hello OCHL members! We have great news we have been waiting for the right time to share with all of you. We have received funds from Intel to start an off campus orginization. We will still have the on campus meetings,  and they will not change,  we are just adding weekend meetings off campus for non students as well. More information will be provided later in the month.</p>"
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
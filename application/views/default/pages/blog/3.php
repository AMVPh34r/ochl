<?php
$post = array(
	'title' => "Expanding",
	'author' => "Alex Schaeffer",
	'date' => "September 26, 2014",
	'time' => "10:46 AM",
	'image' => "",
	'lead' => "",
	'body' => "<p>Big news this week: we are proud to announce that due to our recent success and popularity, we have received attention from interested individuals in surrounding areas. Because of this, we are happy to say that we are planning on expanding past the scope of UNCC's campus. Over the next few weeks we will be focusing on making our organization open to the general public, where anyone will be free to join. If you are interested in becoming a part of our group, you can let us know via email. We hope to hear from you soon!</p>"
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
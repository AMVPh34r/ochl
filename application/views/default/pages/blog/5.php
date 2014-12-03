<?php
$post = array(
    'title' => "Website",
    'author' => "William McKinley",
    'date' => "October 31, 2014",
    'time' => "4:03 PM",
    'image' => '',//"http://placehold.it/900x300",
    'lead' => "Hello OCHL members and fans.",
    'body' => "<p>We are excited to announce that we are currently working on a new, improved website. Because we have been expanding off campus, we felt it was necessary to make a change. It will be released this Wednesday.</p>"
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
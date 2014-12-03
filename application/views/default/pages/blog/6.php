<?php
$post = array(
    'title' => "Website Launch",
    'author' => "Alex Schaeffer",
    'date' => "November 7, 2014",
    'time' => "4:59 PM",
    'image' => '6.png',//"http://placehold.it/900x300",
    'lead' => "Big news this week! Our website has officially launched for the general public.",
    'body' => "<p>Currently the site offers general information about our organization, as well as the home of our new blog, and some helpful tips and videos to get you started learning about computer hardware. We also have a contact form set up if you wish to get in contact with us with any questions, or if you're interested in joining our group.</p>"
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
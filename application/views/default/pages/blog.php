<?php
// Blog post teaser data
// TODO integrate with database
$posts = array(
    array(
        'id' => '4',
        'title' => "Moving Off Campus",
        'author' => "William McKinley",
        'date' => "October 8, 2014",
        'time' => "9:08 AM",
        'image' => '',//"http://placehold.it/900x300",
        'text' => "We have great news we have been waiting for the right time to share with all of you. We have received funds from Intel to start an off campus orginization. We will still have the on campus meetings, and they will not change, we are just adding weekend meetings off campus for non students as well."
    ),
    array(
        'id' => '3',
        'title' => "Expanding",
        'author' => "Alex Schaeffer",
        'date' => "September 26, 2014",
        'time' => "10:46 AM",
        'image' => '',//"http://placehold.it/900x300",
        'text' => "Big news this week: we are proud to announce that due to our recent success and popularity, we have received attention from interested individuals in surrounding areas. Because of this, we are happy to say that we are planning on expanding past the scope of UNCC's campus."
    ),
    array(
        'id' => '2',
        'title' => "First Meeting a Success",
        'author' => "William McKinley",
        'date' => "September 19, 2014",
        'time' => "10:27 AM",
        'image' => '',//"http://placehold.it/900x300",
        'text' => "We had our first meeting Wednesday and it was a great success, thanks to all that attended. We explained in greater detail what our purpose is and what we will be doing over the course of the semester, in addition to answering a few questions. We are currently working on our logo and website, so expect to hear more about that in the future."
    ),
    array(
        'id' => '1',
        'title' => "Welcome to OCHL!",
        'author' => "Alex Schaeffer",
        'date' => "September 17, 2014",
        'time' => "10:44 AM",
        'image' => "1.png",
        'text' => "Welcome to the home of the Organization for Computer Hardware Learning!<p>If you're reading this, you are likely a student of UNC Charlotte, and have an interest in learning more about computer hardware, and our organization aims to provide an environment for you to do just that. If you’d like to learn more about us or get in contact with us, click the \"About Us\" link.</p>"
    )
);
?>

<!-- Page Content -->
<div class="container">
    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Blog
                <!-- <small>Subheading</small> -->
            </h1>
            <ol class="breadcrumb">
                <li><?php echo anchor('home', 'Home'); ?>
                </li>
                <li class="active">Blog</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8">
            <?php
            foreach($posts as $post) {
                echo '<h2>'.anchor('blog/'.$post['id'], $post['title']).'</h2>';
                echo '<p class="lead">by '.anchor('#', $post['author']).'</p>';
                echo '<p><i class="fa fa-clock-o"></i> Posted on '.$post['date'].' at '.$post['time'].'</p>';
                if ($post['image'] != '')
                    echo '<hr />'.img(array('src'=>$post['image'], 'class'=>'img-responsive img-hover'));
                echo '<hr /><p>'.$post['text'].'</p>';
                echo anchor('blog/'.$post['id'], 'Read More <i class="fa fa-angle-right"></i>', array('class'=>'btn btn-primary'));
                echo '<hr />';
            }
            ?>
            <!-- Pager -->
            <!-- <ul class="pager">
                <li class="previous">
                    <a href="#">&larr; Older</a>
                </li>
                <li class="next">
                    <a href="#">Newer &rarr;</a>
                </li>
            </ul> -->
        </div>

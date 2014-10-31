<?php
// Blog post teaser data
// TODO integrate with database
$posts = array(
    array(
        'id' => '4',
        'title' => "Blog Post 4",
        'author' => "Author",
        'date' => "September 17, 2014",
        'time' => "10:44 AM",
        'image' => "http://placehold.it/900x300",
        'text' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum."
    ),
    array(
        'id' => '3',
        'title' => "Blog Post 3",
        'author' => "Author",
        'date' => "September 17, 2014",
        'time' => "10:44 AM",
        'image' => "http://placehold.it/900x300",
        'text' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum."
    ),
    array(
        'id' => '2',
        'title' => "Blog Post 2",
        'author' => "Author",
        'date' => "September 17, 2014",
        'time' => "10:44 AM",
        'image' => "http://placehold.it/900x300",
        'text' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum."
    )
);
?>

<!-- Page Content -->
<div class="container">
    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Blog
                <small>Subheading</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a>
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
                echo '<hr />'.img(array('src'=>$post['image'], 'class'=>'img-responsive img-hover'));
                echo '<hr /><p>'.$post['text'].'</p>';
                echo anchor('blog/'.$post['id'], 'Read More <i class="fa fa-angle-right"></i>', array('class'=>'btn btn-primary'));
                echo '<hr />';
            }
            ?>
            <!-- Pager -->
            <ul class="pager">
                <li class="previous">
                    <a href="#">&larr; Older</a>
                </li>
                <li class="next">
                    <a href="#">Newer &rarr;</a>
                </li>
            </ul>
        </div>

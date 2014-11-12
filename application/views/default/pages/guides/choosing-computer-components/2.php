<?php
include('data.php');
$active = 2;
?>

<!-- Page Content -->
<div class="container">
    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Choosing Computer Components
                <small>The Processor</small>
            </h1>
            <ol class="breadcrumb">
                <li><?php echo anchor('home', 'Home'); ?></li>
                <li><?php echo anchor('guides', 'Guides'); ?></li>
                <li><?php echo anchor('guides/'.$guide_uri, 'Choosing Computer Components'); ?></li>
                <li class="active">Processor</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- Content Row -->
    <div class="row">
        <?php include('sidebar.php'); ?>
        <!-- Content Column -->
        <div class="col-md-9">
            <h2>Section Heading</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, et temporibus, facere perferendis veniam beatae non debitis, numquam blanditiis necessitatibus vel mollitia dolorum laudantium, voluptate dolores iure maxime ducimus fugit.</p>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
<?php
if (is_file(__DIR__.'/'.($active-1).'.php')) {
    $prev_page = $contents[$active-2];
    $prev_url = site_url('guides/'.$guide_uri.'/'.($active-1));
} else {
    $prev_page = NULL;
    $prev_url = NULL;
}
if (is_file(__DIR__.'/'.($active+1).'.php')) {
    $next_page = $contents[$active];
    $next_url = site_url('guides/'.$guide_uri.'/'.($active+1));
} else {
    $next_page = NULL;
    $next_url = NULL;
}
?>

<!-- Page Content -->
<div class="container">
    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo $guide_name; ?>
                <small><?php echo $contents[$active-1]; ?></small>
            </h1>
            <ol class="breadcrumb">
                <li><?php echo anchor('home', 'Home'); ?></li>
                <li><?php echo anchor('guides', 'Guides'); ?></li>
                <li><?php echo anchor('guides/'.$guide_uri, $guide_name); ?></li>
                <li class="active"><?php echo $contents[$active-1]; ?></li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    
    <!-- Content Row -->
    <div class="row">
        <?php include('sidebar.php'); ?>
        <!-- Content Column -->
        <div class="col-md-9">
<!-- Page Content -->
<div class="container">
    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Choosing Computer Components
                <small><?php echo $contents[$active-1]; ?></small>
            </h1>
            <ol class="breadcrumb">
                <li><?php echo anchor('home', 'Home'); ?></li>
                <li><?php echo anchor('guides', 'Guides'); ?></li>
                <li><?php echo anchor('guides/'.$guide_uri, 'Choosing Computer Components'); ?></li>
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
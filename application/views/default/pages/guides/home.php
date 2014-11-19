<?php
$guides = array(
	'Choosing Computer Components' => 'choosing-computer-components',
);
?>

<!-- Page Content -->
<div class="container">
    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Guides
            </h1>
            <ol class="breadcrumb">
                <li><?php echo anchor('home', 'Home'); ?></li>
                <li class="active">Guides</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- Content Row -->
    <div class="row">
        <!-- Sidebar Column -->
        <div class="col-md-3">
            <div class="list-group">
            	<h3>Our Guides</h3>
            	<?php
            	foreach($guides as $name=>$uri) {
            		echo anchor('guides/'.$uri, $name, array('class'=>'list-group-item'));
            	}
            	?>
            </div>
        </div>
        <!-- Content Column -->
        <div class="col-md-9">
            <h2>Section Heading</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, et temporibus, facere perferendis veniam beatae non debitis, numquam blanditiis necessitatibus vel mollitia dolorum laudantium, voluptate dolores iure maxime ducimus fugit.</p>
        </div>
    </div>
    <!-- /.row -->
</div>
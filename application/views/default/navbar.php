<?php
// TODO migrate links to database
$navbar_links = array(
    'about' => 'About',
    'services' => 'Services',
    'calendar' => 'Calendar',
    'contact' => 'Contact',
    'blog' => 'Blog'
);
?>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php echo anchor('home', 'OCHL', array('class'=>'navbar-brand')); ?>
        </div>
        <!-- Nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
            <?php
                $cur_page = uri_string(); // TODO account for sub-pages, only check first segment
                // Iterate through navbar links, set active class if URI matches current page
                foreach($navbar_links as $uri=>$label) {
                    echo '<li'.($uri == $cur_page ? ' class="active"' : '').'>'.anchor($uri, $label).'</li>';
                }
            ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
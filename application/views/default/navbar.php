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
                <li>
                    <?php echo anchor('about', 'About'); ?>
                </li>
                <li>
                    <?php echo anchor('services', 'Services'); ?>
                </li>
                <li>
                    <?php echo anchor('calendar', 'Calendar'); ?>
                </li>
                <li>
                    <?php echo anchor('contact', 'Contact'); ?>
                </li>
                <li>
                    <?php echo anchor('blog', 'Blog'); ?>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
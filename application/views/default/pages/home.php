<!-- Header Carousel -->
<header id="mainCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#mainCarousel" data-slide-to="1"></li>
        <li data-target="#mainCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="fill"><?php echo img(array('src'=>'files/img/static/hardware_img_1.jpg', 'class'=>'img-responsive vert-align')); ?></div>
            <div class="carousel-caption">
                <!-- <h2>Caption 1</h2> -->
            </div>
        </div>
        <div class="item">
            <div class="fill"><?php echo img(array('src'=>'files/img/static/hardware_img_5.jpg', 'class'=>'img-responsive vert-align')); ?></div>
            <div class="carousel-caption">
                <!-- <h2>Caption 2</h2> -->
            </div>
        </div>
        <div class="item">
            <div class="fill"><?php echo img(array('src'=>'files/img/static/hardware_img_3.jpg', 'class'=>'img-responsive vert-align')); ?></div>
            <div class="carousel-caption">
                <!-- <h2>Caption 3</h2> -->
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#mainCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#mainCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>

<!-- Page Content -->
<div class="container">
    <!-- Features Section -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Welcome to the Organization for Computer Hardware Learning</h2>
        </div>
        <div class="col-md-6">
        <p>The Organization for Computer Hardware Learning is dedicated to educating those interested in learning more about computer hardware. Our aim is to attract people with any interest in computers, and work with them to help them understand just what hardware is and how it contributes to a working machine.</p>
        <p>All members will be able to partake in activities such as:</p>
            <ul>
                <li>Weekly meetings as a group, providing both tutorials for all group members on interacting with hardware and helping them learn more.</li>
                <li>Regular special events which include guest speakers from companies such as Intel and Nvidia.</li>
                <li>“Build Sessions” in which members are tasked with building a computer and getting it to run successfully.</li>
            </ul>
            <p></p>
        </div>
        <div class="col-md-6">
            <?php echo img(array('src'=>'files/img/static/hardware_img_2.jpg', 'class'=>'img-responsive')); ?>
        </div>
    </div>
    <!-- /.row -->

    <hr />

    <!-- Lower section -->
    <div class="well">
        <div class="row">
            <div class="col-md-8">
                <p>Interested in joining the orgnization? Great, we'd love to have you! Simply click the button to the right to be taken to our registration form.</p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-default btn-block" href="/contact">Register</a>
            </div>
        </div>
    </div>
</div>
<!-- /.container -->
<?php $GLOBALS['js_load'][] = 'home.js'; ?>
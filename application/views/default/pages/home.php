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
            <div class="fill" style="background-image:url('<?php echo base_url().'files/img/static/hardware_img_1.jpg'; ?>');"></div>
            <div class="carousel-caption">
                <!-- <h2>Caption 1</h2> -->
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('<?php echo base_url().'files/img/static/hardware_img_5.jpg'; ?>');"></div>
            <div class="carousel-caption">
                <!-- <h2>Caption 2</h2> -->
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('<?php echo base_url().'files/img/static/hardware_img_3.jpg'; ?>');"></div>
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
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
            <ul>
                <li>Weekly meetings as a group, providing both tutorials for all group members on interacting with hardware and helping them learn more.</li>
                <li>Regular special events which include guest speakers from companies such as Intel and Nvidia.</li>
                <li>“Build Sessions” in which members are tasked with building a computer and getting it running successfully.</li>
                <li>A website offering detailed information about our organization, as well as regular news updates regarding the latest hardware.</li>
            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit:</p>
        </div>
        <div class="col-md-6">
            <?php echo img(array('src'=>'files/img/static/hardware_img_2.jpg', 'class'=>'img-responsive')); ?>
        </div>
    </div>
    <!-- /.row -->

    <!-- Marketing Icons Section -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Header
            </h1>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-check"></i> Title 1</h4>
                </div>
                <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                    <a href="#" class="btn btn-default">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-gift"></i> Title 2</h4>
                </div>
                <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                    <a href="#" class="btn btn-default">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-compass"></i> Title 3</h4>
                </div>
                <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                    <a href="#" class="btn btn-default">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

    <hr />

    <!-- Lower section -->
    <div class="well">
        <div class="row">
            <div class="col-md-8">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-default btn-block" href="#">Button</a>
            </div>
        </div>
    </div>

</div>
<!-- /.container -->

<!-- Script to Activate the Carousel -->
<script>
$('.carousel').carousel({
    interval: 5000 //changes the speed
})
</script>
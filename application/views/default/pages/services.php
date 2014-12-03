<!-- Page Content -->
<div class="container">
    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Services
                <!-- <small>Subheading</small> -->
            </h1>
            <ol class="breadcrumb">
                <li><?php echo anchor('home', 'Home'); ?>
                </li>
                <li class="active">Services</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- Image Header -->
    <div class="row">
        <div class="col-lg-12 captioned-img">
            <?php echo img(array('src'=>'files/img/static/hitchhikers_lg.png', 'class'=>'img-responsive')); ?>
            <div class="img-caption">
                Organization members learning about robotics hardware.
            </div>
        </div>
    </div>
    <!-- /.row -->

    <!-- Service Tabs -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">What We Do</h2>
        </div>
        <div class="col-lg-12">

            <ul id="tab-nav" class="nav nav-tabs nav-justified">
                <li class="active"><a href="#service-one" data-toggle="tab"><i class="fa fa-graduation-cap"></i> Learn About Hardware</a>
                </li>
                <li class=""><a href="#service-two" data-toggle="tab"><i class="fa fa-group"></i> Weekly Meetings</a>
                </li>
                <li class=""><a href="#service-three" data-toggle="tab"><i class="fa fa-slideshare"></i> Special Events</a>
                </li>
                <li class=""><a href="#service-four" data-toggle="tab"><i class="fa fa-desktop"></i> Build Sessions</a>
                </li>
            </ul>

            <div id="tab-content" class="tab-content">
                <div class="tab-pane fade active in" id="service-one">
                    <p>It's our goal, no matter how much you know about computers, if you come to an OCHL meeting, you'll walk away from it with something you didn't know before. Because we have so many leaders in OCHL, we can talk with new members about the basics, and others about new advances or products.</p>
                    <div class="row">
                        <div class="col-md-6">
                            <p>Want a taste? Here's a quick video outlining the specifics in differences between Intel corporation's iX processors.</p>
                        </div>
                        <div class="col-md-6">
                            <iframe width="560" height="315" src="//www.youtube.com/embed/GLSPub4ydiM" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="service-two">
                    <p>Our weekly meetings are well suited for both students who are new to hardware, and veterans. We go over the basics of what hardware does, and talk about new parts that are on the market.</p>
                </div>
                <div class="tab-pane fade" id="service-three">
                    <p>We will have a guest speaker whenever we can. We have scheduled for representatives from Intel to come and speak about their new products.</p>
                </div>
                <div class="tab-pane fade" id="service-four">
                    <p>During these sessions we will either be building a computer in person, or will be building one online. The goal of in person builds is to help our new members build their machines, and the purpose of the online builds are to see who can build the best PC in a given budget.</p>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- /.container -->
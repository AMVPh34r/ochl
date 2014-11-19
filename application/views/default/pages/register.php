<!-- Page Content -->
<div class="container">
    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Register
                <small><!-- Subheading --></small>
            </h1>
            <ol class="breadcrumb">
                <li><?php echo anchor('home', 'Home'); ?>
                </li>
                <li class="active">Register</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- Main content -->
    <div class="row">
        <!-- Contact Form -->
        <div class="col-md-12">
            <form name="" id="" novalidate>
                <div class="control-group form-group row">
                    <div class="controls">
                        <div class="col-md-6">
                            <label>First Name:</label>
                            <input type="text" class="form-control" id="fname" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                        <div class="col-md-6">
                            <label>Last Name:</label>
                            <input type="text" class="form-control" id="lname" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                </div>
                <div class="control-group form-group row">
                    <div class="controls">
                        <div class="col-md-6">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                        <div class="col-md-6">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Question 1:</label>
                        <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                    </div>
                </div>
                <div id="success"></div>
                <!-- For success/fail messages -->
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->

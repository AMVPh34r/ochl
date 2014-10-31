<!-- Footer -->
<div class="container">
    <hr />
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Alex Schaeffer 2014</p>
            </div>
        </div>
    </footer>
</div>

<!-- javascript -->
<?php
    foreach($GLOBALS['js_load'] as $file) {
        echo load_js($file);
    }
?>
</body>
</html>
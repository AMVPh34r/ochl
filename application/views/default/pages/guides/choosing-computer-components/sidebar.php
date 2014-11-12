<!-- Sidebar Column -->
<div class="col-md-3">
    <div class="list-group">
        <h3>Contents</h3>
        <?php
        for($i=1; $i<=count($contents); $i++) {
            if ($i == $active)
                $attrs = array('class'=>'list-group-item active');
            else
                $attrs = array('class'=>'list-group-item');
            echo anchor('guides/'.$guide_uri.'/'.$i, $contents[$i-1], $attrs);
        }
        ?>
    </div>
</div>
	</div>
</div>
<!-- /.row -->
<div class="row">
	<?php if (isset($prev_page) && $prev_page != NULL): ?>
	<div class="col-md-1">
		<a href="<?php echo $prev_url; ?>" class="btn btn-default">
			<i class="fa fa-arrow-left"></i> <?php echo $prev_page; ?>
		</a>
	</div>
	<?php endif; ?>
	<?php if (isset($next_page) && $next_page != NULL): ?>
	<div class="col-md-1 col-md-offset-10">
		<a href="<?php echo $next_url; ?>" class="btn btn-primary">
			<?php echo $next_page; ?> <i class="fa fa-arrow-right"></i>
		</a>
	</div>
	<?php endif; ?>
</div>
</div>
<!-- /.container -->
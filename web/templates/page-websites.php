<?php

get_header(); ?>

<div class="row">
	<div class="col-md-3">
        <div class="sidebar hidden-print affix" role="complementary">
        	<ul class="nav nav-pills nav-stacked">
				<li>
					<a href="#">Overview</a>
				</li>
				<li>
					<a href="#">Backup</a>
				</li>
        	</ul>
		</div>
	</div>
	<div class="col-md-9">
		<div class="page-header">
		 	<h1>Overview <small>Information about your website</small></h1>
		</div>

		<?php get_template('block', 'website-table'); ?>

	</div>
</div>

<?php 

get_footer();
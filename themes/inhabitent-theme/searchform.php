<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset>
		<div class="search-label">
			<span class="search-button"><i class="fa fa-search"></i></span>
			<label>
				<input type="search" class="search-field" placeholder="Text and hit enter..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
			</label>
		</div>	
			<span class="screen-reader-text">
			<?php echo esc_html('Search'); ?>
		</span>
	</fieldset>
</form>

<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset>
			<a href="#" class="search-submit" aria-hidden="true">
				<i class="fa fa-search"></i>
			</a>
			<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
		<label>
			<input type="search" class="search-field" placeholder="SEARCH FOR -TANT" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>
	</fieldset>
</form>

<!--<form role="search-404" method="get" class="search-form-404" action="<?php echo home_url( '/' ); ?>">
	<fieldset>
			<a href="#" class="search-submit-404" aria-hidden="true">
				<i class="fa fa-search"></i>
			</a>
			<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
		<label>
			<input type="search" class="search-field-404" placeholder="SEARCH FOR -TANT" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>
	</fieldset>
</form>-->


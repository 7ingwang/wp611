<form method="get" id="searchform" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input class="search-field" type="text" value="" name="s" id="s" placeholder="<?php echo esc_attr_x( '搜索', 'placeholder', 'CLOUDPRESS' );?>">
	<input type="submit" class="search-submit" value="<?php esc_attr_e('Search','CLOUDPRESS');?>"><i class="icon-search"></i>
</form>

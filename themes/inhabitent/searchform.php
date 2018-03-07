<script type="text/javascript">
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
</script>

<div class="header-search">
	
	<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
		<fieldset>
		<a onClick="toggle_visibility('searchInput')"href="#" class="search-toggle" aria-hidden="true"></a>
			<label id="searchInput">
				<input type="search" class="search-field" placeholder="search..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
			</label>
			<input type="submit" id="search-submit" class="screen-reader-text" value="Search"/>
		</fieldset>
	</form>

</div>
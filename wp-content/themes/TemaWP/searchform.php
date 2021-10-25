<form action="" methods="get">
	<label for="search">Search in <?php echo home_url('/'); ?></label>
	<input type="text" name="s" id="s" value="<?php the_search_query(); ?>" />
	<input type="submit" id="searchsubmit" value="Buscar" />
</form>
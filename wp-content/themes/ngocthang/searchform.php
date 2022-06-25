<?php $search_text = empty($_GET['s']) ? __("Tìm kiếm") : get_search_query(); ?> 
<form class="search-form" method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
	<div class="form-group">
		<div class="input-group">
			<input class="form-control" type="text" value="<?php echo $search_text; ?>" 
			name="s" id="s"  onblur="if (this.value == '')  {this.value = '<?php echo $search_text; ?>';}"  
			onfocus="if (this.value == '<?php echo $search_text; ?>') {this.value = '';}" />
			<div class="input-group-btn">
				<button class="btn buttom-search" type="submit"><i class="fas fa-search"></i></button>
			</div>
		</div>
	</div>
</form>
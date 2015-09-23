<?php

$categories = get_categories();

foreach($categories as $category) {
	$category = get_object_vars($category);
	?>
	<div class="col-md-4 text-center category-button">
		<a href="categories/<?php echo $category['slug']; ?>"><?php echo $category['name']; ?></a>
	</div>
	<?php
}
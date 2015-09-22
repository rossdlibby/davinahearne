<form role="search" method="get" id="searchForm" action="<?php echo home_url( '/' ); ?>">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="search-form">
				<div class="row">
					<div class="col-md-1 text-right no-padding-right">
						<i class="fa fa-search"></i>
					</div>
					<div class="col-md-9 text-left no-padding-left no-padding-right">
						<input id="searchInput" class="search-query sb-search-input" placeholder="What are you searching for?" type="search" value="" name="s" id="search">
					</div>
					<div class="col-md-2 no-padding-left">
						<button type="submit" class="sb-button-go" id="searchsubmit">
							<span>SEARCH</span>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
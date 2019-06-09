
<aside class="sidebar">
	<form  method="get" action="{{url('/search')}}">	
		<h1 class="sidebar-heading">
			Filter by
		</h1>
		<input type="submit" name="search" value="Search" class="btn btn-primary" style="width: 100%;">
		<ul class="filter ul-reset">



			<li class="filter-item">
				<section class="filter-item-inner">
					<h1 class="filter-item-inner-heading minus">
						Category
					</h1>
					<ul class="filter-attribute-list ul-reset">
						<div class="filter-attribute-list-inner">
							<?php
							if(isset($product_category)){
								foreach($product_category as $key){
							?>
								<li class="filter-attribute-item">
									<input type="checkbox" name="product_category" class="form-check-input" value="<?php echo $key->product_category; ?>">
									<label for="colour-attribute-1" class="filter-attribute-label ib-m">
										<?php echo $key->product_category; ?>
									</label>
								</li>
							<?php
								}	
							}
							?>
						</div>
					</ul>
				</section>
			</li>



		</ul>
	</form>
</aside>
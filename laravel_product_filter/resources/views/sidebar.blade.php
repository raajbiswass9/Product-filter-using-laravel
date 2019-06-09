





<select id="order_by" name="order_by" class="form-control" style="width: 200px; float: right">
	<option value="">Random</option>
	<option value="1" <?php if(isset($selected_order)){	if ($selected_order == 1){ echo "selected"; } } ?>>Price: Low to High</option>
	<option value="2" <?php if(isset($selected_order)){	if ($selected_order == 2){ echo "selected"; } } ?>>Price: High to Low</option>
</select>

<aside class="sidebar">
	<form  method="get" action="{{url('/search')}}" id="product_filter_form">

		<?php
		if(isset($product_category)){
			echo "<input type='hidden' name='product_category' value='$product_category'>";
		}
		?>
		
		<input type='hidden' name='order_product_by' value='1'>

		<h1 class="sidebar-heading">
			Filter by
		</h1>

		<input type="submit" name="search" value="Search" class="btn btn-primary" style="width: 100%;">

		<ul class="filter ul-reset">

			<li class="filter-item">
				<section class="filter-item-inner">
					<h1 class="filter-item-inner-heading minus">
						Price range
					</h1>

					<div class="filter-attribute-list-inner">
						Max: <input type="text" name="product_max_price" placeholder="<?php if(isset($product_max_price)){	echo $product_max_price; } ?>" value="<?php if(isset($selected_max_price)){ echo $selected_max_price; } ?>">
						Min: <input type="text" name="product_min_price" placeholder="<?php if(isset($product_min_price)){	echo $product_min_price; } ?>" value="<?php if(isset($selected_min_price)){ echo $selected_min_price; } ?>">

					</div>				

				</section>
			</li>

			<li class="filter-item">
				<section class="filter-item-inner">
					<h1 class="filter-item-inner-heading minus">
						Size
					</h1>
					<ul class="filter-attribute-list ul-reset">
						<div class="filter-attribute-list-inner">
							<?php
							if(isset($product_size)){
								foreach($product_size as $key){
							?>
								<li class="filter-attribute-item">
									<input type="checkbox" name="product_size[]" class="form-check-input" value="<?php echo $key->product_size; ?>"   @if(isset($selected_size)) 	@if (in_array($key->product_size, $selected_size)) 	checked="checked" 	@endif @endif >
									<label for="colour-attribute-1" class="filter-attribute-label ib-m">
										<?php echo $key->product_size; ?>
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


			<li class="filter-item">
				<section class="filter-item-inner">
					<h1 class="filter-item-inner-heading minus">
						Colour
					</h1>
					<ul class="filter-attribute-list ul-reset">
						<div class="filter-attribute-list-inner">
							<?php
							if(isset($product_color)){
								foreach($product_color as $key){
							?>
								<li class="filter-attribute-item">
									<input type="checkbox" name="product_color[]" class="form-check-input" value="<?php echo $key->product_color; ?>"  @if(isset($selected_color)) 	@if (in_array($key->product_color, $selected_color)) 	checked="checked" 	@endif @endif >
									<label for="colour-attribute-1" class="filter-attribute-label ib-m">
										<?php echo $key->product_color; ?>
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


			<li class="filter-item">
				<section class="filter-item-inner">
					<h1 class="filter-item-inner-heading minus">
						Brand
					</h1>
					<ul class="filter-attribute-list ul-reset">
						<div class="filter-attribute-list-inner">
							<?php
							if(isset($product_brand)){
								foreach($product_brand as $key){
							?>
								<li class="filter-attribute-item">
									<input type="checkbox" name="product_brand[]" class="form-check-input" value="<?php echo $key->product_brand; ?>"  @if(isset($selected_brand)) 	@if (in_array($key->product_brand, $selected_brand)) 	checked="checked" 	@endif @endif >
									<label for="colour-attribute-1" class="filter-attribute-label ib-m">
										<?php echo $key->product_brand; ?>
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


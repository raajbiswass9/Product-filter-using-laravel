@extends('layouts.fullpage-index')

@section('dynamic-content')

<?php

if(isset($data)){
	// echo "<pre/>";
	// print_r($data);
?>
<ul class="product-list ul-reset">
	<?php
	foreach($data as $key){
	?>
	//echo $key->product_code;	
		<li class="product-item ib">
			<section class="product-item-inner">
				<a href="<?php echo $key->product_code; ?>" class="product-title-link">
					<img src="{{ asset('/uploads') }}/<?php echo $key->product_image; ?>">
					<h1 class="product-title">						
						<?php echo $key->product_name; ?>						
					</h1>
					<div class="product-price">
						₹<?php echo $key->product_price; ?>
					</div>
				</a>
				<input type="submit" value="Add to Cart" class="product-add-to-cart">
			</section>
		</li>
		

	<?php
	}
	?>
</ul>

{{ $data->appends(request()->input())->links() }}

<?php	
}
?>



@endsection
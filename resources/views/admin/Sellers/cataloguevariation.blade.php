@if($catalogue_variation)
@foreach($catalogue_variation as $value)
<input type="hidden" name="catalogue_variation_id[]" value="{{ $value->id }}">
<div class="row">
	@if($value->attr_value1)
	<div class="col">
		<div class="form-group">
			<div class="controls">
				<input type="text" name="attr_value1[]" value="{{ $value->attr_value1 }}" class="form-control" readonly>
			</div>
		</div>
	</div>
	@endif
	@if($value->attr_value2)
	<div class="col">
		<div class="form-group">
			<div class="controls">
				<input type="text" name="attr_value2[]" value="{{ $value->attr_value2 }}" class="form-control" readonly>
			</div>
		</div>
	</div>
	@endif
	@if($value->attr_value3)
	<div class="col">
		<div class="form-group">
			<div class="controls">
				<input type="text" name="attr_value3[]" value="{{ $value->attr_value3 }}" class="form-control" readonly>
			</div>
		</div>
	</div>
	@endif
	@if($value->attr_value4)
	<div class="col">
		<div class="form-group">
			<div class="controls">
				<input type="text" name="attr_value4[]" value="{{ $value->attr_value4 }}" class="form-control" readonly>
			</div>
		</div>
	</div>
	@endif
	<div class="col-12 col-sm-4">
		<div class="form-group">
			<div class="controls">
				<input type="text" name="variation_sku[]" value="" placeholder="Sku" class="form-control">
			</div>
		</div>
	</div>
	<div class="col-12 col-sm-4">
		<div class="form-group">
			<div class="controls">
				<input type="number" min="0" name="variation_price[]" value="" placeholder="Price" class="form-control">
			</div>
		</div>
	</div>
	<div class="col-12 col-sm-4">
		<div class="form-group">
			<div class="controls">
				<input type="number" min="0" name="variation_discount_price[]" value="" placeholder="Discount Price" class="form-control">
			</div>
		</div>
	</div>
	<div class="col-12 col-sm-4">
		<div class="form-group">
			<div class="controls">
				<input type="number" name="variation_stock[]" value="" placeholder="Stock" class="form-control" min="1">
			</div>
		</div>
	</div>
	<div class="col-12 col-sm-4">
		<div class="form-group">
			<div class="controls">
				<input type="text" name="variation_unit[]" placeholder="kg,lbs,pics" value="" class="form-control">
			</div>
		</div>
	</div>
<!--	<div class="col">
		<div class="form-group">
			<div class="controls">
				<input type="file" name="variation_product_file[]" >
			</div>
		</div>
	</div>-->
	<div class="col-12 col-sm-4">
		<div class="form-group">
			<div class="controls">
				<input type="file" name="variation_image[]">
			</div>
		</div>
	</div>
</div>
@endforeach
@endif
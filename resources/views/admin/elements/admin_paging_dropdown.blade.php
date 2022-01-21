<?php  $recordPerPageAction = RECORDS_PER_PAGE; ?> 

<form class="form-horizontal" method="get">
	<label>Show
		<select class="lstfld60" style="width:85px;" name="records_per_page" onchange="this.form.submit();">
			<?php
				if ($recordPerPageAction != '') {
					$recordPerPageActionArray = explode(',', $recordPerPageAction);
				}
			?>	

			<option value="{{ RECORDS_PER_PAGE }}" selected="selected">Default</option>
			@if(!empty($recordPerPageActionArray))
				@foreach($recordPerPageActionArray as $value)
					<option @if(Request::get('records_per_page')==$value) selected="selected" @endif >{{ $value }} </option>
				@endforeach
			@endif
		</select>
	</label>
</form>

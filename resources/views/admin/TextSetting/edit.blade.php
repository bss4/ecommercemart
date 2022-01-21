@extends('layouts.default')   
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">{{ trans("messages.$modelName.edit_textsetting") }}</h3>
            <h2>
                <a href='{{ route("$modelName.index")}}' >
                    <button type="button" class="btn btn-primary waves-effect second-head-button">
                        {{ trans("messages.global.back") }}
                    </button>
                </a>
            </h2>
          </div>
          <!-- /.card-header -->
          {{ Form::open(['role' => 'form','url' =>  route("$modelName.update","$modeldata->id"),'class' => 'mws-form','files' => true]) }}
           <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
              {{ Form::label('Value', trans("messages.$modelName.value").'<span class="required"> * </span>', ['class' => 'control-label'],false) }}  
              <div class="mb-3">
                {{ Form::text("value",isset($modeldata->value)?$modeldata->value:'', ['class' => 'form-control']) }}
                <span class="error help-inline">
                <?php echo $errors->first('value'); ?>
              </span>
              </div>
            </div>
            </div>
          </div>
          
          <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </div>
        {{ Form::close() }}
        <!-- /.card -->
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  
@endsection
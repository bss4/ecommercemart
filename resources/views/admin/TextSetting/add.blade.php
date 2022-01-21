@extends('layouts.default')   
@section('content')
    <!-- Main content -->
    
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">{{ trans("messages.$modelName.add_textsetting") }}</h3>
            <h2>
                <a href='{{ route("$modelName.index")}}' >
                    <button type="button" class="btn btn-primary waves-effect second-head-button">
                        {{ trans("messages.global.back") }}
                    </button>
                </a>
            </h2>
          </div>
          <!-- /.card-header -->
          
          {{ Form::open(['role' => 'form','route' => "$modelName.save",'files' => true]) }}
           <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  {{ Form::label('Key', trans("messages.$modelName.Key").'<span class="required"> * </span>', ['class' => 'control-label'],false) }}  
                  {{ Form::text("key",'', ['class' => 'form-control']) }}

                  <span class="error help-inline">
                      <?php echo $errors->first('key'); ?>
                  </span>
                </div>
              </div>
              
              <div class="col-md-6">
                {{ Form::label('Value', trans("messages.$modelName.value").'<span class="required"> * </span>', ['class' => 'control-label'],false) }}  
                <div class="mb-3">
                  {{ Form::text("value",'', ['class' => 'form-control']) }}
                <span class="error help-inline">
                <?php echo $errors->first('value'); ?>
              </span>
              </div>
            </div>
            </div>
          </div>
          
          <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
        {{ Form::close() }}
        <!-- /.card -->
        <!-- /.row -->
      
    <!-- /.content -->
@endsection
@extends('layouts.default')   
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">{{ trans("messages.$modelName.edit") }}</h3>
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
              <div class="col-md-6">
                <div class="form-group">
                  {{ Form::label('First Name', trans("messages.$modelName.firstname").'<span class="required"> * </span>', ['class' => 'control-label'],false) }}  
                  {{ Form::text("firstname",isset($modeldata->first_name)?$modeldata->first_name:'', ['class' => 'form-control']) }}
                  <span class="error help-inline">
                      <?php echo $errors->first('firstname'); ?>
                  </span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  {{ Form::label('Last Name', trans("messages.$modelName.lastname").'<span class="required"> * </span>', ['class' => 'control-label'],false) }}  
                  {{ Form::text("lastname",isset($modeldata->last_name)?$modeldata->last_name:'', ['class' => 'form-control']) }}
                  <span class="error help-inline">
                      <?php echo $errors->first('lastname'); ?>
                  </span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  {{ Form::label('Email', trans("messages.$modelName.email").'<span class="required"> * </span>', ['class' => 'control-label'],false) }}  
                  {{ Form::text("email",isset($modeldata->email)?$modeldata->email:'', ['class' => 'form-control']) }}
                  <span class="error help-inline">
                      {{ $errors->first('email') }}
                  </span>
                </div>
              </div>
             
              <div class="col-md-6">
                <div class="form-group">
                  {{ Form::label('Phone
                  ', trans("messages.$modelName.phone").'<span class="required"> * </span>', ['class' => 'control-label'],false) }}
                  {{Form::text("phone",isset($modeldata->phone)?$modeldata->phone:'',['class' => 'form-control'])}}
                  <span class="error help-inline">
                      <?php echo $errors->first('phone'); ?>
                  </span>
                </div>
              </div>
               <div class="col-md-6">
                <div class="form-group">
                  {{ Form::label('Password
                  ', trans("messages.$modelName.password"), ['class' => 'control-label'],false) }}
                  {{Form::password("password",['class' => 'form-control'])}}
                  <span class="error help-inline">
                      {{ $errors->first('password')}}
                  </span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  {{ Form::label('Confirm Password
                  ', trans("messages.$modelName.confirm_password")
                  , ['class' => 'control-label'],false) }}
                  {{Form::password("confirm_password",['class' => 'form-control'])}}
                  <span class="error help-inline">
                      {{ $errors->first('confirm_password')}}
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
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  
@endsection
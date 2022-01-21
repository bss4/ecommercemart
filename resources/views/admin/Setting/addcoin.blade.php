@extends('layouts.default')   
@section('content')
    <!-- Main content -->
    <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- users edit start -->
            <section class="users-edit">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Coin Setting</h3>
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
           
          <div class="card-body">
            <div class="row">
              
              <div class="col-md-6">
                {{ Form::label('Value', 'value'.'<span class="required"> * </span>', ['class' => 'control-label'],false) }}  
                <div class="mb-3">
                  {{ Form::text("value",isset($coinsetting->value)?$coinsetting->value:'', ['class' => 'form-control']) }}
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
      </section>
    </div>
  </div>
    <!-- /.content -->
@endsection
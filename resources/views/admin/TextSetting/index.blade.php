@extends('layouts.default')   
@section('content')
<!-- Search Panel -->

<!-- Search Panel -->
<div class="content-wrapper">
            
            <div class="card">
              
              <div class="card-header">
                <h3 class="card-title">{{ trans("messages.$modelName.add_textsetting") }}
                </h3>
                <h2>  
                  <a href='{{route("$modelName.add")}}' >
                      <button type="button" class="btn btn-primary waves-effect second-head-button">
                          {{ trans("messages.$modelName.add") }}
                      </button>
                  </a>
                </h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>KEY</th>
                    <th>VALUE</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @if(!empty($modeldata))
                  @foreach($modeldata as $modelvalue)
                  <tr>
                    <td>{{isset($modelvalue->key_value)?$modelvalue->key_value:''}}</td>
                    <td>{{isset($modelvalue->value)?$modelvalue->value:''}}</td>
                    <td>
                      <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                          Action
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href='{{route("$modelName.edit",$modelvalue->id)}}'>Edit</a>
                          <a class="dropdown-item" href='{{route("$modelName.delete",$modelvalue->id)}}'>Delete</a>
                        </div>
                      </div>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                  @else
                  <tr>
                    <td align="center" width="100%" colspan="5"> {{ trans("messages.global.no_record_found_message") }}</td>
                  </tr>
                  @endif
                  </tbody>
                </table>
                <div class="row">
                 @include('pagination.default', ['paginator' => $modeldata,'searchVariable'=>$searchVariable])
              </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          
    <!-- /.content -->
</div>
@endsection
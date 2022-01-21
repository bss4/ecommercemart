@extends('layouts.default')   
@section('content')

<div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- users list start -->
                <section class="users-list-wrapper">
                    <!-- users filter start -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Filters</h4>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="feather icon-chevron-down"></i></a></li>
                                    <li><a data-action=""><i class="feather icon-rotate-cw users-data-filter"></i></a></li>
                                    <li><a data-action="close"><i class="feather icon-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <div class="users-list-filter">
                                    <form>
                                        <div class="row">
                                            <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-role">Role</label>
                                                <fieldset class="form-group">
                                                    <select class="form-control" id="users-list-role">
                                                        <option value="">All</option>
                                                        <option value="user">User</option>
                                                        <option value="staff">Staff</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-status">Status</label>
                                                <fieldset class="form-group">
                                                    <select class="form-control" id="users-list-status">
                                                        <option value="">All</option>
                                                        <option value="Active">Active</option>
                                                        <option value="Blocked">Blocked</option>
                                                        <option value="deactivated">Deactivated</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-verified">Verified</label>
                                                <fieldset class="form-group">
                                                    <select class="form-control" id="users-list-verified">
                                                        <option value="">All</option>
                                                        <option value="true">Yes</option>
                                                        <option value="false">No</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-department">Department</label>
                                                <fieldset class="form-group">
                                                    <select class="form-control" id="users-list-department">
                                                        <option value="">All</option>
                                                        <option value="Sales">Sales</option>
                                                        <option value="Devlopment">Devlopment</option>
                                                        <option value="Management">Management</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- users filter end -->
                    <!-- Ag Grid users list section start -->
                    <div id="basic-examples">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="ag-grid-btns d-flex justify-content-between flex-wrap mb-1">
                                                <div class="dropdown sort-dropdown mb-1 mb-sm-0">
                                                    <button class="btn btn-white filter-btn dropdown-toggle border text-dark" type="button" id="dropdownMenuButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        1 - 20 of 50
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton6">
                                                        <a class="dropdown-item" href="#">20</a>
                                                        <a class="dropdown-item" href="#">50</a>
                                                    </div>
                                                </div>
                                                <div class="ag-btns d-flex flex-wrap">
                                                    <input type="text" class="ag-grid-filter form-control w-50 mr-1 mb-1 mb-sm-0" id="filter-text-box" placeholder="Search...." />
                                                    <div class="action-btns">
                                                        <div class="btn-dropdown ">
                                                            <div class="btn-group dropdown actions-dropodown">
                                                                <button type="button" class="btn btn-white px-2 py-75 dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    Actions
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#"><i class="feather icon-trash-2"></i> Delete</a>
                                                                    <a class="dropdown-item" href="#"><i class="feather icon-clipboard"></i> Archive</a>
                                                                    <a class="dropdown-item" href="#"><i class="feather icon-printer"></i> Print</a>
                                                                    <a class="dropdown-item" href="#"><i class="feather icon-download"></i> CSV</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="myGrid" class="aggrid ag-theme-material">
                                      <!-- /.card-header -->
              <div class="card-body">
                <!--  <div class="row">
                    <div class="col-sm-8">
                        <div class="dataTables_length" id="DataTables_Table_0_length">
                          @include('admin.elements.admin_paging_dropdown')
                        </div>
                    </div> 
                </div> -->
                <table class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>{{ trans("messages.$modelName.id") }}</th>
                    <th>{{ trans("messages.$modelName.first_name") }}</th>
                    <th>{{ trans("messages.$modelName.last_name") }}</th>
                    <th>{{ trans("messages.$modelName.email") }}</th>
                    <th>{{ trans("messages.$modelName.phone") }}</th>
                    <th>{{ trans("messages.global.action") }}</th>
                  </tr>
                  </thead>
                  <tbody>
                  @if(!empty($modeldata))
                  @foreach($modeldata as $modelvalue)
                  <tr>
                    <td>{{isset($modelvalue->id)?$modelvalue->id:''}}</td>
                    <td>{{isset($modelvalue->first_name)?$modelvalue->first_name:''}}</td>
                    <td>{{isset($modelvalue->last_name)?$modelvalue->last_name:''}}</td>
                     <td>{{isset($modelvalue->email)?$modelvalue->email:''}}</td>
                     <td>{{isset($modelvalue->phone)?$modelvalue->phone:''}}</td>
                    <td>
                      <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                          Action
                        </button>
                        <div class="dropdown-menu">
                          <!-- <a class="dropdown-item" href='{{route("$modelName.edit",$modelvalue->id)}}'>{{ trans("messages.global.edit") }}</a> -->
                          <a class="dropdown-item" href='{{route("$modelName.view",$modelvalue->id)}}'>{{ trans("View") }}</a>
                          <a class="dropdown-item" href='{{route("$modelName.delete",$modelvalue->id)}}'>{{ trans("messages.global.delete") }}</a>
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Ag Grid users list section end -->
                </section>
                <!-- users list ends -->

            </div>
        </div>
@endsection
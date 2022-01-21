@extends('layouts.default')   
@section('content')
<!-- BEGIN: Content-->
<div class="content-wrapper">
  <div class="content-header row"></div>
  <div class="content-body">
    <!-- users list start -->
    <section class="users-list-wrapper">
       
      <input type="hidden" class="site_url" value="{{ route('Themes.json') }}">
      <input type="hidden" class="mart_type" value="themes">
      <!-- Ag Grid users list section start -->
      <div id="basic-examples">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  <div class="ag-grid-btns d-flex justify-content-between flex-wrap mb-1">
                    <div class="dropdown sort-dropdown mb-1 mb-sm-0">
                      <button class="btn btn-white filter-btn dropdown-toggle border text-dark" type="button" id="dropdownMenuButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">1 - 10 of 200</button>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton6"> <a class="dropdown-item" href="#">10</a>
                        <a class="dropdown-item" href="#">50</a>
                        <a class="dropdown-item" href="#">100</a>
                        <a class="dropdown-item" href="#">200</a>
                      </div>
                      <a class="sellers_add" href="{{route('Themes.add')}}">Add</a>
                    </div>
                    <div class="ag-btns d-flex flex-wrap">
                      <input type="text" class="ag-grid-filter form-control w-50 mr-1 mb-1 mb-sm-0" id="filter-text-box" placeholder="Search...." />
                      <div class="action-btns">
                        <div class="btn-dropdown ">
                          <div class="btn-group dropdown actions-dropodown">
                            <button type="button" class="btn btn-white px-2 py-75 dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
                            <div class="dropdown-menu"> <a class="dropdown-item" href="#"><i class="feather icon-trash-2"></i> Delete</a>
                              <a class="dropdown-item" href="#"><i class="feather icon-clipboard"></i> Archive</a>
                              <a class="dropdown-item ag-grid-print-btn" href="#"><i class="feather icon-printer"></i> Print</a>
                              <a class="dropdown-item ag-grid-export-btn" href="#"><i class="feather icon-download"></i> CSV</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="themesGrid" class="aggrid ag-theme-material"></div>
            </div>
          </div>
        </div>
      </div>      
      <!-- Ag Grid users list section end -->
    </section>
    <!-- users list ends -->
  </div>
</div>
<!-- END: Content-->

@endsection
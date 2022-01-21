@extends('layouts.default')   
@section('content')
<!-- BEGIN: Content-->
<div class="content-wrapper">
  <div class="content-header row"></div>
  <div class="content-body">
    <!-- users list start -->
    <section class="users-list-wrapper">
      <input type="hidden" class="mart_type" value="allorder">
        <input type="hidden" class="site_url" value="{{ route('Orders.json') }}">
      <!-- users filter start -->
      <div class="card" style="display: none;">
        <div class="card-header">
          <h4 class="card-title">Filters</h4>
          <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
          <div class="heading-elements">
            <ul class="list-inline mb-0">
              <li><a data-action="collapse"><i class="feather icon-chevron-down"></i></a>
              </li>
              <li><a data-action=""><i class="feather icon-rotate-cw users-data-filter"></i></a>
              </li>
              <li><a data-action="close"><i class="feather icon-x"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="card-content collapse show">
          <div class="card-body">
            <div class="users-list-filter">
              <form>
                <div class="row">
                  <div class="col-12 col-sm-6 col-lg-3">
                    <input type='hidden' class='filter_1' value='discount' />
                    <label for="users-list-role">Discount</label>
                    <fieldset class="form-group">
                      <select class="form-control" id="users-list-role" >         
                        <option value="">All</option>
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                      </select>
                    </fieldset>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-3">
                    <input type='hidden' class="filter_3" value='status' />
                    <label for="users-list-status">Status</label>
                    <fieldset class="form-group">
                      <select class="form-control" id="users-list-status">
                        <option value="">All</option>
                        <option value="pending">Pending</option>
                        <option value="delivered">Delivered</option>
                        <option value="cancelled">Cancelled</option>
                        <option value="inprogress">Inprogress</option>
                        <option value="return">Return</option>
                        <option value="shipped">Shipped</option>
                      </select>
                    </fieldset>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-3">
                    <input type='hidden' class="filter_2" value='quantity' />
                    <label for="users-list-verified">Quantity</label>
                    <fieldset class="form-group">
                      <select class="form-control" id="users-list-verified">
                        <option value="">All</option>
                        <option value="1">1</option>
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                      </select>
                    </fieldset>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-3">
                    <input type='hidden' class="filter_4" value='price' />
                    <label for="users-list-department">Price</label>
                    <fieldset class="form-group">
                      <select class="form-control" id="users-list-department">
                        <option value="">All</option>
                        <option value="1500.00">1500.00</option>
                        <option value="1900.00">1900.00</option>
                        <option value="1680.00">1680.00</option>
                        <option value="1200.00">1200.00</option>
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
                      <button class="btn btn-white filter-btn dropdown-toggle border text-dark" type="button" id="dropdownMenuButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">1 - 10 of 500</button>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton6"> <a class="dropdown-item" href="#">10</a>
                        <a class="dropdown-item" href="#">50</a>
                        <a class="dropdown-item" href="#">100</a>
                        <a class="dropdown-item" href="#">200</a>
                      </div>
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
              <div id="AllorderGrid" class="aggrid ag-theme-material"></div>
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
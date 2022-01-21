@extends('layouts.default')   
@section('content')
<!-- BEGIN: Content-->
<div class="content-wrapper">
  <div class="content-header row"></div>
  <div class="content-body">
    <!-- users list start -->
    <section class="users-list-wrapper">
      <input type="hidden" class="mart_type" value="sellerpayment">
      <input type="hidden" class="site_url" value="{{ route('Sellers.paymentjson', $Id) }}">
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
        <div class="card-content collapse show" id="payment_print" >
          <div class="card-body">
            <div class="users-list-filter">
              <form>
                <div class="row">
                  <div class="col-12 col-sm-6 col-lg-3">
                    <input type='hidden' class="filter_1" value='transaction_id' />
                    <label for="users-list-role">Transcation</label>
                    <fieldset class="form-group">
                      <select class="form-control" id="users-list-role" >
                        <option value="">All</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                      </select>
                    </fieldset>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-3">
                    <input type="hidden" class="filter_3" value="status" />
                    <label for="users-list-status">Status</label>
                    <fieldset class="form-group">
                      <select class="form-control" id="users-list-status" >
                        <option value="">All</option>
                        <option value="Completed">Completed</option>
                        <option value="Failed">Failed</option>
                      </select>
                    </fieldset>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-3">
                    <input type="hidden" class="filter_2" value="order_id" />
                    <label for="users-list-verified">Order No</label>
                    <fieldset class="form-group">
                      <select class="form-control" id="users-list-verified">
                        <option value="">All</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                      </select>
                    </fieldset>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-3">
                    <input type="hidden" class="filter_4" value="payment_mode" />
                    <label for="users-list-department">Payment Mode</label>
                    <fieldset class="form-group">
                      <select class="form-control" id="users-list-department">
                        <option value="">All</option>
                        <option value="on_mode">On Mode</option>
                        <option value="off_mode">Off Mode</option>
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
                   <h2>

                <a href='{{ route("Sellers.index")}}' >

                    <button type="button" class="btn btn-primary waves-effect second-head-button">

                        {{ trans("messages.global.back") }}

                    </button>

                </a>

            </h2>
                  <div class="ag-grid-btns d-flex justify-content-between flex-wrap mb-1">
                    <div class="dropdown sort-dropdown mb-1 mb-sm-0">
                      <button class="btn btn-white filter-btn dropdown-toggle border text-dark" type="button" id="dropdownMenuButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">1 - 10 of 200</button>
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
              <div id="sellerPaymentGrid" class="aggrid ag-theme-material"></div>
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
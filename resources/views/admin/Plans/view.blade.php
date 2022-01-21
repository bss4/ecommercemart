@extends('layouts.default')
@section('content')
<!-- BEGIN: Content-->
<div class="content-wrapper">
   <div class="content-header row">
   </div>
   <div class="content-body">
      <!-- page users view start -->
      <section class="page-users-view">
         <div class="row">
            <!-- account start -->
            <div class="col-12">
               <div class="card">
                  <div class="card-header">
                     <div class="card-title">Plan</div>
                     <h2>
                        <a href="{{ route('Plans.index')}}">
                            <button type="button" class="btn btn-primary waves-effect second-head-button">
                                Back
                            </button>
                        </a>
                    </h2>
                  </div>
                  <div class="card-body">
                     <div class="row">
                        <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                           <table>
                            <tr>
                              <th>Plan Name</th>
                              <th>Plan Price</th>
                              <th>Description</th>
                            </tr>
                              <tr>
                                 <td>{{isset($modeldata->name)?$modeldata->name:''}}</td>
                                 <td>{{isset($modeldata->price)?$modeldata->price:''}}</td>
                                 <td>
                                 <p>@if($modeldata->description)
                                  <?php echo $modeldata->description;?>
                                 @endif</p></td>
                              </tr>
                              
                           </table>
                        </div>
                
                     </div>
                  </div>
               </div>
            </div>
           
         </div>
      </section>
      <!-- page users view end -->
   </div>
</div>
<!-- END: Content-->
@stop
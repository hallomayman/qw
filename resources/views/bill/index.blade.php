@extends('layouts.mainLayout')
@section('page')


  <!-- about section -->

  <div class="app-content content">
      <div class="content-wrapper">
          <div class="content-header row">
              <div class="content-header-left col-md-6 col-12 mb-2">

              </div>
          </div>
          <div class="content-body">
              <!-- DOM - jQuery events table -->
              <section id="dom">
                  <div class="row">
                      <div class="col-12">
                          <div class="card">
                              <div class="card-header">
                                  <h4 class="card-title">jewlery </h4>
                                  <a class="heading-elements-toggle"><i
                                          class="la la-ellipsis-v font-medium-3"></i></a>
                                  <div class="heading-elements">
                                      <ul class="list-inline mb-0">
                                          <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                          <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                          <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                          <li><a data-action="close"><i class="ft-x"></i></a></li>
                                      </ul>
                                  </div>
                              </div>



                              <div class="card-content collapse show">
                                  <div class="card-body card-dashboard">
                                      <table
                                          class="table display nowrap table-striped table-bordered ">
                                          <thead>
                                          <tr>
                                              <th> Price</th>
                                              <th>Weight</th>
                                              <th>Number</th>
                                              <th>Item</th>
                                              <th>Procedures</th>
                                          </tr>
                                          </thead>
                                          <tbody>


                                          <tr>
                                              <td> </td>
                                              <td> </td>
                                              <td></td>
                                              <td></td>
                                              <td>
                                                  <div class="btn-group" role="group"
                                                       aria-label="Basic example">
                                                      <a href=""
                                                         class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">تعديل</a>
                                                      <button type="button"
                                                              value=""
                                                              onclick=""
                                                              class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1"
                                                              data-toggle="modal"
                                                              data-target="#rotateInUpRight">
                                                          حذف
                                                      </button>

                                                  </div>
                                              </td>
                                          </tr>



                                          </tbody>
                                      </table>
                                      <div class="justify-content-center d-flex">

                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
          </div>
      </div>
  </div>
  <!-- end info_section -->
@stop


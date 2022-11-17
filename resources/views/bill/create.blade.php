@extends('layouts.mainLayout')
@section('page')


  <!-- about section -->
  <div class="app-content content">
      <div class="content-wrapper">

          <div class="content-body">
              <!-- Basic form layout section start -->
              <section id="basic-form-layouts">
                  <div class="row match-height">
                      <div class="col-md-12">
                          <div class="card">
                              <div class="card-header">
                                  <h4 class="card-title" id="basic-layout-form"> Add jewlery </h4>
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
                                  <div class="card-body">
                                      <form class="form" action="{{URL ('store')}}" method="post"
                                            enctype="multipart/form-data">
                                                  @csrf

                                          <div class="form-body">

                                              <div class="row">
                                                  <div class="col-md-12">
                                                      <div class="form-group">
                                                          <label for="projectinput1"> Price </label>
                                                          <input type="text"  id="name"
                                                                 class="form-control"
                                                                 name="price">
                                                          <span class="text-danger"> </span>
                                                      </div>
                                                  </div>
                                              </div>


                                              <div class="row">

                                                  <div class="col-md-12">
                                                      <div class="form-group">
                                                          <label for="projectinput1"> Weight </label>
                                                          <input type="text"  id="name"
                                                                 class="form-control"

                                                                 name="weight">
                                                          <span class="text-danger"> </span>
                                                      </div>
                                                  </div>

                                              </div>


                                              <div class="row">

                                                  <div class="col-md-12">
                                                      <div class="form-group">
                                                          <label for="projectinput1"> Number </label>
                                                          <input type="text" id="name"
                                                                 class="form-control"

                                                                 name="number">
                                                          <span class="text-danger"> </span>
                                                      </div>
                                                  </div>

                                              </div>


                                              <div class="row">

                                                  <div class="col-md-6">
                                                      <div class="form-group">
                                                          <label for="item"> Item </label>
                                                          <select name="item" id="item" class=" form-control">
                                                              <option value="1"></option>

                                                              @foreach ($itemes as $key=>$value)
                                                                  <option value="{{ $key}}">{{ $value }}</option>
                                                              @endforeach


                                                          </select>
                                                          <span class="text-danger"> </span>
                                                      </div>
                                                  </div>
                                              </div>


                                          </div>


                                          <div class="form-actions">
                                              <button type="button" class="btn btn-warning mr-1"
                                                      onclick="history.back();">
                                                  <i class="ft-x"></i> تراجع
                                              </button>
                                              <button type="submit" class="btn btn-primary">
                                                  <i class="la la-check-square-o"></i> حفظ
                                              </button>
                                          </div>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              <!-- // Basic form layout section end -->
          </div>
      </div>
  </div>
  <!-- end info_section -->
@stop


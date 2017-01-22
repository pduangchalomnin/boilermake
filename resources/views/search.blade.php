@extends('layouts.app')
@section('css')
@endsection

        @section('content')
            <div class="container-fluid">
                <div class="container">
                    <div class="col-md-3 pdR-0">
                        <div class="panel panel-red equal-height-column" style="">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-tasks"></i> Filters</h3> </div>
                            <div class="panel-body">
                                <form action="#" class="sky-form" style="border:none;">
                                    <section>
                                        <label class="label">Columned radios</label>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="radio mrL-5">
                                                    <input type="radio" name="radio" checked=""><i class="rounded-x"></i>Order Now</label>
                                                <label class="radio mrL-5">
                                                    <input type="radio" name="radio" disabled class="disabled"><i class="rounded-x"></i>Delivery</label>
                                            </div>
                                        </div>
                                    </section>
                                </form>
                                <div class="row">
                                    <div class="col-md-12">
                                        <form action="#" id="sky-form" class="sky-form" style="border:none;">
                                            <section>
                                                <label class="label rounded-x">Regular slider (<span id="slider1-value-rounded">32</span>)</label>
                                                <div id="slider1-rounded" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false">
                                                    <a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 6.4%;"></a>
                                                </div>
                                            </section>
                                        </form>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <form action="#" id="sky-form2" class="sky-form" style="border:none;">
                                            <section>
                                                <label class="label">Ratings</label>
                                                <div class="rating pull-left">
                                                    <input type="radio" name="stars-rating" id="stars-rating-5">
                                                    <label for="stars-rating-5"><i class="fa fa-star"></i></label>
                                                    <input type="radio" name="stars-rating" id="stars-rating-4">
                                                    <label for="stars-rating-4"><i class="fa fa-star"></i></label>
                                                    <input type="radio" name="stars-rating" id="stars-rating-3">
                                                    <label for="stars-rating-3"><i class="fa fa-star"></i></label>
                                                    <input type="radio" name="stars-rating" id="stars-rating-2">
                                                    <label for="stars-rating-2"><i class="fa fa-star"></i></label>
                                                    <input type="radio" name="stars-rating" id="stars-rating-1">
                                                    <label for="stars-rating-1"><i class="fa fa-star"></i></label>
                                                </div>
                                            </section>
                                        </form>
                                    </div>
                                </div>
                                <div class="row mrT-10">
                                    <div class="col-md-12">
                                        <form action="#" id="sky-form3" class="sky-form" style="border:none;">
                                            <section>
                                                <label class="label">Select date</label>
                                                <label class="input"> <i class="icon-append fa fa-calendar"></i>
                                                    <input type="text" name="date" id="date" class="hasDatepicker"> </label>
                                            </section>
                                        </form>
                                    </div>
                                </div>
                                <div class="row mrT-10">
                                    <div class="col-md-12">
                                        <form action="#" id="sky-form3" class="sky-form" style="border:none;">
                                            <section>
                                                <label class="label">Enter Time</label>
                                                <label class="input"> <i class="icon-append fa  fa-safari"></i>
                                                    <input type="number" maxlength="2" name="time" id="time" class=""> </label>
                                            </section>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="panel panel-red equal-height-column" style="">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-tasks"></i> Search Results</h3> </div>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    @foreach($foodList as $food)
                                        <div class="item">
                                            <div class="post">
                                                <div class="row">
                                                    <div class="col-md-5"> <img class="post__img img-responsive" src="{{$food->pic}}" alt=""> </div>
                                                    <div class="col-md-7">
                                                        <form action="#" id="" class="sky-form food-rating-section">
                                                            <section>
                                                                <div class="rating">
                                                                    @php
                                                                        $rating = \App\User::where('auth0id','=',$food->uid)->first()->getRating();
                                                                    @endphp
                                                                    @for($i=0; $i<$rating; $i++)
                                                                         <i class="fa fa-star rating-star"></i>
                                                                    @endfor
                                                                    @for($i;$i<5;$i++)
                                                                        <i class="fa fa-star disabled-rating"></i>
                                                                    @endfor
                                                                     </div>
                                                            </section>
                                                        </form>
                                                        <div class="post__child text-left">
                                                            <h3 class="post__child--title mrB-5">{{$food->name}}</h3>
                                                            <div class="g-mb-20">
                                                                @php
                                                                    $tags = \App\Tag::where('did','=',$food->id)->get();
                                                                @endphp
                                                            @foreach($tags as $tag)
                                                                    <span class="label label-success rounded-2x"> {{$tag->tag}}</span>
                                                            @endforeach
                                                            </div>
                                                            <p class="post__child--text g-mb-10">{{$food->detail}}</p>
                                                            <p class="post__child--text g-mb-20"><span aria-hidden="true" class="glyphicon glyphicon-map-marker mrR-5"></span>{{$food->address}}</p>
                                                            <span class="post__child--price">$ {{$food->price}}</span>
                                                            {{--<a href="#" data-toggle="modal" data-target="#orderConfirmation" rel="round-corners" class="btn-u btn-u-red round-corners mrL-10">Order Now</a>--}}
                                                            <a href="/order/{{$food->id}}" class="btn-u btn-u-red round-corners mrL-10">Order Now</a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact -->
            <footer>
                <section id="contact">
                    <div class="contact">
                        <div class="container-fluid">
                        <!--
						<div class="row">
							<div class="col-sm-12 no-padding">
								<div class="map-wrapper">
									<div class="contact__floating-block">
										<div class="row no-column-space equal-height-columns">
											<div class="col-sm-6 no-padding equal-height-column">
												<img class="img-responsive hidden-xs" src="assets/images/contact/contact.jpg" alt="">
											</div>
											<div class="col-sm-6 col-xs-12 contact__right--list text-center no-side-padding equal-height-column">
												<div class="valign__middle">
													<ul class="list-unstyled g-mb-20">
														<li class="first-item">Address</li>
														<li class="second-item">In sed lectus tincidunt</li>
													</ul>

													<ul class="list-unstyled g-mb-20">
														<li class="first-item">Phone number</li>
														<li class="second-item">+4586 585 4580</li>
													</ul>

													<ul class="list-unstyled g-mb-20">
														<li class="first-item">Email</li>
														<li class="second-item">info@unify.com</li>
													</ul>

													<ul class="list-unstyled">
														<li class="first-item">Toll Free</li>
														<li class="second-item">+4516 581 2340</li>
													</ul>
												</div>
											</div>
										</div>
									</div>

									<div id="map" class="contact__map"></div>
								</div>
							</div>
						</div>
-->
                            <div class="subfooter text-center">
                                <div class="row no-column-space equal-height-columns valign__middle">
                                    <div class="col-sm-12 text-center page-scroll">
                                        <a class="subfooter__logo" href="#body"> <img class="subfooter__logo__img g-mb-20" src="assets/images/logo.png" alt="Logo">
                                            <br> </a>
                                        <p class="subfooter__copyright">© 2016 All right reserved.<span class="subfooter__copyright--pink"><a href="#">Unify</a></span>. Development by <span class="subfooter__copyright--pink"><a href="#"> Htmlstream</a></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </footer>
            <!-- End Contact -->
            </main>

            <!--Order Confirmation Modal Start-->
            <div class="modal fade" id="orderConfirmation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="myModalLabel4">Order Details</h4> </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6 mrB-10">
                                    <!--                            <h6 class="mrB-5">First Name</h6>-->
                                    <input class="form-control" Placeholder="First Name" type="text"> </div>
                                <div class="col-md-6 mrB-10">
                                    <!--                            <h6 class="mrB-5">Last Name</h6>-->
                                    <input class="form-control" Placeholder="Last Name" type="text"> </div>
                                <div class="col-md-12 mrB-10">
                                    <!--                            <h6 class="mrB-5">Address</h6>-->
                                    <input class="form-control" Placeholder="Address" type="text"> </div>
                                <div class="col-md-12 mrB-10">
                                    <!--                            <h6 class="mrB-5">Contact No</h6>-->
                                    <input class="form-control" Placeholder="Contact No" type="text">
                                </div>
                                <div class="col-md-6 mrB-10">
                                    <form action="#" id="" class="sky-form">
                                        <label class="input">
                                            <i class="icon-append fa fa-calendar"></i>
                                            <input type="text" name="confirmDate" id="confirmDate" placeholder="Select Date" class="hasDatepicker">
                                        </label>
                                    </form>
                                </div>
                                <div class="col-md-6 mrB-10">
                                    <form action="#" id="" class="sky-form">
                                        <label class="input">
                                            <i class="icon-append glyphicon glyphicon-time"></i>
                                            <label class="select">
                                                <select>
                                                    <option value="0">Select Time slot</option>
                                                    <option value="1">12:00 - 12:59</option>
                                                    <option value="2">13:00 - 13:59</option>
                                                </select>
                                                <i></i>
                                            </label>
                                        </label>
                                    </form>
                                </div>
                                <div class="col-md-12">
                                    <h6 class="mrB-5">Description</h6>
                                    <h3 class="post__child--title mrB-5">Lorem Epsum</h3>
                                    <p class="post__child--text g-mb-10">Curabitur eget tortor sed urna faucibus iaculis id et nulla. Aliquam erat volutpat.</p>
                                    <p class="post__child--text g-mb-10 color-black text-right">Total: <span class="total"><b>$12.99</b></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn-u btn-u-default" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn-u mrL-5" data-dismiss="modal">Continue</button>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
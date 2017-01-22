@extends('layouts.app')
        @section('content')

        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 profile">
                        <div class="col-md-3"> <img class="img-responsive profile-img margin-bottom-20" src="{{$user->image_url}}" alt=""> </div>
                        <div class="col-md-9">
                            <div class="profile-body">
                                <h2>{{$user->given_name}} {{$user->family_name}}</h2>
                                <form action="#" class="sky-form border-none">
                                    <!--                                    <fieldset>-->
                                    <section>
                                        <div class="rating">
                                            @for($i=0; $i<$rating; $i++)
                                                <i class="fa fa-star rating-star"></i>
                                            @endfor
                                            @for($i;$i<5;$i++)
                                                <i class="fa fa-star disabled-rating"></i>
                                            @endfor
                                            <span class="mrL-10">{{$totalRating}}</span> Rating</a>
                                        </div>

                                     </section>
                                    <!--                                    </fieldset>-->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="tab-v2">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#MyLog" data-toggle="tab" aria-expanded="false">My Log</a></li>
                            <li class=""><a href="#SellersLog" data-toggle="tab" aria-expanded="false">Seller's</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="MyLog">
                                <h4>My Orders</h4>
                                <ul class="timeline-v2">
                                    @foreach($customerList as $food)
                                    <li class="equal-height-columns">
                                        <div class="cbp_tmtime equal-height-column" style="height: 162px;"><span>{{$food->dine->dineDate}}</span></div> <i class="cbp_tmicon rounded-x hidden-xs"></i>
                                        <div class="cbp_tmlabel equal-height-column" style="height: 192px;">
                                            <h2>{{$food->dine->name}}</h2>
                                            <div class="row">
                                                <div class="col-md-4"> <img class="img-responsive" src="{{$food->dine->pic}}" alt="">
                                                    <div class="md-margin-bottom-20"></div>
                                                </div>
                                                <div class="col-md-8">
                                                    <p>{{$food->dine->detail}}</p> <span class="post__child--price">${{$food->dine->price}}</span> </div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            <div class="tab-pane fade" id="SellersLog">
                                <ul class="timeline-v2">
                                    @foreach($dines as $dine)
                                        <li class="equal-height-columns">
                                            <div class="cbp_tmtime equal-height-column" style="height: 162px;"><span>{{$dine->dineDate}}</span> </div> <i class="cbp_tmicon rounded-x hidden-xs"></i>
                                            <div class="cbp_tmlabel equal-height-column" style="height: 192px;">
                                                <h2>{{$dine->name}}</h2>
                                                <div class="row">
                                                    <div class="col-md-4"> <img class="img-responsive" src="{{$dine->pic}}" alt="">
                                                        <div class="md-margin-bottom-20"></div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <p>{{$dine->detail}}</p> <span class="post__child--price">${{$dine->price}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact -->
@endsection
@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="container">
            <div class="col-md-3 pdR-0">
                <div class="panel panel-red equal-height-column" style="">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-tasks"></i> My Account</h3> </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 mrB-10"> <a href="#" title="Meal 1"><b>Meal 1 (<span id="slider1-value-rounded">5</span>)</b></a> </div>
                            <div class="col-md-12 mrB-10"> <a href="#" title="Meal 2"><b>Meal 2 (<span id="slider1-value-rounded">5</span>)</b></a> </div>
                            <div class="col-md-12 mrB-10"> <a href="#" title="Meal 3"><b>Meal 3 (<span id="slider1-value-rounded">5</span>)</b></a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="panel panel-red equal-height-column" style="">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-tasks"></i> Add a new meal</h3> </div>
                    <div class="panel-body">
                        <div class="col-md-12">
                            <form action="/dine/create" enctype="multipart/form-data" method="post" class="sky-form border-none">
                                {{ csrf_field() }}
                                <fieldset class="pd-0">
                                    <section>
                                        <label class="label">Meal Title</label>
                                        <label class="input">
                                            <input type="text" name="mealTitle" id="mealTitle" value="{{old('mealTitle')}}"> </label>
                                    </section>
                                    <section>
                                        <label class="label">Description</label>
                                        <label class="input">
                                            <input type="text" name="mealDescription" id="mealDescription"  value="{{old('mealDescription')}}"> </label>
                                    </section>
                                    <section>
                                        <label class="label">Tags (Comma separated)</label>
                                        <label class="input">
                                            <input type="text" name="createTags" id="createTags" value="{{old('createTags')}}"> </label>
                                        <div class="tag-container"></div>
                                    </section>
                                    <section class="clear-both">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <label class="label">Upload Image</label>
                                                <label for="file" class="input input-file">
                                                    <div class="button">
                                                        <input type="file" name="file" id="file" onchange="this.parentNode.nextSibling.value = this.value">Browse</div>
                                                    <input type="text" readonly=""> </label>
                                            </div>
                                            <div class="col-md-3">
                                                <section>
                                                    <label class="label">Qty</label>
                                                    <label class="select state-success">
                                                        <select name="seatMax">
                                                            <option value="1" @if(old('seatMax')==1)selected=""@endif>1</option>
                                                            <option value="2"  @if(old('seatMax')==2)selected=""@endif>2</option>
                                                            <option value="3"  @if(old('seatMax')==3)selected=""@endif>3</option>
                                                            <option value="4"  @if(old('seatMax')==4)selected=""@endif>4</option>
                                                            <option value="5"  @if(old('seatMax')==5)selected=""@endif>5</option>
                                                        </select>
                                                        <i></i>
                                                    </label>

                                                </section>
                                            </div>
                                        </div>


                                    </section>
                                    <section>
                                        <label class="label">Meet date</label>
                                        <label class="input">
                                            <i class="icon-append fa fa-calendar"></i>
                                            <input type="text" name="date" id="date" placeholder="Date" class="hasDatepicker">
                                        </label>
                                    </section>
                                    <section>
                                        <label class="label">Time availability</label>
                                        <label class="select">
                                            <select name="time">
                                                <option value="0"  @if(old('time')==0)selected=""@endif>Select Time</option>
                                                <option value="1"  @if(old('time')==1)selected=""@endif>8:00 - 10:00</option>
                                                <option value="2"  @if(old('time')==2)selected=""@endif>12:00 - 14:00</option>
                                                <option value="3"  @if(old('time')==3)selected=""@endif>18:00 - 20:00</option>
                                                <option value="4"  @if(old('time')==4)selected=""@endif>20:00 - 22:00</option>
                                            </select> <i></i> </label>
                                    </section>
                                    <section>
                                        <label class="label"   >Price in $</label>
                                        <label class="input">
                                            <input type="text" name="price" id="price" value="{{old('price')}}"> </label>
                                    </section>
                                    <section>
                                        <label class="label"   >Address</label>
                                        <label class="input">
                                            <input type="text" name="address" id="address" value="{{old('address')}}"> </label>
                                    </section>
                                    <section>
                                        <div class="row">
                                            <div class="col-xs-12 text-right">
                                                <button type="button" class="btn-u btn-u-default" onclick="">Back</button>
                                                <button type="submit" class="btn-u">Save</button>
                                            </div>
                                        </div>
                                    </section>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact -->
    @endsection
    @section('js')
        $('#date').datepicker({
        dateFormat: 'dd/mm/yy',
        prevText: '<i class="fa fa-angle-left"></i>',
        nextText: '<i class="fa fa-angle-right"></i>'
        });
    {{--var tagsObject =[];--}}
    {{--$(function () {--}}
        {{--App.init();--}}
        {{--Owl2Carouselv1.initOwl2Carouselv1();--}}
        {{--Owl2Carouselv3.initOwl2Carouselv3();--}}
        {{--Owl2Carouselv4.initOwl2Carouselv4();--}}
        {{--Datepicker.initDatepicker();--}}
        {{--$("#createTags").on('keyup', function(e) {--}}
            {{--e.preventDefault();--}}
            {{--var getVal = $(this).val();--}}
            {{--var tag = '<span class="label label-success rounded-2x pull-left"> '+getVal+' <i class="glyphicon glyphicon-remove-circle remove-tag"></i></span>';--}}
            {{--if(e.keyCode == 13 && getVal!=''){--}}
                {{--$(".tag-container").append(tag);--}}
                {{--var obj={tag:getVal};--}}
                {{--tagsObject.push(obj);--}}
                {{--console.log(tagsObject)--}}
            {{--}--}}
        {{--});--}}
        {{--$(".tag-container").on('click', '.remove-tag', function () {--}}
            {{--$(this).parent().remove();--}}
        {{--});--}}
    {{--});--}}
    @endsection
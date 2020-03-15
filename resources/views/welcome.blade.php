@extends('master')
@section('content')

<div class="row">
    @include("category")
    <div class="col-sm-10">
        <div class="row">
            <div class="col-sm-7">
                <ul class="nav nav-pills mb-3" id="myTab">
                    <li class="nav-item">
                        <a class="nav-link {{ ("ASC" == request()->input('sort')) ? 'active' : (request()->has('sort') ? '' : 'active') }}"
                           id="price-low-hi-tab" href="{{ route('home',array_merge(request()->query(), ['sort' =>  "ASC"])) }} ">
                            Price -- Low to High</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ("DESC" == request()->input('sort')) ? 'active' : '' }}"
                           id="price-hi-low-tab" href="{{ route('home',array_merge(request()->query(), ['sort' =>  "DESC"])) }} ">
                            Price -- High to Low</a>
                    </li>
                </ul>
            </div>
            @if(\App\Facades\Currency::getCode() == 201)
                <div class="col-sm-5">
                    <div class="alert alert-danger" role="alert">
                          <span>
                            {{ \App\Facades\Currency::getMessage() }}
                          </span>
                    </div>
                </div>
            @endif

        </div>
        <div class="card-deck">
            @foreach($products as $product)
                <div class="card">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/71YC1181G3L._SL1200_.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}} <b style="font-size: 12px;">{{$product->category->name}}</b></h5>

                        <p class="card-text"> @if(\App\Facades\Currency::getCode() == 200 ){{ \App\Facades\Currency::getCurrency()->symbol  }} @else $  @endif {{ $product->price }}</p>
                        <p class="card-text">{{ $product->description }}</p>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-default"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;
                            Buy Now
                        </button>
                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="countryAlertModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Alert</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span id="modalMessage"></span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="denileCountryModal()">NO</button>
                <button type="button" class="btn btn-primary" onclick="acceptCountryModal()">YES</button>
            </div>
        </div>
    </div>
</div>
@stop

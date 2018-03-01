@extends('layouts.master')

@section('content')
    <div class="col-md-3">
        @include('layouts.side-bar')
    </div>
    <div class="col-md-9">
        @forelse($deals as $deal)
            <div class="card">
                <div class="card-header">
                    <a href="{{ urldecode($deal['hotelUrls']['hotelInfositeUrl']) }}" target="_blank">
                        {{ $deal['hotelInfo']['hotelName'] }}
                    </a>
                    &nbsp;
                    ({!! str_repeat('<span class="text-warning">★</span>',$deal['hotelInfo']['hotelStarRating']) !!})
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <img class="card-img" src="{{ $deal['hotelInfo']['hotelImageUrl'] }}"
                                 alt="{{ $deal['hotelInfo']['hotelName'] }}"/>
                        </div>
                        <div class="col-md-10">
                            <div class="card-block">
                                Address: {{
                                $deal['hotelInfo']['hotelCountryCode'].', '.
                                $deal['hotelInfo']['hotelCity'].', '.
                                $deal['hotelInfo']['hotelStreetAddress'] }}
                            </div>
                            <div class="card-block">
                                @if($deal['hotelPricingInfo']['percentSavings'] != 0.0)
                                    Price per night :
                                    <b>
                                        {{ $deal['hotelPricingInfo']['originalPricePerNight'] }}
                                        {{ $deal['hotelPricingInfo']['currency'] }}
                                    </b> &nbsp;
                                        Book now and save :
                                        <b>
                                        {{ $deal['hotelPricingInfo']['percentSavings'] }}
                                        {{ $deal['hotelPricingInfo']['currency'] }}
                                    </b>
                                @else
                                    Price per night : ${{ $deal['hotelPricingInfo']['originalPricePerNight'] }}
                                @endif
                            </div>
                            <div class="card-block">
                                Check in :{{ implode('-',$deal['offerDateRange']['travelStartDate']) }}
                            </div>
                            <div class="card-block">
                                Check out :{{ implode('-',$deal['offerDateRange']['travelEndDate']) }}
                            </div>
                            <div class="card-block" align="right">
                                <a class="text-right btn btn-primary"
                                   href="{{ urldecode($deal['hotelUrls']['hotelInfositeUrl']) }}">
                                    Reserve
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br />
        @empty
            <div class="card">
                <div class="card-header">
                    Ops :(
                </div>
                <div class="card-body">
                    No Results Found!!!
                </div>
            </div>
        @endforelse
    </div>
@endsection

<div class="card">
    <div class="card-header bg-white">
        Quick Search
    </div>
    <div class="card-body">
        <form id="search-form" method="GET" action="{{ route('home') }}">
            <div class="form-group">
                <label for="minTripStartDate">
                    Date start's before :
                </label>
                <input type="text" class="datepicker form-control" id="minTripStartDate"
                       name="minTripStartDate" placeholder="Date start's before" value="{{ request('minTripStartDate') }}">
            </div>
            <div class="form-group">
                <label for="maxTripStartDate">
                    Date start's after :
                </label>
                <input type="text" class="datepicker form-control" id="maxTripStartDate"
                       name="maxTripStartDate" placeholder="Date start's after" value="{{ request('maxTripStartDate') }}">
            </div>
            <div class="form-group">
                <label for="lengthOfStay">
                    Length of stay :
                </label>
                <input type="number" class="form-control" id="lengthOfStay"
                       name="lengthOfStay" placeholder="Length of stay" value="{{ request('lengthOfStay') }}">
            </div>
            <div class="form-group">
                <label for="destinationCity">
                    Destination city :
                </label>
                <input type="text" class="form-control" id="destinationCity"
                       name="destinationCity" placeholder="Destination city" value="{{ request('destinationCity') }}">
            </div>
            <div class="form-group">
                <label for="minStarRating">Minimum Rating</label>
                <select name="minStarRating" id="minStarRating" class="form-control">
                    <option disabled selected>Select Minimum Rating</option>
                    @for ($i = 1; $i <= 5; $i++)
                        <option {{ request('minStarRating') == $i ? 'selected' : '' }} >
                            {{ $i }}
                        </option>
                    @endfor
                </select>
            </div>
            <div class="form-group">
                <label for="maxStarRating">Maximum Rating</label>
                <select name="maxStarRating" id="maxStarRating" class="form-control">
                    <option disabled selected>Select Maximum Rating</option>
                    @for ($i = 1; $i <= 5; $i++)
                        <option {{ request('maxStarRating') == $i ? 'selected' : '' }} >
                            {{ $i }}
                        </option>
                    @endfor
                </select>
            </div>
            <div class="form-group">
                <input type="submit" value="Filter" class="btn btn-success">
                <a id="reset" href="{{ route('home') }}" class="btn btn-warning">
                    Reset
                </a>
            </div>
        </form>
    </div>
</div>
@section('customJS')
    <script type="text/javascript">
        $( function() {
            $(".datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
        } );
    </script>
@endsection

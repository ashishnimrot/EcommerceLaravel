<div class="col-sm-2">
    <div class="dropdown float-right">
        <select class="custom-select" id="inputGroupSelect02">
            @foreach($currencies as $currency)
                <option value="{{ $currency->id }}" {{ ($currency->id == \App\Facades\Currency::getCurrency()->id) ? 'selected' : '' }}>{{ $currency->country }} - {{ $currency->code }}</option>
            @endforeach
        </select>
    </div>
</div>
@section('scripts')
<script type="text/javascript">
    $('select').on('change', function() {
        var url = new URL(window.location.href);
        url.searchParams.set('cur',this.value);
        window.location.href = url.href;
    });
</script>
@stop

@extends('layouts.pub')

@section('main')
<div class="container">
    {{-- <div class="row mt-4 pt-4 mb-4">
        <div class="col-2 col-md-9"></div>
        <div class="col-4 col-md-1">
            <img src="{{url('/assets/images/flag-'.$lang.'.png')}}" alt="flag" height="36">
        </div>
        <div class="col-6 col-md-2">
            <select name="lang" class="form-control select-lang" style="width: 60%;">
                <option value="en" {{$lang === 'en' ? 'selected':''}}>EN</option>
                <option value="de" {{$lang === 'de' ? 'selected':''}}>DE</option>
            </select>
        </div>
    </div> --}}
    <div class="row mb-4 pb-4 pt-4">
        <div class="col-12">
            {!! __('privacy.content') !!}
        </div>
    </div>
</div>
@endsection

@push('page-js')
    <script>
        $('.select-lang').on('change', function(){
            window.location.href = `/privacy/${$(this).val()}`
        })
    </script>
@endpush
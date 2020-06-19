@extends('layouts.app')


@section('content')
    <section class="section">
        <section class="section is-fullwidth">
            <actors :all-actors="{{ $actors }}" :current-user="{{ Auth::user() }}"></actors>
        </section>
    </section>
@endsection

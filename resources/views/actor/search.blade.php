@extends('layouts.app')


@section('content')
    <section class="section">
        <section class="section is-fullwidth">
            <asearch :current-user="{{ Auth::user() }}"></asearch>
        </section>
    </section>
@endsection

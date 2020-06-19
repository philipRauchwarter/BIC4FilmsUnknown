@extends('layouts.app')


@section('content')
    <section class="section">
        <section class="section is-fullwidth">
            <ASearch :current-user="{{ Auth::user() }}"></ASearch>
        </section>
    </section>
@endsection

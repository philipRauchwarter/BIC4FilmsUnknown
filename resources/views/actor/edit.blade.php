@extends('layouts.app')


@section('content')
    <section class="section">
        <section class="section is-fullwidth">
            <ACreate  :current-user="{{ Auth::user() }}"></ACreate>
        </section>
    </section>
@endsection

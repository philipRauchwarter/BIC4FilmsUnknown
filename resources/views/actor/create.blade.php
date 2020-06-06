@extends('layouts.app')


@section('content')
    <section class="section">
        <section class="section is-fullwidth">
            <AEdit :all-films="{{ $actors }}" :current-user="{{ Auth::user() }}"></AEdit>
        </section>
    </section>
@endsection

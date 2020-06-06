@extends('layouts.app')


@section('content')
    <section class="section">
        <section class="section is-fullwidth">
            <ASearch :all-films="{{ $actors }}" :current-user="{{ Auth::user() }}"></ASearch>
        </section>
    </section>
@endsection

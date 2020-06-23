@extends('layouts.app')


@section('content')
            <section class="section is-fullwidth">
                <films :film="{{ $films }}" :current-user="{{ Auth::user() }}"></films>
            </section>

@endsection


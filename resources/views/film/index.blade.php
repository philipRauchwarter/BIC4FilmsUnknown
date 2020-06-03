@extends('layouts.app')


@section('content')
            <section class="section is-fullwidth">
                <films :all-films="{{ $films }}" :current-user="{{ Auth::user() }}"></films>
            </section>

@endsection


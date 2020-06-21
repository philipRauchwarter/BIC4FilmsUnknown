@extends('layouts.app')


@section('content')

    <section class="section">
        <film-create :current-user="{{ Auth::user() }}"> </film-create>
    </section>
@endsection


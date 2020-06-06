@extends('layouts.app')


@section('content')
    <section class="section">
        <FCreate :current-user="{{ Auth::user() }}"> </FCreate>
    </section>
@endsection

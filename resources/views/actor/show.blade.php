@extends('layouts.app')


@section('content')
    <section class="section">
        <div class="container">
            <actor-component :actor="{{ $actor }}"></actor-component>
        </div>
    </section>
@endsection

@extends('layouts.app')


@section('content')
    <section class="section">
        <section class="section is-fullwidth">
            <AEdit  :current-user="{{ Auth::user() }}"></AEdit>
        </section>
    </section>
@endsection

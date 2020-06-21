@extends('layouts.app')


@section('content')
    <section class="section">
        <div class="container">
            <h1>Edit actor</h1>
        </div>
        <section class="section is-fullwidth">
            <create-actor  :current-user="{{ Auth::user() }}"></create-actor>
        </section>
    </section>
@endsection


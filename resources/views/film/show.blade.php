@extends('layouts.app')


@section('content')
    <section class="section is-fullwidth">
        <film-component :film="{{ $film }}" :user="{{ Auth::user() }}"></film-component>
    </section>
@endsection
<script>


</script>

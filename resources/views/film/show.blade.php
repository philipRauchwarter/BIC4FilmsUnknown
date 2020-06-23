@extends('layouts.app')


@section('content')
    <section class="section is-fullwidth">
        <film-component :film="{{ $film }}" :user="{{ Auth::user() }}" :actors="{{ $film->actors->load(['name','description']) }}"></film-component>
    </section>
@endsection
<script>
    import FilmComponent from "../../js/components/FilmComponent";
    export default {
        components: {FilmComponent}
    }
</script>

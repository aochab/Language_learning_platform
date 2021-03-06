@extends('layouts.app')

@section ('content')
    <div class="container">
        @if (session('alert'))
            <div class="alert alert-success">
                {{ session('alert') }}
            </div>
        @endif
        <form method="POST" action="/language">
            @csrf
            <div id="field">
                <label>Language</label>
                <input type="text" name="language">
                @error('language')
                <p class="help is-danger">{{$message}}</p>
                @enderror
            </div>
            <button type="submit">Add language</button>
        </form>
    </div>
@endsection

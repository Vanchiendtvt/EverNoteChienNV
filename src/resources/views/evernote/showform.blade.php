@extends('layouts.app')

@section('content')
{{-- @include('evernote.sidebar')  --}}

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                <create-note></create-note>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
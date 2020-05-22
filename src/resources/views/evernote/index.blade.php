@extends('layouts.app')

@section('content')
@include('evernote.sidebar') 

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                <ever-note :notes="{{'notes'}}"></ever-note>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
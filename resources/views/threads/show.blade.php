@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body p-4 mb-4">
                            <article class="mb-4">
                                <h4>{{$thread->title}}</h4>
                                <div class="body">
                                    {{$thread->body}}
                                </div>
                            </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

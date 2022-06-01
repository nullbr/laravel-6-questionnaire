@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-4">
                    <div class="card-header">All Questionnaires</div>

                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($questionnaires as $questionnaire)
                                <li class="list-group-item">
                                    <div>
                                        <h4>{{ $questionnaire->title }}</h4>
                                        <small>By {{ $questionnaire->user->name }}</small>
                                    </div>

                                    <div class="mt-2">
                                        <p class="font-weight-bold">
                                            <a href="{{ $questionnaire->publicPath() }}">
                                                Take Survey
                                            </a>
                                        </p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

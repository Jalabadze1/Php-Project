@extends('layouts.app')

@section('content')
    <h1>Quizzes</h1>
    <ul class="list-group">
        @foreach($quizzes as $quiz)
            <li class="list-group-item {{ $quiz->status ? 'list-group-item-success' : 'list-group-item-danger' }}">
                {{ $quiz->name }}
                <span class="badge badge-primary badge-pill">{{ $quiz->status ? 'Active' : 'Inactive' }}</span>
            </li>
        @endforeach
    </ul>
@endsection


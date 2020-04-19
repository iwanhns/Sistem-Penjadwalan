@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            Home
        </div>
        <div class="card container" style="width: 100%;">
            <h5 class="card-title">This page is showing the total number of each students and lecturers</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">The Number of Students: {{$students}}</li>
                <li class="list-group-item">The Number of Lecturers: {{$lecturers}}</li>
            </ul>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection
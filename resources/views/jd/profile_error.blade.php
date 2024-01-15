@extends('layouts.app')

@section('content')
    <div class="alert alert-danger">
        {{ $error }}
    </div>
    <a class="comlink postings" href="{{ route('company.profile.form') }}"><i class="bi bi-briefcase-fill"></i><span>Job Postings</span></a>
@endsection
@extends('layouts.template')

@section('content')
<p>
    hello in the Course Page All Courses Here !
</p>

@forelse ($courses as $course)
    
<li>  <a href="/courses/{{ $course->id }}"> Title: {{ $course->title }}</a></li>

@empty
    <li>No Courses Available Right Now.</li>
@endforelse

@endsection
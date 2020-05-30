
@if ($course)
    
@endif
<ul>
    <li>{{ $course->id }}</li>
    <li>{{ $course->title }}</li>
    <li>{{ $course->description }}</li>
    <li>{{ $course->author }}</li>
    <li>{{ $course->created_at }}</li>
    <li>{{ $course->updated_at }}</li>
</ul>
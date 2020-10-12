<?php
use App\User;
?>
@if ($course)
    
@endif


<section class="content p-4">
    <p>
     Show the Course informations :<span class="text-primary">{{$course->name ?? ''}}</span>
    </p>
    <dl>
      <dt>ID</dt>
      <dd>{{$course->id ?? ''}}</dd>
    </dl>
    <dl>
      <dt>Course Name</dt>
      <dd>{{$course->title ?? ''}}</dd>
    </dl>
    <dl>
      <dt>Course description</dt>
      <dd>{{$course->description ?? ''}}</dd>
    </dl>
    <dl>
      <dt>Author Name</dt>
      <dd>{{ User::find($course->author_id)->name ?? ''}}</dd>
    </dl>
    
    <dl>
      <dt>Created At</dt>
      <dd>{{$course->created_at ?? ''}}</dd>
    </dl>  
    <dl>
        <dt>Cover Photo</dt>
        <?php $cover = $course->cover ?? 'course_cover.jpg' ?> 
        <dd><img src="{{ asset('storage/images/' .$cover ) }}" class="rounded d-block" alt="course Image" width="200" height="200"/></dd>
    </dl>
    


  </section>
  <!-- /.content -->
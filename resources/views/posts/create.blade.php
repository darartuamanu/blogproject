@extends('layouts.app')
@section('content')
<div class="container">
  <h3 style="color: blue; font-size: 24px; font-weight: bold; margin-bottom: 20px; margin-right: 1cm;">Add Post</h3>



  <section class="mt-3">
    <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
      @csrf
      <!-- Error message when data is not inputted -->
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <div class="card p-3">
        <label for="floatingInput" >Title</label>

        
        <input class="form-control" type="text" name="title" onfocus="this.style.border = '1px solid #80bdff'; onblur="this.style.border = '1px solid #ccc';><br><br>
        <label for="floatingTextArea" style="margin-bottom: 5px; display: block;" style="color: purple;">Description</label>
         <textarea class="form-control" name="description" id="floatingTextarea"  cols="20"style= rows="5"></textarea>
        <label for="formFile" class="form-label">Add Image</label><br><br>
        <img src="" alt="" class="img-blog">
        
        <label for="image" class="form-label" style="margin-bottom: 3px; display: block; cursor: pointer; color: purple; text-decoration: underline;">Select Image</label><br>

                              <input type="file" class="form-control" id="image" name="image" accept="image/*" required>

      </div><br>
      <button class="btn btn-secondary m-3" style="color: purple;">Save</button>
      <button class="btn btn-secondary m-3" style="margin-top: -3cm;color: purple; margin-left: 3cm;">Delete</button>

    </form>
  </section>
    
</div>

<!--<h1>Add New Detail</h1>
    <form action="{{ route('details.store') }}" method="POST">
        @csrf
        <div>
            <label for="blog_id">Blog ID</label>
            <input type="number" name="blog_id" id="blog_id" required>
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" required></textarea>
        </div>
        <div>
            <label for="additional_info">Additional Info</label>
            <input type="text" name="additional_info" id="additional_info">
        </div>
        <button type="submit">Save</button>
    </form>-->
@endsection
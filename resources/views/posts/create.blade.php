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
      </head>

      <body>
          <form>
        
              <label for="description">Description:</label>
              <textarea id="description" name="description" rows="4" cols="50"  style="width: 100%;"></textarea>
            
          </form>
      
          {{--<script>
              function limitWords(textarea, maxWords) {
                  let words = textarea.value.split(/\s+/).filter(word => word.length > 0);
                  if (words.length > maxWords) {
                      textarea.value = words.slice(0, maxWords).join(" ");
                  }
                  document.getElementById("wordCount").innerText = `${words.length > maxWords ? maxWords : words.length}/${maxWords} words`;
              }
          </script>--}}
       <!-- <label for="floatingTextArea" style="margin-bottom: 5px; display: block;" style="color: purple;">Description</label>
        <textarea id="description" name="description" rows="4" cols="50" oninput="limitWords(this, 150)" style="width: 100%;"></textarea>
        <p id="wordCount">0/150 words</p>-->
        <label for="formFile" class="form-label">Add Image</label>
        <img src="" alt="" class="img-blog">
        
        <label for="image" class="form-label" style="margin-bottom: 3px; display: block; cursor: pointer; color: purple; text-decoration: underline;"></label><br>

                              <input type="file" class="form-control" id="image" name="image" accept="image/*" required>

      <br>
      <button class="btn btn-secondary m-3" style="color: white;">Save</button>
      <button class="btn btn-secondary m-3" style="margin-top: -3cm;color: white; margin-left: 3cm;">Delete</button>
    </div>
    </form>
    
    
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

@extends('layouts.app')

@section('content')
<div class="container">
    <h3 style="color: blue; font-size: 24px; font-weight: bold; margin-bottom: 20px;">Add Post</h3>

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
                <label for="title">Title</label>
                <input class="form-control" type="text" name="title" id="title" onfocus="this.style.border = '1px solid #80bdff';" onblur="this.style.border = '1px solid #ccc';"><br><br>

                <label for="description">Description:</label>
                <textarea id="description" name="description" rows="4" cols="50" class="form-control" style="width: 100%;" maxlength="400"></textarea><br>
                <!--<div id="charCount">400 characters remaining</div>-->
                


                <label for="image" class="form-label">Add Image</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*" required><br>

                <button class="btn btn-secondary m-3" style="color: white;">Save</button>
                <button class="btn btn-secondary m-3" style="color: white;">Clear</button>
            </div>
        </form>
    </section>
</div>
@endsection

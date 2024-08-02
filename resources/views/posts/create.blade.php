@extends('layouts.admin')

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
                    <input class="form-control" type="text" name="title" id="title"
                        onfocus="this.style.border = '1px solid #80bdff';"
                        onblur="this.style.border = '1px solid #ccc';"><br><br>

                    <label for="description">Description:</label>
                    <textarea id="description" name="description" rows="4" cols="50" class="form-control" style="width: 100%;"></textarea><br>
          
                    <label for='status'>Status:</label>
                    <select name="status" id="status" class="form-control">
                        <!--<option value="all" {{ request('status') === 'all' ? 'selected' : '' }}>all</option>-->
                        <option value="draft">Draft</option>
                        <option value="published">Published</option>
                        <option value="archived">Archived</option>
                    </select>




                    <label for="formFile" class="form-label">Add Image</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*" required>

                    <br>

                    <button type="submit" class="btn btn-secondary m-3" style="color: white;">Save</button>
                    <button type="reset" class="btn btn-secondary m-3"
                        style="margin-top: -3cm; color: white; margin-left: 3cm;">Clear</button>

            </form>
        </section>

    </div>
@endsection

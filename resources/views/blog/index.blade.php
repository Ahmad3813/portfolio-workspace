@extends('layouts.app')

@section('content')
    <div class="page-heading">
        <p class="eyebrow">BLOGS</p>
        <h1>Blog List<span>.</span></h1>
        <p class="description">Manage your blog articles.</p>
    </div>

    <div class="content-box">
        <div class="table-header">
            <div>
                <h2>My Blogs</h2>
                <p>Create, edit, and manage your articles.</p>
            </div>

            <a href="{{ route('blog.add') }}" class="add-button">+ Add Blog</a>
        </div>

        <div class="table-responsive">
            <table class="contacts-table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Short Title</th>
                        <th>Publishing Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    
                    
                    @foreach ($blogs as $blog)
                    
                    
                    <tr>
                        <td>
                            <img
    src="{{ asset('storage/' . $blog->image) }}"
    alt="{{ $blog->short_title }}"
    class="blog-image">
                        </td>
                        <td>{{$blog->short_title}}</td>
                        <td>{{ $blog->published_at }}</td>
                        <td>
                            <div class="row-actions">
                                <a href="{{ route('view', $blog->id) }}" class="show-button">View</a>
                                <a href="{{ route('editblog', $blog->id) }}" class="edit-button">Edit</a>
                                <form action="{{ route('deleteblog', $blog->id) }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit" class="delete-button">
        Delete
    </button>
</form>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                    


                </tbody>
            </table>
        </div>
    </div>
@endsection
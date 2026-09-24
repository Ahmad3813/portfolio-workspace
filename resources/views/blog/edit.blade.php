@extends('layouts.app')

@section('content')
<div class="page-heading">
    <p class="eyebrow">BLOGS</p>
    <h1>Edit Blog<span>.</span></h1>
    <p class="description">Update the article information below.</p>
</div>

<div class="form-box">
    <div class="form-heading">
        <h2>Blog details</h2>
        <p>Edit the article information below.</p>
    </div>

    <form class="contact-form" enctype="multipart/form-data" action="{{ route('updateblog', $blog->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-row">
            <label for="short_title">Short title</label>
            <input
                type="text"
                id="short_title"
                name="short_title"
                value="{{ $blog->short_title }}"
                required>
        </div>

        <div class="form-row">
            <label for="long_title">Long title</label>
            <input
                type="text"
                id="long_title"
                name="long_title"
                value="{{ $blog->long_title }}"
                required>
        </div>

        <div class="form-row">
            <label for="short_description">Short description</label>
            <textarea
                id="short_description"
                name="short_description"
                required>{{ $blog->short_description }}</textarea>
        </div>

        <div class="form-row">
            <label for="long_description">Long description</label>
            <textarea
                id="long_description"
                name="long_description"
                rows="8"
                required>{{ $blog->long_description }}</textarea>
        </div>

        <div class="form-row">
            <label for="image">Change image</label>
            <input
                type="file"
                id="image"
                name="image"
                accept="image/*">
        </div>

        <div class="form-row">
            <label for="published_at">Publishing date</label>
            <input
                type="date"
                id="published_at"
                name="published_at"
                value="{{ $blog->published_at }}"
                required>
        </div>

        <div class="form-actions">
            <a href="{{ route('blog.index') }}" class="cancel-button">
                Cancel
            </a>

            <button type="submit" class="save-button">
                Save Changes
            </button>
        </div>

    </form>
</div>
@endsection
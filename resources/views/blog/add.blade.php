@extends('layouts.app')

@section('content')
<div class="page-heading">
    <p class="eyebrow">BLOGS</p>
    <h1>Add Blog<span>.</span></h1>
    <p class="description">Create a new article for your portfolio.</p>
</div>

<div class="form-box">
    <div class="form-heading">
        <h2>Blog details</h2>
        <p>Add the article information below.</p>
    </div>

    <form
        class="contact-form"
        action="{{ route('storeblog') }}"
        method="POST"
        enctype="multipart/form-data">
        @csrf

        <div class="form-row">
            <label for="short_title">Short title</label>

            <input
                type="text"
                id="short_title"
                name="short_title"
                value="{{ old('short_title') }}"
                placeholder="e.g. My first Laravel project"
                required>
        </div>

        <div class="form-row">
            <label for="long_title">Long title</label>

            <input
                type="text"
                id="long_title"
                name="long_title"
                value="{{ old('long_title') }}"
                placeholder="Write the full article title"
                required>
        </div>

        <div class="form-row">
            <label for="short_description">Short description</label>

            <textarea
                id="short_description"
                name="short_description"
                placeholder="A short summary of the article"
                required>{{ old('short_description') }}</textarea>
        </div>

        <div class="form-row">
            <label for="long_description">Long description</label>

            <textarea
                id="long_description"
                name="long_description"
                rows="8"
                placeholder="Write the full article content"
                required>{{ old('long_description') }}</textarea>
        </div>

        <div class="form-row">
            <label for="image">Article image</label>

            <input
                type="file"
                id="image"
                name="image"
                accept="image/*"
                required>
        </div>

        <div class="form-row">
            <label for="published_at">Publishing date</label>

            <input
                type="date"
                id="published_at"
                name="published_at"
                value="{{ old('published_at') }}"
                required>
        </div>

        <div class="form-actions">
            <a
                href="{{ route('blog.index') }}"
                class="cancel-button">
                Cancel
            </a>

            <button
                type="submit"
                class="save-button">
                Save Blog
            </button>
        </div>
    </form>
</div>
@endsection
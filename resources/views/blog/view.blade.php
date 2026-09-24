@extends('layouts.app')

@section('content')
<div class="page-heading">
    <p class="eyebrow">BLOGS</p>
    <h1>Blog Details<span>.</span></h1>
    <p class="description">View the article information below.</p>
</div>

<div class="content-box">
    <div class="contact-details-card">



        <h2>Blog Information</h2>

        <div class="detail-row">
            <span>Image</span>
            <img
                src="{{ asset('storage/' . $blog->image) }}"
                alt="{{ $blog->short_title }}"
                class="blog-image">
        </div>

        <div class="detail-row">
            <span>Short Title</span>
            <strong>{{$blog->short_title}}</strong>
        </div>

        <div class="detail-row">
            <span>Long Title</span>
            <strong>{{$blog->long_title}}</strong>
        </div>

        <div class="detail-row">
            <span>Short Description</span>
            <strong>{{$blog->short_description}}</strong>
        </div>

        <div class="detail-row">
            <span>Long Description</span>
            <strong>
                {{$blog->long_description}}
            </strong>
        </div>

        <div class="detail-row">
            <span>Publishing Date</span>
            <strong>{{ $blog->published_at }}</strong>
        </div>

        <div class="form-actions">
            <a href="{{ route('blog.index') }}" class="cancel-button">Back</a>
        </div>
    </div>
</div>
@endsection
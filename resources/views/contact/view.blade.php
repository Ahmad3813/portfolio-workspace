@extends('layouts.app')

@section('content')
    <div class="page-heading">
        <p class="eyebrow">CONTACT</p>
        <h1>Contact Details<span>.</span></h1>
        <p class="description">View the contact information below.</p>
    </div>

    <div class="content-box">
        <div class="contact-details-card">
            <h2>Contact Information</h2>

            <div class="detail-row">
                <span>Email</span>
                <strong>{{$contact->email}}</strong>
            </div>

            <div class="detail-row">
                <span>Phone Number</span>
                <strong>{{$contact->phone}}</strong>
            </div>

            <div class="detail-row">
                <span>Location</span>
                <strong>{{$contact->location}}</strong>
            </div>

            <div class="detail-actions">
                <a href="{{ route('contact.index') }}" class="cancel-button">
                    Back
                </a>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="page-heading">
        <p class="eyebrow">CONTACT</p>
        <h1>Edit Contact<span>.</span></h1>
        <p class="description">Update the contact information below.</p>
    </div>

    <div class="content-box">
        <div class="form-box edit-contact-box">
            <div class="form-heading">
                <h2>Contact Information</h2>
                <p>Edit the information and save your changes.</p>
            </div>

           <form action="{{ route('updatecontact', $contact->id) }}" method="POST">
    @csrf
    @method('PUT')
                <div class="form-row">
                    <label for="email">Email address</label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ $contact->email }}"
                    >
                </div>

                <div class="form-row">
                    <label for="phone">Phone number</label>

                    <input
                        type="tel"
                        id="phone"
                        name="phone"
                        value="{{ $contact->phone }}"
                        maxlength="11"
                    >
                </div>

                <div class="form-row">
                    <label for="location">Location</label>

                    <input
                        type="text"
                        id="location"
                        name="location"
                        value="{{ $contact->location }}"
                    >
                </div>

                <div class="form-actions">
                    <a href="{{ route('contact.index') }}" class="cancel-button">
                        Back
                    </a>

                    <button type="submit" class="save-button">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
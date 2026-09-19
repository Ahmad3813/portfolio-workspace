@extends('layouts.app')

@section('content')
    <div class="page-heading">
        <p class="eyebrow">CONTACT</p>
        <h1>Add Contact<span>.</span></h1>
        <p class="description">Add new contact information to your dashboard.</p>
    </div>

    <div class="form-box">
        <div class="form-heading">
            <h2>Contact details</h2>
            <p>Enter the contact information below.</p>
        </div>

       <form class="contact-form" action="{{ route('storecontact') }}" method="POST">
    @csrf

    <div class="form-row">
        <label for="email">Email address</label>
        <input type="email" id="email" name="email" required>
    </div>

    <div class="form-row">
        <label for="phone">Phone number</label>
        <input type="tel" id="phone" name="phone" maxlength="11" required>
    </div>

    <div class="form-row">
        <label for="location">Location</label>
        <input type="text" id="location" name="location" required>
    </div>

    <div class="form-actions">
        <button type="submit" class="save-button">
            Save Contact
        </button>
    </div>
</form>
    </div>
@endsection
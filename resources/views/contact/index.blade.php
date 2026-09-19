@extends('layouts.app')

@section('content')

  <div class="page-heading">
        <p class="eyebrow">DASHBOARD</p>
        <h1>Welcome back, Ahmad<span>.</span></h1>
        <p class="description"> Manage your portfolio and keep building your story. </p>
</div>
<div class="content-box">
    <div class="table-header">
        <div>
            <h2>Contact list</h2>
            <p>Manage your contact information.</p>
        </div>

        <a href="{{ route('contact.addcontact') }}" class="add-button">+ Add Contact</a>
    </div>

    <div class="table-responsive">
        <table class="contacts-table">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Location</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($contacts as $contact )
                
               
    <tr>
        <td>{{$contact->email}}</td>
        <td>{{$contact->phone}}</td>
        <td>{{$contact->location}}</td>

        <td>
<div class="row-actions">
    <a href="{{ route('contact.view', $contact->id) }}" type="button" class="show-button">View</a>
    <a href="{{ route('contact.edit', $contact->id) }}" type="button" class="edit-button">Edit</a>

    <form action="{{ route('deletecontact', $contact->id) }}" method="POST">
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
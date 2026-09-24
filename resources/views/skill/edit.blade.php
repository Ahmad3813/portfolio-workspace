@extends('layouts.app')

@section('content')

<div class="page-heading">
    <p class="eyebrow">SKILLS</p>
    <h1>Edit Skill<span>.</span></h1>
    <p class="description">Update the skill information below.</p>
</div>

<div class="form-box">
    <div class="form-heading">
        <h2>Skill details</h2>
        <p>Edit the skill information and save your changes.</p>
    </div>

    <form class="contact-form" action="{{ route('updateskill', $skill->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-row">
            <label for="name">Skill name</label>

            <input
                type="text"
                id="name"
                name="name"
                value="{{ $skill->name }}"
                required>
        </div>

        <div class="form-row">
            <label for="percentage">Percentage</label>

            <input
                type="number"
                id="percentage"
                name="percentage"
                value="{{ $skill->percentage }}"
                min="0"
                max="100"
                step="1"
                oninput="if (this.value > 100) this.value = 100; if (this.value < 0) this.value = 0;"
                required>
        </div>

        <div class="form-actions">
            <a href="{{ route('skill.index') }}" class="cancel-button">Cancel</a>

            <button type="submit" class="save-button">
                Save Changes
            </button>
        </div>
    </form>
</div>

@endsection
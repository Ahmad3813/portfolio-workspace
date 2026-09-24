@extends('layouts.app')

@section('content')

    <div class="page-heading">
        <p class="eyebrow">SKILLS</p>
        <h1>Skill Details<span>.</span></h1>
        <p class="description">View the skill information below.</p>
    </div>

    <div class="content-box">
        <div class="contact-details-card">
            <h2>Skill Information</h2>

            <div class="detail-row">
                <span>Skill Name</span>
                <strong>{{ $skill->name }}</strong>
            </div>

            <div class="detail-row">
                <span>Percentage</span>
                <strong>{{ $skill->percentage }}%</strong>
            </div>

            <div class="detail-actions">
                <a href="{{ route('skill.index') }}" class="cancel-button">Back</a>
            </div>
        </div>
    </div>

@endsection
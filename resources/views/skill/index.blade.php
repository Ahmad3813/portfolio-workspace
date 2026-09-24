@extends('layouts.app')

@section('content')

<div class="page-heading">
    <p class="eyebrow">SKILLS</p>
    <h1>Skill List<span>.</span></h1>
    <p class="description">Manage your professional skills.</p>
</div>

<div class="content-box">
    <div class="table-header">
        <div>
            <h2>My Skills</h2>
            <p>Add, edit, and manage your skills.</p>
        </div>

        <a href="{{ route('skill.add') }}" class="add-button">+ Add Skill</a>
    </div>

    <div class="table-responsive">
        <table class="contacts-table">
            <thead>
                <tr>
                    <th>Skill Name</th>
                    <th>Percentage</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($skills as $skill)
                <tr>
                    <td>{{ $skill->name }}</td>
                    <td>{{ $skill->percentage }}%</td>

                    <td>
                        <div class="row-actions">
                            <a href="{{ route('viewskill' , $skill->id) }}" class="show-button">View</a>
                            <a href="{{ route('editskill' , $skill->id) }}" class="edit-button">Edit</a>
                            <form action="{{ route('deleteskill', $skill->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-button">
                                    Delete </button>
                            </form>


                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
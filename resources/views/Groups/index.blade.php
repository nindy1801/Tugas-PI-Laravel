@extends('layouts.app')

@section('title', 'Groups')

@section('content')
<h3>MY GROUP</h3>
<a href="/groups/create" class="card-link btn-primary">Tambah Group</a>
<div class="mb-3"></div>
<div class="row">
    @foreach ($groups as $group)
    <div class="col-sm-4">
        <div class="card border-success mb-3" style="max-width: 18rem;">
            <div class="card-header ">
                <b>Group</b>
            </div>
            <div class="card-body ">
                <a href="/groups/{{$group['id']}}" class="card-title">{{ $group['name'] }}</a>
                <p class="card-text">{{ $group['description'] }}</p>
                <hr>
                <a href="/groups/addmember/{{$group['id']}}" class="card-link btn-primary">Tambah Anggota Teman</a>
                @foreach ($group->friends as $friend)

                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$friend->nama}}
                    <br>
                    {{$friend->no_tlp}}
                    <form action="/groups/deleteaddmember/{{ $friend->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="bedge card-link btn-danger">x</button>
                    </form>
                </li>

                @endforeach
                </ul>
                <hr>
                <a href="/groups/{{$group['id']}}/edit" class="card-link btn-warning">Edit group</a>
                <form action="/groups/{{ $group['id'] }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="card-link btn-danger">Delete group</b>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
{{ $groups-> links() }}
</div>
<div class="mb-3"></div>
@endsection
</div>
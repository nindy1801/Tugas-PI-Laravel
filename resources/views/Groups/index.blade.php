@extends('layouts.app')

@section('title', 'Groups')

@section('content')
<h3>LIST OF MY GROUP</h3>
<div class="row">
    <a href="/groups/create" class="card-link btn-primary">Tambah Group</a>
    @foreach ($groups as $group)
    <div class="col-sm-4">
        <div class="card border-success mb-3" style="">
            <div class="card-header">
                <b>Group</b>
            </div>
            <div class="card-body ">
                <a href="/groups/{{$group['id']}}" class="card-title">{{ $group['name'] }}</a>
                <p class="card-text">{{ $group['description'] }}</p>
                <hr>
                <a href="" class="card-link btn-primary">Tambah Anggota Teman</a>
                @foreach ($group->friends as $friend)
                <li> {{$friend->nama}}
                    @endforeach
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
<div>
    {{ $groups-> links() }}
</div>
</div>
@endsection
</div>
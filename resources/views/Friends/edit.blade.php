@extends('layouts.app')

@section('title', 'Friends')

@section('content')
<form action="/friends/{{ $friend['id'] }}" method="POST">
    @csrf
    <input type="hidden" name="groups_id" value="0">
    @method('PUT')
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" id="exampleInputEmail1" value="{{old('nama') ? old('nama') : $friend['nama']}}">
        @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">No Telepon</label>
        <input type="text" class="form-control" name="no_tlp" id="exampleInputPassword1" value="{{old('no_tlp') ? old('no_tlp') : $friend['no_tlp']}}">
        @error('no_tlp')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Alamat</label>
        <input type="text" class="form-control" name="alamat" id="exampleInputPassword1" value="{{old('alamat') ? old('alamat') : $friend['alamat']}}">
        @error('alamat')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
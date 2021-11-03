@extends('layouts.app')

@section('title', 'Cobaaaaa')

@section('content')
<div class="row">
    <div class="col-sm-4">
        <div class="card border-success mb-3" style="max-width: 30rem;">
            <div class="card-header bg-success text-light">
                <b>Friends Detail</b>
            </div>
            <div class="card-body bg-success p-2 text-dark bg-opacity-10">
                <h6>Nama Teman : {{ $friend['nama'] }} </h6>
                <h6>No Tlp : {{ $friend['no_tlp'] }} </h6>
                <h6>Alamat : {{ $friend['alamat'] }} </h6>
            </div>
        </div>
        @endsection
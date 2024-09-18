@extends('layouts.app')

    @section('content')
    <div class="py-4">
    <h3 class="fw-bold mb-2 border-bottom">Detail Institution Name</h3>

    <a href="{{ url()->previous() }}" class="btn btn-secondary mb-3">Kembali</a>

    <table class="table table-striped table-bordered">
        <th>ID</th>
        <td><strong>#{{ $institution->id}}</strong></td>
        <tr>
            <td>Nama</td>
            <td>{{ $institution->name }}</td>
        </tr>
            
    </table> 
    </div>
    @endsection
@extends('layout.main')

@section('title', 'Table Brand | Toko Sepatu')

@section('titlePage', 'Table Brand')

@section('main')
<div class="card">
    <div class="card-header">
        <button class="btn btn-success">Add</button>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width: 5%">No</th>
                <th>Name</th>
                <th style="width: 20%">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Canvas</td>
                <td class="table-action">
                    {{-- <a href="#"><i class="align-middle" data-feather="edit-2"></i></a> --}}
                    <a href="#"><i class="fa fa-edit"></i></a>
                    {{-- <a href="#"><i class="align-middle" data-feather="trash"></i></a> --}}
                    <a href="#"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection

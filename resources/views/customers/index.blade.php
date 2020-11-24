@extends('layout.main')

@section('title', 'Table Customer | Toko Sepatu')

@section('titlePage', 'Table Customer')

@section('main')
<div class="card">
    <div class="card-header">
        {{-- <button class="btn btn-success">Add</button> --}}
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width: 5%">No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Muhammad Ridwan</td>
                <td>nubitol45@gmail.com</td>
                <td class="table-action">
                    {{-- <a href="#"><i class="align-middle" data-feather="trash"></i></a> --}}
                    <a href="#"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Maulida Hanifa</td>
                <td>maulidahanifa@gmail.com</td>
                <td class="table-action">
                    {{-- <a href="#"><i class="align-middle" data-feather="trash"></i></a> --}}
                    <a href="#"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Mukti Bakis</td>
                <td>muktibakis@gmail.com</td>
                <td class="table-action">
                    {{-- <a href="#"><i class="align-middle" data-feather="trash"></i></a> --}}
                    <a href="#"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Ezza Bregas</td>
                <td>ezzabregas@gmail.com</td>
                <td class="table-action">
                    {{-- <a href="#"><i class="align-middle" data-feather="trash"></i></a> --}}
                    <a href="#"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection

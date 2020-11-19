@extends('layout.main')

@section('title', 'Table Item | Toko Sepatu')

@section('titlePage', 'Table Item')

@section('main')
<div class="card">
    <div class="card-header"></div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width: 5%">No</th>
                <th style="width: 20%">Name</th>
                <th style="width: 10%">Price</th>
                <th style="width: 5%">Stock</th>
                <th style="width: 10%">Brand</th>
                <th style="width: 10%">Category</th>
                <th style="width: 25%">Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Sepatu Turing</td>
                <td>Rp.1000.000</td>
                <td>10</td>
                <td>Canvas</td>
                <td>Pria</td>
                <td>
                    Lorem ipsum dolor sit amet,.....
                </td>
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

@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <h3>Detail Supplier</h3>

    <div class="card">
        <div class="card-body">
            <p><strong>Kode Supplier:</strong> {{ $supplier->kode_supplier }}</p>
            <p><strong>Nama Supplier:</strong> {{ $supplier->nama_supplier }}</p>
            <p><strong>Email:</strong> {{ $supplier->email }}</p>
            <p><strong>No Telepon:</strong> {{ $supplier->no_telepon }}</p>
            <p><strong>Alamat:</strong> {{ $supplier->alamat }}</p>
            <p>
                <strong>Status:</strong>
                @if ($supplier->status == 'Aktif')
                    <span class="badge bg-success">Aktif</span>
                @else
                    <span class="badge bg-danger">Tidak Aktif</span>
                @endif
            </p>
        </div>
    </div>

    <a href="{{ route('supplier.index') }}" class="btn btn-secondary mt-3">Kembali</a>

</div>
@endsection
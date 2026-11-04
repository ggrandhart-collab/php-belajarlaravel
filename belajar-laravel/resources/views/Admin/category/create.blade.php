@extends('admin.layouts.app')
@section('title', 'Tambah User');
@section('subtitle', 'Tambah Kategori Produk Baru');

@section('content')
    <form action="{{ route('admin.category.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label-custom"> Nama Lengkap</label>
            <input type="text" class="form-control" name="name" required value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label-custom"> Slug (opsional)</label>
            <input type="email" class="form-control" name="slug" value="{{ old('slug') }}">
            @error('slug')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label-custom"> Ikon</label>
            <input type="icon" class="form-control" name="icon"
                @error('icon')
<div class="invalid-feedback
                d-block">{{ $message }}
        </div>
    @enderror
                </div>
            <div class="mb-3">
                <label for="" class="form-label-custom"> Urutan Tampil</label>
                <input type="password" class="form-control" name="sort_order"
                    @error('sort_order')
<div class="invalid-feedback
            d-block">{{ $message }}
    </div>
@enderror
                    </div>
                <div class="">
                    <button type="submit" class="btn-custom btn-custom-primary">Simpan</button>
                </div>
    </form>
@endsection

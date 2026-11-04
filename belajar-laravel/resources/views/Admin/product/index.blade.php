@extends('admin.layouts.app')
@section('title', 'Management Product')
@section('subtitle', 'Pengelompokan Kategori Produk')
@section('content')
    <div align="right">
        <a href="{{ route('admin.product.create') }}" class="btn-table-action">
            <i class='bi bi-circle-fill'></i>Tambah Produk
        </a>
        <div class="table-responsive">
            <table class="table-custom">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kategori</th>
                        <th>Nama Produk</th>
                        <th>Gambar</th>
                        <th>Stock</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @dd($products) --}}
                    @foreach ($products as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                @if ($item->image !==null)
                                    <img src="{{ asset('storage/' . $item->image) }}" width="100" alt="{{ $item->name }}"
                                        class="img-thumbnail">
                                @else
                                    <span class="text-muted opacity-50">Tidak ada gambar</span>
                                @endif
                            </td>
                            <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->category->name }}</td>
                            <td>{{ $item->name }}</td>
                            <td>
                            <td>{{ $item->category->name }}</td>
                            <td>{{ $item->name }}</td>
                            <td>
                                <img src="" alt="">
                            </td>
                            <td>{{ $item->stock }}</td>
                            <td>{{ number_format($item->price, 2, ',', '.') }}</td>
                            <td>
                                <a class="table-btn-action" title="Edit"
                                    href="{{ route('admin.product.edit', $item->id) }}">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <form action="{{ route('admin.product.destroy', $item->id) }}" method="POST"
                                    class="d-inline"
                                    onsubmit="return confirm ('Apakah anda yakin ingin menghapus data ini??')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="table-btn-action delete" title="Delete">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                    @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

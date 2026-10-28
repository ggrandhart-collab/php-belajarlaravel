@extends('admin.layouts.app')
@section('title', 'Pengaturan Website')
@section('subtitle',
    'Konfigurasi indentitas website,
    logo, kontak dan informasi profil')

@section('content')

   <form action="{{ route('admin.settings.update') }}" method="post" enctype="multipart/form-data">
        @csrf
        {{-- <h5 class="fw-bold text-main mb-1">Pengaturan Website</h5>
        <p class="text-muted-green small mb-4">Basic Bootstrap nav tabs with smooth panel switching and icon indicators.
        </p> --}}

        <ul class="nav nav-tabs mb-3" id="defaultTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active " id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                    type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                    <i class="bi bi-house-door me-1"></i> Pengaturan Umum
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                    type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false" tabindex="-1">
                    <i class="bi bi-telephone me-1"></i> Kontak dan Lokasi
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages-tab-pane"
                    type="button" role="tab" aria-controls="messages-tab-pane" aria-selected="false" tabindex="-1">
                    <i class="bi bi-link me-1"></i> Media Sosial
                </button>
            </li>
        </ul>

        <div class="tab-content text-muted-green small" id="defaultTabsContent">
            <div class="tab-pane fade active show" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                tabindex="0">
                <h5 class="fw-bold text-main mb-1">Pengaturan Umum</h5>
                <div class="mb-3">
                    <label for="" class="form-label">Nama Lembaga</label>
                    <input type="text" class="form-control" name="site_name"
                    value="{{ old('site_name', $setting['site_name']->value) }}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tagline Website</label>
                    <input type="text" class="form-control" name="site_tagline" value="{{ old('site_tagline', $setting['site_tagline']->value) }}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Deskripsi Singkat Website</label>
                    <textarea name="site_description" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Logo Utama Website </label>
                    <input type="file" class="form-control " name="site-logo">
                </div>
            </div>
            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                <h5 class="fw-bold text-main mb-3">Kontak dan Lokasi</h5>
                <div class="mb-3">
                    <label for="" class="form-label">Nomor Telepon Utama</label>
                    <input type="text" class="form-control" name="phone" value="{{ old('phone', $setting['phone']->value) }}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email Upload</label>
                    <input type="email" class="form-control" name="email_upload" value="{{ old('email_upload', $setting['email_upload']->value) }}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email Order</label>
                    <input type="text" class="form-control" name="email_order" value="{{ old('email_order', $setting['email_order']->value) }}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Alamat</label>
                    <textarea name="address" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
            </div>
            <div class="tab-pane fade" id="messages-tab-pane" role="tabpanel" aria-labelledby="messages-tab"
                tabindex="0">
                <h5 class="fw-bold text-main mb-3">Media Sosial</h5>

                <div class="mb-3">
                    <label for="" class="form-label">URL Shopee</label>
                    <input type="text" class="form-control" name="url_shopee" value="{{ old('url_shopee', $setting['url_shopee']->value) }}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">URL Facebook</label>
                    <input type="text" class="form-control" name="url_facebook" value="{{ old('url_facebook', $setting['url_facebook']->value) }}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">URL Instagram</label>
                    <input type="text" class="form-control" name="url_instagram" value="{{ old('url_instagram', $setting['url_instagram']->value) }}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">URL YouTube</label>
                    <input type="text" class="form-control" name="url_youtube" value="{{ old('url_youtube', $setting['url_youtube']->value) }}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">URL Tiktok</label>
                    <input type="text" class="form-control" name="url_tiktok" value="{{ old('url_tiktok', $setting['url_tiktok']->value) }}">
                </div>

            </div>
        </div>
        <div class="card-footer">
            <button class="btn-custom btn-custom-primary" type="submit">Save</button>
        </div>
    </form>
@endsection

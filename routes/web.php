<?php

use Illuminate\Support\Facades\Route;

Route::get('/Dashboardcus', function () {
    return view('Dashboardcus');
});

Route::get('/CardClick', function () {
    return view('CardClick');
});

Route::get('/Pembayaran', function () {
    return view('Pembayaran');
});

Route::get('/Pesanan', function () {
    return view('Pesanan');
});

Route::get('/TampilanTiket', function () {
    return view('TampilanTiket');
});

Route::get('/HistoryUser', function () {
    return view('HistoryUser');
});

Route::get('/Bayar', function () {
    return view('Bayar');
});

Route::get('/AllEvent', function () {
    return view('AllEvent');
});

Route::get('/Dashboard', function () {
    return view('Organizer.DashboardOrganizer');
});

Route::get('/EditEvent', function () {
    return view('Organizer.EditEvent');
});

Route::get('/HasilValidasi', function () {
    return view('Organizer.HasilValidasi');
});

Route::get('/KelolaKategori', function () {
    return view('Organizer.KelolaKategori');
});

Route::get('/KelolaEvent', function () {
    return view('Organizer.KelolaEvent');
});

Route::get('/LihatKuota', function () {
    return view('Organizer.LihatKuota');
});

Route::get('/DaftarPeserta', function () {
    return view('Organizer.LihatPeserta');
});

Route::get('/Penjualan', function () {
    return view('Organizer.Penjualan');
});

Route::get('/PenjualanEvent', function () {
    return view('Organizer.PenjualanEvent');
});

Route::get('/TambahEvent', function () {
    return view('Organizer.TambahEvent');
});

Route::get('/TambahKategori', function () {
    return view('Organizer.TambahKategori');
});

Route::get('/ValidasiTiket', function () {
    return view('Organizer.ValidasiTiket');
});

Route::get('/Moderasi', function () {
    return view('Organizer.Moderasi');
});

Route::get('/DashboardAdmin', function () {
    return view('Admin.DashboardAdmin');
});


Route::get('/KelolaPenggunaAdmin', function () {
    return view('Admin.KelolaPenggunaAdmin');
});

Route::get('/TambahPenggunaAdmin', function () {
    return view('Admin.TambahPenggunaAdmin');
});

Route::get('/PantauTransaksiAdmin', function () {
    return view('Admin.PantauTransaksiAdmin');
});

Route::get('/ModerasiEvent', function () {
    return view('Admin.ModerasiEvent');
});

Route::get('/EditPengguna', function () {
    return view('Admin.EditPenggunaByAdmin');
});

Route::get('/SignUp', function () {
    return view('Auth.Sign Up');
});

Route::get('/SignIn', function () {
    return view('Auth.Sign In');
});

Route::post('/SignIn', [App\Http\Controllers\AuthController::class, 'SignIn'])->name('SignIn');
Route::post('/SignUp', [App\Http\Controllers\AuthController::class, 'SignUp']);
Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout']);

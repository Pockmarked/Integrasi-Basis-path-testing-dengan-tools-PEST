<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;

// ─────────────────────────────────────────────────────────────
// Path 1: role = 'manager' → harus return true
// ─────────────────────────────────────────────────────────────
test('Nadhif Seorang karyawan', function () {

    // Arrange — buat object User dengan role manager
    $user = new User(['role' => 'karyawan']);

    // Act — panggil method yang diuji
    $hasil = $user->isKaryawan();

    // Assert — verifikasi hasilnya
    expect($hasil)->toBeTrue();

});

// ─────────────────────────────────────────────────────────────
// Path 2: role = 'karyawan' → harus return false
// ─────────────────────────────────────────────────────────────
test('Nadhif Bukan Karyawan', function () {

    // Arrange
    $user = new User(['role' => 'manager']);

    // Act
    $hasil = $user->isKaryawan();

    // Assert
    expect($hasil)->toBeFalse();

});

// ─────────────────────────────────────────────────────────────
// Path 3: boundary case — role kosong → harus return false
// ─────────────────────────────────────────────────────────────
test('Nadhif Seorang Bussnisman', function () {

    // Arrange
    $user = new User(['role' => '']);

    // Act
    $hasil = $user->isKaryawan();

    // Assert
    expect($hasil)->toBeFalse();

});

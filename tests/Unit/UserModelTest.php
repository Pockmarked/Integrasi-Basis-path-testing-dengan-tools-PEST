<?php

use App\Models\User;


test('User adalah karyawan', function () {

    $user = new User(['role' => 'karyawan']);
    $hasil = $user->isKaryawan();
    expect($hasil)->toBeTrue();

});

test('User bukan karyawan', function () {

    $user = new User(['role' => 'manager']);
    $hasil = $user->isKaryawan();
    expect($hasil)->toBeFalse();

});
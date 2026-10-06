<?php

use Illuminate\Support\Facades\Broadcast;
use Spatie\Permission\Models\Role;

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('pengajuan', function () {
    return true;
});

Broadcast::channel('admin', function () {
    return auth()->user()->hasRole('admin');
});

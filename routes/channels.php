<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});


Broadcast::channel('patrulla-{id_comisaria}', function ($user, $id_comisaria) {

    //return (int) $user->id === (int) $id;

    return true;

    return $user->id_comisaria == $id_comisaria;

    if($user->id_comisaria == $id_comisaria) {
        return ['correo'=>$user->email];
    }
    else {
        return false;
    }
});

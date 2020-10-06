<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Permission Language Lines
    |--------------------------------------------------------------------------
    |
    | The permission translations translate the page of the permission manager.
    | In addition, permission "groups" and "operations" are translated here.
    | These can occur in different parts of the litstack application.
    |
    */

    'role_name'  => 'nama peran',
    'operations' => [
        'lit-user-roles' => 'Peran Pengguna',
        'lit-users'      => 'Pengguna',
    ],
    'groups' => [
        //
    ],
    'messages' => [
        'cant_remove_admin_role'  => 'Anda tidak dapat membatalkan peran Admin pada akun anda.',
        'added_role'              => 'Peran {role} terbuat.',
        'deleted_role'            => 'Peran {role} terhapus.',
        'cant_delete_role'        => 'Peran {role} tidak dapat dihapus.',
        'confirm_delete_role_msg' => 'Semua pengguna yang memiliki peran <b>{role}</b> akan diberikan peran <b>User</b>.',
        'all_permission_updated'  => 'Perizinan diperbaruhi: {group}',
        'permission_updated'      => 'Perizinan diperbaruhi: {operation} {group}',
        'role_assigned'           => '{username} berhasil diberikan peran {role}.',
        'role_removed'            => 'Peran {role} berhasil dibatalkan dari {username}.',
    ],
];

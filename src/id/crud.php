<?php

return [

    /*
    |--------------------------------------------------------------------------
    | CRUD Language Lines
    |--------------------------------------------------------------------------
    |
    | The crud translations include all translations related to the litstack
    | crud system. This includes fields and other parts of the crud pages.
    |
    */

    'sort_new_to_old'  => 'Terbaru',
    'sort_old_to_new'  => 'Terlama',
    'preview'          => 'Tinjau',
    'of'               => 'dari',
    'n_items_selected' => ':count baris terpilih | :count baris terpilih',

    'messages' => [
        'not_created' => ':model harus dibuat dahulu agar dapat menambahkan <i>:relation</i>.',
    ],

    'fields' => [
        'block' => [
            'expand'       => 'perluas',
            'expand_all'   => 'perluas semua',
            'collapse_all' => 'tutup semua',
            'messages'     => [
                'new_block' => 'Tambah blok :type baru',

            ],
        ],
        'relation' => [
            'goto'     => 'Ke relasi',
            'unlink'   => 'Batalkan relasi',
            'edit'     => 'Ubah relasi',
            'messages' => [
                'relation_linked'   => '{relation} berhasil ditautkan.',
                'relation_unlinked' => 'Relasi dibatalkan.',
                'confirm_unlink'    => 'Konfirmasi bahwa anda yakin akan membatalkan relasi.',
                'max_items_reached' => 'Maksimal :count item dapat dipilih.',
            ],
        ],
        'wysiwyg' => [
            'new_window' => 'buka di jendela baru',
        ],
        'list' => [
            'messages' => [
                'max_depth'           => 'Daftar berikut dapat memiliki maksimal :count tingkat.',
                'confirm_delete'      => 'Yakin akan menghapus :item',
                'confirm_delete_info' => 'Jika anda menghapus item ini, anda juga akan menghapus semua item pada tingkat dibawahnya.',
            ],
        ],
    ],
    'meta' => [
        'title_hint'       => 'Kalimat yang mudah dimengerti. Memberi gambaran mengenai isi dari halaman tersebut. Maksimal lebar :width.',
        'keywords_hint'    => 'Kata kunci yang paling penting dari isi halaman. Setiap kata kunci dipisahkan dengan tanda koma.',
        'description_hint' => 'Ringkasan halaman yang singkat tapi jelas. Berisi kata kunci terpenting dari isi sebuah halaman.',
    ],
];

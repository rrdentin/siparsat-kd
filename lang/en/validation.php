<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'          => 'Kolom :attribute harus diterima.',

    'accepted_if'       => 'Kolom :attribute harus diterima ketika :other adalah :value.',

    'active_url'        => 'Kolom :attribute harus berupa URL yang valid.',

    'after'             => 'Kolom :attribute harus berupa tanggal setelah :date.',

    'after_or_equal'    => 'Kolom :attribute harus berupa tanggal setelah atau sama dengan :date.',

    'alpha'             => 'Kolom :attribute hanya boleh berisi huruf.',

    'alpha_dash'        => 'Kolom :attribute hanya boleh berisi huruf, angka, tanda hubung, dan garis bawah.',

    'alpha_num'         => 'Kolom :attribute hanya boleh berisi huruf dan angka.',

    'any_of'            => 'Kolom :attribute tidak valid.',

    'array'             => 'Kolom :attribute harus berupa array.',

    'ascii'             => 'Kolom :attribute hanya boleh berisi karakter alfanumerik byte tunggal dan simbol.',

    'before'            => 'Kolom :attribute harus berupa tanggal sebelum :date.',

    'before_or_equal'   => 'Kolom :attribute harus berupa tanggal sebelum atau sama dengan :date.',

    'between'           => [
        'array'   => 'Kolom :attribute harus memiliki antara :min dan :max item.',
        'file'    => 'Kolom :attribute harus antara :min dan :max kilobyte.',
        'numeric' => 'Kolom :attribute harus antara :min dan :max.',
        'string'  => 'Kolom :attribute harus antara :min dan :max karakter.',
    ],

    'boolean'           => 'Kolom :attribute harus bernilai true atau false.',

    'can'               => 'Kolom :attribute mengandung nilai yang tidak sah.',

    'confirmed'         => 'Konfirmasi kolom :attribute tidak sesuai.',

    'contains'          => 'Kolom :attribute kurang satu nilai yang diperlukan.',

    'current_password'  => 'Kata sandi salah.',

    'date'              => 'Kolom :attribute harus berupa tanggal yang valid.',

    'date_equals'       => 'Kolom :attribute harus berupa tanggal yang sama dengan :date.',

    'date_format'       => 'Kolom :attribute harus sesuai dengan format :format.',

    'decimal'           => 'Kolom :attribute harus memiliki :decimal tempat desimal.',

    'declined'          => 'Kolom :attribute harus ditolak.',

    'declined_if'       => 'Kolom :attribute harus ditolak ketika :other adalah :value.',

    'different'         => 'Kolom :attribute dan :other harus berbeda.',

    'digits'            => 'Kolom :attribute harus berupa :digits digit.',

    'digits_between'    => 'Kolom :attribute harus memiliki antara :min dan :max digit.',

    'dimensions'        => 'Kolom :attribute memiliki dimensi gambar yang tidak valid.',

    'distinct'          => 'Kolom :attribute memiliki nilai duplikat.',

    'doesnt_contain'    => 'Kolom :attribute tidak boleh mengandung salah satu berikut: :values.',

    'doesnt_end_with'   => 'Kolom :attribute tidak boleh diakhiri dengan salah satu berikut: :values.',

    'doesnt_start_with' => 'Kolom :attribute tidak boleh dimulai dengan salah satu berikut: :values.',

    'email'             => 'Kolom :attribute harus berupa alamat email yang valid.',

    'ends_with'         => 'Kolom :attribute harus diakhiri dengan salah satu berikut: :values.',

    'enum'              => 'Kolom :attribute yang dipilih tidak valid.',

    'exists'            => 'Kolom :attribute yang dipilih tidak valid.',

    'extensions'        => 'Kolom :attribute harus memiliki salah satu ekstensi berikut: :values.',

    'file'              => 'Kolom :attribute harus berupa file.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom'            => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes'        => [],

];

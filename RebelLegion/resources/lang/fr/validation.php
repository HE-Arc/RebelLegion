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
    'unique_composite'     => 'La compisition de tous ces champs existe déjà',

    'accepted'             => 'Le champ :attribute doit être accepté.',
    'active_url'           => "Le champ :attribute n'est pas un URLvalide.",
    'after'                => 'Le champ :attribute doit être une date après :date.',
    'alpha'                => 'Le champ :attribute doit uniquement contenir des lettres.',
    'alpha_dash'           => "Le champ :attribute doit uniquement contenir des lettres, des nombres et des traits d'union.",
    'alpha_num'            => 'Le champ :attribute doit uniquement contenir des lettres et des nombres.',
    'array'                => 'Le champ :attribute doit être une tableau.',
    'before'               => 'Le champ :attribute doit être une date avant :date.',
    'between'              => [
        'numeric' => 'Le champ :attribute doit être entre :min et :max.',
        'file'    => 'Le champ :attribute doit avoir entre :min et :max kilobytes.',
        'string'  => 'Le champ :attribute doit avoir entre :min et :max caractères.',
        'array'   => 'Le champ :attribute doit avoir entre :min et :max items.',
    ],
    'boolean'              => 'Le champ :attribute doit être vrai ou faux.',
    'confirmed'            => 'Le champ :attribute de confirmation ne correspont pas.',
    'date'                 => "Le champ :attribute n'est pas une date valide.",
    'date_format'          => 'Le champ :attribute ne correspont pas au format :format.',


    'different'            => 'Les champs :attribute et :other doivent être différents.',
    'digits'               => 'Le champ :attribute doit avoir :digits chiffres.',
    'digits_between'       => 'Le champ :attribute doit être entre :min et :max chiffres.',
    'dimensions'           => "Le champ :attribute a une dimension d'image invalide.",
    'distinct'             => 'Le champ :attribute a une valeur dupliquée.',
    'email'                => 'Le champ :attribute doit être une addresse email valide.',
    'exists'               => 'Le champ :attribute selectionné est invalide.',
    'file'                 => 'Le champ :attribute doit être a file.',
    'filled'               => 'Le champ :attribute est requis.',
    'image'                => 'Le champ :attribute doit être une image.',
    'in'                   => 'Le champ :attribute selectionné est invalide.',
    'in_array'             => "Le champ :attribute n'existe pas dans :other.",
    'integer'              => 'Le champ :attribute doit être un entier.',
    'ip'                   => 'Le champ :attribute doit être une addres IP valide.',
    'json'                 => 'Le champ :attribute doit être une chaîne de caratères JSON.',
    'max'                  => [
        'numeric' => 'Le champ :attribute ne peut pas être plus grand que :max.',
        'file'    => 'Le champ :attribute ne peut pas être plus grand que :max kilobytes.',
        'string'  => 'Le champ :attribute ne peut pas être plus grand que :max characters.',
        'array'   => 'Le champ :attribute may ne peut pas avoir plus que :max items.',
    ],
    'mimes'                => 'Le champ :attribute doit être un fichier de type: :values.',
    'min'                  => [
        'numeric' => "Le champ :attribute doit être d'au moins :min.",
        'file'    => "Le champ :attribute doit être d'au moins :min kilobytes.",
        'string'  => "Le champ :attribute doit être d'au moins :min caractères.",
        'array'   => 'Le champ :attribute doit avoir au moins :min items.',
    ],
    'not_in'               => 'Le champ :attribute selectionné est invalide.',
    'numeric'              => 'Le champ :attribute doit être un nombre.',
    'present'              => 'Le champ :attribute doit être présent.',
    'regex'                => 'Le champ :attribute a un format invalide.',
    'required'             => 'Le champ :attribute est requis.',
    'required_if'          => 'Le champ :attribute est requis quand :other est :value.',
    'required_unless'      => 'Le champ :attribute est requis sauf si :other est dans :values.',


    'required_with'        => 'Le champ :attribute est requis quand :values est présent.',
    'required_with_all'    => 'Le champ :attribute est requis quand :values est présent.',
    'required_without'     => "Le champ :attribute est requis quand :values n'est pas présent.",
    'required_without_all' => 'Le champ :attribute est requis quand aucune des :values sont présentes.',
    'same'                 => 'Le champ :attribute et :other doivent correspondre.',
    'size'                 => [
        'numeric' => 'Le champ :attribute doit être :size.',
        'file'    => 'Le champ :attribute doit avoir :size kilobytes.',
        'string'  => 'Le champ :attribute doit avoir :size caractères.',
        'array'   => 'Le champ :attribute doit contenir :size items.',
    ],
    'string'               => 'Le champ :attribute doit être une chaîne de caractères.',
    'timezone'             => "Le champ :attribute doit être d'une zone vslide.",
    'unique'               => 'Le champ :attribute a déjà ètè pris.',
    'url'                  => 'Le champ :attribute a un format invalide.',

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

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
      
    ],

];

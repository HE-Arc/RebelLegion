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

    'accepted'             => ':attribute muss akkzeptiert werden.',
    'active_url'           => ':attribute ist keine gültige URL.',
    'after'                => ':attribute muss ein Datum nach :date sein.',
    'alpha'                => ':attribute darf nur Buchstaben enthalten.',
    'alpha_dash'           => ':attribute darf nur Buchstaben, Nummern und Bindestriche enthalten.',
    'alpha_num'            => ':attribute darf nur Buchstaben und Nummern enthalten.',
    'array'                => ':attribute muss eine Anordnung sein.',
    'before'               => ':attribute muss ein Datum vor :date sein.',
    'between'              => [
        'numeric' => ':attribute muss zwischen :min und :max sein.',
        'file'    => ':attribute muss zwischen :min und :max Kilobytes sein.',
        'string'  => ':attribute muss zwischen :min und :max Zeichen sein.',
        'array'   => ':attribute muss zwischen :min und :max items haben.',
    ],
    'boolean'              => 'Das :attribute Feld muss Ja oder Nein sein.',
    'confirmed'            => 'Die :attribute Bestätigung stimmt nicht überein.',
    'date'                 => ':attribute ist kein gültiges Datum.',
    'date_format'          => ':attribute stimmt nicht mit dem Format :format überein.',
    'different'            => ':attribute und :other müssen unterschiedlich sein.',
    'digits'               => ':attribute muss auss :digits Zahlen bestehen.',
    'digits_between'       => ':attribute muss zwischen :min und :max Zahlen haben.',
    'dimensions'           => ':attribute hat ungültige Bildabmessungen.',
    'distinct'             => 'Das :attribute Feld hat den doppelten Wert.',
    'email'                => ':attribute muss eine gültige E-Mail-Adresse sein.',
    'exists'               => 'Das gewählte :attribute ist ungültig.',
    'file'                 => ':attribute muss eine Datei sein.',
    'filled'               => 'Das :attribute Feld wird benötigt.',
    'image'                => ':attribute muss ein Bild sein.',
    'in'                   => 'Das gewählte :attribute ist ungültig.',
    'in_array'             => 'Das :attribute Feld existiert nicht in :other.',
    'integer'              => ':attribute muss eine ganze Zahl sein.',
    'ip'                   => ':attribute muss eine gültige IP-Adresse sein.',
    'json'                 => ':attribute muss ein gültiger JSON string sein.',
    'max'                  => [
        'numeric' => ':attribute darf nicht grösser sein als :max.',
        'file'    => ':attribute darf nicht grösser sein als :max Kilobytes.',
        'string'  => ':attribute darf nicht grösser sein als :max Zeichen.',
        'array'   => ':attribute darf nicht grösser sein als :max items.',
    ],
    'mimes'                => ':attribute muss eine Datei des Typs: :values sein.',
    'mimetypes'            => ':attribute muss eine Datei des Typs: :values sein.',
    'min'                  => [
        'numeric' => ':attribute muss mindestens :min sein.',
        'file'    => ':attribute muss mindestens :min Kilobytes haben.',
        'string'  => ':attribute muss mindestens :min Zeichen haben.',
        'array'   => ':attribute muss mindestens :min items haben.',
    ],
    'not_in'               => 'Das gewählte :attribute ist ungültig.',
    'numeric'              => ':attribute muss eine Zahl sein.',
    'present'              => 'Das :attribute Feld muss vorhanden sein.',
    'regex'                => 'Das :attribute Format ist ungültig.',
    'required'             => 'Das :attribute Feld wird benötigt.',
    'required_if'          => 'Das :attribute Feld wird benötigt, wenn :other ist :value.',
    'required_unless'      => 'Das :attribute Feld wird benötigt, ausser :other ist in :values.',
    'required_with'        => 'Das :attribute Feld wird benötigt, wenn :values vorhanden ist.',
    'required_with_all'    => 'Das :attribute Feld wird benötigt, wenn :values vorhanden ist.',
    'required_without'     => 'Das :attribute Feld wird benötigt, wenn :values nicht vorhanden ist.',
    'required_without_all' => 'Das :attribute Feld wird benötigt, wenn keines von :values vorhanden ist.',
    'same'                 => ':attribute und :other müssen übereinstimmen.',
    'size'                 => [
        'numeric' => ':attribute muss :size sein.',
        'file'    => ':attribute muss :size Kilobytes sein.',
        'string'  => ':attribute muss :size Zeichen sein.',
        'array'   => ':attribute muss :size items beinhalten.',
    ],
    'string'               => ':attribute muss ein string sein.',
    'timezone'             => ':attribute muss eine gültige Zone sein.',
    'unique'               => ':attribute ist bereits besetzt.',
    'uploaded'             => ':attribute konnte nicht hochgeladen werden.',
    'url'                  => 'Das :attribute Format ist ungültig.',

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
            'rule-name' => 'Ihre Nachricht',
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

    'attributes' => [],

];

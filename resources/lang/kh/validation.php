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

    'accepted'             => 'ទទួលយក',
    'active_url'           => 'មិនមែន url',
    'after'                => 'កាលបរិច្ឆេទ​នេះ​ត្រូវនៅក្រោយកាលបរិច្ឆេទ​ខាងលើ',
    'alpha'                => 'The :attribute may only contain letters.',
    'alpha_dash'           => 'The :attribute may only contain letters, numbers, and dashes.',
    'alpha_num'            => 'The :attribute may only contain letters and numbers.',
    'array'                => 'The :attribute must be an array.',
    'before'               => 'The :attribute must be a date before :date.',
    'between'              => [
        'numeric' => 'លេខ ត្រូវនៅចន្លេាះ :min និង :max',
        'file'    => 'ឯកសារ ត្រូវនៅចន្លេាះ :min និង :max',
        'string'  => 'អក្សរ ត្រូវនៅចន្លេាះ :min និង :max',
        'array'   => 'The :attribute ត្រូវនៅចន្លេាះ :min និង :max',
    ],
    'boolean'              => 'ត្រូវ ឬខុស',
    'confirmed'            => 'មិនដូចគ្នា',
    'date'                 => 'កាលបរិច្ឆេទមិនត្រឹមត្រូវ',
    'date_format'          => 'ទ្រង់ទ្រាយកាលបរិច្ឆេទ',
    'different'            => 'ផ្សេងគ្នា',
    'digits'               => 'ខ្ទង់',
    'digits_between'       => 'ចំនុចនេះត្រូវតែបំពេញយ៉ាង​តិច :min - :max ខ្ទង់',
    'distinct'             => 'ខុសគ្នា',
    'email'                => 'អ៊ីម៉ែលបញ្ចូលមិនត្រឹមត្រូវទេ',
    'exists'               => 'មាន',
    'filled'               => 'បំពេញរួច',
    'image'                => 'ត្រូវតែ​រូបភាព',
    'in'                   => 'ការជ្រើសរើសមិនត្រឹមត្រូវ',
    'integer'              => 'ត្រូវតែ ចំនួនគត់',
    'ip'                   => 'The :attribute must be a valid IP address',
    'json'                 => 'ត្រូវតែ json',
    'max'                  => [
        'numeric' => 'លេខ មិនអាចធំជាង :max',
        'file'    => 'ឯកសារ មិនអាចធំជាង :max គីឡូ',
        'string'  => 'អក្សរ មិនអាចធំជាង :max តួអក្សរ',
        'array'   => 'គ្រប់ធាតុ មិនអាចធំជាង​:max ធាតុ',
    ],
    'mimes'                => 'The :attribute must be a file of type: :values',
    'min'                  => [
        'numeric' => 'លេខ មិនអាចតូចជាង :max',
        'file'    => 'ឯកសារ មិនអាចតូចជាង :max គីឡូ',
        'string'  => 'អក្សរ មិនអាចតូចជាង :max តួអក្សរ',
        'array'   => 'គ្រប់ធាតុ មិនអាចតូចជាង:max ធាតុ',
    ],
    'not_in'               => 'ការជ្រើសរើស មិនត្រឹមត្រូវ',
    'numeric'              => 'ចំនុចនេះត្រូវតែបំពេញលេខ',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'The :attribute format is invalid.',
    'required'             => 'ចំនុចនេះត្រូវតែបំពេញ!',
    'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'The :attribute field is required when :values is present.',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'The :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'លេខត្រូវតែ :size',
        'file'    => 'ឯកសារត្រូវតែ :size គីឡូ',
        'string'  => 'អក្សរត្រូវតែ :size តួអក្សរ',
        'array'   => 'គ្រប់ធាតុត្រូវតែផ្ទុក :size ធាតុ',
    ],
    'string'               => 'ចំនុចនេះត្រូវតែបំពេញ អក្សរ',
    'timezone'             => 'ចំនុចនេះត្រូវតែបំពេញ ល្វែងម៉ោង',
    'unique'               => 'ទិន្នន័យនេះបានបំពេញរួចហើយ',
    'url'                  => 'URL',

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

    'attributes' => [],

];

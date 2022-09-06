<?php

return [
    'accepted'             => 'Поље :attribute мора бити прихваћено.',
    'accepted_if'          => 'The :attribute must be accepted when :other is :value.',
    'active_url'           => 'Поље :attribute није валидан УРЛ.',
    'after'                => 'Поље :attribute мора бити датум после :date.',
    'after_or_equal'       => 'Поље :attribute мора да буде :date или каснији датум.',
    'alpha'                => 'Поље :attribute може садржати само слова.',
    'alpha_dash'           => 'Поље :attribute може садржати само слова, бројеве и повлаке.',
    'alpha_num'            => 'Поље :attribute може садржати само слова и бројеве.',
    'array'                => 'Поље :attribute мора садржати неких низ ставки.',
    'before'               => 'Поље :attribute мора бити датум пре :date.',
    'before_or_equal'      => ':Attribute мора да буде :date или ранији датум.',
    'between'              => [
        'array'   => 'Поље :attribute мора бити између :min - :max ставки.',
        'file'    => 'Фајл :attribute мора бити између :min - :max килобајта.',
        'numeric' => 'Поље :attribute мора бити између :min - :max.',
        'string'  => 'Поље :attribute мора бити између :min - :max карактера.',
    ],
    'boolean'              => 'Поље :attribute мора бити тачно или нетачно',
    'confirmed'            => 'Потврда поља :attribute се не поклапа.',
    'current_password'     => 'The password is incorrect.',
    'date'                 => 'Поље :attribute није важећи датум.',
    'date_equals'          => 'Поље :attribute мора да буде датум: :date.',
    'date_format'          => 'Поље :attribute не одговора према формату :format.',
    'declined'             => 'The :attribute must be declined.',
    'declined_if'          => 'The :attribute must be declined when :other is :value.',
    'different'            => 'Поља :attribute и :other морају бити различита.',
    'digits'               => 'Поље :attribute мора садржати :digits шифри.',
    'digits_between'       => 'Поље :attribute мора бити иземђу :min и :max шифри.',
    'dimensions'           => 'Поље :attribute име недозвољене димензије слике.',
    'distinct'             => 'Поље :attribute има дуплирану вредност.',
    'doesnt_end_with'      => 'The :attribute may not end with one of the following: :values.',
    'doesnt_start_with'    => 'The :attribute may not start with one of the following: :values.',
    'email'                => 'Формат поља :attribute није валидан.',
    'ends_with'            => 'Поље :attribute мора да се заврши са нечим од следећег: :values.',
    'enum'                 => 'The selected :attribute is invalid.',
    'exists'               => 'Одабрано поље :attribute није валидно.',
    'file'                 => ':Attribute мора да буде датотека.',
    'filled'               => 'Поље :attribute је обавезно.',
    'gt'                   => [
        'array'   => 'Поље :attribute мора да садржи више од :value ставке.',
        'file'    => 'Поље :attribute мора да буде већи од :value килобајта.',
        'numeric' => 'Поље :attribute мора да буде већи од :value.',
        'string'  => 'Поље :attribute мора да садржи више од :value знакова.',
    ],
    'gte'                  => [
        'array'   => 'Поље :attribute мора да садржи :value ставки или више.',
        'file'    => 'Поље :attribute мора да има :value или више килобајта.',
        'numeric' => 'Поље :attribute мора да буде :value или већи.',
        'string'  => 'Поље :attribute мора да садржи :value или више знакова.',
    ],
    'image'                => 'Поље :attribute мора бити слика.',
    'in'                   => 'Поље Одабрано поље :attribute није валидно.',
    'in_array'             => 'Поље :attribute не постоји у :other.',
    'integer'              => 'Поље :attribute мора бити број.',
    'ip'                   => 'Поље :attribute мора бити валидна ИП адреса.',
    'ipv4'                 => 'Поље :attribute мора да буде важећа ИПв4 адреса.',
    'ipv6'                 => 'Поље :attribute мора да буде важећа ИПв6 адреса.',
    'json'                 => 'Поље :attribute мора да буде важећа ЈСОН формат.',
    'lt'                   => [
        'array'   => 'Поље :attribute мора да садржи мање од :value ставки.',
        'file'    => 'Поље :attribute мора да буде мањи од :value килобајта.',
        'numeric' => 'Поље :attribute мора да буде мањи од :value.',
        'string'  => 'Поље :attribute мора да садржи мање од :value знакова.',
    ],
    'lte'                  => [
        'array'   => 'Поље :attribute не сме да садржи више од :value ставки.',
        'file'    => 'Поље :attribute мора да буде :value или мањи.',
        'numeric' => 'Поље :attribute мора да буде :value или мањи.',
        'string'  => 'Поље :attribute мора да садржи :value или мање знакова.',
    ],
    'mac_address'          => 'The :attribute must be a valid MAC address.',
    'max'                  => [
        'array'   => 'Поље :attribute не смије да имаге више од :max ставки.',
        'file'    => 'Поље :attribute мора бити мање од :max килобајта.',
        'numeric' => 'Поље :attribute мора бити мање од :max.',
        'string'  => 'Поље :attribute мора садржати мање од :max карактера.',
    ],
    'max_digits'           => 'The :attribute must not have more than :max digits.',
    'mimes'                => 'Поље :attribute мора бити фајл типа: :values.',
    'mimetypes'            => 'Поље :attribute мора бити фајл типа: :values.',
    'min'                  => [
        'array'   => 'Поље :attribute мора садрзати најмање :min ставку.',
        'file'    => 'Фајл :attribute мора бити најмање :min килобајта.',
        'numeric' => 'Поље :attribute мора бити најмање :min.',
        'string'  => 'Поље :attribute мора садржати најмање :min карактера.',
    ],
    'min_digits'           => 'The :attribute must have at least :min digits.',
    'multiple_of'          => 'Број :attribute треба да буде вишеструки од :value',
    'not_in'               => 'Одабрани елемент поља :attribute није валидан.',
    'not_regex'            => 'Формат :attribute је неважећи.',
    'numeric'              => 'Поље :attribute мора бити број.',
    'password'             => [
        'letters'       => 'The :attribute must contain at least one letter.',
        'mixed'         => 'The :attribute must contain at least one uppercase and one lowercase letter.',
        'numbers'       => 'The :attribute must contain at least one number.',
        'symbols'       => 'The :attribute must contain at least one symbol.',
        'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present'              => 'Поље :attribute мора да буде присутно.',
    'prohibited'           => 'Поље :attribute је забрањено.',
    'prohibited_if'        => 'Поље :attribute је забрањено када је :other једнако :value.',
    'prohibited_unless'    => 'Поље :attribute је забрањено, осим ако је :other у :values. години.',
    'prohibits'            => 'The :attribute field prohibits :other from being present.',
    'regex'                => 'Формат поља :attribute није валидан.',
    'required'             => 'Поље :attribute је обавезно.',
    'required_array_keys'  => 'The :attribute field must contain entries for: :values.',
    'required_if'          => 'Поље :attribute је потребно када поље :other садржи :value.',
    'required_unless'      => 'Поље :attribute је обавезно, осим ако је :other у :values.',
    'required_with'        => 'Поље :attribute је потребно када поље :values је присутан.',
    'required_with_all'    => 'Поље :attribute је обавезно када је :values приказано.',
    'required_without'     => 'Поље :attribute је потребно када поље :values није присутан.',
    'required_without_all' => 'Поље :attribute је потребно када ниједан од следећи поља :values нису присутни.',
    'same'                 => 'Поља :attribute и :other се морају поклапати.',
    'size'                 => [
        'array'   => 'Поље :attribute мора садржати :size ставки.',
        'file'    => 'Фајл :attribute мора бити :size килобајта.',
        'numeric' => 'Поље :attribute мора бити :size.',
        'string'  => 'Поље :attribute мора бити :size карактера.',
    ],
    'starts_with'          => 'Поље :attribute мора да почне са: :values',
    'string'               => 'Поље :attribute мора садржати слова.',
    'timezone'             => 'Поље :attribute мора бити исправна временска зона.',
    'unique'               => 'Поље :attribute већ постоји.',
    'uploaded'             => ':Attribute није отпремљен.',
    'url'                  => 'Формат поља :attribute не важи.',
    'uuid'                 => ':Attribute мора да буде важећи УУИД.',
    'attributes'           => [
        'address'                  => 'адреса',
        'age'                      => 'године',
        'amount'                   => 'amount',
        'area'                     => 'area',
        'available'                => 'available',
        'birthday'                 => 'birthday',
        'body'                     => 'тело поруке',
        'city'                     => 'град',
        'content'                  => 'content',
        'country'                  => 'држава',
        'created_at'               => 'created at',
        'creator'                  => 'creator',
        'current_password'         => 'current password',
        'date'                     => 'датум',
        'date_of_birth'            => 'date of birth',
        'day'                      => 'дан',
        'deleted_at'               => 'deleted at',
        'description'              => 'опис',
        'district'                 => 'district',
        'duration'                 => 'duration',
        'email'                    => 'емаил',
        'excerpt'                  => 'извод',
        'filter'                   => 'filter',
        'first_name'               => 'име',
        'gender'                   => 'пол',
        'group'                    => 'group',
        'hour'                     => 'сат',
        'image'                    => 'image',
        'last_name'                => 'презиме',
        'lesson'                   => 'lesson',
        'line_address_1'           => 'line address 1',
        'line_address_2'           => 'line address 2',
        'message'                  => 'порука',
        'middle_name'              => 'middle name',
        'minute'                   => 'минут',
        'mobile'                   => 'мобилни',
        'month'                    => 'месец',
        'name'                     => 'име',
        'national_code'            => 'national code',
        'number'                   => 'number',
        'password'                 => 'лозинка',
        'password_confirmation'    => 'понови лозинку',
        'phone'                    => 'телефон',
        'photo'                    => 'photo',
        'postal_code'              => 'postal code',
        'price'                    => 'price',
        'province'                 => 'province',
        'recaptcha_response_field' => 'recaptcha response field',
        'remember'                 => 'remember',
        'restored_at'              => 'restored at',
        'result_text_under_image'  => 'result text under image',
        'role'                     => 'role',
        'second'                   => 'секунда',
        'sex'                      => 'пол',
        'short_text'               => 'short text',
        'size'                     => 'size',
        'state'                    => 'state',
        'street'                   => 'street',
        'student'                  => 'student',
        'subject'                  => 'наслов',
        'teacher'                  => 'teacher',
        'terms'                    => 'terms',
        'test_description'         => 'test description',
        'test_locale'              => 'test locale',
        'test_name'                => 'test name',
        'text'                     => 'text',
        'time'                     => 'време',
        'title'                    => 'наслов',
        'updated_at'               => 'updated at',
        'username'                 => 'корисничко име',
        'year'                     => 'година',
    ],
];

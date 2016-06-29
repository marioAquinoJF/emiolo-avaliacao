<?php

namespace Emiolo\Validators;

use Prettus\Validator\LaravelValidator;
use Prettus\Validator\Contracts\ValidatorInterface;

/**
 * Description of ImageValidator
 *
 * @author Mario
 */
class ImageValidator extends LaravelValidator
{

    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'file' => 'required|mimes:jpg,jpeg,bmp,png',
        ]
    ];

}

<?php

namespace Administr\Form\Field;

class Submit extends Text
{
    public function renderField(array $attributes = [])
    {
        return parent::renderField(array_merge([
            'type'  => 'submit',
            'value' => $this->label,
        ], $attributes));
    }

    public function renderLabel()
    {
    }

    public function renderErrors(array $errors = [])
    {
    }
}

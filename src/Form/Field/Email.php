<?php

namespace Administr\Form\Field;


class Email extends AbstractType
{
    public function renderField($attributes = [])
    {
        $attrs = array_merge([
            'type'  => 'email',
            'id'    => $this->name,
            'name'  => $this->name,
            'value' => old($this->name),
        ], $this->options, $attributes);

        return '<input' . $this->renderAttributes($attrs) . '>';
    }
}
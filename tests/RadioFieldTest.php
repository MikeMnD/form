<?php

use Administr\Form\Field\Radio;

class RadioFieldTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_renders_the_full_html()
    {
        $field = new Radio('test', 'Test', ['value' => 'test']);

        $this->assertSame('<label for="test">Test</label>'."\n".'<input type="radio" id="test" name="test" value="test">', $field->render());
    }

    /** @test */
    public function it_sets_checked_state()
    {
        $field = (new Radio('test', 'Test'))
            ->appendOption('value', 'should_be_checked')
            ->setValue('should_be_checked');

        $this->assertSame('<input type="radio" id="test" name="test" value="should_be_checked" checked="checked">', $field->renderField());
    }
}

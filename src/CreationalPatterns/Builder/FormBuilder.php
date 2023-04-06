<?php

namespace Humble23\DesignPatterns\CreationalPatterns\Builder;

use Humble23\DesignPatterns\CreationalPatterns\Builder\interfaces\FormBuilderInterface;

class FormBuilder implements FormBuilderInterface
{
    private string $fields = '';
    private string $submitButton = '<input type="submit" value="Submit">';

    public function __construct(
        private string $action = '',
        private string $method = 'post',
    ) {}

    private function setInputLabel(string $label, string $input, bool $breakLine = true): string
    {
        $breakLine = $breakLine ? '<br>' : '';

        return "<div>
            <label for=\"{$label}\">{$label}</label>{$breakLine}
            $input
        </div>";
    }

    public function addTextField(string $name, ?string $value = null, ?string $type = 'text'): self
    {
        return $this->addField($name, $value, $type);
    }

    public function addField(string $name, ?string $value = null, ?string $type = 'text'): self
    {
        $this->fields .= $this->setInputLabel(
            $name,
            "<input type=\"{$type}\" name=\"{$name}\" value=\"{$value}\">"
        );

        return $this;
    }

    public function addHiddenField(string $name, ?string $value = null): self
    {
        $this->fields .= $this->setInputLabel(
            $name,
            "<input type=\"hidden\" name=\"{$name}\" value=\"{$value}\">"
        );

        return $this;
    }

    public function addPasswordField(string $name, ?string $value = null): self
    {
        $this->fields .= $this->setInputLabel(
            $name,
            "<input type=\"password\" name=\"{$name}\" value=\"{$value}\">"
        );

        return $this;
    }

    public function addEmailField(string $name, ?string $value = null): self
    {
        $this->fields .= $this->setInputLabel(
            $name,
            "<input type=\"email\" name=\"{$name}\" value=\"{$value}\">"
        );

        return $this;
    }

    public function addTextArea(string $name, ?string $value = null, int $rows = 4): self
    {
        $this->fields .= $this->setInputLabel(
            $name,
            "<textarea name=\"{$name}\" rows=\"{$rows}\">{$value}</textarea>"
        );

        return $this;
    }
    
    public function addCheckbox(string $name, ?array $options = []): self
    {
        $input = '';

        foreach ($options as $key => $value) {
            $name = slugify($name);

            $input .= $this->setInputLabel(
                $value,
                "<input type=\"checkbox\" id=\"$value\" name=\"{$name}\" value=\"{$value}\">",
                false
            );
        }

        $this->fields .= "<fieldset>
            <legend>$name</legend>
            $input
        </fieldset>";

        return $this;
    }

    public function setSubmitButton(string $value): self
    {
        $this->submitButton = "<input type=\"submit\" value=\"{$value}\">";

        return $this;
    }

    public function addSelect(string $name, array $options = [], ?string $value = null): self
    {
        $select = "<select name=\"slugify($name)\" value=\"{$value}\">";

        foreach ($options as $key => $value) {
            $name = slugify($name);

            $select .= "<option value=\"{$key}\">{$value}</option>";
        }

        $select .= "</select>";

        $this->fields .= $this->setInputLabel(
            $name,
            $select
        );

        return $this;
    }

    public function buildForm(): string
    {
        return "<form action=\"{$this->action}\" method=\"{$this->method}\">
            {$this->fields}
            {$this->submitButton}
        </form>";
    }
}
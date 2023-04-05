<?php

namespace Humble23\DesignPatterns\CreationalPatterns\Builder;

use Humble23\DesignPatterns\CreationalPatterns\Builder\interfaces\FormBuilderInterface;

class FormBuilder implements FormBuilderInterface
{
    private string $fields = '';
    private string $submitButton = '<input type="submit" value="Submit">';

    private function setInputLabel(string $label, string $input): string
    {
        return "<div>
            <label for=\"{$label}\">{$label}</label>
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
            $input .= $this->setInputLabel(
                $value,
                "<input type=\"checkbox\" id=\"$value\" name=\"{$name}\" value=\"{$value}\">"
            );
        }

        $this->fields .= "<fieldset>
            <legend>$name</legend>
            $input
        </fieldset>";

        return $this;
    }

    public function buildForm(): string
    {
        return "<form>
            {$this->fields}
            {$this->submitButton}
        </form>";
    }
}
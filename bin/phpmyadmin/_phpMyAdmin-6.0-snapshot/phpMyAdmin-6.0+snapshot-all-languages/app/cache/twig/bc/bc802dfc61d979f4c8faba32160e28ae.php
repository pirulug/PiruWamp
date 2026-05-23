<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* javascript/variables.twig */
class __TwigTemplate_990db0132059f5be910517db311a0148 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "var firstDayOfCalendar = '";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["first_day_of_calendar"] ?? null), "js", null, true);
        yield "';
var themeImagePath = '";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath(), "js", null, true);
        yield "';
var mysqlDocTemplate = '";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::getMySQLDocuURL("%s"), "js", null, true);
        yield "';
var maxInputVars = ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["max_input_vars"] ?? null), "js", null, true);
        yield ";
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "javascript/variables.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  55 => 5,  51 => 4,  47 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "javascript/variables.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/javascript/variables.twig");
    }
}

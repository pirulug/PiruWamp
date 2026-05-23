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

/* select_all.twig */
class __TwigTemplate_454c9064b48e0f0b286c20c1165950df extends Template
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
        // line 1
        yield PhpMyAdmin\Html\Generator::getImage("select_all_arrow", \_gettext("With selected:"), ["dir" => CoreExtension::getAttribute($this->env, $this->source, ($context["pma"] ?? null), "text_dir", [], "any", false, false, false, 1), "width" => "38", "height" => "22"]);
        yield "
<input type=\"checkbox\" id=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_name"] ?? null), "html", null, true);
        yield "_checkall\" class=\"checkall_box\"
    title=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Check all"), "html", null, true);
        yield "\">
<label for=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_name"] ?? null), "html", null, true);
        yield "_checkall\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Check all"), "html", null, true);
        yield "</label>
<em class=\"with-selected\">";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("With selected:"), "html", null, true);
        yield "</em>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "select_all.twig";
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
        return array (  60 => 5,  54 => 4,  50 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "select_all.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/select_all.twig");
    }
}

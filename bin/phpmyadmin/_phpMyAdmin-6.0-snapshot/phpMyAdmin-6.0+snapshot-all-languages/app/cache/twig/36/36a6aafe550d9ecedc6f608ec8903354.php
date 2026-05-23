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

/* transformation_overview.twig */
class __TwigTemplate_a3130e4f7ce967da51cc86b4127f4b03 extends Template
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
        yield "<h2>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Available media types"), "html", null, true);
        yield "</h2>

<ul>
  ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["mime_types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mime_type"]) {
            // line 5
            yield "    <li>
      ";
            // line 6
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["mime_type"], "is_empty", [], "any", false, false, false, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("<em>") : (""));
            yield "
      ";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mime_type"], "name", [], "any", false, false, false, 7), "html", null, true);
            yield "
      ";
            // line 8
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["mime_type"], "is_empty", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("</em>") : (""));
            yield "
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['mime_type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        yield "</ul>

<h2 id=\"transformation\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Available browser display transformations"), "html", null, true);
        yield "</h2>

<table class=\"table table-striped align-middle\">
  <thead>
    <tr>
      <th>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Browser display transformation"), "html", null, true);
        yield "</th>
      <th>";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("for media type transformation", "Description"), "html", null, true);
        yield "</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["transformations"] ?? null), "transformation", [], "any", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["transformation"]) {
            // line 24
            yield "      <tr>
        <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transformation"], "name", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
        <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transformation"], "description", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['transformation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "  </tbody>
</table>

<h2 id=\"input_transformation\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Available input transformations"), "html", null, true);
        yield "</h2>

<table class=\"table table-striped align-middle\">
  <thead>
    <tr>
      <th>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Input transformation"), "html", null, true);
        yield "</th>
      <th>";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("for media type transformation", "Description"), "html", null, true);
        yield "</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["transformations"] ?? null), "input_transformation", [], "any", false, false, false, 42));
        foreach ($context['_seq'] as $context["_key"] => $context["transformation"]) {
            // line 43
            yield "      <tr>
        <td>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transformation"], "name", [], "any", false, false, false, 44), "html", null, true);
            yield "</td>
        <td>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transformation"], "description", [], "any", false, false, false, 45), "html", null, true);
            yield "</td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['transformation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "  </tbody>
</table>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "transformation_overview.twig";
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
        return array (  160 => 48,  151 => 45,  147 => 44,  144 => 43,  140 => 42,  133 => 38,  129 => 37,  121 => 32,  116 => 29,  107 => 26,  103 => 25,  100 => 24,  96 => 23,  89 => 19,  85 => 18,  77 => 13,  73 => 11,  64 => 8,  60 => 7,  56 => 6,  53 => 5,  49 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "transformation_overview.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/transformation_overview.twig");
    }
}

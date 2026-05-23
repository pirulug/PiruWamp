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

/* table/insert/value_column_for_other_datatype.twig */
class __TwigTemplate_b60583e7b5ecbdb210dd38ea8d8352a8 extends Template
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
        yield ($context["backup_field"] ?? null);
        yield "
";
        // line 2
        if ((($tmp = ($context["is_textarea"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            yield ($context["textarea_html"] ?? null);
        } else {
            // line 5
            yield "  <input type=\"text\" name=\"fields";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_name_appendix"] ?? null), "html", null, true);
            yield "\"
    value=\"";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "value", [], "any", false, false, false, 6), "html", null, true);
            yield "\" size=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "size", [], "any", false, false, false, 6), "html", null, true);
            yield "\"";
            // line 7
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "is_char", [], "any", false, false, false, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " data-maxlength=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "size", [], "any", false, false, false, 7), "html", null, true);
                yield "\"";
            }
            // line 8
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "is_integer", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " min=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "min", [], "any", false, false, false, 8), "html", null, true);
                yield "\" max=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "max", [], "any", false, false, false, 8), "html", null, true);
                yield "\"";
            }
            // line 9
            yield "    data-type=\"";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "is_integer", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("INT") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "data_type", [], "any", false, false, false, 9), "html", null, true)));
            yield "\"
    class=\"textfield";
            // line 10
            yield (((($context["true_type"] ?? null) == "date")) ? (" datefield") : (""));
            yield (((($context["true_type"] ?? null) == "time")) ? (" timefield") : (""));
            yield ((((($context["true_type"] ?? null) == "datetime") || (($context["true_type"] ?? null) == "timestamp"))) ? (" datetimefield") : (""));
            yield "\"
    onchange=\"";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "on_change_clause", [], "any", false, false, false, 11), "html_attr");
            yield "\"
    tabindex=\"";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "field_index", [], "any", false, false, false, 12), "html", null, true);
            yield "\"";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "is_integer", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" inputmode=\"numeric\"") : (""));
            yield "
    id=\"field_";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["input"] ?? null), "field_index", [], "any", false, false, false, 13), "html", null, true);
            yield "_3\">";
            // line 15
            if ((CoreExtension::matches("/(VIRTUAL|PERSISTENT|GENERATED)/", ($context["extra"] ?? null)) && !CoreExtension::inFilter("DEFAULT_GENERATED", ($context["extra"] ?? null)))) {
                // line 16
                yield "<input type=\"hidden\" name=\"virtual";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_name_appendix"] ?? null), "html", null, true);
                yield "\" value=\"1\">";
            }
            // line 18
            if ((($context["extra"] ?? null) == "auto_increment")) {
                // line 19
                yield "<input type=\"hidden\" name=\"auto_increment";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_name_appendix"] ?? null), "html", null, true);
                yield "\" value=\"1\">";
            }
            // line 21
            if ((((((($context["true_type"] ?? null) == "bit") || (($context["true_type"] ?? null) == "uuid")) || (($context["true_type"] ?? null) == "timestamp")) || (($context["true_type"] ?? null) == "datetime")) || (($context["true_type"] ?? null) == "date"))) {
                // line 22
                yield "<input type=\"hidden\" name=\"fields_type";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_name_appendix"] ?? null), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["true_type"] ?? null), "html", null, true);
                yield "\">";
            }
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "table/insert/value_column_for_other_datatype.twig";
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
        return array (  115 => 22,  113 => 21,  108 => 19,  106 => 18,  101 => 16,  99 => 15,  96 => 13,  90 => 12,  86 => 11,  80 => 10,  75 => 9,  67 => 8,  61 => 7,  56 => 6,  51 => 5,  48 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "table/insert/value_column_for_other_datatype.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/insert/value_column_for_other_datatype.twig");
    }
}

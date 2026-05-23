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

/* columns_definitions/table_fields_definitions.twig */
class __TwigTemplate_48702de5345f0519012cced990c38873 extends Template
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
        yield "<div class=\"responsivetable\">
<template id=\"collation_select_options\">
  <option value=\"\"></option>
  ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["charsets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
            // line 5
            yield "    <optgroup label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "name", [], "any", false, false, false, 5), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "description", [], "any", false, false, false, 5), "html", null, true);
            yield "\">
      ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "collations", [], "any", false, false, false, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["collation"]) {
                // line 7
                yield "        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 7), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "description", [], "any", false, false, false, 7), "html", null, true);
                yield "\">";
                // line 8
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 8), "html", null, true);
                // line 9
                yield "</option>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['collation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            yield "    </optgroup>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['charset'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "</template>
<table id=\"table_columns\" class=\"table table-striped caption-top align-middle mb-0 noclick\">
    <caption>
        ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Structure"), "html", null, true);
        yield "
        ";
        // line 17
        yield PhpMyAdmin\Html\MySQLDocumentation::show("CREATE_TABLE");
        yield "
    </caption>
    <tr>
        <th>
            ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Name"), "html", null, true);
        yield "
        </th>
        <th>
            ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Type"), "html", null, true);
        yield "
            ";
        // line 25
        yield PhpMyAdmin\Html\MySQLDocumentation::show("data-types");
        yield "
        </th>
        <th>
            ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Length/Values"), "html", null, true);
        yield "
            ";
        // line 29
        yield PhpMyAdmin\Html\Generator::showHint(\_gettext("If column type is \"enum\" or \"set\", please enter the values using this format: 'a','b','c'…<br>If you ever need to put a backslash (\"\\\") or a single quote (\"'\") amongst those values, precede it with a backslash (for example '\\\\xyz' or 'a\\'b')."));
        yield "
        </th>
        <th>
            ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Default"), "html", null, true);
        yield "
            ";
        // line 33
        yield PhpMyAdmin\Html\Generator::showHint(\_gettext("For default values, please enter just a single value, without backslash escaping or quotes, using this format: a"));
        yield "
        </th>
        <th>
            ";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Collation"), "html", null, true);
        yield "
        </th>
        <th>
            ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Attributes"), "html", null, true);
        yield "
        </th>
        <th>
            ";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Null"), "html", null, true);
        yield "
        </th>

        ";
        // line 46
        yield "        ";
        if ((array_key_exists("change_column", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["change_column"] ?? null)))) {
            // line 47
            yield "            <th>
                ";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Adjust privileges"), "html", null, true);
            yield "
                ";
            // line 49
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("faq", "faq6-39");
            yield "
            </th>
        ";
        }
        // line 52
        yield "
        ";
        // line 56
        yield "        ";
        if ((($tmp =  !($context["is_backup"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 57
            yield "            <th>
                ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Index"), "html", null, true);
            yield "
            </th>
        ";
        }
        // line 61
        yield "
        <th>
            <abbr title=\"AUTO_INCREMENT\">A_I</abbr>
        </th>
        <th>
            ";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Comments"), "html", null, true);
        yield "
        </th>

        ";
        // line 69
        if ((($tmp = ($context["is_virtual_columns_supported"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 70
            yield "            <th>
                ";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Virtuality"), "html", null, true);
            yield "
            </th>
        ";
        }
        // line 74
        yield "
        ";
        // line 75
        if (array_key_exists("fields_meta", $context)) {
            // line 76
            yield "            <th>
                ";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Move column"), "html", null, true);
            yield "
            </th>
        ";
        }
        // line 80
        yield "
        ";
        // line 81
        if (( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "browserTransformationFeature", [], "any", false, false, false, 81)) && ($context["browse_mime"] ?? null))) {
            // line 82
            yield "            <th>
                ";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Media type"), "html", null, true);
            yield "
            </th>
            <th>
                <a href=\"";
            // line 86
            yield PhpMyAdmin\Url::getFromRoute("/transformation/overview");
            yield "#transformation\" title=\"";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("List of available transformations and their options"), "html", null, true);
            // line 88
            yield "\" target=\"_blank\">
                    ";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Browser display transformation"), "html", null, true);
            yield "
                </a>
            </th>
            <th>
                ";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Browser display transformation options"), "html", null, true);
            yield "
                ";
            // line 94
            yield PhpMyAdmin\Html\Generator::showHint(\_gettext("Please enter the values for transformation options using this format: 'a', 100, b,'c'…<br>If you ever need to put a backslash (\"\\\") or a single quote (\"'\") amongst those values, precede it with a backslash (for example '\\\\xyz' or 'a\\'b')."));
            yield "
            </th>
            <th>
                <a href=\"";
            // line 97
            yield PhpMyAdmin\Url::getFromRoute("/transformation/overview");
            yield "#input_transformation\"
                   title=\"";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("List of available transformations and their options"), "html", null, true);
            yield "\"
                   target=\"_blank\">
                    ";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Input transformation"), "html", null, true);
            yield "
                </a>
            </th>
            <th>
                ";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Input transformation options"), "html", null, true);
            yield "
                ";
            // line 105
            yield PhpMyAdmin\Html\Generator::showHint(\_gettext("Please enter the values for transformation options using this format: 'a', 100, b,'c'…<br>If you ever need to put a backslash (\"\\\") or a single quote (\"'\") amongst those values, precede it with a backslash (for example '\\\\xyz' or 'a\\'b')."));
            yield "
            </th>
        ";
        }
        // line 108
        yield "    </tr>
    ";
        // line 109
        $context["options"] = ["" => "", "VIRTUAL" => "VIRTUAL"];
        // line 110
        yield "    ";
        if ((($tmp = ($context["supports_stored_keyword"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 111
            yield "        ";
            $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["STORED" => "STORED"]);
            // line 112
            yield "    ";
        } else {
            // line 113
            yield "        ";
            $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["PERSISTENT" => "PERSISTENT"]);
            // line 114
            yield "    ";
        }
        // line 115
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["content_cells"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["content_row"]) {
            // line 116
            yield "        <tr>
            ";
            // line 117
            yield from $this->load("columns_definitions/column_attributes.twig", 117)->unwrap()->yield(CoreExtension::toArray(Twig\Extension\CoreExtension::merge($context["content_row"], ["options" =>             // line 118
($context["options"] ?? null), "change_column" =>             // line 119
($context["change_column"] ?? null), "is_virtual_columns_supported" =>             // line 120
($context["is_virtual_columns_supported"] ?? null), "browse_mime" =>             // line 121
($context["browse_mime"] ?? null), "max_rows" =>             // line 122
($context["max_rows"] ?? null), "char_editing" =>             // line 123
($context["char_editing"] ?? null), "attribute_types" =>             // line 124
($context["attribute_types"] ?? null), "privs_available" =>             // line 125
($context["privs_available"] ?? null), "max_length" =>             // line 126
($context["max_length"] ?? null), "relation_parameters" =>             // line 127
($context["relation_parameters"] ?? null)])));
            // line 129
            yield "        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['content_row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        yield "</table>
<script>
  function populate_collation_select() {
    const select = this;
    const selectOptions = document.getElementById('collation_select_options').content.cloneNode(true);
    select.appendChild(selectOptions);
    const selectedValue = select.dataset.selected;
    if (selectedValue) {
      select.value = selectedValue;
    }
    \$(select).off('focus', populate_collation_select);
  }

  \$('.collation-select').on('focus', populate_collation_select);
  \$('.collation-select[data-selected]').each(populate_collation_select);
</script>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "columns_definitions/table_fields_definitions.twig";
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
        return array (  335 => 131,  328 => 129,  326 => 127,  325 => 126,  324 => 125,  323 => 124,  322 => 123,  321 => 122,  320 => 121,  319 => 120,  318 => 119,  317 => 118,  316 => 117,  313 => 116,  308 => 115,  305 => 114,  302 => 113,  299 => 112,  296 => 111,  293 => 110,  291 => 109,  288 => 108,  282 => 105,  278 => 104,  271 => 100,  266 => 98,  262 => 97,  256 => 94,  252 => 93,  245 => 89,  242 => 88,  240 => 87,  237 => 86,  231 => 83,  228 => 82,  226 => 81,  223 => 80,  217 => 77,  214 => 76,  212 => 75,  209 => 74,  203 => 71,  200 => 70,  198 => 69,  192 => 66,  185 => 61,  179 => 58,  176 => 57,  173 => 56,  170 => 52,  164 => 49,  160 => 48,  157 => 47,  154 => 46,  148 => 42,  142 => 39,  136 => 36,  130 => 33,  126 => 32,  120 => 29,  116 => 28,  110 => 25,  106 => 24,  100 => 21,  93 => 17,  89 => 16,  84 => 13,  77 => 11,  70 => 9,  68 => 8,  62 => 7,  58 => 6,  51 => 5,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "columns_definitions/table_fields_definitions.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/columns_definitions/table_fields_definitions.twig");
    }
}

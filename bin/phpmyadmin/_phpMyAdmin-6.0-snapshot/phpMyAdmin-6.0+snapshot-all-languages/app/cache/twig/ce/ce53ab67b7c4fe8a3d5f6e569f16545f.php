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

/* database/data_dictionary/index.twig */
class __TwigTemplate_090f22dfdf1fc2a6fc924acc45b90719 extends Template
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
        yield "<div class=\"container-fluid\">
  <h1>";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["database"] ?? null), "html", null, true);
        yield "</h1>
  ";
        // line 3
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["comment"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "    <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Database comment:"), "html", null, true);
            yield " <em>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["comment"] ?? null), "html", null, true);
            yield "</em></p>
  ";
        }
        // line 6
        yield "
  <p class=\"d-print-none\">
    <button type=\"button\" class=\"btn btn-secondary jsPrintButton\">";
        // line 8
        yield PhpMyAdmin\Html\Generator::getIcon("b_print", \_gettext("Print"), true);
        yield "</button>
  </p>

  <div>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tables"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["table"]) {
            // line 13
            yield "      <div>
        <h2>";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["table"], "name", [], "any", false, false, false, 14), "html", null, true);
            yield "</h2>
        ";
            // line 15
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["table"], "comment", [], "any", false, false, false, 15))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 16
                yield "          ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table comments:"), "html", null, true);
                yield "
          <em><pre>";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["table"], "comment", [], "any", false, false, false, 17), "html", null, true);
                yield "</pre></em>
        ";
            }
            // line 19
            yield "
        <table class=\"table table-striped align-middle\">
          <thead>
            <tr>
              <th>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Column"), "html", null, true);
            yield "</th>
              <th>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Type"), "html", null, true);
            yield "</th>
              <th>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Null"), "html", null, true);
            yield "</th>
              <th>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Default"), "html", null, true);
            yield "</th>
              ";
            // line 27
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["table"], "has_relation", [], "any", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 28
                yield "                <th>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Links to"), "html", null, true);
                yield "</th>
              ";
            }
            // line 30
            yield "              <th>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Comments"), "html", null, true);
            yield "</th>
              ";
            // line 31
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["table"], "has_mime", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 32
                yield "                <th>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Media type"), "html", null, true);
                yield "</th>
              ";
            }
            // line 34
            yield "            </tr>
          </thead>
          <tbody>
            ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["table"], "columns", [], "any", false, false, false, 37));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 38
                yield "              <tr>
                <td class=\"text-nowrap\">
                  ";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "name", [], "any", false, false, false, 40), "html", null, true);
                yield "
                  ";
                // line 41
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["column"], "has_primary_key", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 42
                    yield "                    <em>(";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Primary"), "html", null, true);
                    yield ")</em>
                  ";
                }
                // line 44
                yield "                </td>
                <td lang=\"en\" dir=\"ltr\"";
                // line 45
                yield (((("set" != CoreExtension::getAttribute($this->env, $this->source, $context["column"], "type", [], "any", false, false, false, 45)) && ("enum" != CoreExtension::getAttribute($this->env, $this->source, $context["column"], "type", [], "any", false, false, false, 45)))) ? (" class=\"text-nowrap\"") : (""));
                yield ">
                  ";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "print_type", [], "any", false, false, false, 46), "html", null, true);
                yield "
                </td>
                <td>";
                // line 48
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["column"], "is_nullable", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Yes"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("No"), "html", null, true)));
                yield "</td>
                <td class=\"text-nowrap\">
                  ";
                // line 50
                if (((null === CoreExtension::getAttribute($this->env, $this->source, $context["column"], "default", [], "any", false, false, false, 50)) && CoreExtension::getAttribute($this->env, $this->source, $context["column"], "is_nullable", [], "any", false, false, false, 50))) {
                    // line 51
                    yield "                    <em>NULL</em>
                  ";
                } else {
                    // line 53
                    yield "                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "default", [], "any", false, false, false, 53), "html", null, true);
                    yield "
                  ";
                }
                // line 55
                yield "                </td>
                ";
                // line 56
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["table"], "has_relation", [], "any", false, false, false, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 57
                    yield "                  <td>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "relation", [], "any", false, false, false, 57), "html", null, true);
                    yield "</td>
                ";
                }
                // line 59
                yield "                <td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "comment", [], "any", false, false, false, 59), "html", null, true);
                yield "</td>
                ";
                // line 60
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["table"], "has_mime", [], "any", false, false, false, 60)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 61
                    yield "                  <td>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "mime", [], "any", false, false, false, 61), "html", null, true);
                    yield "</td>
                ";
                }
                // line 63
                yield "              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['column'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            yield "          </tbody>
        </table>

        ";
            // line 68
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["table"], "indexes", [], "any", false, false, false, 68))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 69
                yield "          <h3>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Indexes"), "html", null, true);
                yield "</h3>

          <table class=\"table table-striped align-middle\">
            <thead>
              <tr>
                <th>";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Keyname"), "html", null, true);
                yield "</th>
                <th>";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Type"), "html", null, true);
                yield "</th>
                <th>";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Unique"), "html", null, true);
                yield "</th>
                <th>";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Packed"), "html", null, true);
                yield "</th>
                <th>";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Column"), "html", null, true);
                yield "</th>
                <th>";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Cardinality"), "html", null, true);
                yield "</th>
                <th>";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Collation"), "html", null, true);
                yield "</th>
                <th>";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Null"), "html", null, true);
                yield "</th>
                <th>";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Comment"), "html", null, true);
                yield "</th>
              </tr>
            </thead>

            <tbody>
              ";
                // line 87
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["table"], "indexes", [], "any", false, false, false, 87));
                foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
                    // line 88
                    yield "                ";
                    $context["columns_count"] = CoreExtension::getAttribute($this->env, $this->source, $context["index"], "getColumnCount", [], "method", false, false, false, 88);
                    // line 89
                    yield "                <tr>
                <td rowspan=\"";
                    // line 90
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["columns_count"] ?? null), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["index"], "getName", [], "method", false, false, false, 90), "html", null, true);
                    yield "</td>
                <td rowspan=\"";
                    // line 91
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["columns_count"] ?? null), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["index"], "getType", [], "method", true, true, false, 91)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["index"], "getType", [], "method", false, false, false, 91), CoreExtension::getAttribute($this->env, $this->source, $context["index"], "getChoice", [], "method", false, false, false, 91))) : (CoreExtension::getAttribute($this->env, $this->source, $context["index"], "getChoice", [], "method", false, false, false, 91))), "html", null, true);
                    yield "</td>
                <td rowspan=\"";
                    // line 92
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["columns_count"] ?? null), "html", null, true);
                    yield "\">";
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["index"], "isUnique", [], "method", false, false, false, 92)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Yes"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("No"), "html", null, true)));
                    yield "</td>
                <td rowspan=\"";
                    // line 93
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["columns_count"] ?? null), "html", null, true);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["index"], "isPacked", [], "method", false, false, false, 93);
                    yield "</td>

                ";
                    // line 95
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["index"], "getColumns", [], "method", false, false, false, 95));
                    foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                        // line 96
                        yield "                  ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["column"], "getSeqInIndex", [], "method", false, false, false, 96) > 1)) {
                            // line 97
                            yield "                    <tr>
                  ";
                        }
                        // line 99
                        yield "                  <td>
                    ";
                        // line 100
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "getName", [], "method", false, false, false, 100), "html", null, true);
                        yield "
                    ";
                        // line 101
                        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "getSubPart", [], "method", false, false, false, 101))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 102
                            yield "                      (";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "getSubPart", [], "method", false, false, false, 102), "html", null, true);
                            yield ")
                    ";
                        }
                        // line 104
                        yield "                  </td>
                  <td>";
                        // line 105
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "getCardinality", [], "method", false, false, false, 105), "html", null, true);
                        yield "</td>
                  <td>";
                        // line 106
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "getCollation", [], "method", false, false, false, 106), "html", null, true);
                        yield "</td>
                  <td>";
                        // line 107
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "getNull", [], "method", false, false, false, 107), "html", null, true);
                        yield "</td>

                  ";
                        // line 109
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["column"], "getSeqInIndex", [], "method", false, false, false, 109) == 1)) {
                            // line 110
                            yield "                    <td rowspan=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["columns_count"] ?? null), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["index"], "getComments", [], "method", false, false, false, 110), "html", null, true);
                            yield "</td>
                  ";
                        }
                        // line 112
                        yield "                  </tr>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['column'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 114
                    yield "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['index'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 115
                yield "            </tbody>
          </table>
        ";
            } else {
                // line 118
                yield "          <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("No index defined!"), "html", null, true);
                yield "</p>
        ";
            }
            // line 120
            yield "      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['table'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        yield "  </div>

  <p class=\"d-print-none\">
    <button type=\"button\" class=\"btn btn-secondary jsPrintButton\">";
        // line 125
        yield PhpMyAdmin\Html\Generator::getIcon("b_print", \_gettext("Print"), true);
        yield "</button>
  </p>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "database/data_dictionary/index.twig";
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
        return array (  400 => 125,  395 => 122,  388 => 120,  382 => 118,  377 => 115,  371 => 114,  364 => 112,  356 => 110,  354 => 109,  349 => 107,  345 => 106,  341 => 105,  338 => 104,  332 => 102,  330 => 101,  326 => 100,  323 => 99,  319 => 97,  316 => 96,  312 => 95,  305 => 93,  299 => 92,  293 => 91,  287 => 90,  284 => 89,  281 => 88,  277 => 87,  269 => 82,  265 => 81,  261 => 80,  257 => 79,  253 => 78,  249 => 77,  245 => 76,  241 => 75,  237 => 74,  228 => 69,  226 => 68,  221 => 65,  214 => 63,  208 => 61,  206 => 60,  201 => 59,  195 => 57,  193 => 56,  190 => 55,  184 => 53,  180 => 51,  178 => 50,  173 => 48,  168 => 46,  164 => 45,  161 => 44,  155 => 42,  153 => 41,  149 => 40,  145 => 38,  141 => 37,  136 => 34,  130 => 32,  128 => 31,  123 => 30,  117 => 28,  115 => 27,  111 => 26,  107 => 25,  103 => 24,  99 => 23,  93 => 19,  88 => 17,  83 => 16,  81 => 15,  77 => 14,  74 => 13,  70 => 12,  63 => 8,  59 => 6,  51 => 4,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "database/data_dictionary/index.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/database/data_dictionary/index.twig");
    }
}

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

/* database/multi_table_query/form.twig */
class __TwigTemplate_77638c0e51d450c6a1dc415598366126 extends Template
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
        yield "<div class=\"mb-3\">
  <button class=\"btn btn-sm btn-secondary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#queryWindow\" aria-expanded=\"true\" aria-controls=\"queryWindow\">
    ";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Query window"), "html", null, true);
        yield "
  </button>
</div>
<div class=\"collapse show mb-3\" id=\"queryWindow\">
  <form action=\"\">
    <input type=\"hidden\" id=\"db_name\" value=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["db"] ?? null), "html", null, true);
        yield "\">

    <div class=\"card\">
      <div class=\"card-body\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tables"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["table"]) {
            // line 13
            yield "          <div class=\"d-none\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["table"], "hash", [], "any", false, false, false, 13), "html", null, true);
            yield "\">
            <option value=\"*\">*</option>
            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["table"], "columns", [], "any", false, false, false, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 16
                yield "              <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["column"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["column"], "html", null, true);
                yield "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['column'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            yield "          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['table'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "
        <div class=\"row g-3 mb-3\">
          ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, ($context["default_no_of_columns"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
            // line 23
            yield "            <div class=\"col";
            yield ((($context["id"] == 0)) ? (" d-none") : (""));
            yield "\"";
            yield ((($context["id"] == 0)) ? (" id=\"new_column_layout\"") : (""));
            yield ">
              <div class=\"card\">
                <fieldset class=\"card-body\">
                  <select class=\"tableNameSelect\">
                    <option value=\"\">";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("select table"), "html", null, true);
            yield "</option>
                    ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["tables"] ?? null));
            foreach ($context['_seq'] as $context["keyTableName"] => $context["table"]) {
                // line 29
                yield "                      <option data-hash=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["table"], "hash", [], "any", false, false, false, 29), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["keyTableName"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["keyTableName"], "html", null, true);
                yield "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['keyTableName'], $context['table'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            yield "                  </select>
                  <span>.</span>
                  <select class=\"columnNameSelect\">
                    <option value=\"\">";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("select column"), "html", null, true);
            yield "</option>
                  </select>
                  <br>
                  <input type=\"checkbox\" checked class=\"show_col\">
                  <span>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Show"), "html", null, true);
            yield "</span>
                  <br>
                  <input type=\"text\" placeholder=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table alias"), "html", null, true);
            yield "\" class=\"table_alias\">
                  <input type=\"text\" placeholder=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Column alias"), "html", null, true);
            yield "\" class=\"col_alias\">
                  <br>
                  <input type=\"checkbox\"
                         title=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Use this column in criteria"), "html", null, true);
            yield "\"
                         class=\"criteria_col\" data-bs-toggle=\"collapse\" data-bs-target=\"#criteriaOptions";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["id"], "html", null, true);
            yield "\" aria-expanded=\"false\" aria-controls=\"criteriaOptions";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["id"], "html", null, true);
            yield "\">

                  <button class=\"btn btn-link p-0 jsCriteriaButton\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#criteriaOptions";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["id"], "html", null, true);
            yield "\" aria-expanded=\"false\" aria-controls=\"criteriaOptions";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["id"], "html", null, true);
            yield "\">
                    ";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("criteria"), "html", null, true);
            yield "
                  </button>
                  <div class=\"collapse jsCriteriaOptions\" id=\"criteriaOptions";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["id"], "html", null, true);
            yield "\">

                    <div>
                      <table class=\"table table-sm table-borderless align-middle w-auto\">

                        <tr class=\"sort_order\">
                          <td>";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Sort"), "html", null, true);
            yield "</td>
                          <td><input type=\"radio\" name=\"sort[";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["id"], "html", null, true);
            yield "]\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Ascending"), "html", null, true);
            yield "</td>
                          <td><input type=\"radio\" name=\"sort[";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["id"], "html", null, true);
            yield "]\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Descending"), "html", null, true);
            yield "</td>
                        </tr>

                        <tr class=\"logical_operator\">
                          <td>";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add as"), "html", null, true);
            yield "</td>
                          <td>
                            <input type=\"radio\"
                                   name=\"logical_op[";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["id"], "html", null, true);
            yield "]\"
                                   value=\"AND\"
                                   class=\"logical_op\"
                                   checked>
                            AND
                          </td>
                          <td>
                            <input type=\"radio\"
                                   name=\"logical_op[";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["id"], "html", null, true);
            yield "]\"
                                   value=\"OR\"
                                   class=\"logical_op\">
                            OR
                          </td>
                        </tr>

                        <tr>
                          <td>Column</td>
                          <td colspan=\"2\">
                            <select class=\"columnNameSelect query-form__select--inline opColumn\">
                              <option value=\"\">";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("select column"), "html", null, true);
            yield "</option>
                            </select>
                          </td>
                        </tr>

                        <tr>
                          <td>Op</td>
                          <td>
                            <select class=\"criteria_op\">
                              <option value=\"=\">=</option>
                              <option value=\">\">&gt;</option>
                              <option value=\">=\">&gt;=</option>
                              <option value=\"<\">&lt;</option>
                              <option value=\"<=\">&lt;=</option>
                              <option value=\"!=\">!=</option>
                              <option value=\"LIKE\">LIKE</option>
                              <option value=\"LIKE %...%\">LIKE %...%</option>
                              <option value=\"NOT LIKE\">NOT LIKE</option>
                              <option value=\"NOT LIKE %...%\">NOT LIKE %...%</option>
                              <option value=\"IN (...)\">IN (...)</option>
                              <option value=\"NOT IN (...)\">NOT IN (...)</option>
                              <option value=\"BETWEEN\">BETWEEN</option>
                              <option value=\"NOT BETWEEN\">NOT BETWEEN</option>
                              <option value=\"IS NULL\">IS NULL</option>
                              <option value=\"IS NOT NULL\">IS NOT NULL</option>
                              <option value=\"REGEXP\">REGEXP</option>
                              <option value=\"REGEXP ^...\$\">REGEXP ^...\$</option>
                              <option value=\"NOT REGEXP\">NOT REGEXP</option>
                            </select>
                          </td>
                          <td>
                            <select class=\"criteria_rhs\">
                              <option value=\"text\">";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Text"), "html", null, true);
            yield "</option>
                              <option value=\"anotherColumn\">";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Another column"), "html", null, true);
            yield "</option>
                            </select>
                          </td>
                        </tr>

                        <tr class=\"rhs_table\" style=\"display: none;\">
                          <td></td>
                          <td>
                            <select class=\"tableNameSelect\">
                              <option value=\"\">";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("select table"), "html", null, true);
            yield "</option>
                              ";
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["tables"] ?? null));
            foreach ($context['_seq'] as $context["keyTableName"] => $context["table"]) {
                // line 128
                yield "                                <option data-hash=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["table"], "hash", [], "any", false, false, false, 128), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["keyTableName"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["keyTableName"], "html", null, true);
                yield "</option>
                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['keyTableName'], $context['table'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            yield "                            </select><span>.</span>
                          </td>
                          <td>
                            <select class=\"columnNameSelect\">
                              <option value=\"\">";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("select column"), "html", null, true);
            yield "</option>
                            </select>
                          </td>
                        </tr>

                        <tr class=\"rhs_text\">
                          <td></td>
                          <td colspan=\"2\">
                            <input type=\"text\"
                                   class=\"rhs_text_val\"
                                   placeholder=\"";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Enter criteria as free text"), "html", null, true);
            yield "\">
                          </td>
                        </tr>

                      </table>
                    </div>
                  </div>
                  <button type=\"button\" class=\"btn-close position-absolute top-0 end-0 jsRemoveColumn\" aria-label=\"";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Remove this column"), "html", null, true);
            yield "\"></button>
                </fieldset>
              </div>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['id'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        yield "        </div>

        <div class=\"mb-3\">
          <input class=\"btn btn-secondary\" type=\"button\" value=\"";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("+ Add column"), "html", null, true);
        yield "\" id=\"add_column_button\">
        </div>

        <div>
          ";
        // line 164
        yield "          <textarea id=\"MultiSqlquery\"
                    class=\"form-control\"
                    cols=\"80\"
                    rows=\"4\"
                    name=\"sql_query\"
                    dir=\"ltr\"></textarea>
        </div>
      </div>

      <div class=\"card-footer\">
        <input class=\"btn btn-secondary\" type=\"button\" id=\"update_query_button\" value=\"";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Update query"), "html", null, true);
        yield "\">
        <input class=\"btn btn-secondary\" type=\"button\" id=\"copy_query\" value=\"";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Copy query"), "html", null, true);
        yield "\" disabled>
        <input class=\"btn btn-primary\" type=\"button\" id=\"submit_query\" value=\"";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Submit query"), "html", null, true);
        yield "\">
      </div>
    </div>
  </form>
</div>
<div id=\"sql_results\"></div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "database/multi_table_query/form.twig";
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
        return array (  384 => 176,  380 => 175,  376 => 174,  364 => 164,  357 => 159,  352 => 156,  341 => 151,  331 => 144,  318 => 134,  312 => 130,  299 => 128,  295 => 127,  291 => 126,  279 => 117,  275 => 116,  240 => 84,  226 => 73,  215 => 65,  209 => 62,  200 => 58,  194 => 57,  190 => 56,  181 => 50,  176 => 48,  170 => 47,  163 => 45,  159 => 44,  153 => 41,  149 => 40,  144 => 38,  137 => 34,  132 => 31,  119 => 29,  115 => 28,  111 => 27,  101 => 23,  97 => 22,  93 => 20,  86 => 18,  75 => 16,  71 => 15,  65 => 13,  61 => 12,  54 => 8,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "database/multi_table_query/form.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/database/multi_table_query/form.twig");
    }
}

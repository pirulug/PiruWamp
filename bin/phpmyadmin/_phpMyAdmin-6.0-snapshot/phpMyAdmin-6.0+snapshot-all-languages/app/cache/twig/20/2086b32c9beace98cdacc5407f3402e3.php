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

/* database/search/main.twig */
class __TwigTemplate_a18348b1b199acd50103848c5aecc07c extends Template
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
        yield "<div class=\"container\">
  <h2>";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Search in database"), "html", null, true);
        yield "</h2>

  <a id=\"db_search\"></a>
  <form id=\"db_search_form\" method=\"post\" action=\"";
        // line 5
        yield PhpMyAdmin\Url::getFromRoute("/database/search");
        yield "\" name=\"db_search\" class=\"card mb-3 ajax lock-page\">
    ";
        // line 6
        yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
        yield "
    <div class=\"card-body\">
      <div class=\"mb-3\">
        <label for=\"criteriaSearchString\" class=\"form-label\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Words or values to search for (wildcard: \"%\"):"), "html", null, true);
        yield "</label>
        <input type=\"text\" class=\"form-control\" id=\"criteriaSearchString\" name=\"criteriaSearchString\" value=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["criteria_search_string"] ?? null), "html", null, true);
        yield "\">
      </div>

      <fieldset class=\"mb-3\">
        <legend>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Find:"), "html", null, true);
        yield "</legend>

        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"criteriaSearchType\" id=\"criteriaSearchTypeRadio1\" value=\"1\"";
        // line 17
        yield (((($context["criteria_search_type"] ?? null) == "1")) ? (" checked") : (""));
        yield ">
          <label class=\"form-check-label\" for=\"criteriaSearchTypeRadio1\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("at least one of the words"), "html", null, true);
        yield " ";
        yield PhpMyAdmin\Html\Generator::showHint(\_gettext("Words are separated by a space character (\" \")."));
        yield "</label>
        </div>
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"criteriaSearchType\" id=\"criteriaSearchTypeRadio2\" value=\"2\"";
        // line 21
        yield (((($context["criteria_search_type"] ?? null) == "2")) ? (" checked") : (""));
        yield ">
          <label class=\"form-check-label\" for=\"criteriaSearchTypeRadio2\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("all of the words"), "html", null, true);
        yield " ";
        yield PhpMyAdmin\Html\Generator::showHint(\_gettext("Words are separated by a space character (\" \")."));
        yield "</label>
        </div>
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"criteriaSearchType\" id=\"criteriaSearchTypeRadio3\" value=\"3\"";
        // line 25
        yield (((($context["criteria_search_type"] ?? null) == "3")) ? (" checked") : (""));
        yield ">
          <label class=\"form-check-label\" for=\"criteriaSearchTypeRadio3\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("the exact phrase as substring"), "html", null, true);
        yield "</label>
        </div>
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"criteriaSearchType\" id=\"criteriaSearchTypeRadio4\" value=\"4\"";
        // line 29
        yield (((($context["criteria_search_type"] ?? null) == "4")) ? (" checked") : (""));
        yield ">
          <label class=\"form-check-label\" for=\"criteriaSearchTypeRadio4\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("the exact phrase as whole field"), "html", null, true);
        yield "</label>
        </div>
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"criteriaSearchType\" id=\"criteriaSearchTypeRadio5\" value=\"5\"";
        // line 33
        yield (((($context["criteria_search_type"] ?? null) == "5")) ? (" checked") : (""));
        yield ">
          <label class=\"form-check-label\" for=\"criteriaSearchTypeRadio5\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("as regular expression"), "html", null, true);
        yield " ";
        yield PhpMyAdmin\Html\MySQLDocumentation::show("Regexp");
        yield "</label>
        </div>
        <legend>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Options:"), "html", null, true);
        yield "</legend>
        <div class=\"form-check\">
          <input class=\"form-check-input\" value='0' type=\"hidden\" name=\"criteriaSearchOptionIncludeHex\" id=\"criteriaSearchOptionHidden1\">
          <input class=\"form-check-input\" value='1' type=\"checkbox\" name=\"criteriaSearchOptionIncludeHex\" id=\"criteriaSearchOptionCheckbox1\" ";
        // line 39
        yield (((($tmp = ($context["criteria_search_options_include_hex"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
        yield ">
          <label class=\"form-check-label\" for=\"criteriaSearchOptionCheckbox1\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("include hex matches"), "html", null, true);
        yield " ";
        yield PhpMyAdmin\Html\MySQLDocumentation::show("string-functions", false, null, null, "function_hex");
        yield "</label>
        </div>
      </fieldset>

      <fieldset class=\"mb-3\">
        <legend>";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Inside tables:"), "html", null, true);
        yield "</legend>

        <div>
          <button type=\"button\" class=\"btn btn-link\" id=\"select_all\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Select all"), "html", null, true);
        yield "</button>
          <button type=\"button\" class=\"btn btn-link\" id=\"unselect_all\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Unselect all"), "html", null, true);
        yield "</button>
        </div>
        <select class=\"form-select\" id=\"criteriaTables\" name=\"criteriaTables[]\" multiple>
          ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tables_names_only"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["each_table"]) {
            // line 53
            yield "            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["each_table"], "html", null, true);
            yield "\"
              ";
            // line 54
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["criteria_tables"] ?? null)) > 0)) {
                // line 55
                yield ((CoreExtension::inFilter($context["each_table"], ($context["criteria_tables"] ?? null))) ? (" selected") : (""));
                yield "
              ";
            } else {
                // line 57
                yield " selected";
                yield "
              ";
            }
            // line 59
            yield "            >
              ";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["each_table"], "html", null, true);
            yield "
            </option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['each_table'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "        </select>
      </fieldset>

      <div>
        <label for=\"criteriaColumnName\" class=\"form-label\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Inside column:"), "html", null, true);
        yield "</label>
        <input type=\"text\" class=\"form-control\" id=\"criteriaColumnName\" name=\"criteriaColumnName\" value=\"";
        // line 68
        yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["criteria_column_name"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["criteria_column_name"] ?? null), "html", null, true)) : (""));
        yield "\">
      </div>
    </div>
    <div class=\"card-footer\">
      <input id=\"buttonGo\" class=\"btn btn-primary\" type=\"submit\" name=\"submit_search\" value=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Search"), "html", null, true);
        yield "\">
    </div>
  </form>
  <div id=\"togglesearchformdiv\">
    <button id=\"togglesearchformlink\" class=\"btn btn-primary my-1\"></button>
  </div>
  <div id=\"searchresults\"></div>
  <div id=\"togglesearchresultsdiv\">
    <button id=\"togglesearchresultlink\" class=\"btn btn-primary\"></button>
  </div>
  <br class=\"clearfloat\">
  ";
        // line 84
        yield "  <div id=\"table-info\">
    <a id=\"table-link\" class=\"item\"></a>
  </div>
  ";
        // line 88
        yield "  <div id=\"browse-results\">
    ";
        // line 90
        yield "  </div>
  <div id=\"sqlqueryform\" class=\"clearfloat\">
    ";
        // line 93
        yield "  </div>
  ";
        // line 95
        yield "  <button class=\"btn btn-secondary\" id=\"togglequerybox\"></button>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "database/search/main.twig";
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
        return array (  248 => 95,  245 => 93,  241 => 90,  238 => 88,  233 => 84,  219 => 72,  212 => 68,  208 => 67,  202 => 63,  193 => 60,  190 => 59,  185 => 57,  180 => 55,  178 => 54,  173 => 53,  169 => 52,  163 => 49,  159 => 48,  153 => 45,  143 => 40,  139 => 39,  133 => 36,  126 => 34,  122 => 33,  116 => 30,  112 => 29,  106 => 26,  102 => 25,  94 => 22,  90 => 21,  82 => 18,  78 => 17,  72 => 14,  65 => 10,  61 => 9,  55 => 6,  51 => 5,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "database/search/main.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/database/search/main.twig");
    }
}

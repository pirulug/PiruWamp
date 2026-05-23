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

/* database/structure/check_all_tables.twig */
class __TwigTemplate_dd4e3ca4b27d305914d3dcfea947f6f2 extends Template
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
        yield "<div class=\"clearfloat d-print-none\">
    ";
        // line 2
        yield PhpMyAdmin\Html\Generator::getImage("select_all_arrow", \_gettext("With selected:"), ["dir" => CoreExtension::getAttribute($this->env, $this->source, ($context["pma"] ?? null), "text_dir", [], "any", false, false, false, 2), "width" => "38", "height" => "22"]);
        yield "
    <input type=\"checkbox\" id=\"tablesForm_checkall\" class=\"checkall_box\" title=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Check all"), "html", null, true);
        yield "\">
    <label for=\"tablesForm_checkall\">";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Check all"), "html", null, true);
        yield "</label>
    ";
        // line 5
        if ((($context["overhead_check"] ?? null) != "")) {
            // line 6
            yield "        / <a href=\"#\" class=\"checkall-filter\" data-checkall-selector=\".tbl-overhead\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Check tables having overhead"), "html", null, true);
            yield "</a>
    ";
        }
        // line 8
        yield "    <select name=\"submit_mult\" class=\"mx-5 my-0\">
        <option value=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("With selected:"), "html", null, true);
        yield "\" selected>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("With selected:"), "html", null, true);
        yield "</option>
        <option value=\"copy_tbl\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Copy table"), "html", null, true);
        yield "</option>
        <option value=\"show_create\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Show create"), "html", null, true);
        yield "</option>
        <option value=\"export\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Export"), "html", null, true);
        yield "</option>
        ";
        // line 13
        if (( !($context["db_is_system_schema"] ?? null) &&  !($context["disable_multi_table"] ?? null))) {
            // line 14
            yield "            <optgroup label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Delete data or table"), "html", null, true);
            yield "\">
                <option value=\"empty_tbl\">";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Empty"), "html", null, true);
            yield "</option>
                <option value=\"drop_tbl\">";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Drop"), "html", null, true);
            yield "</option>
            </optgroup>
            <optgroup label=\"";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table maintenance"), "html", null, true);
            yield "\">
                <option value=\"analyze_tbl\">";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Analyze table"), "html", null, true);
            yield "</option>
                <option value=\"check_tbl\">";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Check table"), "html", null, true);
            yield "</option>
                <option value=\"checksum_tbl\">";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Checksum table"), "html", null, true);
            yield "</option>
                <option value=\"optimize_tbl\">";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Optimize table"), "html", null, true);
            yield "</option>
                <option value=\"repair_tbl\">";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Repair table"), "html", null, true);
            yield "</option>
            </optgroup>
            <optgroup label=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Prefix"), "html", null, true);
            yield "\">
                <option value=\"add_prefix_tbl\">";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add prefix to table"), "html", null, true);
            yield "</option>
                <option value=\"replace_prefix_tbl\">";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Replace table prefix"), "html", null, true);
            yield "</option>
                <option value=\"copy_tbl_change_prefix\">";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Copy table with prefix"), "html", null, true);
            yield "</option>
            </optgroup>
        ";
        }
        // line 31
        yield "        ";
        if ((array_key_exists("central_columns_work", $context) && ($context["central_columns_work"] ?? null))) {
            // line 32
            yield "            <optgroup label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Central columns"), "html", null, true);
            yield "\">
                <option value=\"sync_unique_columns_central_list\">";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add columns to central list"), "html", null, true);
            yield "</option>
                <option value=\"delete_unique_columns_central_list\">";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Remove columns from central list"), "html", null, true);
            yield "</option>
                <option value=\"make_consistent_with_central_list\">";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Make consistent with central list"), "html", null, true);
            yield "</option>
            </optgroup>
        ";
        }
        // line 38
        yield "    </select>
    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["hidden_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["hidden_field"]) {
            // line 40
            yield "        <input type=\"hidden\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hidden_field"], "name", [], "any", false, false, false, 40), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hidden_field"], "value", [], "any", false, false, false, 40), "html", null, true);
            yield "\">
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['hidden_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "</div>

";
        // line 44
        if ((array_key_exists("central_columns_work", $context) && ($context["central_columns_work"] ?? null))) {
            // line 45
            yield "  <div class=\"modal fade\" id=\"makeConsistentWithCentralListModal\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\"
       tabindex=\"-1\" aria-labelledby=\"makeConsistentWithCentralListModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"makeConsistentWithCentralListModalLabel\">";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Are you sure?"), "html", null, true);
            yield "</h5>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Cancel"), "html", null, true);
            yield "\"></button>
        </div>
        <div class=\"modal-body\">
          ";
            // line 54
            yield PhpMyAdmin\Sanitize::convertBBCode(\_gettext("This action may change some of the columns definition.[br]Are you sure you want to continue?"));
            yield "
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Cancel"), "html", null, true);
            yield "</button>
          <button type=\"button\" class=\"btn btn-primary\" id=\"makeConsistentWithCentralListContinue\">";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Continue"), "html", null, true);
            yield "</button>
        </div>
      </div>
    </div>
  </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "database/structure/check_all_tables.twig";
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
        return array (  218 => 58,  214 => 57,  208 => 54,  202 => 51,  198 => 50,  191 => 45,  189 => 44,  185 => 42,  174 => 40,  170 => 39,  167 => 38,  161 => 35,  157 => 34,  153 => 33,  148 => 32,  145 => 31,  139 => 28,  135 => 27,  131 => 26,  127 => 25,  122 => 23,  118 => 22,  114 => 21,  110 => 20,  106 => 19,  102 => 18,  97 => 16,  93 => 15,  88 => 14,  86 => 13,  82 => 12,  78 => 11,  74 => 10,  68 => 9,  65 => 8,  59 => 6,  57 => 5,  53 => 4,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "database/structure/check_all_tables.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/database/structure/check_all_tables.twig");
    }
}

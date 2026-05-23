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

/* table/gis_visualization/gis_visualization.twig */
class __TwigTemplate_9c20d42b349da758ea179736ff172ed1 extends Template
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
        yield "<div id=\"div_view_options\" class=\"container-fluid\">
  <h2>";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Display GIS Visualization"), "html", null, true);
        yield "</h2>

  <div class=\"card\">
    <div id=\"gis_div\" class=\"card-body\">
      <form method=\"post\" action=\"";
        // line 6
        yield PhpMyAdmin\Url::getFromRoute("/table/gis-visualization");
        yield "\" class=\"row g-3 align-items-start\">
        ";
        // line 7
        yield PhpMyAdmin\Url::getHiddenInputs(($context["url_params"] ?? null));
        yield "

        <div class=\"col-12 col-md-6 col-xl\">
          <label class=\"form-label\" for=\"labelColumn\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Label column"), "html", null, true);
        yield "</label>
          <select name=\"visualizationSettings[labelColumn]\" id=\"labelColumn\" class=\"form-select autosubmit\">
            <option value=\"\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("-- None --"), "html", null, true);
        yield "</option>
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["label_candidates"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 14
            yield "              <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\"";
            yield ((($context["value"] == ($context["labelColumn"] ?? null))) ? (" selected") : (""));
            yield ">
                ";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "
              </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "          </select>
        </div>
        <div class=\"col-12 col-md-6 col-xl\">
          <label class=\"form-label\" for=\"spatialColumn\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Spatial column"), "html", null, true);
        yield "</label>
          <select name=\"visualizationSettings[spatialColumn]\" id=\"spatialColumn\" class=\"form-select autosubmit\">
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["spatial_candidates"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 24
            yield "              <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\"";
            yield ((($context["value"] == ($context["spatialColumn"] ?? null))) ? (" selected") : (""));
            yield ">
                ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "
              </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "          </select>
        </div>

        <div class=\"col-12\">
          ";
        // line 32
        yield Twig\Extension\CoreExtension::include($this->env, $context, "table/start_and_number_of_rows_fieldset.twig", ($context["start_and_number_of_rows_fieldset"] ?? null));
        yield "
        </div>

        <div class=\"d-flex justify-content-between align-items-center\">
          <input type=\"hidden\" name=\"redraw\" value=\"true\">
          <div class=\"form-check form-switch\">
            <input class=\"form-check-input\" type=\"checkbox\" name=\"useBaseLayer\" id=\"useOsmAsBaseLayerSwitch\"";
        // line 38
        yield (((($tmp = (((array_key_exists("useBaseLayer", $context) &&  !(null === $context["useBaseLayer"]))) ? ($context["useBaseLayer"]) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
        yield ">
            <label class=\"form-check-label\" for=\"useOsmAsBaseLayerSwitch\" id=\"useOsmAsBaseLayerSwitchLabel\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Use OpenStreetMaps as Base Layer"), "html", null, true);
        yield "</label>
          </div>
          <div class=\"dropdown\">
            <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"saveImageButton\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
              ";
        // line 43
        yield PhpMyAdmin\Html\Generator::getIcon("b_saveimage", \_gettext("Save"));
        yield "
            </button>
            <ul class=\"dropdown-menu\" aria-labelledby=\"saveImageButton\">
            ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["download_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["fileType"]) {
            // line 47
            yield "              <li><a class=\"dropdown-item disableAjax\" download href=\"";
            yield ($context["download_url"] ?? null);
            yield "&amp;fileFormat=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["fileType"], "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), $context["fileType"]), "html", null, true);
            yield "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['fileType'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "            </ul>
          </div>
        </div>
      </form>

      <div id=\"visualization-placeholder\" class=\"mt-3\" style=\"height: ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["height"] ?? null), "html", null, true);
        yield "px;\" data-ol-data=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(($context["open_layers_data"] ?? null)), "html_attr");
        yield "\">
        <div class=\"visualization-target visualization-target-svg hide\">";
        // line 55
        yield ($context["visualization"] ?? null);
        yield "</div>
        <div class=\"visualization-target visualization-target-ol hide\"></div>
      </div>
    </div>
  </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "table/gis_visualization/gis_visualization.twig";
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
        return array (  183 => 55,  177 => 54,  170 => 49,  157 => 47,  153 => 46,  147 => 43,  140 => 39,  136 => 38,  127 => 32,  121 => 28,  112 => 25,  105 => 24,  101 => 23,  96 => 21,  91 => 18,  82 => 15,  75 => 14,  71 => 13,  67 => 12,  62 => 10,  56 => 7,  52 => 6,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "table/gis_visualization/gis_visualization.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/gis_visualization/gis_visualization.twig");
    }
}

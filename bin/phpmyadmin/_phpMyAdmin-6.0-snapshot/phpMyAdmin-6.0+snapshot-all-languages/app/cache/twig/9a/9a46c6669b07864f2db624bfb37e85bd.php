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

/* table/find_replace/index.twig */
class __TwigTemplate_311b485ea5ec5e72693f84967568a420 extends Template
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
        yield "<ul class=\"nav nav-pills m-2\">
  <li class=\"nav-item\">
    <a class=\"nav-link disableAjax\" href=\"";
        // line 3
        yield PhpMyAdmin\Url::getFromRoute("/table/search", ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null), "pos" => 0]);
        yield "\">
      ";
        // line 4
        yield PhpMyAdmin\Html\Generator::getIcon("b_search", \_gettext("Table search"), false, false, "TabsMode");
        yield "
    </a>
  </li>

  <li class=\"nav-item\">
    <a class=\"nav-link disableAjax\" href=\"";
        // line 9
        yield PhpMyAdmin\Url::getFromRoute("/table/zoom-search", ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)]);
        yield "\">
      ";
        // line 10
        yield PhpMyAdmin\Html\Generator::getIcon("b_select", \_gettext("Zoom search"), false, false, "TabsMode");
        yield "
    </a>
  </li>

  <li class=\"nav-item\">
    <a class=\"nav-link active disableAjax\" href=\"";
        // line 15
        yield PhpMyAdmin\Url::getFromRoute("/table/find-replace", ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)]);
        yield "\">
      ";
        // line 16
        yield PhpMyAdmin\Html\Generator::getIcon("b_find_replace", \_gettext("Find and replace"), false, false, "TabsMode");
        yield "
    </a>
  </li>
</ul>

<form method=\"post\" action=\"";
        // line 21
        yield PhpMyAdmin\Url::getFromRoute("/table/find-replace");
        yield "\" name=\"insertForm\" id=\"find_replace_form\" class=\"ajax lock-page\">
  ";
        // line 22
        yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
        yield "
  <input type=\"hidden\" name=\"goto\" value=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["goto"] ?? null), "html", null, true);
        yield "\">
  <input type=\"hidden\" name=\"back\" value=\"";
        // line 24
        yield PhpMyAdmin\Url::getFromRoute("/table/find-replace");
        yield "\">

  <div class=\"card\">
    <div class=\"card-header\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Find and replace"), "html", null, true);
        yield "</div>

    <div class=\"card-body\">
      <div class=\"mb-3\">
        <label class=\"form-label\" for=\"findInput\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Find:"), "html", null, true);
        yield "</label>
        <input class=\"form-control\" type=\"text\" value=\"\" name=\"find\" id=\"findInput\" required>
      </div>

      <div class=\"mb-3\">
        <label class=\"form-label\" for=\"replaceWithInput\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Replace with:"), "html", null, true);
        yield "</label>
        <input class=\"form-control\" type=\"text\" value=\"\" name=\"replaceWith\" id=\"replaceWithInput\">
      </div>

      <div class=\"mb-3\">
        <label class=\"form-label\" for=\"columnIndexSelect\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Column:"), "html", null, true);
        yield "</label>
        <select class=\"form-select\" name=\"columnIndex\" id=\"columnIndexSelect\">
          ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["column_names"] ?? null));
        foreach ($context['_seq'] as $context["i"] => $context["columnName"]) {
            // line 44
            yield "            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\">";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["columnName"], "html", null, true);
            // line 46
            yield "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['i'], $context['columnName'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "        </select>
      </div>

      <div class=\"form-check\">
        <input class=\"form-check-input\" type=\"checkbox\" name=\"useRegex\" id=\"useRegex\">
        <label class=\"form-check-label\" for=\"useRegex\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Use regular expression"), "html", null, true);
        yield "</label>
      </div>
    </div>

    <div class=\"card-footer\">
      <input class=\"btn btn-primary\" type=\"submit\" name=\"submit\" value=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
        yield "\">
    </div>
  </div>
</form>
<div id=\"sqlqueryresultsouter\"></div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "table/find_replace/index.twig";
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
        return array (  160 => 58,  152 => 53,  145 => 48,  138 => 46,  136 => 45,  132 => 44,  128 => 43,  123 => 41,  115 => 36,  107 => 31,  100 => 27,  94 => 24,  90 => 23,  86 => 22,  82 => 21,  74 => 16,  70 => 15,  62 => 10,  58 => 9,  50 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "table/find_replace/index.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/find_replace/index.twig");
    }
}

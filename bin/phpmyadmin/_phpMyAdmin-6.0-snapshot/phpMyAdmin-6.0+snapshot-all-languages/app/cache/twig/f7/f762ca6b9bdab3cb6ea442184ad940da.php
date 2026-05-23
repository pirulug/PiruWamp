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

/* table/start_and_number_of_rows_fieldset.twig */
class __TwigTemplate_d38bc27580bbf34e78890ff0e62f9430 extends Template
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
        yield "<fieldset class=\"row g-3 align-items-center\">
  <div class=\"col-auto\">
    <label class=\"col-form-label\" for=\"startRowInput\">";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Start row:"), "html", null, true);
        yield "</label>
  </div>
  <div class=\"col-auto\">
    <input class=\"form-control\" id=\"startRowInput\" type=\"number\" name=\"pos\" min=\"0\" value=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pos"] ?? null), "html", null, true);
        yield "\"";
        if ((($context["unlim_num_rows"] ?? null) > 0)) {
            yield " max=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["unlim_num_rows"] ?? null) - 1), "html", null, true);
            yield "\"";
        }
        yield " required>
  </div>
  <div class=\"col-auto\">
    <label class=\"col-form-label\" for=\"maxRowsInput\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Number of rows:"), "html", null, true);
        yield "</label>
  </div>
  <div class=\"col-auto\">
    <input class=\"form-control\" id=\"maxRowsInput\" type=\"number\" name=\"session_max_rows\" min=\"1\" value=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rows"] ?? null), "html", null, true);
        yield "\" required>
  </div>
  <div class=\"col-auto\">
    <input class=\"btn btn-primary\" type=\"submit\" name=\"submit\" value=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
        yield "\">
  </div>
  <input type=\"hidden\" name=\"sql_query\" value=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sql_query"] ?? null), "html", null, true);
        yield "\">
  <input type=\"hidden\" name=\"unlim_num_rows\" value=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unlim_num_rows"] ?? null), "html", null, true);
        yield "\">
</fieldset>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "table/start_and_number_of_rows_fieldset.twig";
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
        return array (  85 => 18,  81 => 17,  76 => 15,  70 => 12,  64 => 9,  52 => 6,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "table/start_and_number_of_rows_fieldset.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/start_and_number_of_rows_fieldset.twig");
    }
}

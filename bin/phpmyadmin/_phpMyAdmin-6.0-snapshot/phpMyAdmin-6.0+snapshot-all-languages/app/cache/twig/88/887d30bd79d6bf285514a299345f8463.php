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

/* error/report_form.twig */
class __TwigTemplate_a861e3de57b5a211579d0a6926d75bb3 extends Template
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
        if ((($tmp = ($context["allowed_to_send_error_reports"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "<p>
  ";
            // line 3
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("This report automatically includes data about the error and information about relevant configuration settings. It will be sent to the phpMyAdmin team for debugging the error."), "html", null, true);
            yield "
</p>
<form action=\"";
            // line 5
            yield PhpMyAdmin\Url::getFromRoute("/error-report");
            yield "\" method=\"post\" id=\"errorReportForm\" class=\"ajax\">
  <div class=\"mb-3\">
    <label for=\"errorReportDescription\">
      <strong>
        ";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Can you tell us the steps leading to this error? It decisively helps in debugging:"), "html", null, true);
            yield "
      </strong>
    </label>
    <textarea class=\"form-control\" name=\"description\" id=\"errorReportDescription\"></textarea>
  </div>

  <div class=\"mb-3\">
    ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("You may examine the data in the error report:"), "html", null, true);
            yield "
    <pre class=\"pre-scrollable\">";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(($context["report_data"] ?? null), (Twig\Extension\CoreExtension::constant("JSON_PRETTY_PRINT") | Twig\Extension\CoreExtension::constant("JSON_UNESCAPED_SLASHES"))), "html", null, true);
            yield "</pre>
  </div>

  <div class=\"form-check\">
    <input class=\"form-check-input\" type=\"checkbox\" name=\"always_send\" id=\"errorReportAlwaysSendCheckbox\">
    <label class=\"form-check-label\" for=\"errorReportAlwaysSendCheckbox\">
      ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Automatically send report next time"), "html", null, true);
            yield "
    </label>
  </div>

  ";
            // line 27
            yield ($context["hidden_inputs"] ?? null);
            yield "
  ";
            // line 28
            yield ($context["hidden_fields"] ?? null);
            yield "
</form>
";
        } else {
            // line 31
            yield "<div class=\"mb-3\">
  <pre class=\"pre-scrollable\">";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(($context["report_data"] ?? null), (Twig\Extension\CoreExtension::constant("JSON_PRETTY_PRINT") | Twig\Extension\CoreExtension::constant("JSON_UNESCAPED_SLASHES"))), "html", null, true);
            yield "</pre>
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
        return "error/report_form.twig";
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
        return array (  102 => 32,  99 => 31,  93 => 28,  89 => 27,  82 => 23,  73 => 17,  69 => 16,  59 => 9,  52 => 5,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "error/report_form.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/error/report_form.twig");
    }
}

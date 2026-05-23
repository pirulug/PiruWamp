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

/* table/normalization/normalization.twig */
class __TwigTemplate_06535e6212a1ccde22fe44ce0a4ba4f5 extends Template
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
        yield "<form method=\"post\" action=\"";
        yield PhpMyAdmin\Url::getFromRoute("/normalization/1nf/step1");
        yield "\" name=\"normalize\" id=\"normalizeTable\" class=\"card\">
  ";
        // line 2
        yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
        yield "

  <div class=\"card-header\">";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Improve table structure (Normalization):"), "html", null, true);
        yield "</div>

  <div class=\"card-body\">
    <h3 class=\"card-title\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Select up to what step you want to normalize"), "html", null, true);
        yield "</h3>

    ";
        // line 9
        yield PhpMyAdmin\Twig\MessageExtension::getNotice(\_gettext("Hint: Please follow the procedure carefully in order to obtain correct normalization"));
        yield "

    <div class=\"form-check\">
      <input class=\"form-check-input\" type=\"radio\" name=\"normalizeTo\" id=\"normalizeToRadio1\" value=\"1nf\" checked>
      <label class=\"form-check-label\" for=\"normalizeToRadio1\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("First step of normalization (1NF)"), "html", null, true);
        yield "</label>
    </div>
    <div class=\"form-check\">
      <input class=\"form-check-input\" type=\"radio\" name=\"normalizeTo\" id=\"normalizeToRadio2\" value=\"2nf\">
      <label class=\"form-check-label\" for=\"normalizeToRadio2\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Second step of normalization (1NF+2NF)"), "html", null, true);
        yield "</label>
    </div>
    <div class=\"form-check\">
      <input class=\"form-check-input\" type=\"radio\" name=\"normalizeTo\" id=\"normalizeToRadio3\" value=\"3nf\">
      <label class=\"form-check-label\" for=\"normalizeToRadio3\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Third step of normalization (1NF+2NF+3NF)"), "html", null, true);
        yield "</label>
    </div>
  </div>

  <div class=\"card-footer\">
    <input class=\"btn btn-primary\" type=\"submit\" name=\"submit_normalize\" value=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
        yield "\">
  </div>
</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "table/normalization/normalization.twig";
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
        return array (  92 => 26,  84 => 21,  77 => 17,  70 => 13,  63 => 9,  58 => 7,  52 => 4,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "table/normalization/normalization.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/normalization/normalization.twig");
    }
}

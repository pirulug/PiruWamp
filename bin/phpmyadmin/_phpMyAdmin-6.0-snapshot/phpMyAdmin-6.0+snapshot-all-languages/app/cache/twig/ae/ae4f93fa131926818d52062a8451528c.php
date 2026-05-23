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

/* login/twofactor.twig */
class __TwigTemplate_42d6e26c97d8b300c6124a37bfe4872f extends Template
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
        yield "<form method=\"post\" class=\"disableAjax\">
  ";
        // line 2
        yield PhpMyAdmin\Url::getHiddenInputs();
        yield "

  <div class=\"card\">
    <div class=\"card-body\">
      ";
        // line 6
        yield ($context["form"] ?? null);
        yield "
    </div>
    <div class=\"card-footer\">
      ";
        // line 9
        if ((($tmp = ($context["show_submit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 10
            yield "        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Verify"), "html", null, true);
            yield "\">
      ";
        }
        // line 12
        yield "    </div>
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
        return "login/twofactor.twig";
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
        return array (  66 => 12,  60 => 10,  58 => 9,  52 => 6,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "login/twofactor.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/login/twofactor.twig");
    }
}

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

/* server/privileges/get_user_link.twig */
class __TwigTemplate_1f77c462ef9919b3ee61209f1b64de38 extends Template
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
        yield "<a
  ";
        // line 2
        if ((($tmp =  !(($context["link_class"] ?? null) === "")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            yield "    class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["link_class"] ?? null), "html", null, true);
            yield "\"
  ";
        }
        // line 5
        yield "  href=\"";
        yield PhpMyAdmin\Url::getFromRoute("/server/privileges", (((($tmp = ($context["is_revoke"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ([]) : (($context["url_params"] ?? null))));
        yield "\"
  ";
        // line 6
        if ((($tmp = ($context["is_revoke"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 7
            yield "    data-post=\"";
            yield PhpMyAdmin\Url::getCommon(($context["url_params"] ?? null), "");
            yield "\"
  ";
        }
        // line 9
        yield ">
  ";
        // line 10
        yield PhpMyAdmin\Html\Generator::getIcon(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", false, false, false, 10), CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "text", [], "any", false, false, false, 10));
        yield "
</a>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/privileges/get_user_link.twig";
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
        return array (  69 => 10,  66 => 9,  60 => 7,  58 => 6,  53 => 5,  47 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "server/privileges/get_user_link.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/privileges/get_user_link.twig");
    }
}

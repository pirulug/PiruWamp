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

/* server/privileges/user_overview.twig */
class __TwigTemplate_7255edad9971ea56cbd47409a8d8c190 extends Template
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
        yield "<div class=\"row\">
  <div class=\"col-12\">
    <h2>";
        // line 4
        yield PhpMyAdmin\Html\Generator::getIcon("b_usrlist");
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("User accounts overview"), "html", null, true);
        yield "
    </h2>
  </div>
</div>";
        // line 10
        yield ($context["error_messages"] ?? null);
        // line 12
        yield ($context["empty_user_notice"] ?? null);
        // line 14
        yield ($context["initials"] ?? null);
        // line 16
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["users_overview"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 17
            yield ($context["users_overview"] ?? null);
        } elseif ((($tmp =         // line 18
($context["is_createuser"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "  <div class=\"card\">
    <div class=\"card-header\">";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Create new user", "New"), "html", null, true);
            yield "</div>
    <div class=\"card-body\" id=\"fieldset_add_user\">
      <a id=\"add_user_anchor\" href=\"";
            // line 22
            yield PhpMyAdmin\Url::getFromRoute("/server/privileges", ["adduser" => true]);
            yield "\">";
            // line 23
            yield PhpMyAdmin\Html\Generator::getIcon("b_usradd", \_gettext("Add user account"));
            // line 24
            yield "</a>
    </div>
  </div>
";
        }
        // line 29
        yield ($context["flush_notice"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/privileges/user_overview.twig";
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
        return array (  85 => 29,  79 => 24,  77 => 23,  74 => 22,  69 => 20,  66 => 19,  64 => 18,  62 => 17,  60 => 16,  58 => 14,  56 => 12,  54 => 10,  48 => 5,  46 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "server/privileges/user_overview.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/privileges/user_overview.twig");
    }
}

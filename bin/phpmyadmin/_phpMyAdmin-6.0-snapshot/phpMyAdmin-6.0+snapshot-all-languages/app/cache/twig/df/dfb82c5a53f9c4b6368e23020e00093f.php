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

/* server/privileges/add_user.twig */
class __TwigTemplate_e5aab5508d482d0cc67a27749bd93efb extends Template
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
<h2>
  ";
        // line 3
        yield PhpMyAdmin\Html\Generator::getIcon("b_usradd");
        yield "
  ";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add user account"), "html", null, true);
        yield "
</h2>

<form name=\"usersForm\" id=\"addUsersForm\" action=\"";
        // line 7
        yield PhpMyAdmin\Url::getFromRoute("/server/privileges");
        yield "\" method=\"post\" autocomplete=\"off\">
  ";
        // line 8
        yield PhpMyAdmin\Url::getHiddenInputs();
        yield "

  ";
        // line 10
        yield ($context["login_information_fields_new"] ?? null);
        yield "

  <div class=\"card mb-3\">
    <div class=\"card-header\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Database for user account"), "html", null, true);
        yield "</div>
    <div class=\"card-body\">
      <input type=\"checkbox\" name=\"createdb-1\" id=\"createdb-1\">
      <label for=\"createdb-1\">";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Create database with same name and grant all privileges."), "html", null, true);
        yield "</label>
      <br>

      <input type=\"checkbox\" name=\"createdb-2\" id=\"createdb-2\">
      <label for=\"createdb-2\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Grant all privileges on wildcard name (username\\_%)."), "html", null, true);
        yield "</label>
      <br>

      ";
        // line 23
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["database"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 24
            yield "        <input type=\"checkbox\" name=\"createdb-3\" id=\"createdb-3\" checked>
        <label for=\"createdb-3\">";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_gettext("Grant all privileges on database %s."), ($context["database"] ?? null)), "html", null, true);
            yield "</label>
        <input type=\"hidden\" name=\"dbname\" value=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["database"] ?? null), "html", null, true);
            yield "\">
        <br>
      ";
        }
        // line 29
        yield "    </div>
  </div>

  ";
        // line 32
        if ((($tmp = ($context["is_grant_user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "    ";
            yield ($context["privileges_table"] ?? null);
            yield "
  ";
        }
        // line 35
        yield "
  <div>
    <input type=\"hidden\" name=\"adduser_submit\" value=\"1\">
    <input class=\"btn btn-primary\" type=\"submit\" id=\"adduser_submit\" value=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Create user"), "html", null, true);
        yield "\">
  </div>
</form>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/privileges/add_user.twig";
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
        return array (  123 => 38,  118 => 35,  112 => 33,  110 => 32,  105 => 29,  99 => 26,  95 => 25,  92 => 24,  90 => 23,  84 => 20,  77 => 16,  71 => 13,  65 => 10,  60 => 8,  56 => 7,  50 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "server/privileges/add_user.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/privileges/add_user.twig");
    }
}

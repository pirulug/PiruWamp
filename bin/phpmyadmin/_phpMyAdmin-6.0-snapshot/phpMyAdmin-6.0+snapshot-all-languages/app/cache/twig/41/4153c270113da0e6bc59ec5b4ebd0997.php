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

/* table/delete/confirm.twig */
class __TwigTemplate_1c01ec991c3147268376eb886acd4b1f extends Template
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
  <form action=\"";
        // line 2
        yield PhpMyAdmin\Url::getFromRoute("/table/delete/rows");
        yield "\" method=\"post\" class=\"card\">
    ";
        // line 3
        yield PhpMyAdmin\Url::getHiddenInputs(["db" =>         // line 4
($context["db"] ?? null), "table" =>         // line 5
($context["table"] ?? null), "selected" =>         // line 6
($context["selected"] ?? null), "original_sql_query" =>         // line 7
($context["sql_query"] ?? null), "fk_checks" => "0"]);
        // line 9
        yield "

    <div class=\"card-header\">
      ";
        // line 12
        yield PhpMyAdmin\Html\Generator::getIcon("s_really");
        yield "
      ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Do you really want to execute the following query?"), "html", null, true);
        yield "
    </div>

    <div class=\"card-body\">
      <ul class=\"mb-3\">
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["selected"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 19
            yield "          <li><code>DELETE FROM ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::backquote(($context["table"] ?? null)), "html", null, true);
            yield " WHERE ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["row"], "html", null, true);
            yield ";</code></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "      </ul>

      <div class=\"form-check\">
        <input class=\"form-check-input\" type=\"checkbox\" name=\"fk_checks\" id=\"checkForeignKeyCheckbox\" value=\"1\"";
        // line 24
        yield (((($tmp = ($context["is_foreign_key_check"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
        yield ">
        <label class=\"form-check-label\" for=\"checkForeignKeyCheckbox\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Enable foreign key checks"), "html", null, true);
        yield "</label>
      </div>
    </div>

    <div class=\"card-footer\">
      <input id=\"buttonYes\" class=\"btn btn-danger\" type=\"submit\" name=\"mult_btn\" value=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Yes"), "html", null, true);
        yield "\">
      <input id=\"buttonNo\" class=\"btn btn-secondary\" type=\"submit\" name=\"mult_btn\" value=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("No"), "html", null, true);
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
        return "table/delete/confirm.twig";
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
        return array (  108 => 31,  104 => 30,  96 => 25,  92 => 24,  87 => 21,  76 => 19,  72 => 18,  64 => 13,  60 => 12,  55 => 9,  53 => 7,  52 => 6,  51 => 5,  50 => 4,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "table/delete/confirm.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/delete/confirm.twig");
    }
}

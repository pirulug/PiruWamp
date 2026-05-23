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

/* table/structure/drop_confirm.twig */
class __TwigTemplate_71549be1e70dcf411ca64e30495c2a67 extends Template
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
  <h1 class=\"mt-3 mb-4\">";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Dropping columns from the table"), "html", null, true);
        yield "</h1>

  <form action=\"";
        // line 4
        yield PhpMyAdmin\Url::getFromRoute("/table/structure/drop");
        yield "\" method=\"post\" class=\"disableAjax card border-danger\">
    ";
        // line 5
        yield PhpMyAdmin\Url::getHiddenInputs(["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null), "selected" => ($context["fields"] ?? null)]);
        yield "

    <div class=\"card-header\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Do you really want to execute the following query?"), "html", null, true);
        yield "</div>
    <div class=\"card-body\">
      <code>
        ALTER TABLE ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::backquote(($context["table"] ?? null)), "html", null, true);
        yield "<br>
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["fields"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 12
            yield "          &nbsp;&nbsp;DROP ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::backquote($context["field"]), "html", null, true);
            // line 13
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield ";";
            } else {
                yield ",<br>";
            }
            // line 14
            yield "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "      </code>
    </div>

    <div class=\"card-footer\">
      <input id=\"buttonYes\" class=\"btn btn-danger\" type=\"submit\" name=\"mult_btn\" value=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Yes"), "html", null, true);
        yield "\">
      <input id=\"buttonNo\" class=\"btn btn-secondary\" type=\"submit\" name=\"mult_btn\" value=\"";
        // line 20
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
        return "table/structure/drop_confirm.twig";
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
        return array (  119 => 20,  115 => 19,  109 => 15,  95 => 14,  89 => 13,  86 => 12,  69 => 11,  65 => 10,  59 => 7,  54 => 5,  50 => 4,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "table/structure/drop_confirm.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/structure/drop_confirm.twig");
    }
}

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

/* server/select/index.twig */
class __TwigTemplate_784e4e9872c136049267f343c429c77c extends Template
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
        if ((($tmp = ($context["not_only_options"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "    <form class=\"disableAjax\" method=\"post\" action=\"";
            yield ($context["form_action"] ?? null);
            yield "\">
        ";
            // line 3
            yield PhpMyAdmin\Url::getHiddenFields([]);
            yield "
        <label for=\"select_server\" class=\"form-label\">
          ";
            // line 5
            if ((($tmp = ($context["has_label_icon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 6
                yield "            ";
                yield PhpMyAdmin\Html\Generator::getIcon("s_host", \_gettext("Current server:"));
                yield "
          ";
            } else {
                // line 8
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Current server:"), "html", null, true);
                yield "
          ";
            }
            // line 10
            yield "        </label>
        <select id=\"select_server\" class=\"form-select autosubmit\" name=\"server\">
            <option value=\"\">(";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Servers"), "html", null, true);
            yield ") ...</option>
            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["servers"] ?? null), "select", [], "any", false, false, false, 13));
            foreach ($context['_seq'] as $context["_key"] => $context["server"]) {
                // line 14
                yield "              <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "value", [], "any", false, false, false, 14), "html", null, true);
                yield "\"";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["server"], "selected", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" selected") : (""));
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "label", [], "any", false, false, false, 14), "html", null, true);
                yield "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['server'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            yield "        </select>
    </form>
";
        } elseif ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source,         // line 18
($context["servers"] ?? null), "list", [], "any", false, false, false, 18))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Current server:"), "html", null, true);
            yield "<br>
    <ul id=\"list_server\">
        <li>
            ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["servers"] ?? null), "list", [], "any", false, false, false, 22));
            foreach ($context['_seq'] as $context["_key"] => $context["server"]) {
                // line 23
                yield "                ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["server"], "selected", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 24
                    yield "                    <strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "label", [], "any", false, false, false, 24), "html", null, true);
                    yield "</strong>
                ";
                } else {
                    // line 26
                    yield "                    <a class=\"disableAjax item\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "href", [], "any", false, false, false, 26), "html", null, true);
                    yield "\">";
                    // line 27
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "label", [], "any", false, false, false, 27), "html", null, true);
                    // line 28
                    yield "</a>
                ";
                }
                // line 30
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['server'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            yield "        </li>
    </ul>
";
        } else {
            // line 34
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["servers"] ?? null), "select", [], "any", false, false, false, 34));
            foreach ($context['_seq'] as $context["_key"] => $context["server"]) {
                // line 35
                yield "    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "value", [], "any", false, false, false, 35), "html", null, true);
                yield "\"";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["server"], "selected", [], "any", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" selected") : (""));
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "label", [], "any", false, false, false, 35), "html", null, true);
                yield "</option>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['server'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/select/index.twig";
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
        return array (  145 => 35,  140 => 34,  135 => 31,  129 => 30,  125 => 28,  123 => 27,  119 => 26,  113 => 24,  110 => 23,  106 => 22,  99 => 19,  97 => 18,  93 => 16,  80 => 14,  76 => 13,  72 => 12,  68 => 10,  62 => 8,  56 => 6,  54 => 5,  49 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "server/select/index.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/select/index.twig");
    }
}

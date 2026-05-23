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

/* menu/main.twig */
class __TwigTemplate_cc424a63da65fde318b5853d10f13cea extends Template
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
        yield "<div id=\"floating_menubar\" class=\"w-100 position-fixed top-0 start-0 end-0 d-print-none\"></div>
<nav id=\"server-breadcrumb\" aria-label=\"breadcrumb\">
  <ol class=\"breadcrumb breadcrumb-navbar\">
    <li class=\"breadcrumb-item\">
      ";
        // line 5
        yield (((($tmp = PhpMyAdmin\Util::showIcons("TabsMode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (PhpMyAdmin\Html\Generator::getImage("s_host")) : (""));
        yield "
      <a href=\"";
        // line 6
        yield PhpMyAdmin\Url::getFromRoute(CoreExtension::getAttribute($this->env, $this->source, ($context["server"] ?? null), "url", [], "any", false, false, false, 6));
        yield "\" data-raw-text=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["server"] ?? null), "name", [], "any", false, false, false, 6), "html", null, true);
        yield "\" draggable=\"false\">
        ";
        // line 7
        if ((($tmp = PhpMyAdmin\Util::showText("TabsMode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Server:"), "html", null, true);
        }
        // line 8
        yield "        ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["server"] ?? null), "name", [], "any", false, false, false, 8), "html", null, true);
        yield "
      </a>
    </li>

    ";
        // line 12
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["database"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 13
            yield "      <li class=\"breadcrumb-item\">
        ";
            // line 14
            yield (((($tmp = PhpMyAdmin\Util::showIcons("TabsMode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (PhpMyAdmin\Html\Generator::getImage("s_db")) : (""));
            yield "
        <a href=\"";
            // line 15
            yield PhpMyAdmin\Url::getFromRoute(CoreExtension::getAttribute($this->env, $this->source, ($context["database"] ?? null), "url", [], "any", false, false, false, 15), ["db" => CoreExtension::getAttribute($this->env, $this->source, ($context["database"] ?? null), "name", [], "any", false, false, false, 15)]);
            yield "\" data-raw-text=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["database"] ?? null), "name", [], "any", false, false, false, 15), "html", null, true);
            yield "\" draggable=\"false\">
          ";
            // line 16
            if ((($tmp = PhpMyAdmin\Util::showText("TabsMode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Database:"), "html", null, true);
            }
            // line 17
            yield "          ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["database"] ?? null), "name", [], "any", false, false, false, 17), "html", null, true);
            yield "
        </a>
      </li>

      ";
            // line 21
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["table"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 22
                yield "        <li class=\"breadcrumb-item\">
          ";
                // line 23
                yield (((($tmp = PhpMyAdmin\Util::showIcons("TabsMode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (PhpMyAdmin\Html\Generator::getImage((((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["table"] ?? null), "is_view", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("b_views") : ("s_tbl")))) : (""));
                yield "
          <a href=\"";
                // line 24
                yield PhpMyAdmin\Url::getFromRoute(CoreExtension::getAttribute($this->env, $this->source, ($context["table"] ?? null), "url", [], "any", false, false, false, 24), ["db" => CoreExtension::getAttribute($this->env, $this->source, ($context["database"] ?? null), "name", [], "any", false, false, false, 24), "table" => CoreExtension::getAttribute($this->env, $this->source, ($context["table"] ?? null), "name", [], "any", false, false, false, 24), "pos" => 0]);
                yield "\" data-raw-text=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["table"] ?? null), "name", [], "any", false, false, false, 24), "html", null, true);
                yield "\" draggable=\"false\">
            ";
                // line 25
                if ((($tmp = PhpMyAdmin\Util::showText("TabsMode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 26
                    yield "              ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["table"] ?? null), "is_view", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 27
                        yield "                ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("View:"), "html", null, true);
                        yield "
              ";
                    } else {
                        // line 29
                        yield "                ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table:"), "html", null, true);
                        yield "
              ";
                    }
                    // line 31
                    yield "            ";
                }
                // line 32
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["table"] ?? null), "name", [], "any", false, false, false, 32), "html", null, true);
                yield "
          </a>
        </li>

        ";
                // line 36
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["table"] ?? null), "comment", [], "any", false, false, false, 36))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 37
                    yield "          <span class=\"breadcrumb-comment\" draggable=\"false\">“";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["table"] ?? null), "comment", [], "any", false, false, false, 37), "html", null, true);
                    yield "”</span>
        ";
                }
                // line 39
                yield "      ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["database"] ?? null), "comment", [], "any", true, true, false, 39) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["database"] ?? null), "comment", [], "any", false, false, false, 39)))) {
                // line 40
                yield "        <span class=\"breadcrumb-comment\" draggable=\"false\">“";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["database"] ?? null), "comment", [], "any", false, false, false, 40), "html", null, true);
                yield "”</span>
      ";
            }
            // line 42
            yield "    ";
        }
        // line 43
        yield "  </ol>
</nav>

<div id=\"topmenucontainer\" class=\"menucontainer\">
  <nav class=\"navbar navbar-expand-lg\">
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-label=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(
// l10n: Show or hide the menu using the hamburger style button
\_gettext("Toggle navigation")
, "html", null, true);
        yield "\" aria-controls=\"navbarNav\" aria-expanded=\"false\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
      <ul id=\"topmenu\" class=\"navbar-nav\">
        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 55
            yield "          <li class=\"nav-item";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "active", [], "any", false, false, false, 55)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" active") : (""));
            yield "\">
            <a class=\"nav-link text-nowrap disableAjax\" href=\"";
            // line 56
            yield PhpMyAdmin\Url::getFromRoute(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "route", [], "any", false, false, false, 56), Twig\Extension\CoreExtension::merge(($context["url_params"] ?? null), (((CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "args", [], "any", true, true, false, 56) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "args", [], "any", false, false, false, 56)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "args", [], "any", false, false, false, 56)) : ([]))));
            yield "\">
              ";
            // line 57
            yield PhpMyAdmin\Html\Generator::getIcon(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "icon", [], "any", false, false, false, 57), CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "text", [], "any", false, false, false, 57), false, true, "TabsMode");
            yield "
              ";
            // line 58
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "active", [], "any", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 59
                yield "                <span class=\"visually-hidden\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(
// l10n: Current page
\_gettext("(current)")
, "html", null, true);
                yield "</span>
              ";
            }
            // line 61
            yield "            </a>
          </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tab'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        yield "      </ul>
    </div>
  </nav>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "menu/main.twig";
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
        return array (  214 => 64,  206 => 61,  197 => 59,  195 => 58,  191 => 57,  187 => 56,  182 => 55,  178 => 54,  167 => 49,  160 => 43,  157 => 42,  151 => 40,  148 => 39,  142 => 37,  140 => 36,  132 => 32,  129 => 31,  123 => 29,  117 => 27,  114 => 26,  112 => 25,  106 => 24,  102 => 23,  99 => 22,  97 => 21,  89 => 17,  85 => 16,  79 => 15,  75 => 14,  72 => 13,  70 => 12,  62 => 8,  58 => 7,  52 => 6,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "menu/main.twig", "C:\\Pirulug\\PiruWamp\\bin\\phpmyadmin\\phpMyAdmin-6.0-snapshot\\phpMyAdmin-6.0+snapshot-all-languages\\resources\\templates\\menu\\main.twig");
    }
}

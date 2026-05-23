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

/* navigation/tree/quick_warp.twig */
class __TwigTemplate_2cb02670415f332b8a10cc2c10c90652 extends Template
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
        if (( !Twig\Extension\CoreExtension::testEmpty(($context["recent"] ?? null)) ||  !Twig\Extension\CoreExtension::testEmpty(($context["favorite"] ?? null)))) {
            // line 2
            yield "  <div class=\"row g-1 my-3 mx-1\" id=\"recentFavoriteTablesWrapper\">
    ";
            // line 3
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["recent"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 4
                yield "      <div class=\"col-auto dropdown\">
        <button title=\"";
                // line 5
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Recently visited tables"), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-secondary dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">";
                // line 6
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Recent"), "html", null, true);
                // line 7
                yield "</button>
        <ul class=\"dropdown-menu\" id=\"recentTableList\">
          ";
                // line 9
                yield ($context["recent"] ?? null);
                yield "
        </ul>
      </div>
    ";
            }
            // line 13
            yield "
    ";
            // line 14
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["favorite"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 15
                yield "      <div class=\"col-auto dropdown\">
        <button title=\"";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Favorite tables"), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-secondary dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Favorites"), "html", null, true);
                // line 18
                yield "</button>
        <ul class=\"dropdown-menu\" id=\"favoriteTableList\">
          ";
                // line 20
                yield ($context["favorite"] ?? null);
                yield "
        </ul>
      </div>
    ";
            }
            // line 24
            yield "  </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "navigation/tree/quick_warp.twig";
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
        return array (  92 => 24,  85 => 20,  81 => 18,  79 => 17,  76 => 16,  73 => 15,  71 => 14,  68 => 13,  61 => 9,  57 => 7,  55 => 6,  52 => 5,  49 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "navigation/tree/quick_warp.twig", "C:\\Pirulug\\PiruWamp\\bin\\phpmyadmin\\phpMyAdmin-6.0-snapshot\\phpMyAdmin-6.0+snapshot-all-languages\\resources\\templates\\navigation\\tree\\quick_warp.twig");
    }
}

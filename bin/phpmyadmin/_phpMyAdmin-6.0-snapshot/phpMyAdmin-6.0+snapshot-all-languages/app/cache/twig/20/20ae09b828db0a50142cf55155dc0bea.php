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

/* console/bookmark_content.twig */
class __TwigTemplate_7e7866f3f4573c671b0bc1b17cfb14c6 extends Template
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
        yield "<div class=\"message welcome\">
  <span>";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["welcome_message"] ?? null), "html", null, true);
        yield "</span>
</div>
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["bookmarks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["bookmark"]) {
            // line 5
            yield "  <div class=\"message collapsed bookmark\" bookmarkid=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bookmark"], "getId", [], "method", false, false, false, 5), "html", null, true);
            yield "\" targetdb=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bookmark"], "getDatabase", [], "method", false, false, false, 5), "html", null, true);
            yield "\">
    <div class=\"action_content\">
      <span class=\"action collapse\">";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Collapse"), "html", null, true);
            yield "</span>
      <span class=\"action expand\">";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Expand"), "html", null, true);
            yield "</span>
      <span class=\"action requery\">";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Requery"), "html", null, true);
            yield "</span>
      <span class=\"action edit_bookmark\">";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Edit"), "html", null, true);
            yield "</span>
      <span class=\"action delete_bookmark\">";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Delete"), "html", null, true);
            yield "</span>
      <span class=\"text targetdb\">";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Database"), "html", null, true);
            yield ": <span>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bookmark"], "getDatabase", [], "method", false, false, false, 12), "html", null, true);
            yield "</span></span>
    </div>

    <span class=\"bookmark_label";
            // line 15
            yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["bookmark"], "getUser", [], "method", false, false, false, 15))) ? (" shared") : (""));
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bookmark"], "getLabel", [], "method", false, false, false, 15), "html", null, true);
            yield "</span>
    <span class=\"query\">";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bookmark"], "getQuery", [], "method", false, false, false, 16), "html", null, true);
            yield "</span>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['bookmark'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "console/bookmark_content.twig";
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
        return array (  96 => 16,  90 => 15,  82 => 12,  78 => 11,  74 => 10,  70 => 9,  66 => 8,  62 => 7,  54 => 5,  50 => 4,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "console/bookmark_content.twig", "C:\\Pirulug\\PiruWamp\\bin\\phpmyadmin\\phpMyAdmin-6.0-snapshot\\phpMyAdmin-6.0+snapshot-all-languages\\resources\\templates\\console\\bookmark_content.twig");
    }
}

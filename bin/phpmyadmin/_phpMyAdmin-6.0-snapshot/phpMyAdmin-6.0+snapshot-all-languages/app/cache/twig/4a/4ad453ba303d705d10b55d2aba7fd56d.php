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

/* scripts.twig */
class __TwigTemplate_23192a625b6fd89fa9de5b8998a2dcdb extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["files"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 2
            yield "  <script data-cfasync=\"false\" src=\"";
            yield (((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 2)) && is_string($_v1 = "index.php") && str_starts_with($_v0, $_v1))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 2), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("js/" . CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 2)), "html", null, true)));
            // line 3
            yield ((CoreExtension::inFilter(".php", CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 3))) ? (PhpMyAdmin\Url::getCommon(Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "params", [], "any", false, false, false, 3), ["v" => CoreExtension::getAttribute($this->env, $this->source, ($context["pma"] ?? null), "version", [], "any", false, false, false, 3)]))) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("?v=" . Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, ($context["pma"] ?? null), "version", [], "any", false, false, false, 3))), "html", null, true)));
            yield "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['file'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        yield "
<script data-cfasync=\"false\">
// <![CDATA[
";
        // line 8
        yield ($context["code"] ?? null);
        yield "
";
        // line 9
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["files"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["files"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 11
                yield "window.AJAX.scriptHandler.add('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 11), "js"), "html", null, true);
                yield "', ";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["file"], "has_onload", [], "any", false, false, false, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
                yield ");
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['file'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            yield "
\$(function() {
";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["files"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 16
                yield "  ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["file"], "has_onload", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 17
                    yield "  window.AJAX.fireOnload('";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 17), "js"), "html", null, true);
                    yield "');
  ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['file'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            yield "});
";
        }
        // line 22
        yield "// ]]>
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "scripts.twig";
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
        return array (  108 => 22,  104 => 20,  94 => 17,  91 => 16,  87 => 15,  83 => 13,  72 => 11,  68 => 10,  66 => 9,  62 => 8,  57 => 5,  49 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "scripts.twig", "C:\\Pirulug\\PiruWamp\\bin\\phpmyadmin\\phpMyAdmin-6.0-snapshot\\phpMyAdmin-6.0+snapshot-all-languages\\resources\\templates\\scripts.twig");
    }
}

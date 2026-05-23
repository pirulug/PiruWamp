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

/* list_navigator.twig */
class __TwigTemplate_8e2bd3fcb1e040e621ac811a504c83d8 extends Template
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
        if ((($context["max_count"] ?? null) < ($context["count"] ?? null))) {
            // line 2
            yield "<div class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(($context["classes"] ?? null), " "), "html", null, true);
            yield "\">
  ";
            // line 3
            if ((($context["frame"] ?? null) != "frame_navigation")) {
                // line 4
                yield "    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Page number:"), "html", null, true);
                yield "
  ";
            }
            // line 6
            yield "
  ";
            // line 7
            if ((($context["position"] ?? null) > 0)) {
                // line 8
                yield "    <a href=\"";
                yield ($context["script"] ?? null);
                yield "\" data-post=\"";
                yield PhpMyAdmin\Url::getCommon(Twig\Extension\CoreExtension::merge(($context["url_params"] ?? null), [ (string)($context["param_name"] ?? null) => 0]), "", false);
                yield "\"";
                yield (((($context["frame"] ?? null) == "frame_navigation")) ? (" class=\"ajax\"") : (""));
                yield " title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("First page", "Begin"), "html", null, true);
                yield "\">
      ";
                // line 9
                if ((($tmp = PhpMyAdmin\Util::showIcons("TableNavigationLinksMode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 10
                    yield "        &lt;&lt;
      ";
                }
                // line 12
                yield "      ";
                if ((($tmp = PhpMyAdmin\Util::showText("TableNavigationLinksMode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 13
                    yield "        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("First page", "Begin"), "html", null, true);
                    yield "
      ";
                }
                // line 15
                yield "    </a>
    <a href=\"";
                // line 16
                yield ($context["script"] ?? null);
                yield "\" data-post=\"";
                yield PhpMyAdmin\Url::getCommon(Twig\Extension\CoreExtension::merge(($context["url_params"] ?? null), [ (string)($context["param_name"] ?? null) => (($context["position"] ?? null) - ($context["max_count"] ?? null))]), "", false);
                yield "\"";
                yield (((($context["frame"] ?? null) == "frame_navigation")) ? (" class=\"ajax\"") : (""));
                yield " title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Previous page", "Previous"), "html", null, true);
                yield "\">
      ";
                // line 17
                if ((($tmp = PhpMyAdmin\Util::showIcons("TableNavigationLinksMode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 18
                    yield "        &lt;
      ";
                }
                // line 20
                yield "      ";
                if ((($tmp = PhpMyAdmin\Util::showText("TableNavigationLinksMode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 21
                    yield "        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Previous page", "Previous"), "html", null, true);
                    yield "
      ";
                }
                // line 23
                yield "    </a>
  ";
            }
            // line 25
            yield "
  <form action=\"";
            // line 26
            yield ($context["script"] ?? null);
            yield "\" method=\"post\">
    ";
            // line 27
            yield PhpMyAdmin\Url::getHiddenInputs(($context["url_params"] ?? null));
            yield "

    ";
            // line 29
            yield ($context["page_selector"] ?? null);
            yield "
  </form>

  ";
            // line 32
            if (((($context["position"] ?? null) + ($context["max_count"] ?? null)) < ($context["count"] ?? null))) {
                // line 33
                yield "    <a href=\"";
                yield ($context["script"] ?? null);
                yield "\" data-post=\"";
                yield PhpMyAdmin\Url::getCommon(Twig\Extension\CoreExtension::merge(($context["url_params"] ?? null), [ (string)($context["param_name"] ?? null) => (($context["position"] ?? null) + ($context["max_count"] ?? null))]), "", false);
                yield "\"";
                yield (((($context["frame"] ?? null) == "frame_navigation")) ? (" class=\"ajax\"") : (""));
                yield " title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Next page", "Next"), "html", null, true);
                yield "\">
      ";
                // line 34
                if ((($tmp = PhpMyAdmin\Util::showText("TableNavigationLinksMode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 35
                    yield "        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Next page", "Next"), "html", null, true);
                    yield "
      ";
                }
                // line 37
                yield "      ";
                if ((($tmp = PhpMyAdmin\Util::showIcons("TableNavigationLinksMode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 38
                    yield "        &gt;
      ";
                }
                // line 40
                yield "    </a>
    ";
                // line 41
                $context["last_pos"] = ((int) floor((($context["count"] ?? null) / ($context["max_count"] ?? null))) * ($context["max_count"] ?? null));
                // line 42
                yield "    <a href=\"";
                yield ($context["script"] ?? null);
                yield "\" data-post=\"";
                yield PhpMyAdmin\Url::getCommon(Twig\Extension\CoreExtension::merge(($context["url_params"] ?? null), [ (string)($context["param_name"] ?? null) => (((($context["last_pos"] ?? null) == ($context["count"] ?? null))) ? ((($context["count"] ?? null) - ($context["max_count"] ?? null))) : (($context["last_pos"] ?? null)))]), "", false);
                yield "\"";
                yield (((($context["frame"] ?? null) == "frame_navigation")) ? (" class=\"ajax\"") : (""));
                yield " title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Last page", "End"), "html", null, true);
                yield "\">
      ";
                // line 43
                if ((($tmp = PhpMyAdmin\Util::showText("TableNavigationLinksMode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 44
                    yield "        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Last page", "End"), "html", null, true);
                    yield "
      ";
                }
                // line 46
                yield "      ";
                if ((($tmp = PhpMyAdmin\Util::showIcons("TableNavigationLinksMode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 47
                    yield "        &gt;&gt;
      ";
                }
                // line 49
                yield "    </a>
  ";
            }
            // line 51
            yield "</div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "list_navigator.twig";
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
        return array (  201 => 51,  197 => 49,  193 => 47,  190 => 46,  184 => 44,  182 => 43,  171 => 42,  169 => 41,  166 => 40,  162 => 38,  159 => 37,  153 => 35,  151 => 34,  140 => 33,  138 => 32,  132 => 29,  127 => 27,  123 => 26,  120 => 25,  116 => 23,  110 => 21,  107 => 20,  103 => 18,  101 => 17,  91 => 16,  88 => 15,  82 => 13,  79 => 12,  75 => 10,  73 => 9,  62 => 8,  60 => 7,  57 => 6,  51 => 4,  49 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "list_navigator.twig", "C:\\Pirulug\\PiruWamp\\bin\\phpmyadmin\\phpMyAdmin-6.0-snapshot\\phpMyAdmin-6.0+snapshot-all-languages\\resources\\templates\\list_navigator.twig");
    }
}

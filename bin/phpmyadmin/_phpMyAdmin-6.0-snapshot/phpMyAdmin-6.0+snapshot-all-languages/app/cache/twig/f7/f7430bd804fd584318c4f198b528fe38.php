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

/* server/status/processes/index.twig */
class __TwigTemplate_cc88b1f0ed509aa60c6834f038e26e5a extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "server/status/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $context["active"] = "processes";
        // line 1
        $this->parent = $this->load("server/status/base.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "
<div class=\"card mb-3\" id=\"tableFilter\">
  <div class=\"card-header\">";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Filters"), "html", null, true);
        yield "</div>
  <div class=\"card-body\">
    <form action=\"";
        // line 8
        yield PhpMyAdmin\Url::getFromRoute("/server/status/processes");
        yield "\" method=\"post\" class=\"row row-cols-lg-auto gy-1 gx-3 align-items-center\">
      ";
        // line 9
        yield PhpMyAdmin\Url::getHiddenInputs(($context["url_params"] ?? null));
        yield "

      <div class=\"col-12\">
        <div class=\"form-check\">
          <input class=\"form-check-input autosubmit\" type=\"checkbox\" name=\"showExecuting\" id=\"showExecuting\"";
        // line 13
        yield (((($tmp = ($context["is_checked"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
        yield ">
          <label class=\"form-check-label\" for=\"showExecuting\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Show only active"), "html", null, true);
        yield "</label>
        </div>
      </div>

      <div class=\"col-12\">
        <input class=\"btn btn-secondary\" type=\"submit\" value=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Refresh"), "html", null, true);
        yield "\">
      </div>
    </form>
  </div>
</div>

";
        // line 25
        yield ($context["server_process_list"] ?? null);
        yield "

<div class=\"row\">
";
        // line 28
        yield PhpMyAdmin\Twig\MessageExtension::getNotice(\_gettext("Note: Enabling the auto refresh here might cause heavy traffic between the web server and the MySQL server."));
        yield "
</div>

<div class=\"tabLinks row\">
  <label>
    ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Refresh rate"), "html", null, true);
        yield ":

    <select id=\"id_refreshRate\" class=\"refreshRate\" name=\"refreshRate\">
      ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([2, 3, 4, 5, 10, 20, 40, 60, 120, 300, 600, 1200]);
        foreach ($context['_seq'] as $context["_key"] => $context["rate"]) {
            // line 37
            yield "        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["rate"], "html", null, true);
            yield "\"";
            yield ((($context["rate"] == 5)) ? (" selected") : (""));
            yield ">
          ";
            // line 38
            if (($context["rate"] < 60)) {
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_ngettext("%d second", "%d seconds", $context["rate"]), $context["rate"]), "html", null, true);
            } else {
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_ngettext("%d minute", "%d minutes", ($context["rate"] / 60)), ($context["rate"] / 60)), "html", null, true);
            }
            // line 43
            yield "        </option>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['rate'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "    </select>
  </label>
  <a id=\"toggleRefresh\" href=\"#\">
    ";
        // line 48
        yield PhpMyAdmin\Html\Generator::getImage("play");
        yield "
    ";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Start auto refresh"), "html", null, true);
        yield "
  </a>
</div>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/status/processes/index.twig";
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
        return array (  157 => 49,  153 => 48,  148 => 45,  141 => 43,  138 => 41,  135 => 39,  133 => 38,  126 => 37,  122 => 36,  116 => 33,  108 => 28,  102 => 25,  93 => 19,  85 => 14,  81 => 13,  74 => 9,  70 => 8,  65 => 6,  61 => 4,  54 => 3,  49 => 1,  47 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "server/status/processes/index.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/status/processes/index.twig");
    }
}

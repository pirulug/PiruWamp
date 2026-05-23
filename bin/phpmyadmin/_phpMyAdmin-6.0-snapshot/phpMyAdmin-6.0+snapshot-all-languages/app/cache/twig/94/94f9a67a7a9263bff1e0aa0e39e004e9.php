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

/* server/engines/_innodb_buffer_pool.twig */
class __TwigTemplate_711b9bca5a22d53094c7004c29874d72 extends Template
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
        yield "<table class=\"table table-striped table-hover w-auto float-start caption-top\">
  <caption>";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Buffer pool usage"), "html", null, true);
        yield "</caption>
  <tbody>
    <tr>
      <th scope=\"row\">";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Free pages"), "html", null, true);
        yield "</th>
      <td class=\"font-monospace text-end\">";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["buffer_pool"] ?? null), "pagesFree", [], "any", false, false, false, 6), 0), "html", null, true);
        yield "</td>
    </tr>
    <tr>
      <th scope=\"row\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Dirty pages"), "html", null, true);
        yield "</th>
      <td class=\"font-monospace text-end\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["buffer_pool"] ?? null), "pagesDirty", [], "any", false, false, false, 10), 0), "html", null, true);
        yield "</td>
    </tr>
    <tr>
      <th scope=\"row\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Pages containing data"), "html", null, true);
        yield "</th>
      <td class=\"font-monospace text-end\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["buffer_pool"] ?? null), "pagesData", [], "any", false, false, false, 14), 0), "html", null, true);
        yield "</td>
    </tr>
    <tr>
      <th scope=\"row\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Pages to be flushed"), "html", null, true);
        yield "</th>
      <td class=\"font-monospace text-end\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["buffer_pool"] ?? null), "pagesFlushed", [], "any", false, false, false, 18), 0), "html", null, true);
        yield "</td>
    </tr>
    <tr>
      <th scope=\"row\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Busy pages"), "html", null, true);
        yield "</th>
      <td class=\"font-monospace text-end\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["buffer_pool"] ?? null), "pagesMisc", [], "any", false, false, false, 22), 0), "html", null, true);
        yield "</td>
    </tr>
";
        // line 24
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["buffer_pool"] ?? null), "pagesLatched", [], "any", false, false, false, 24) != null)) {
            // line 25
            yield "    <tr>
      <th scope=\"row\">";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Latched pages"), "html", null, true);
            yield "</th>
      <td class=\"font-monospace text-end\">";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["buffer_pool"] ?? null), "pagesLatched", [], "any", false, false, false, 27), 0), "html", null, true);
            yield "</td>
    </tr>
";
        }
        // line 30
        yield "  </tbody>
  <tfoot>
    <tr>
      <th colspan=\"2\">
        ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Total:"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_gettext("%s pages"), PhpMyAdmin\Util::formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["buffer_pool"] ?? null), "pagesTotal", [], "any", false, false, false, 34), 0)), "html", null, true);
        yield " / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(PhpMyAdmin\Util::formatByteDown((CoreExtension::getAttribute($this->env, $this->source, ($context["buffer_pool"] ?? null), "pagesTotal", [], "any", false, false, false, 34) * CoreExtension::getAttribute($this->env, $this->source, ($context["buffer_pool"] ?? null), "innodbPageSize", [], "any", false, false, false, 34))), " "), "html", null, true);
        yield "
      </th>
    </tr>
  </tfoot>
</table>

<table class=\"table table-striped table-hover w-auto ms-4 float-start caption-top\">
  <caption>";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Buffer pool activity"), "html", null, true);
        yield "</caption>
  <tbody>
    <tr>
      <th scope=\"row\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Read requests"), "html", null, true);
        yield "</th>
      <td class=\"font-monospace text-end\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["buffer_pool"] ?? null), "readRequests", [], "any", false, false, false, 45), 0), "html", null, true);
        yield "</td>
    </tr>
    <tr>
      <th scope=\"row\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Write requests"), "html", null, true);
        yield "</th>
      <td class=\"font-monospace text-end\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["buffer_pool"] ?? null), "writeRequests", [], "any", false, false, false, 49), 0), "html", null, true);
        yield "</td>
    </tr>
    <tr>
      <th scope=\"row\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Read misses"), "html", null, true);
        yield "</th>
      <td class=\"font-monospace text-end\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["buffer_pool"] ?? null), "reads", [], "any", false, false, false, 53), 0), "html", null, true);
        yield "</td>
    </tr>
    <tr>
      <th scope=\"row\">";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Write waits"), "html", null, true);
        yield "</th>
      <td class=\"font-monospace text-end\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["buffer_pool"] ?? null), "waitFree", [], "any", false, false, false, 57), 0), "html", null, true);
        yield "</td>
    </tr>
    <tr>
      <th scope=\"row\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Read misses in %"), "html", null, true);
        yield "</th>
      <td class=\"font-monospace text-end\">";
        // line 62
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["buffer_pool"] ?? null), "readRequests", [], "any", false, false, false, 62) != 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((PhpMyAdmin\Util::formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["buffer_pool"] ?? null), "reads", [], "any", false, false, false, 62) * 100) / CoreExtension::getAttribute($this->env, $this->source, ($context["buffer_pool"] ?? null), "readRequests", [], "any", false, false, false, 62)), 3, 2) . "%"), "html", null, true)) : ("---"));
        // line 63
        yield "</td>
    </tr>
    <tr>
      <th scope=\"row\">";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Write waits in %"), "html", null, true);
        yield "</th>
      <td class=\"font-monospace text-end\">";
        // line 68
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["buffer_pool"] ?? null), "writeRequests", [], "any", false, false, false, 68) != 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((PhpMyAdmin\Util::formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["buffer_pool"] ?? null), "waitFree", [], "any", false, false, false, 68) * 100) / CoreExtension::getAttribute($this->env, $this->source, ($context["buffer_pool"] ?? null), "writeRequests", [], "any", false, false, false, 68)), 3, 2) . "%"), "html", null, true)) : ("---"));
        // line 69
        yield "</td>
    </tr>
  </tbody>
</table>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/engines/_innodb_buffer_pool.twig";
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
        return array (  198 => 69,  196 => 68,  192 => 66,  187 => 63,  185 => 62,  181 => 60,  175 => 57,  171 => 56,  165 => 53,  161 => 52,  155 => 49,  151 => 48,  145 => 45,  141 => 44,  135 => 41,  121 => 34,  115 => 30,  109 => 27,  105 => 26,  102 => 25,  100 => 24,  95 => 22,  91 => 21,  85 => 18,  81 => 17,  75 => 14,  71 => 13,  65 => 10,  61 => 9,  55 => 6,  51 => 5,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "server/engines/_innodb_buffer_pool.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/engines/_innodb_buffer_pool.twig");
    }
}

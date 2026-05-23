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

/* table/tracking/report_table.twig */
class __TwigTemplate_33a93849fd18816192dd73d1fbf79a25 extends Template
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
        yield "<table id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["table_id"] ?? null), "html", null, true);
        yield "\" class=\"table table-striped table-hover\">
    <thead>
        <tr>
            <th>";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Number", "#"), "html", null, true);
        yield "</th>
            <th>";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Date"), "html", null, true);
        yield "</th>
            <th>";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Username"), "html", null, true);
        yield "</th>
            <th>";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["header_message"] ?? null), "html", null, true);
        yield "</th>
            <th>";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Action"), "html", null, true);
        yield "</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["entries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 13
            yield "            <tr class=\"noclick\">
                <td class=\"text-end\"><small>";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "line_number", [], "any", false, false, false, 14), "html", null, true);
            yield "</small></td>
                <td><small>";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "date", [], "any", false, false, false, 15), "html", null, true);
            yield "</small></td>
                <td><small>";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "username", [], "any", false, false, false, 16), "html", null, true);
            yield "</small></td>
                <td>";
            // line 17
            yield CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "formated_statement", [], "any", false, false, false, 17);
            yield "</td>
                <td class=\"text-nowrap\">
                    <a class=\"delete_entry_anchor ajax\" href=\"";
            // line 19
            yield PhpMyAdmin\Url::getFromRoute("/table/tracking");
            yield "\" data-post=\"";
            // line 20
            yield CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "url_params", [], "any", false, false, false, 20);
            yield "\">
                        ";
            // line 21
            yield ($context["drop_image_or_text"] ?? null);
            yield "
                    </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['entry'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "    </tbody>
</table>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "table/tracking/report_table.twig";
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
        return array (  114 => 26,  103 => 21,  99 => 20,  96 => 19,  91 => 17,  87 => 16,  83 => 15,  79 => 14,  76 => 13,  72 => 12,  65 => 8,  61 => 7,  57 => 6,  53 => 5,  49 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "table/tracking/report_table.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/tracking/report_table.twig");
    }
}

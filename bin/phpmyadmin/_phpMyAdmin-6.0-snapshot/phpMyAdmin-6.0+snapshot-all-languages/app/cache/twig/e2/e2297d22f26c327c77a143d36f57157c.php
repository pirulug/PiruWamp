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

/* table/page_with_secondary_tabs.twig */
class __TwigTemplate_7e53ce571643df1027b97e1b10c61394 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        if (( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "relationFeature", [], "any", false, false, false, 1)) || ($context["is_foreign_key_supported"] ?? null))) {
            // line 2
            yield "  <ul class=\"nav nav-pills m-2 d-print-none\">
    <li class=\"nav-item\">
      <a href=\"";
            // line 4
            yield PhpMyAdmin\Url::getFromRoute("/table/structure", ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)]);
            yield "\" id=\"table_structure_id\" class=\"nav-link";
            yield (((($context["route"] ?? null) == "/table/structure")) ? (" active") : (""));
            yield " disableAjax\">
        ";
            // line 5
            yield PhpMyAdmin\Html\Generator::getIcon("b_props", \_gettext("Table structure"), true);
            yield "
      </a>
    </li>

    <li class=\"nav-item\">
      <a href=\"";
            // line 10
            yield PhpMyAdmin\Url::getFromRoute("/table/relation", ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)]);
            yield "\" id=\"table_relation_id\" class=\"nav-link";
            yield (((($context["route"] ?? null) == "/table/relation")) ? (" active") : (""));
            yield " disableAjax\">
        ";
            // line 11
            yield PhpMyAdmin\Html\Generator::getIcon("b_relations", \_gettext("Relation view"), true);
            yield "
      </a>
    </li>
  </ul>
";
        }
        // line 16
        yield "
";
        // line 17
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/flash_messages.twig", [], false);
        yield "

<div id=\"structure_content\">
  ";
        // line 20
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 21
        yield "</div>
";
        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "table/page_with_secondary_tabs.twig";
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
        return array (  94 => 20,  88 => 21,  86 => 20,  80 => 17,  77 => 16,  69 => 11,  63 => 10,  55 => 5,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "table/page_with_secondary_tabs.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/page_with_secondary_tabs.twig");
    }
}

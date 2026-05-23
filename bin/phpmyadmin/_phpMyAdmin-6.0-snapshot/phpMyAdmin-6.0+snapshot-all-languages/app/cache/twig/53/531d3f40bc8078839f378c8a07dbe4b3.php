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

/* database/structure/index.twig */
class __TwigTemplate_7e82200a2c661ac5b78da55c397cf06d extends Template
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
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/flash_messages.twig", [], false);
        yield "

";
        // line 3
        if ((($tmp = ($context["has_tables"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "  <div id=\"tableslistcontainer\">
    ";
            // line 5
            yield ($context["list_navigator_html"] ?? null);
            yield "

    ";
            // line 7
            yield ($context["table_list_html"] ?? null);
            yield "

    ";
            // line 9
            yield ($context["list_navigator_html"] ?? null);
            yield "
  </div>
  <hr>
  <p class=\"d-print-none\">
    <button type=\"button\" class=\"btn btn-link p-0 jsPrintButton\">";
            // line 13
            yield PhpMyAdmin\Html\Generator::getIcon("b_print", \_gettext("Print"), true);
            yield "</button>
    <a href=\"";
            // line 14
            yield PhpMyAdmin\Url::getFromRoute("/database/data-dictionary", ["db" => ($context["database"] ?? null), "goto" => PhpMyAdmin\Url::getFromRoute("/database/structure")]);
            yield "\">
      ";
            // line 15
            yield PhpMyAdmin\Html\Generator::getIcon("b_tblanalyse", \_gettext("Data dictionary"), true);
            yield "
    </a>
  </p>
";
        } else {
            // line 19
            yield "  ";
            yield PhpMyAdmin\Twig\MessageExtension::getNotice(\_gettext("No tables found in database."));
            yield "
";
        }
        // line 21
        yield "
";
        // line 22
        if ((($tmp =  !($context["is_system_schema"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 23
            yield "  ";
            yield ($context["create_table_html"] ?? null);
            yield "
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "database/structure/index.twig";
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
        return array (  95 => 23,  93 => 22,  90 => 21,  84 => 19,  77 => 15,  73 => 14,  69 => 13,  62 => 9,  57 => 7,  52 => 5,  49 => 4,  47 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "database/structure/index.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/database/structure/index.twig");
    }
}

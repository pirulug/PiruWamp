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

/* table/insert/get_html_for_insert_edit_form_header.twig */
class __TwigTemplate_6d8dfc8fb21587b0a4e8723df419ae04 extends Template
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
        yield "<form id=\"insertForm\" class=\"lock-page";
        yield (((($context["has_blob_field"] ?? null) && ($context["is_upload"] ?? null))) ? (" disableAjax") : (""));
        yield "\" method=\"post\" action=\"";
        yield PhpMyAdmin\Url::getFromRoute("/table/replace");
        yield "\" name=\"insertForm\"";
        yield (((($tmp = ($context["is_upload"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" enctype=\"multipart/form-data\"") : (""));
        yield ">
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "table/insert/get_html_for_insert_edit_form_header.twig";
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
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "table/insert/get_html_for_insert_edit_form_header.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/insert/get_html_for_insert_edit_form_header.twig");
    }
}

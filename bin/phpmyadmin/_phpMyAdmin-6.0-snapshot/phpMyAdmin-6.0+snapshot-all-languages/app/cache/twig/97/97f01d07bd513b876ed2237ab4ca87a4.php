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

/* login/header.twig */
class __TwigTemplate_fb33f77125a64034ed08c819a1a626fd extends Template
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
        if ((($tmp = ($context["session_expired"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "  <div id=\"modalOverlay\">
";
        }
        // line 4
        yield "<div class=\"container";
        yield (((($tmp = ($context["session_expired"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" modal_form") : (""));
        yield "\">
<div class=\"row\">
<div class=\"col-12\">
<a href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Core::linkURL("https://www.phpmyadmin.net/"), "html", null, true);
        yield "\" target=\"_blank\" rel=\"noopener noreferrer\" class=\"logo\" tabindex=\"-1\">
<img src=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("logo_right.png", "pma_logo.png"), "html", null, true);
        yield "\" id=\"imLogo\" name=\"imLogo\" alt=\"phpMyAdmin\" border=\"0\">
</a>
<h1>";
        // line 10
        yield Twig\Extension\CoreExtension::sprintf(\_gettext("Welcome to %s"), "<bdo dir=\"ltr\" lang=\"en\">phpMyAdmin</bdo>");
        yield "</h1>

<noscript>
";
        // line 13
        yield PhpMyAdmin\Twig\MessageExtension::getError(\_gettext("Javascript must be enabled past this point!"));
        yield "
</noscript>

<div class=\"hide\" id=\"js-https-mismatch\">
";
        // line 17
        yield PhpMyAdmin\Twig\MessageExtension::getError(\_gettext("There is a mismatch between HTTPS indicated on the server and client. This can lead to a non working phpMyAdmin or a security risk. Please fix your server configuration to indicate HTTPS properly."));
        yield "
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "login/header.twig";
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
        return array (  77 => 17,  70 => 13,  64 => 10,  59 => 8,  55 => 7,  48 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "login/header.twig", "C:\\Pirulug\\PiruWamp\\bin\\phpmyadmin\\phpMyAdmin-6.0-snapshot\\phpMyAdmin-6.0+snapshot-all-languages\\resources\\templates\\login\\header.twig");
    }
}

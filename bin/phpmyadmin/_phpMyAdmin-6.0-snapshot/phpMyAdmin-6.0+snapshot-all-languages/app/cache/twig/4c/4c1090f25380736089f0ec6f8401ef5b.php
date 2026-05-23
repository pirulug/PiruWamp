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

/* create_tracking_version.twig */
class __TwigTemplate_85ecd2c00c8102cec7ce5d47344accbf extends Template
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
        yield "<div class=\"card mt-3\">
    <form method=\"post\" action=\"";
        // line 2
        yield PhpMyAdmin\Url::getFromRoute(($context["route"] ?? null), ($context["url_params"] ?? null));
        yield "\" class=\"disableAjax\">
        ";
        // line 3
        yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
        yield "
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["selected"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["selected_table"]) {
            // line 5
            yield "            <input type=\"hidden\" name=\"selected[]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["selected_table"], "html", null, true);
            yield "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['selected_table'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        yield "
        <div class=\"card-header\">
                ";
        // line 9
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["selected"] ?? null)) == 1)) {
            // line 10
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_gettext("Create version %1\$s of %2\$s"), (            // line 11
($context["last_version"] ?? null) + 1), ((            // line 12
($context["db"] ?? null) . ".") . (($_v0 = ($context["selected"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null))), "html", null, true);
            // line 13
            yield "
                ";
        } else {
            // line 15
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_gettext("Create version %1\$s"), (($context["last_version"] ?? null) + 1)), "html", null, true);
            yield "
                ";
        }
        // line 17
        yield "        </div>

        <div class=\"card-body\">
            <input type=\"hidden\" name=\"version\" value=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["last_version"] ?? null) + 1), "html", null, true);
        yield "\">
            <p>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Track these data definition statements:"), "html", null, true);
        yield "</p>

            ";
        // line 23
        if (((($context["type"] ?? null) == "both") || (($context["type"] ?? null) == "table"))) {
            // line 24
            yield "                <input type=\"checkbox\" name=\"alter_table\" value=\"true\"";
            // line 25
            yield ((CoreExtension::inFilter("ALTER TABLE", ($context["default_statements"] ?? null))) ? (" checked") : (""));
            yield ">
                ALTER TABLE<br>
                <input type=\"checkbox\" name=\"rename_table\" value=\"true\"";
            // line 28
            yield ((CoreExtension::inFilter("RENAME TABLE", ($context["default_statements"] ?? null))) ? (" checked") : (""));
            yield ">
                RENAME TABLE<br>
                <input type=\"checkbox\" name=\"create_table\" value=\"true\"";
            // line 31
            yield ((CoreExtension::inFilter("CREATE TABLE", ($context["default_statements"] ?? null))) ? (" checked") : (""));
            yield ">
                CREATE TABLE<br>
                <input type=\"checkbox\" name=\"drop_table\" value=\"true\"";
            // line 34
            yield ((CoreExtension::inFilter("DROP TABLE", ($context["default_statements"] ?? null))) ? (" checked") : (""));
            yield ">
                DROP TABLE<br>
            ";
        }
        // line 37
        yield "            ";
        if ((($context["type"] ?? null) == "both")) {
            // line 38
            yield "                <br>
            ";
        }
        // line 40
        yield "            ";
        if (((($context["type"] ?? null) == "both") || (($context["type"] ?? null) == "view"))) {
            // line 41
            yield "                <input type=\"checkbox\" name=\"alter_view\" value=\"true\"";
            // line 42
            yield ((CoreExtension::inFilter("ALTER VIEW", ($context["default_statements"] ?? null))) ? (" checked") : (""));
            yield ">
                ALTER VIEW<br>
                <input type=\"checkbox\" name=\"create_view\" value=\"true\"";
            // line 45
            yield ((CoreExtension::inFilter("CREATE VIEW", ($context["default_statements"] ?? null))) ? (" checked") : (""));
            yield ">
                CREATE VIEW<br>
                <input type=\"checkbox\" name=\"drop_view\" value=\"true\"";
            // line 48
            yield ((CoreExtension::inFilter("DROP VIEW", ($context["default_statements"] ?? null))) ? (" checked") : (""));
            yield ">
                DROP VIEW<br>
            ";
        }
        // line 51
        yield "            <br>

            <input type=\"checkbox\" name=\"create_index\" value=\"true\"";
        // line 54
        yield ((CoreExtension::inFilter("CREATE INDEX", ($context["default_statements"] ?? null))) ? (" checked") : (""));
        yield ">
            CREATE INDEX<br>
            <input type=\"checkbox\" name=\"drop_index\" value=\"true\"";
        // line 57
        yield ((CoreExtension::inFilter("DROP INDEX", ($context["default_statements"] ?? null))) ? (" checked") : (""));
        yield ">
            DROP INDEX<br>

            <p>";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Track these data manipulation statements:"), "html", null, true);
        yield "</p>
            <input type=\"checkbox\" name=\"insert\" value=\"true\"";
        // line 62
        yield ((CoreExtension::inFilter("INSERT", ($context["default_statements"] ?? null))) ? (" checked") : (""));
        yield ">
            INSERT<br>
            <input type=\"checkbox\" name=\"update\" value=\"true\"";
        // line 65
        yield ((CoreExtension::inFilter("UPDATE", ($context["default_statements"] ?? null))) ? (" checked") : (""));
        yield ">
            UPDATE<br>
            <input type=\"checkbox\" name=\"delete\" value=\"true\"";
        // line 68
        yield ((CoreExtension::inFilter("DELETE", ($context["default_statements"] ?? null))) ? (" checked") : (""));
        yield ">
            DELETE<br>
            <input type=\"checkbox\" name=\"truncate\" value=\"true\"";
        // line 71
        yield ((CoreExtension::inFilter("TRUNCATE", ($context["default_statements"] ?? null))) ? (" checked") : (""));
        yield ">
            TRUNCATE<br>
        </div>

        <div class=\"card-footer\">
            <input type=\"hidden\" name=\"submit_create_version\" value=\"1\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Create version"), "html", null, true);
        yield "\">
        </div>
    </form>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "create_tracking_version.twig";
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
        return array (  197 => 77,  188 => 71,  183 => 68,  178 => 65,  173 => 62,  169 => 60,  163 => 57,  158 => 54,  154 => 51,  148 => 48,  143 => 45,  138 => 42,  136 => 41,  133 => 40,  129 => 38,  126 => 37,  120 => 34,  115 => 31,  110 => 28,  105 => 25,  103 => 24,  101 => 23,  96 => 21,  92 => 20,  87 => 17,  81 => 15,  77 => 13,  75 => 12,  74 => 11,  72 => 10,  70 => 9,  66 => 7,  57 => 5,  53 => 4,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "create_tracking_version.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/create_tracking_version.twig");
    }
}

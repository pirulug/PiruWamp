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

/* database/designer/main.twig */
class __TwigTemplate_54c2afe7033101280894e3da37f02e0b extends Template
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
        // line 2
        yield "<script>
window.designerConfig = ";
        // line 3
        yield ($context["designer_config"] ?? null);
        yield ";
</script>

";
        // line 7
        if ((($tmp =  !($context["has_query"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "    <div id=\"name-panel\">
        <span id=\"page_name\">
            ";
            // line 10
            yield (((($context["selected_page"] ?? null) == null)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Untitled"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["selected_page"] ?? null), "html", null, true)));
            yield "
        </span>
        <span id=\"saved_state\">
            ";
            // line 13
            yield (((($context["selected_page"] ?? null) == null)) ? ("*") : (""));
            yield "
        </span>
    </div>
";
        }
        // line 17
        yield "<div class=\"designer_header side-menu\" id=\"side_menu\">
    <a class=\"M_butt\" id=\"key_Show_left_menu\" href=\"#\">
        <img title=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Show/Hide tables list"), "html", null, true);
        yield "\"
             alt=\"v\"
             src=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("designer/downarrow2_m.png"), "html", null, true);
        yield "\"
             data-down=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("designer/downarrow2_m.png"), "html", null, true);
        yield "\"
             data-up=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("designer/uparrow2_m.png"), "html", null, true);
        yield "\">
        <span class=\"hide hidable\">
            ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Show/Hide tables list"), "html", null, true);
        yield "
        </span>
    </a>
    <a href=\"#\" id=\"toggleFullscreen\" class=\"M_butt\">
        <img title=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("View in fullscreen"), "html", null, true);
        yield "\"
             src=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("designer/viewInFullscreen.png"), "html", null, true);
        yield "\"
             data-enter=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("designer/viewInFullscreen.png"), "html", null, true);
        yield "\"
             data-exit=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("designer/exitFullscreen.png"), "html", null, true);
        yield "\">
        <span class=\"hide hidable\"
              data-exit=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Exit fullscreen"), "html", null, true);
        yield "\"
              data-enter=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("View in fullscreen"), "html", null, true);
        yield "\">
            ";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("View in fullscreen"), "html", null, true);
        yield "
        </span>
    </a>
    <a href=\"#\" id=\"addOtherDbTables\" class=\"M_butt\">
        <img title=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add tables from other databases"), "html", null, true);
        yield "\"
             src=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("designer/other_table.png"), "html", null, true);
        yield "\">
        <span class=\"hide hidable\">
            ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add tables from other databases"), "html", null, true);
        yield "
        </span>
    </a>
    ";
        // line 46
        if ((($tmp =  !($context["has_query"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 47
            yield "        <a id=\"newPage\" href=\"#\" class=\"M_butt\">
            <img title=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("New page"), "html", null, true);
            yield "\"
                 alt=\"\"
                 src=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("designer/page_add.png"), "html", null, true);
            yield "\">
            <span class=\"hide hidable\">
                ";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("New page"), "html", null, true);
            yield "
            </span>
        </a>
        <a href=\"#\" id=\"editPage\" class=\"M_butt ajax\">
            <img title=\"";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Open page"), "html", null, true);
            yield "\"
                 src=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("designer/page_edit.png"), "html", null, true);
            yield "\">
            <span class=\"hide hidable\">
                ";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Open page"), "html", null, true);
            yield "
            </span>
        </a>
        <a href=\"#\" id=\"savePos\" class=\"M_butt\">
            <img title=\"";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Save page"), "html", null, true);
            yield "\"
                 src=\"";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("designer/save.png"), "html", null, true);
            yield "\">
            <span class=\"hide hidable\">
                ";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Save page"), "html", null, true);
            yield "
            </span>
        </a>
        <a href=\"#\" id=\"SaveAs\" class=\"M_butt ajax\">
            <img title=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Save page as"), "html", null, true);
            yield "\"
                 src=\"";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("designer/save_as.png"), "html", null, true);
            yield "\">
            <span class=\"hide hidable\">
                ";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Save page as"), "html", null, true);
            yield "
            </span>
        </a>
        <a href=\"#\" id=\"delPages\" class=\"M_butt ajax\">
            <img title=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Delete pages"), "html", null, true);
            yield "\"
                 src=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("designer/page_delete.png"), "html", null, true);
            yield "\">
            <span class=\"hide hidable\">
                ";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Delete pages"), "html", null, true);
            yield "
            </span>
        </a>
        <a href=\"#\" id=\"StartTableNew\" class=\"M_butt\">
            <img title=\"";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Create table"), "html", null, true);
            yield "\"
                 src=\"";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("designer/table.png"), "html", null, true);
            yield "\">
            <span class=\"hide hidable\">
                ";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Create table"), "html", null, true);
            yield "
            </span>
        </a>
        <a href=\"#\" class=\"M_butt\" id=\"rel_button\">
            <img title=\"";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Create relationship"), "html", null, true);
            yield "\"
                 src=\"";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("designer/relation.png"), "html", null, true);
            yield "\">
            <span class=\"hide hidable\">
                ";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Create relationship"), "html", null, true);
            yield "
            </span>
        </a>
        <a href=\"#\" class=\"M_butt\" id=\"display_field_button\">
            <img title=\"";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Choose column to display"), "html", null, true);
            yield "\"
                 src=\"";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("designer/display_field.png"), "html", null, true);
            yield "\">
            <span class=\"hide hidable\">
                ";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Choose column to display"), "html", null, true);
            yield "
            </span>
        </a>
        <a href=\"#\" id=\"reloadPage\" class=\"M_butt\">
            <img title=\"";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Reload"), "html", null, true);
            yield "\"
                 src=\"";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("designer/reload.png"), "html", null, true);
            yield "\">
            <span class=\"hide hidable\">
                ";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Reload"), "html", null, true);
            yield "
            </span>
        </a>
        <a href=\"";
            // line 111
            yield PhpMyAdmin\Html\MySQLDocumentation::getDocumentationLink("faq", "faq6-31");
            yield "\" target=\"_blank\" rel=\"noopener noreferrer\" class=\"M_butt\">
            <img title=\"";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Help"), "html", null, true);
            yield "\"
                 src=\"";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("designer/help.png"), "html", null, true);
            yield "\">
            <span class=\"hide hidable\">
                ";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Help"), "html", null, true);
            yield "
            </span>
        </a>
    ";
        }
        // line 119
        yield "    <a href=\"#\" class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = ($context["params_array"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["angular_direct"] ?? null) : null), "html", null, true);
        yield "\" id=\"angular_direct_button\">
        <img title=\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Angular links"), "html", null, true);
        yield " / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Direct links"), "html", null, true);
        yield "\"
             src=\"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("designer/ang_direct.png"), "html", null, true);
        yield "\">
        <span class=\"hide hidable\">
            ";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Angular links"), "html", null, true);
        yield " / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Direct links"), "html", null, true);
        yield "
        </span>
    </a>
    <a href=\"#\" class=\"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = ($context["params_array"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["snap_to_grid"] ?? null) : null), "html", null, true);
        yield "\" id=\"grid_button\">
        <img title=\"";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Snap to grid"), "html", null, true);
        yield "\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("designer/grid.png"), "html", null, true);
        yield "\">
        <span class=\"hide hidable\">
            ";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Snap to grid"), "html", null, true);
        yield "
        </span>
    </a>
    <a href=\"#\" class=\"";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = ($context["params_array"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["small_big_all"] ?? null) : null), "html", null, true);
        yield "\" id=\"key_SB_all\">
        <img title=\"";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Small/Big All"), "html", null, true);
        yield "\"
             alt=\"v\"
             src=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("designer/downarrow1.png"), "html", null, true);
        yield "\"
             data-down=\"";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("designer/downarrow1.png"), "html", null, true);
        yield "\"
             data-right=\"";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("designer/rightarrow1.png"), "html", null, true);
        yield "\">
        <span class=\"hide hidable\">
            ";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Small/Big All"), "html", null, true);
        yield "
        </span>
    </a>
    <a href=\"#\" id=\"SmallTabInvert\" class=\"M_butt\">
        <img title=\"";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Toggle small/big"), "html", null, true);
        yield "\"
             src=\"";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("designer/bottom.png"), "html", null, true);
        yield "\">
        <span class=\"hide hidable\">
            ";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Toggle small/big"), "html", null, true);
        yield "
        </span>
    </a>
    <a href=\"#\" id=\"relLineInvert\" class=\"";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v3 = ($context["params_array"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["relation_lines"] ?? null) : null), "html", null, true);
        yield "\" >
        <img title=\"";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Toggle relationship lines"), "html", null, true);
        yield "\"
             src=\"";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("designer/toggle_lines.png"), "html", null, true);
        yield "\">
        <span class=\"hide hidable\">
            ";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Toggle relationship lines"), "html", null, true);
        yield "
        </span>
    </a>
    ";
        // line 156
        if ((($tmp =  !($context["visual_builder"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 157
            yield "        <a href=\"#\" id=\"exportPages\" class=\"M_butt\" >
            <img title=\"";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Export schema"), "html", null, true);
            yield "\"
                 src=\"";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("designer/export.png"), "html", null, true);
            yield "\">
            <span class=\"hide hidable\">
                ";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Export schema"), "html", null, true);
            yield "
            </span>
        </a>
    ";
        } else {
            // line 165
            yield "        <a id=\"build_query_button\"
           class=\"M_butt\"
           href=\"#\"
           class=\"M_butt\">
            <img title=\"";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Build Query"), "html", null, true);
            yield "\"
                 src=\"";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("designer/query_builder.png"), "html", null, true);
            yield "\">
            <span class=\"hide hidable\">
                ";
            // line 172
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Build Query"), "html", null, true);
            yield "
            </span>
        </a>
    ";
        }
        // line 176
        yield "    <a href=\"#\" class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v4 = ($context["params_array"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["side_menu"] ?? null) : null), "html", null, true);
        yield "\" id=\"key_Left_Right\">
        <img title=\"";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Move Menu"), "html", null, true);
        yield "\" alt=\">\"
             data-right=\"";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("designer/2leftarrow_m.png"), "html", null, true);
        yield "\"
             src=\"";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("designer/2rightarrow_m.png"), "html", null, true);
        yield "\">
        <span class=\"hide hidable\">
            ";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Move Menu"), "html", null, true);
        yield "
        </span>
    </a>
    <a href=\"#\" class=\"";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v5 = ($context["params_array"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["pin_text"] ?? null) : null), "html", null, true);
        yield "\" id=\"pin_Text\">
        <img title=\"";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Pin text"), "html", null, true);
        yield "\"
             alt=\">\"
             data-right=\"";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("designer/anchor.png"), "html", null, true);
        yield "\"
             src=\"";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("designer/anchor.png"), "html", null, true);
        yield "\">
        <span class=\"hide hidable\">
            ";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Pin text"), "html", null, true);
        yield "
        </span>
    </a>
</div>
<div id=\"canvas_outer\">
    <form action=\"\" id=\"container-form\" method=\"post\" name=\"form1\">
        <div id=\"osn_tab\" class=\"w-100\">
            <canvas class=\"designer\" id=\"canvas\" width=\"100\" height=\"100\"></canvas>
        </div>
        <div id=\"layer_menu\" class=\"hide\">
            <div class=\"text-center\">
                <a href=\"#\" class=\"M_butt\" target=\"_self\" >
                    <img title=\"";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Hide/Show all"), "html", null, true);
        yield "\"
                        alt=\"v\"
                        id=\"key_HS_all\"
                        src=\"";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("designer/downarrow1.png"), "html", null, true);
        yield "\"
                        data-down=\"";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("designer/downarrow1.png"), "html", null, true);
        yield "\"
                        data-right=\"";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("designer/rightarrow1.png"), "html", null, true);
        yield "\">
                </a>
                <a href=\"#\" class=\"M_butt\" target=\"_self\" >
                    <img alt=\"v\"
                        id=\"key_HS\"
                        title=\"";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Hide/Show tables with no relationship"), "html", null, true);
        yield "\"
                        src=\"";
        // line 213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("designer/downarrow2.png"), "html", null, true);
        yield "\"
                        data-down=\"";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("designer/downarrow2.png"), "html", null, true);
        yield "\"
                        data-right=\"";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("designer/rightarrow2.png"), "html", null, true);
        yield "\">
                </a>
            </div>
            <div id=\"id_scroll_tab\" class=\"scroll_tab\">
                <table class=\"table table-sm ps-1\"></table>
            </div>
            ";
        // line 222
        yield "            <div class=\"text-center\">
                ";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Number of tables:"), "html", null, true);
        yield " <span id=\"tables_counter\">0</span>
            </div>
            <div id=\"layer_menu_sizer\">
                  <img class=\"icon float-start\"
                      id=\"layer_menu_sizer_btn\"
                      data-right=\"";
        // line 228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("designer/resizeright.png"), "html", null, true);
        yield "\"
                      src=\"";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath("designer/resize.png"), "html", null, true);
        yield "\">
            </div>
        </div>
        ";
        // line 233
        yield "        ";
        yield from $this->load("database/designer/database_tables.twig", 233)->unwrap()->yield(CoreExtension::toArray(["db" =>         // line 234
($context["db"] ?? null), "has_query" =>         // line 235
($context["has_query"] ?? null), "tab_pos" =>         // line 236
($context["tab_pos"] ?? null), "display_page" =>         // line 237
($context["display_page"] ?? null), "tab_column" =>         // line 238
($context["tab_column"] ?? null), "tables_all_keys" =>         // line 239
($context["tables_all_keys"] ?? null), "columns_type" =>         // line 240
($context["columns_type"] ?? null), "tables" =>         // line 241
($context["designerTables"] ?? null)]));
        // line 243
        yield "    </form>
</div>
<div id=\"designer_hint\"></div>
";
        // line 247
        yield "<table id=\"layer_new_relation\" class=\"table table-borderless w-auto hide\">
    <tbody>
        <tr>
            <td class=\"frams1\" width=\"10px\">
            </td>
            <td class=\"frams5\" width=\"99%\" >
            </td>
            <td class=\"frams2\" width=\"10px\">
                <div class=\"bor\">
                </div>
            </td>
        </tr>
        <tr>
            <td class=\"frams8\">
            </td>
            <td class=\"input_tab p-0\">
                <table class=\"table table-borderless mb-0 text-center\">
                    <thead>
                        <tr>
                            <td colspan=\"2\" class=\"text-center text-nowrap\">
                                <strong>
                                    ";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Create relationship"), "html", null, true);
        yield "
                                </strong>
                            </td>
                        </tr>
                    </thead>
                    <tbody id=\"foreign_relation\">
                        <tr>
                            <td colspan=\"2\" class=\"text-center text-nowrap\">
                                <strong>
                                    FOREIGN KEY
                                </strong>
                            </td>
                        </tr>
                        <tr>
                            <td width=\"58\" class=\"text-nowrap\">
                                on delete
                            </td>
                            <td width=\"102\">
                                <select name=\"on_delete\" id=\"on_delete\">
                                    <option value=\"nix\" selected>
                                        --
                                    </option>
                                    <option value=\"CASCADE\">
                                        CASCADE
                                    </option>
                                    <option value=\"SET NULL\">
                                        SET NULL
                                    </option>
                                    <option value=\"NO ACTION\">
                                        NO ACTION
                                    </option>
                                    <option value=\"RESTRICT\">
                                        RESTRICT
                                    </option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"text-nowrap\">
                                on update
                            </td>
                            <td>
                                <select name=\"on_update\" id=\"on_update\">
                                    <option value=\"nix\" selected>
                                        --
                                    </option>
                                    <option value=\"CASCADE\">
                                        CASCADE
                                    </option>
                                    <option value=\"SET NULL\">
                                        SET NULL
                                    </option>
                                    <option value=\"NO ACTION\">
                                        NO ACTION
                                    </option>
                                    <option value=\"RESTRICT\">
                                        RESTRICT
                                    </option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td colspan=\"2\" class=\"text-center text-nowrap\">
                                <input type=\"button\" id=\"ok_new_rel_panel\" class=\"btn btn-secondary butt\"
                                    name=\"Button\" value=\"";
        // line 334
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("OK"), "html", null, true);
        yield "\">
                                <input type=\"button\" id=\"cancel_new_rel_panel\"
                                    class=\"btn btn-secondary butt\" name=\"Button\" value=\"";
        // line 336
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Cancel"), "html", null, true);
        yield "\">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td class=\"frams6\">
            </td>
        </tr>
        <tr>
            <td class=\"frams4\">
                <div class=\"bor\">
                </div>
            </td>
            <td class=\"frams7\">
            </td>
            <td class=\"frams3\">
            </td>
        </tr>
    </tbody>
</table>
";
        // line 358
        yield "<table id=\"layer_upd_relation\" class=\"table table-borderless w-auto hide\">
    <tbody>
        <tr>
            <td class=\"frams1\" width=\"10px\">
            </td>
            <td class=\"frams5\" width=\"99%\">
            </td>
            <td class=\"frams2\" width=\"10px\">
                <div class=\"bor\">
                </div>
            </td>
        </tr>
        <tr>
            <td class=\"frams8\">
            </td>
            <td class=\"input_tab p-0\">
                <table class=\"table table-borderless mb-0 text-center\">
                    <tr>
                        <td colspan=\"3\" class=\"text-center text-nowrap\">
                            <strong>
                                ";
        // line 378
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Delete relationship"), "html", null, true);
        yield "
                            </strong>
                        </td>
                    </tr>
                    <tr>
                        <td colspan=\"3\" class=\"text-center text-nowrap\">
                            <input id=\"del_button\" name=\"Button\" type=\"button\"
                                class=\"btn btn-secondary butt\" value=\"";
        // line 385
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Delete"), "html", null, true);
        yield "\">
                            <input id=\"cancel_button\" type=\"button\" class=\"btn btn-secondary butt\"
                                name=\"Button\" value=\"";
        // line 387
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Cancel"), "html", null, true);
        yield "\">
                        </td>
                    </tr>
                </table>
            </td>
            <td class=\"frams6\">
            </td>
        </tr>
        <tr>
            <td class=\"frams4\">
                <div class=\"bor\">
                </div>
            </td>
            <td class=\"frams7\">
            </td>
            <td class=\"frams3\">
            </td>
        </tr>
    </tbody>
</table>
";
        // line 407
        if ((($tmp = ($context["has_query"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 408
            yield "    ";
            // line 409
            yield "    <table id=\"designer_optionse\" class=\"table table-borderless w-auto hide\">
        <tbody>
            <tr>
                <td class=\"frams1\" width=\"10px\">
                </td>
                <td class=\"frams5\" width=\"99%\" >
                </td>
                <td class=\"frams2\" width=\"10px\">
                    <div class=\"bor\">
                    </div>
                </td>
            </tr>
            <tr>
                <td class=\"frams8\">
                </td>
                <td class=\"input_tab p-0\">
                    <table class=\"table table-borderless mb-0 text-center\">
                        <thead>
                            <tr>
                                <td colspan=\"2\" rowspan=\"2\" id=\"option_col_name\" class=\"text-center text-nowrap\">
                                </td>
                            </tr>
                        </thead>
                        <tbody id=\"where\">
                            <tr>
                                <td class=\"text-center text-nowrap\">
                                    <b>
                                        WHERE
                                    </b>
                                </td>
                            </tr>
                            <tr>
                                <td width=\"58\" class=\"text-nowrap\">
                                    ";
            // line 442
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Relationship operator"), "html", null, true);
            yield "
                                </td>
                                <td width=\"102\">
                                    <select name=\"rel_opt\" id=\"rel_opt\">
                                        <option value=\"--\" selected>
                                            --
                                        </option>
                                        <option value=\"=\">
                                            =
                                        </option>
                                        <option value=\"&gt;\">
                                            &gt;
                                        </option>
                                        <option value=\"&lt;\">
                                            &lt;
                                        </option>
                                        <option value=\"&gt;=\">
                                            &gt;=
                                        </option>
                                        <option value=\"&lt;=\">
                                            &lt;=
                                        </option>
                                        <option value=\"NOT\">
                                            NOT
                                        </option>
                                        <option value=\"IN\">
                                            IN
                                        </option>
                                        <option value=\"EXCEPT\">
                                            ";
            // line 471
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Except"), "html", null, true);
            yield "
                                        </option>
                                        <option value=\"NOT IN\">
                                            NOT IN
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class=\"text-nowrap\">
                                    ";
            // line 481
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Value"), "html", null, true);
            yield "
                                    <br>
                                    ";
            // line 483
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("subquery"), "html", null, true);
            yield "
                                </td>
                                <td>
                                    <textarea id=\"Query\" cols=\"18\"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class=\"text-center text-nowrap\">
                                    <b>
                                        ";
            // line 492
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Rename to"), "html", null, true);
            yield "
                                    </b>
                                </td>
                            </tr>
                            <tr>
                                <td width=\"58\" class=\"text-nowrap\">
                                    ";
            // line 498
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("New name"), "html", null, true);
            yield "
                                </td>
                                <td width=\"102\">
                                    <input type=\"text\" id=\"new_name\">
                                </td>
                            </tr>
                            <tr>
                                <td class=\"text-center text-nowrap\">
                                    <b>
                                        ";
            // line 507
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Aggregate"), "html", null, true);
            yield "
                                    </b>
                                </td>
                            </tr>
                            <tr>
                                <td width=\"58\" class=\"text-nowrap\">
                                    ";
            // line 513
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Operator"), "html", null, true);
            yield "
                                </td>
                                <td width=\"102\">
                                    <select name=\"operator\" id=\"operator\">
                                        <option value=\"---\" selected>
                                            ---
                                        </option>
                                        <option value=\"sum\" >
                                            SUM
                                        </option>
                                        <option value=\"min\">
                                            MIN
                                        </option>
                                        <option value=\"max\">
                                            MAX
                                        </option>
                                        <option value=\"avg\">
                                            AVG
                                        </option>
                                        <option value=\"count\">
                                            COUNT
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td width=\"58\" class=\"text-center text-nowrap\">
                                    <b>
                                        GROUP BY
                                    </b>
                                </td>
                                <td>
                                    <input type=\"checkbox\" value=\"groupby\" id=\"groupby\">
                                </td>
                            </tr>
                            <tr>
                                <td width=\"58\" class=\"text-center text-nowrap\">
                                    <b>
                                        ORDER BY
                                    </b>
                                </td>
                                <td>
                                    <select name=\"orderby\" id=\"orderby\">
                                        <option value=\"---\" selected>
                                            ---
                                        </option>
                                        <option value=\"ASC\" >
                                            ASC
                                        </option>
                                        <option value=\"DESC\">
                                            DESC
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class=\"text-center text-nowrap\">
                                    <b>
                                        HAVING
                                    </b>
                                </td>
                            </tr>
                            <tr>
                                <td width=\"58\" class=\"text-nowrap\">
                                    ";
            // line 577
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Operator"), "html", null, true);
            yield "
                                </td>
                                <td width=\"102\">
                                    <select name=\"h_operator\" id=\"h_operator\">
                                        <option value=\"---\" selected>
                                            ---
                                        </option>
                                        <option value=\"None\" >
                                            ";
            // line 585
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("None"), "html", null, true);
            yield "
                                        </option>
                                        <option value=\"sum\" >
                                            SUM
                                        </option>
                                        <option value=\"min\">
                                            MIN
                                        </option>
                                        <option value=\"max\">
                                            MAX
                                        </option>
                                        <option value=\"avg\">
                                            AVG
                                        </option>
                                        <option value=\"count\">
                                            COUNT
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td width=\"58\" class=\"text-nowrap\">
                                    ";
            // line 607
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Relationship operator"), "html", null, true);
            yield "
                                </td>
                                <td width=\"102\">
                                    <select name=\"h_rel_opt\" id=\"h_rel_opt\">
                                        <option value=\"--\" selected>
                                            --
                                        </option>
                                        <option value=\"=\">
                                            =
                                        </option>
                                        <option value=\"&gt;\">
                                            &gt;
                                        </option>
                                        <option value=\"&lt;\">
                                            &lt;
                                        </option>
                                        <option value=\"&gt;=\">
                                            &gt;=
                                        </option>
                                        <option value=\"&lt;=\">
                                            &lt;=
                                        </option>
                                        <option value=\"NOT\">
                                            NOT
                                        </option>
                                        <option value=\"IN\">
                                            IN
                                        </option>
                                        <option value=\"EXCEPT\">
                                            ";
            // line 636
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Except"), "html", null, true);
            yield "
                                        </option>
                                        <option value=\"NOT IN\">
                                            NOT IN
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td width=\"58\" class=\"text-nowrap\">
                                    ";
            // line 646
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Value"), "html", null, true);
            yield "
                                    <br>
                                    ";
            // line 648
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("subquery"), "html", null, true);
            yield "
                                </td>
                                <td width=\"102\">
                                    <textarea id=\"having\" cols=\"18\"></textarea>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td colspan=\"2\" class=\"text-center text-nowrap\">
                                    <input type=\"hidden\" id=\"ok_add_object_db_and_table_name_url\" />
                                    <input type=\"hidden\" id=\"ok_add_object_db_name\" />
                                    <input type=\"hidden\" id=\"ok_add_object_table_name\" />
                                    <input type=\"hidden\" id=\"ok_add_object_col_name\" />
                                    <input type=\"button\" id=\"ok_add_object\" class=\"btn btn-secondary butt\"
                                        name=\"Button\" value=\"";
            // line 663
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("OK"), "html", null, true);
            yield "\">
                                    <input type=\"button\" id=\"cancel_close_option\" class=\"btn btn-secondary butt\"
                                        name=\"Button\" value=\"";
            // line 665
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Cancel"), "html", null, true);
            yield "\">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td class=\"frams6\">
                </td>
            </tr>
            <tr>
                <td class=\"frams4\">
                    <div class=\"bor\">
                    </div>
                </td>
                <td class=\"frams7\">
                </td>
                <td class=\"frams3\">
                </td>
            </tr>
        </tbody>
    </table>
    ";
            // line 687
            yield "    <table id=\"query_rename_to\" class=\"table table-borderless w-auto hide\">
        <tbody>
            <tr>
                <td class=\"frams1\" width=\"10px\">
                </td>
                <td class=\"frams5\" width=\"99%\" >
                </td>
                <td class=\"frams2\" width=\"10px\">
                    <div class=\"bor\">
                    </div>
                </td>
            </tr>
            <tr>
                <td class=\"frams8\">
                </td>
                <td class=\"input_tab p-0\">
                    <table class=\"table table-borderless mb-0 text-center\">
                        <thead>
                            <tr>
                                <td colspan=\"2\" class=\"text-center text-nowrap\">
                                    <strong>
                                        ";
            // line 708
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Rename to"), "html", null, true);
            yield "
                                    </strong>
                                </td>
                            </tr>
                        </thead>
                        <tbody id=\"rename_to\">
                            <tr>
                                <td width=\"58\" class=\"text-nowrap\">
                                    ";
            // line 716
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("New name"), "html", null, true);
            yield "
                                </td>
                                <td width=\"102\">
                                    <input type=\"text\" id=\"e_rename\">
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td colspan=\"2\" class=\"text-center text-nowrap\">
                                    <input type=\"button\" id=\"ok_edit_rename\" class=\"btn btn-secondary butt\"
                                        name=\"Button\" value=\"";
            // line 727
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("OK"), "html", null, true);
            yield "\">
                                    <input id=\"query_rename_to_button\" type=\"button\"
                                        class=\"btn btn-secondary butt\"
                                        name=\"Button\"
                                        value=\"";
            // line 731
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Cancel"), "html", null, true);
            yield "\">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td class=\"frams6\">
                </td>
            </tr>
            <tr>
                <td class=\"frams4\">
                    <div class=\"bor\">
                    </div>
                </td>
                <td class=\"frams7\">
                </td>
                <td class=\"frams3\">
                </td>
            </tr>
        </tbody>
    </table>
    ";
            // line 753
            yield "    <table id=\"query_having\" class=\"table table-borderless w-auto hide\">
        <tbody>
            <tr>
                <td class=\"frams1\" width=\"10px\">
                </td>
                <td class=\"frams5\" width=\"99%\" >
                </td>
                <td class=\"frams2\" width=\"10px\">
                    <div class=\"bor\">
                    </div>
                </td>
            </tr>
            <tr>
                <td class=\"frams8\">
                </td>
                <td class=\"input_tab p-0\">
                    <table class=\"table table-borderless mb-0 text-center\">
                        <thead>
                            <tr>
                                <td colspan=\"2\" class=\"text-center text-nowrap\">
                                    <strong>
                                        HAVING
                                    </strong>
                                </td>
                            </tr>
                        </thead>
                        <tbody id=\"rename_to\">
                            <tr>
                                <td width=\"58\" class=\"text-nowrap\">
                                    ";
            // line 782
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Operator"), "html", null, true);
            yield "
                                </td>
                                <td width=\"102\">
                                    <select name=\"hoperator\" id=\"hoperator\">
                                        <option value=\"---\" selected>
                                            ---
                                        </option>
                                        <option value=\"None\" >
                                            None
                                        </option>
                                        <option value=\"sum\" >
                                            SUM
                                        </option>
                                        <option value=\"min\">
                                            MIN
                                        </option>
                                        <option value=\"max\">
                                            MAX
                                        </option>
                                        <option value=\"avg\">
                                            AVG
                                        </option>
                                        <option value=\"count\">
                                            COUNT
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <tr>
                                    <td width=\"58\" class=\"text-nowrap\">
                                        ";
            // line 813
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Operator"), "html", null, true);
            yield "
                                    </td>
                                    <td width=\"102\">
                                        <select name=\"hrel_opt\" id=\"hrel_opt\">
                                            <option value=\"--\" selected>
                                                --
                                            </option>
                                            <option value=\"=\">
                                                =
                                            </option>
                                            <option value=\"&gt;\">
                                                &gt;
                                            </option>
                                            <option value=\"&lt;\">
                                                &lt;
                                            </option>
                                            <option value=\"&gt;=\">
                                                &gt;=
                                            </option>
                                            <option value=\"&lt;=\">
                                                &lt;=
                                            </option>
                                            <option value=\"NOT\">
                                                NOT
                                            </option>
                                            <option value=\"IN\">
                                                IN
                                            </option>
                                            <option value=\"EXCEPT\">
                                                ";
            // line 842
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Except"), "html", null, true);
            yield "
                                            </option>
                                            <option value=\"NOT IN\">
                                                NOT IN
                                            </option>
                                        </select>
                                    </td>
                            </tr>
                            <tr>
                                <td class=\"text-nowrap\">
                                    ";
            // line 852
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Value"), "html", null, true);
            yield "
                                    <br>
                                    ";
            // line 854
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("subquery"), "html", null, true);
            yield "
                                </td>
                                <td>
                                    <textarea id=\"hQuery\" cols=\"18\">
                                    </textarea>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td colspan=\"2\" class=\"text-center text-nowrap\">
                                    <input type=\"button\" id=\"ok_edit_having\" class=\"btn btn-secondary butt\"
                                        name=\"Button\" value=\"";
            // line 866
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("OK"), "html", null, true);
            yield "\">
                                    <input id=\"query_having_button\" type=\"button\"
                                        class=\"btn btn-secondary butt\"
                                        name=\"Button\"
                                        value=\"";
            // line 870
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Cancel"), "html", null, true);
            yield "\">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td class=\"frams6\">
                </td>
            </tr>
            <tr>
                <td class=\"frams4\">
                    <div class=\"bor\">
                    </div>
                </td>
                <td class=\"frams7\">
                </td>
                <td class=\"frams3\">
                </td>
            </tr>
        </tbody>
    </table>
    ";
            // line 892
            yield "    <table id=\"query_Aggregate\" class=\"table table-borderless w-auto hide\">
        <tbody>
            <tr>
                <td class=\"frams1\" width=\"10px\">
                </td>
                <td class=\"frams5\" width=\"99%\" >
                </td>
                <td class=\"frams2\" width=\"10px\">
                    <div class=\"bor\">
                    </div>
                </td>
            </tr>
            <tr>
                <td class=\"frams8\">
                </td>
                <td class=\"input_tab p-0\">
                    <table class=\"table table-borderless mb-0 text-center\">
                        <thead>
                            <tr>
                                <td colspan=\"2\" class=\"text-center text-nowrap\">
                                    <strong>
                                        ";
            // line 913
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Aggregate"), "html", null, true);
            yield "
                                    </strong>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td width=\"58\" class=\"text-nowrap\">
                                    ";
            // line 921
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Operator"), "html", null, true);
            yield "
                                </td>
                                <td width=\"102\">
                                    <select name=\"operator\" id=\"e_operator\">
                                        <option value=\"---\" selected>
                                            ---
                                        </option>
                                        <option value=\"sum\" >
                                            SUM
                                        </option>
                                        <option value=\"min\">
                                            MIN
                                        </option>
                                        <option value=\"max\">
                                            MAX
                                        </option>
                                        <option value=\"avg\">
                                            AVG
                                        </option>
                                        <option value=\"count\">
                                            COUNT
                                        </option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td colspan=\"2\" class=\"text-center text-nowrap\">
                                    <input type=\"button\" id=\"ok_edit_Aggr\" class=\"btn btn-secondary butt\"
                                        name=\"Button\" value=\"";
            // line 951
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("OK"), "html", null, true);
            yield "\">
                                    <input id=\"query_Aggregate_Button\" type=\"button\"
                                        class=\"btn btn-secondary butt\"
                                        name=\"Button\"
                                        value=\"";
            // line 955
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Cancel"), "html", null, true);
            yield "\">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td class=\"frams6\">
                </td>
            </tr>
            <tr>
                <td class=\"frams4\">
                    <div class=\"bor\">
                    </div>
                </td>
                <td class=\"frams7\">
                </td>
                <td class=\"frams3\">
                </td>
            </tr>
        </tbody>
    </table>
    ";
            // line 977
            yield "    <table id=\"query_where\" class=\"table table-borderless w-auto hide\">
        <tbody>
            <tr>
                <td class=\"frams1\" width=\"10px\">
                </td>
                <td class=\"frams5\" width=\"99%\" >
                </td>
                <td class=\"frams2\" width=\"10px\">
                    <div class=\"bor\">
                    </div>
                </td>
            </tr>
            <tr>
                <td class=\"frams8\">
                </td>
                <td class=\"input_tab p-0\">
                    <table class=\"table table-borderless mb-0 text-center\">
                        <thead>
                            <tr>
                                <td colspan=\"2\" class=\"text-center text-nowrap\">
                                    <strong>
                                        WHERE
                                    </strong>
                                </td>
                            </tr>
                        </thead>
                        <tbody id=\"rename_to\">
                            <tr>
                                <td width=\"58\" class=\"text-nowrap\">
                                    ";
            // line 1006
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Operator"), "html", null, true);
            yield "
                                </td>
                                <td width=\"102\">
                                    <select name=\"erel_opt\" id=\"erel_opt\">
                                        <option value=\"--\" selected>
                                            --
                                        </option>
                                        <option value=\"=\" >
                                            =
                                        </option>
                                        <option value=\"&gt;\">
                                            &gt;
                                        </option>
                                        <option value=\"&lt;\">
                                            &lt;
                                        </option>
                                        <option value=\"&gt;=\">
                                            &gt;=
                                        </option>
                                        <option value=\"&lt;=\">
                                            &lt;=
                                        </option>
                                        <option value=\"NOT\">
                                            NOT
                                        </option>
                                        <option value=\"IN\">
                                            IN
                                        </option>
                                        <option value=\"EXCEPT\">
                                            ";
            // line 1035
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Except"), "html", null, true);
            yield "
                                        </option>
                                        <option value=\"NOT IN\">
                                            NOT IN
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class=\"text-nowrap\">
                                    ";
            // line 1045
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Value"), "html", null, true);
            yield "
                                    <br>
                                    ";
            // line 1047
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("subquery"), "html", null, true);
            yield "
                                </td>
                                <td>
                                    <textarea id=\"eQuery\" cols=\"18\"></textarea>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td colspan=\"2\" class=\"text-center text-nowrap\">
                                    <input type=\"button\" id=\"ok_edit_where\" class=\"btn btn-secondary butt\"
                                        name=\"Button\" value=\"";
            // line 1058
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("OK"), "html", null, true);
            yield "\">
                                    <input id=\"query_where_button\" type=\"button\" class=\"btn btn-secondary butt\" name=\"Button\"
                                           value=\"";
            // line 1060
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Cancel"), "html", null, true);
            yield "\">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td class=\"frams6\">
                </td>
            </tr>
            <tr>
                <td class=\"frams4\">
                    <div class=\"bor\">
                    </div>
                </td>
                <td class=\"frams7\">
                </td>
                <td class=\"frams3\">
                </td>
            </tr>
        </tbody>
    </table>
    ";
            // line 1082
            yield "    <div class=\"panel\">
        <div class=\"clearfloat\"></div>
        <div id=\"ab\"></div>
        <div class=\"clearfloat\"></div>
    </div>
    <a class=\"trigger\" href=\"#\">";
            // line 1087
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Active options"), "html", null, true);
            yield "</a>
";
        }
        // line 1089
        yield "<div id=\"PMA_disable_floating_menubar\"></div>
<div class=\"modal fade\" id=\"designerGoModal\" tabindex=\"-1\" aria-labelledby=\"designerGoModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-scrollable\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"designerGoModalLabel\">";
        // line 1094
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Loading"), "html", null, true);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 1095
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Cancel"), "html", null, true);
        yield "\"></button>
      </div>
      <div class=\"modal-body\"></div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" id=\"designerModalGoButton\">";
        // line 1099
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
        yield "</button>
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
        // line 1100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Cancel"), "html", null, true);
        yield "</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"designerPromptModal\" tabindex=\"-1\" aria-labelledby=\"designerPromptModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-scrollable\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"designerPromptModalLabel\">";
        // line 1109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Loading"), "html", null, true);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 1110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Cancel"), "html", null, true);
        yield "\"></button>
      </div>
      <div class=\"modal-body\"></div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" id=\"designerModalYesButton\">";
        // line 1114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Yes"), "html", null, true);
        yield "</button>
        <button type=\"button\" class=\"btn btn-secondary\" id=\"designerModalNoButton\">";
        // line 1115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("No"), "html", null, true);
        yield "</button>
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
        // line 1116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Cancel"), "html", null, true);
        yield "</button>
      </div>
    </div>
  </div>
</div>
";
        // line 1121
        if ((($tmp = ($context["visual_builder"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1122
            yield "<div class=\"modal fade\" id=\"buildQueryModal\" tabindex=\"-1\" aria-labelledby=\"buildQueryModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"buildQueryModalLabel\">";
            // line 1126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Loading"), "html", null, true);
            yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
            // line 1127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
            yield "\"></button>
      </div>
      <div id=\"box\" class=\"modal-body\">
        <form method=\"post\" action=\"";
            // line 1130
            yield PhpMyAdmin\Url::getFromRoute("/database/qbe");
            yield "\" id=\"vqb_form\">
          <textarea cols=\"80\" name=\"sql_query\" id=\"textSqlquery\" rows=\"15\"></textarea>
          <input type=\"hidden\" name=\"submit_sql\" value=\"true\">
          ";
            // line 1133
            yield ($context["hidden_input_fields"] ?? null);
            yield "
        </form>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
            // line 1137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
            yield "</button>
        <button type=\"button\" class=\"btn btn-secondary\" id=\"buildQuerySubmitButton\">";
            // line 1138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Submit"), "html", null, true);
            yield "</button>
      </div>
    </div>
  </div>
</div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "database/designer/main.twig";
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
        return array (  1681 => 1138,  1677 => 1137,  1670 => 1133,  1664 => 1130,  1658 => 1127,  1654 => 1126,  1648 => 1122,  1646 => 1121,  1638 => 1116,  1634 => 1115,  1630 => 1114,  1623 => 1110,  1619 => 1109,  1607 => 1100,  1603 => 1099,  1596 => 1095,  1592 => 1094,  1585 => 1089,  1580 => 1087,  1573 => 1082,  1549 => 1060,  1544 => 1058,  1530 => 1047,  1525 => 1045,  1512 => 1035,  1480 => 1006,  1449 => 977,  1425 => 955,  1418 => 951,  1385 => 921,  1374 => 913,  1351 => 892,  1327 => 870,  1320 => 866,  1305 => 854,  1300 => 852,  1287 => 842,  1255 => 813,  1221 => 782,  1190 => 753,  1166 => 731,  1159 => 727,  1145 => 716,  1134 => 708,  1111 => 687,  1087 => 665,  1082 => 663,  1064 => 648,  1059 => 646,  1046 => 636,  1014 => 607,  989 => 585,  978 => 577,  911 => 513,  902 => 507,  890 => 498,  881 => 492,  869 => 483,  864 => 481,  851 => 471,  819 => 442,  784 => 409,  782 => 408,  780 => 407,  757 => 387,  752 => 385,  742 => 378,  720 => 358,  696 => 336,  691 => 334,  622 => 268,  599 => 247,  594 => 243,  592 => 241,  591 => 240,  590 => 239,  589 => 238,  588 => 237,  587 => 236,  586 => 235,  585 => 234,  583 => 233,  577 => 229,  573 => 228,  565 => 223,  562 => 222,  553 => 215,  549 => 214,  545 => 213,  541 => 212,  533 => 207,  529 => 206,  525 => 205,  519 => 202,  504 => 190,  499 => 188,  495 => 187,  490 => 185,  486 => 184,  480 => 181,  475 => 179,  471 => 178,  467 => 177,  462 => 176,  455 => 172,  450 => 170,  446 => 169,  440 => 165,  433 => 161,  428 => 159,  424 => 158,  421 => 157,  419 => 156,  413 => 153,  408 => 151,  404 => 150,  400 => 149,  394 => 146,  389 => 144,  385 => 143,  378 => 139,  373 => 137,  369 => 136,  365 => 135,  360 => 133,  356 => 132,  350 => 129,  343 => 127,  339 => 126,  331 => 123,  326 => 121,  320 => 120,  315 => 119,  308 => 115,  303 => 113,  299 => 112,  295 => 111,  289 => 108,  284 => 106,  280 => 105,  273 => 101,  268 => 99,  264 => 98,  257 => 94,  252 => 92,  248 => 91,  241 => 87,  236 => 85,  232 => 84,  225 => 80,  220 => 78,  216 => 77,  209 => 73,  204 => 71,  200 => 70,  193 => 66,  188 => 64,  184 => 63,  177 => 59,  172 => 57,  168 => 56,  161 => 52,  156 => 50,  151 => 48,  148 => 47,  146 => 46,  140 => 43,  135 => 41,  131 => 40,  124 => 36,  120 => 35,  116 => 34,  111 => 32,  107 => 31,  103 => 30,  99 => 29,  92 => 25,  87 => 23,  83 => 22,  79 => 21,  74 => 19,  70 => 17,  63 => 13,  57 => 10,  53 => 8,  51 => 7,  45 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "database/designer/main.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/database/designer/main.twig");
    }
}

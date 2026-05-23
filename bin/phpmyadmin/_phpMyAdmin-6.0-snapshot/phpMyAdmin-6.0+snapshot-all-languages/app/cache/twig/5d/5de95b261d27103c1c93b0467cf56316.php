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

/* server/privileges/privileges_table.twig */
class __TwigTemplate_0bc332bb48ce8ebf6aef511429c0138c extends Template
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
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["columns"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "
  <input type=\"hidden\" name=\"grant_count\" value=\"";
            // line 3
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["row"] ?? null)), "html", null, true);
            yield "\">
  <input type=\"hidden\" name=\"column_count\" value=\"";
            // line 4
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["columns"] ?? null)), "html", null, true);
            yield "\">
  <div class=\"card mb-3\" id=\"fieldset_user_priv\">
    <div class=\"card-header js-submenu-label\" data-submenu-label=\"";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table"), "html", null, true);
            yield "\">
      ";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table-specific privileges"), "html", null, true);
            yield "
    </div>
    <div class=\"card-body\">
    <p>
      <small><em>";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Note: MySQL privilege names are expressed in English."), "html", null, true);
            yield "</em></small>
    </p>

    <div class=\"item\" id=\"div_item_select\">
      <label for=\"select_select_priv\">
        <code><dfn title=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows reading data."), "html", null, true);
            yield "\">SELECT</dfn></code>
      </label>

      <select class=\"resize-vertical\" id=\"select_select_priv\" name=\"Select_priv[]\" size=\"8\" multiple>
        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["columns"] ?? null));
            foreach ($context['_seq'] as $context["curr_col"] => $context["curr_col_privs"]) {
                // line 21
                yield "          <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["curr_col"], "html", null, true);
                yield "\"";
                yield (((((($_v0 = ($context["row"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["Select_priv"] ?? null) : null) == "Y") || (($_v1 = $context["curr_col_privs"]) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["Select"] ?? null) : null))) ? (" selected") : (""));
                yield ">
            ";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["curr_col"], "html", null, true);
                yield "
          </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['curr_col'], $context['curr_col_privs'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            yield "      </select>

      <div>
        <button class=\"btn btn-link p-0\" id=\"select_priv_all\" type=\"button\" data-select-target=\"#select_select_priv\">
          ";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Select all"), "html", null, true);
            yield "
        </button>
      </div>

      <em>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Or"), "html", null, true);
            yield "</em>
      <label for=\"checkbox_Select_priv_none\">
        <input type=\"checkbox\" name=\"Select_priv_none\" id=\"checkbox_Select_priv_none\" title=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("None privileges", "None"), "html", null, true);
            yield "\">
        ";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("None privileges", "None"), "html", null, true);
            yield "
      </label>
    </div>

    <div class=\"item\" id=\"div_item_insert\">
      <label for=\"select_insert_priv\">
        <code><dfn title=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows inserting and replacing data."), "html", null, true);
            yield "\">INSERT</dfn></code>
      </label>

      <select class=\"resize-vertical\" id=\"select_insert_priv\" name=\"Insert_priv[]\" size=\"8\" multiple>
        ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["columns"] ?? null));
            foreach ($context['_seq'] as $context["curr_col"] => $context["curr_col_privs"]) {
                // line 48
                yield "          <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["curr_col"], "html", null, true);
                yield "\"";
                yield (((((($_v2 = ($context["row"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["Insert_priv"] ?? null) : null) == "Y") || (($_v3 = $context["curr_col_privs"]) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["Insert"] ?? null) : null))) ? (" selected") : (""));
                yield ">
            ";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["curr_col"], "html", null, true);
                yield "
          </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['curr_col'], $context['curr_col_privs'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            yield "      </select>

      <div>
        <button class=\"btn btn-link p-0\" id=\"insert_priv_all\" type=\"button\" data-select-target=\"#select_insert_priv\">
          ";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Select all"), "html", null, true);
            yield "
        </button>
      </div>

      <em>";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Or"), "html", null, true);
            yield "</em>
      <label for=\"checkbox_Insert_priv_none\">
        <input type=\"checkbox\" name=\"Insert_priv_none\" id=\"checkbox_Insert_priv_none\" title=\"";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("None privileges", "None"), "html", null, true);
            yield "\">
        ";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("None privileges", "None"), "html", null, true);
            yield "
      </label>
    </div>

    <div class=\"item\" id=\"div_item_update\">
      <label for=\"select_update_priv\">
        <code><dfn title=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows changing data."), "html", null, true);
            yield "\">UPDATE</dfn></code>
      </label>

      <select class=\"resize-vertical\" id=\"select_update_priv\" name=\"Update_priv[]\" size=\"8\" multiple>
        ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["columns"] ?? null));
            foreach ($context['_seq'] as $context["curr_col"] => $context["curr_col_privs"]) {
                // line 75
                yield "          <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["curr_col"], "html", null, true);
                yield "\"";
                yield (((((($_v4 = ($context["row"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["Update_priv"] ?? null) : null) == "Y") || (($_v5 = $context["curr_col_privs"]) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["Update"] ?? null) : null))) ? (" selected") : (""));
                yield ">
            ";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["curr_col"], "html", null, true);
                yield "
          </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['curr_col'], $context['curr_col_privs'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            yield "      </select>

      <div>
        <button class=\"btn btn-link p-0\" id=\"update_priv_all\" type=\"button\" data-select-target=\"#select_update_priv\">
          ";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Select all"), "html", null, true);
            yield "
        </button>
      </div>

      <em>";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Or"), "html", null, true);
            yield "</em>
      <label for=\"checkbox_Update_priv_none\">
        <input type=\"checkbox\" name=\"Update_priv_none\" id=\"checkbox_Update_priv_none\" title=\"";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("None privileges", "None"), "html", null, true);
            yield "\">
        ";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("None privileges", "None"), "html", null, true);
            yield "
      </label>
    </div>

    <div class=\"item\" id=\"div_item_references\">
      <label for=\"select_references_priv\">
        <code><dfn title=\"";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Has no effect in this MySQL version."), "html", null, true);
            yield "\">REFERENCES</dfn></code>
      </label>

      <select class=\"resize-vertical\" id=\"select_references_priv\" name=\"References_priv[]\" size=\"8\" multiple>
        ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["columns"] ?? null));
            foreach ($context['_seq'] as $context["curr_col"] => $context["curr_col_privs"]) {
                // line 102
                yield "          <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["curr_col"], "html", null, true);
                yield "\"";
                yield (((((($_v6 = ($context["row"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["References_priv"] ?? null) : null) == "Y") || (($_v7 = $context["curr_col_privs"]) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["References"] ?? null) : null))) ? (" selected") : (""));
                yield ">
            ";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["curr_col"], "html", null, true);
                yield "
          </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['curr_col'], $context['curr_col_privs'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            yield "      </select>

      <div>
        <button class=\"btn btn-link p-0\" id=\"references_priv_all\" type=\"button\" data-select-target=\"#select_references_priv\">
          ";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Select all"), "html", null, true);
            yield "
        </button>
      </div>

      <em>";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Or"), "html", null, true);
            yield "</em>
      <label for=\"checkbox_References_priv_none\">
        <input type=\"checkbox\" name=\"References_priv_none\" id=\"checkbox_References_priv_none\" title=\"";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("None privileges", "None"), "html", null, true);
            yield "\">
        ";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("None privileges", "None"), "html", null, true);
            yield "
      </label>
    </div>

    <div class=\"item\">
      <div class=\"item\">
        <input type=\"checkbox\" name=\"Delete_priv\" id=\"checkbox_Delete_priv\" value=\"Y\" title=\"";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows deleting data."), "html", null, true);
            yield "\"";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Delete_priv", [], "array", true, true, false, 125) &&  !(null === (($_v8 = ($context["row"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["Delete_priv"] ?? null) : null)))) ? ((($_v9 = ($context["row"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["Delete_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
        <label for=\"checkbox_Delete_priv\">
          <code>
            <dfn title=\"";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows deleting data."), "html", null, true);
            yield "\">
              DELETE
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Create_priv\" id=\"checkbox_Create_priv\" value=\"Y\" title=\"";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating new tables."), "html", null, true);
            yield "\"";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Create_priv", [], "array", true, true, false, 137) &&  !(null === (($_v10 = ($context["row"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["Create_priv"] ?? null) : null)))) ? ((($_v11 = ($context["row"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["Create_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
        <label for=\"checkbox_Create_priv\">
          <code>
            <dfn title=\"";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating new tables."), "html", null, true);
            yield "\">
              CREATE
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Drop_priv\" id=\"checkbox_Drop_priv\" value=\"Y\" title=\"";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows dropping tables."), "html", null, true);
            yield "\"";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Drop_priv", [], "array", true, true, false, 149) &&  !(null === (($_v12 = ($context["row"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["Drop_priv"] ?? null) : null)))) ? ((($_v13 = ($context["row"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["Drop_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
        <label for=\"checkbox_Drop_priv\">
          <code>
            <dfn title=\"";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows dropping tables."), "html", null, true);
            yield "\">
              DROP
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Grant_priv\" id=\"checkbox_Grant_priv\" value=\"Y\" title=\"";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows user to give to other users or remove from other users the privileges that user possess yourself."), "html", null, true);
            yield "\"";
            // line 162
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Grant_priv", [], "array", true, true, false, 162) &&  !(null === (($_v14 = ($context["row"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["Grant_priv"] ?? null) : null)))) ? ((($_v15 = ($context["row"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["Grant_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
        <label for=\"checkbox_Grant_priv\">
          <code>
            <dfn title=\"";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows user to give to other users or remove from other users the privileges that user possess yourself."), "html", null, true);
            yield "\">
              GRANT
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Index_priv\" id=\"checkbox_Index_priv\" value=\"Y\" title=\"";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating and dropping indexes."), "html", null, true);
            yield "\"";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Index_priv", [], "array", true, true, false, 174) &&  !(null === (($_v16 = ($context["row"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["Index_priv"] ?? null) : null)))) ? ((($_v17 = ($context["row"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["Index_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
        <label for=\"checkbox_Index_priv\">
          <code>
            <dfn title=\"";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating and dropping indexes."), "html", null, true);
            yield "\">
              INDEX
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Alter_priv\" id=\"checkbox_Alter_priv\" value=\"Y\" title=\"";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows altering the structure of existing tables."), "html", null, true);
            yield "\"";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Alter_priv", [], "array", true, true, false, 186) &&  !(null === (($_v18 = ($context["row"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["Alter_priv"] ?? null) : null)))) ? ((($_v19 = ($context["row"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["Alter_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
        <label for=\"checkbox_Alter_priv\">
          <code>
            <dfn title=\"";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows altering the structure of existing tables."), "html", null, true);
            yield "\">
              ALTER
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Create_view_priv\" id=\"checkbox_Create_view_priv\" value=\"Y\" title=\"";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating new views."), "html", null, true);
            yield "\"";
            yield ((((($_v20 = ($context["row"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["Create View_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
            yield ">
        <label for=\"checkbox_Create_view_priv\">
          <code>
            <dfn title=\"";
            // line 201
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating new views."), "html", null, true);
            yield "\">
              CREATE VIEW
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Show_view_priv\" id=\"checkbox_Show_view_priv\" value=\"Y\" title=\"";
            // line 210
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows performing SHOW CREATE VIEW queries."), "html", null, true);
            yield "\"";
            yield ((((($_v21 = ($context["row"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["Show view_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
            yield ">
        <label for=\"checkbox_Show_view_priv\">
          <code>
            <dfn title=\"";
            // line 213
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows performing SHOW CREATE VIEW queries."), "html", null, true);
            yield "\">
              SHOW VIEW
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Trigger_priv\" id=\"checkbox_Trigger_priv\" value=\"Y\" title=\"";
            // line 222
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating and dropping triggers."), "html", null, true);
            yield "\"";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Trigger_priv", [], "array", true, true, false, 222) &&  !(null === (($_v22 = ($context["row"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["Trigger_priv"] ?? null) : null)))) ? ((($_v23 = ($context["row"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["Trigger_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
        <label for=\"checkbox_Trigger_priv\">
          <code>
            <dfn title=\"";
            // line 225
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating and dropping triggers."), "html", null, true);
            yield "\">
              TRIGGER
            </dfn>
          </code>
        </label>
      </div>

      ";
            // line 232
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Delete versioning rows_priv", [], "array", true, true, false, 232)) {
                // line 233
                yield "        <div class=\"item\">
          <input type=\"checkbox\" name=\"Delete_history_priv\" id=\"checkbox_Delete_history_priv\" value=\"Y\" title=\"";
                // line 235
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows deleting historical rows."), "html", null, true);
                yield "\"";
                // line 236
                yield ((((($_v24 = ($context["row"] ?? null)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["Delete versioning rows_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
                yield ">
          <label for=\"checkbox_Delete_history_priv\">
            <code>
              <dfn title=\"";
                // line 239
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows deleting historical rows."), "html", null, true);
                yield "\">
                DELETE HISTORY
              </dfn>
            </code>
          </label>
        </div>
      ";
            }
            // line 246
            yield "    </div>
    </div>
  </div>

";
        } else {
            // line 251
            yield "
";
            // line 252
            $context["grant_count"] = 0;
            // line 253
            yield "<div class=\"card mb-3\">
  <div class=\"card-header js-submenu-label\" data-submenu-label=\"";
            // line 255
            if ((($tmp = ($context["is_global"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 256
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Global"), "html", null, true);
            } elseif ((($tmp =             // line 257
($context["is_database"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 258
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Database"), "html", null, true);
            } else {
                // line 260
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table"), "html", null, true);
            }
            // line 261
            yield "\">
    ";
            // line 262
            if ((($tmp = ($context["is_global"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 263
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Global privileges"), "html", null, true);
                yield "
    ";
            } elseif ((($tmp =             // line 264
($context["is_database"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 265
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Database-specific privileges"), "html", null, true);
                yield "
    ";
            } else {
                // line 267
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table-specific privileges"), "html", null, true);
                yield "
    ";
            }
            // line 269
            yield "    <input type=\"checkbox\" id=\"addUsersForm_checkall\" class=\"checkall_box\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Check all"), "html", null, true);
            yield "\">
    <label for=\"addUsersForm_checkall\">";
            // line 270
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Check all"), "html", null, true);
            yield "</label>
  </div>
  <div class=\"card-body row g-3\">
  <p class=\"col-12\">
    <small><em>";
            // line 274
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Note: MySQL privilege names are expressed in English."), "html", null, true);
            yield "</em></small>
  </p>
    <div class=\"col\">
  <div class=\"card\">
    <div class=\"card-header\">
      <input type=\"checkbox\" class=\"sub_checkall_box\" id=\"checkall_Data_priv\" title=\"";
            // line 279
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Check all"), "html", null, true);
            yield "\">
      <label for=\"checkall_Data_priv\">";
            // line 280
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Data"), "html", null, true);
            yield "</label>
    </div>

    <div class=\"card-body\">
    <div class=\"item\">
      ";
            // line 285
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 286
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"Select_priv\" id=\"checkbox_Select_priv\" value=\"Y\" title=\"";
            // line 287
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows reading data."), "html", null, true);
            yield "\"";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Select_priv", [], "array", true, true, false, 287) &&  !(null === (($_v25 = ($context["row"] ?? null)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25["Select_priv"] ?? null) : null)))) ? ((($_v26 = ($context["row"] ?? null)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26["Select_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_Select_priv\">
        <code>
          <dfn title=\"";
            // line 290
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows reading data."), "html", null, true);
            yield "\">
            SELECT
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 298
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 299
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"Insert_priv\" id=\"checkbox_Insert_priv\" value=\"Y\" title=\"";
            // line 300
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows inserting and replacing data."), "html", null, true);
            yield "\"";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Insert_priv", [], "array", true, true, false, 300) &&  !(null === (($_v27 = ($context["row"] ?? null)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27["Insert_priv"] ?? null) : null)))) ? ((($_v28 = ($context["row"] ?? null)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28["Insert_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_Insert_priv\">
        <code>
          <dfn title=\"";
            // line 303
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows inserting and replacing data."), "html", null, true);
            yield "\">
            INSERT
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 311
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 312
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"Update_priv\" id=\"checkbox_Update_priv\" value=\"Y\" title=\"";
            // line 313
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows changing data."), "html", null, true);
            yield "\"";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Update_priv", [], "array", true, true, false, 313) &&  !(null === (($_v29 = ($context["row"] ?? null)) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29["Update_priv"] ?? null) : null)))) ? ((($_v30 = ($context["row"] ?? null)) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30["Update_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_Update_priv\">
        <code>
          <dfn title=\"";
            // line 316
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows changing data."), "html", null, true);
            yield "\">
            UPDATE
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 324
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 325
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"Delete_priv\" id=\"checkbox_Delete_priv\" value=\"Y\" title=\"";
            // line 326
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows deleting data."), "html", null, true);
            yield "\"";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Delete_priv", [], "array", true, true, false, 326) &&  !(null === (($_v31 = ($context["row"] ?? null)) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31["Delete_priv"] ?? null) : null)))) ? ((($_v32 = ($context["row"] ?? null)) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32["Delete_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_Delete_priv\">
        <code>
          <dfn title=\"";
            // line 329
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows deleting data."), "html", null, true);
            yield "\">
            DELETE
          </dfn>
        </code>
      </label>
    </div>

    ";
            // line 336
            if ((($tmp = ($context["is_global"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 337
                yield "      <div class=\"item\">
        ";
                // line 338
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 339
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"File_priv\" id=\"checkbox_File_priv\" value=\"Y\" title=\"";
                // line 340
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows importing data from and exporting data into files."), "html", null, true);
                yield "\"";
                yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "File_priv", [], "array", true, true, false, 340) &&  !(null === (($_v33 = ($context["row"] ?? null)) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33["File_priv"] ?? null) : null)))) ? ((($_v34 = ($context["row"] ?? null)) && is_array($_v34) || $_v34 instanceof ArrayAccess ? ($_v34["File_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_File_priv\">
          <code>
            <dfn title=\"";
                // line 343
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows importing data from and exporting data into files."), "html", null, true);
                yield "\">
              FILE
            </dfn>
          </code>
        </label>
      </div>
    ";
            }
            // line 350
            yield "    </div>
  </div>
    </div>
    <div class=\"col\">
  <div class=\"card\">
    <div class=\"card-header\">
      <input type=\"checkbox\" class=\"sub_checkall_box\" id=\"checkall_Structure_priv\" title=\"";
            // line 356
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Check all"), "html", null, true);
            yield "\">
      <label for=\"checkall_Structure_priv\">";
            // line 357
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Structure"), "html", null, true);
            yield "</label>
    </div>

    <div class=\"card-body\">
    <div class=\"item\">
      ";
            // line 362
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 363
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"Create_priv\" id=\"checkbox_Create_priv\" value=\"Y\" title=\"";
            // line 364
            if ((($tmp = ($context["is_database"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 365
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating new databases and tables."), "html", null, true);
            } else {
                // line 367
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating new tables."), "html", null, true);
            }
            // line 368
            yield "\"";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Create_priv", [], "array", true, true, false, 368) &&  !(null === (($_v35 = ($context["row"] ?? null)) && is_array($_v35) || $_v35 instanceof ArrayAccess ? ($_v35["Create_priv"] ?? null) : null)))) ? ((($_v36 = ($context["row"] ?? null)) && is_array($_v36) || $_v36 instanceof ArrayAccess ? ($_v36["Create_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_Create_priv\">
        <code>
          <dfn title=\"";
            // line 372
            if ((($tmp = ($context["is_database"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 373
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating new databases and tables."), "html", null, true);
            } else {
                // line 375
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating new tables."), "html", null, true);
            }
            // line 376
            yield "\">
            CREATE
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 384
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 385
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"Alter_priv\" id=\"checkbox_Alter_priv\" value=\"Y\" title=\"";
            // line 386
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows altering the structure of existing tables."), "html", null, true);
            yield "\"";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Alter_priv", [], "array", true, true, false, 386) &&  !(null === (($_v37 = ($context["row"] ?? null)) && is_array($_v37) || $_v37 instanceof ArrayAccess ? ($_v37["Alter_priv"] ?? null) : null)))) ? ((($_v38 = ($context["row"] ?? null)) && is_array($_v38) || $_v38 instanceof ArrayAccess ? ($_v38["Alter_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_Alter_priv\">
        <code>
          <dfn title=\"";
            // line 389
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows altering the structure of existing tables."), "html", null, true);
            yield "\">
            ALTER
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 397
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 398
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"Index_priv\" id=\"checkbox_Index_priv\" value=\"Y\" title=\"";
            // line 399
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating and dropping indexes."), "html", null, true);
            yield "\"";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Index_priv", [], "array", true, true, false, 399) &&  !(null === (($_v39 = ($context["row"] ?? null)) && is_array($_v39) || $_v39 instanceof ArrayAccess ? ($_v39["Index_priv"] ?? null) : null)))) ? ((($_v40 = ($context["row"] ?? null)) && is_array($_v40) || $_v40 instanceof ArrayAccess ? ($_v40["Index_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_Index_priv\">
        <code>
          <dfn title=\"";
            // line 402
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating and dropping indexes."), "html", null, true);
            yield "\">
            INDEX
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 410
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 411
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"Drop_priv\" id=\"checkbox_Drop_priv\" value=\"Y\" title=\"";
            // line 412
            if ((($tmp = ($context["is_database"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 413
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows dropping databases and tables."), "html", null, true);
            } else {
                // line 415
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows dropping tables."), "html", null, true);
            }
            // line 416
            yield "\"";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Drop_priv", [], "array", true, true, false, 416) &&  !(null === (($_v41 = ($context["row"] ?? null)) && is_array($_v41) || $_v41 instanceof ArrayAccess ? ($_v41["Drop_priv"] ?? null) : null)))) ? ((($_v42 = ($context["row"] ?? null)) && is_array($_v42) || $_v42 instanceof ArrayAccess ? ($_v42["Drop_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_Drop_priv\">
        <code>
          <dfn title=\"";
            // line 420
            if ((($tmp = ($context["is_database"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 421
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows dropping databases and tables."), "html", null, true);
            } else {
                // line 423
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows dropping tables."), "html", null, true);
            }
            // line 424
            yield "\">
            DROP
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 432
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 433
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"Create_tmp_table_priv\" id=\"checkbox_Create_tmp_table_priv\" value=\"Y\" title=\"";
            // line 434
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating temporary tables."), "html", null, true);
            yield "\"";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Create_tmp_table_priv", [], "array", true, true, false, 434) &&  !(null === (($_v43 = ($context["row"] ?? null)) && is_array($_v43) || $_v43 instanceof ArrayAccess ? ($_v43["Create_tmp_table_priv"] ?? null) : null)))) ? ((($_v44 = ($context["row"] ?? null)) && is_array($_v44) || $_v44 instanceof ArrayAccess ? ($_v44["Create_tmp_table_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_Create_tmp_table_priv\">
        <code>
          <dfn title=\"";
            // line 437
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating temporary tables."), "html", null, true);
            yield "\">
            CREATE TEMPORARY TABLES
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 445
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 446
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"Show_view_priv\" id=\"checkbox_Show_view_priv\" value=\"Y\" title=\"";
            // line 447
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows performing SHOW CREATE VIEW queries."), "html", null, true);
            yield "\"";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Show_view_priv", [], "array", true, true, false, 447) &&  !(null === (($_v45 = ($context["row"] ?? null)) && is_array($_v45) || $_v45 instanceof ArrayAccess ? ($_v45["Show_view_priv"] ?? null) : null)))) ? ((($_v46 = ($context["row"] ?? null)) && is_array($_v46) || $_v46 instanceof ArrayAccess ? ($_v46["Show_view_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_Show_view_priv\">
        <code>
          <dfn title=\"";
            // line 450
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows performing SHOW CREATE VIEW queries."), "html", null, true);
            yield "\">
            SHOW VIEW
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 458
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 459
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"Create_routine_priv\" id=\"checkbox_Create_routine_priv\" value=\"Y\" title=\"";
            // line 460
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating stored routines."), "html", null, true);
            yield "\"";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Create_routine_priv", [], "array", true, true, false, 460) &&  !(null === (($_v47 = ($context["row"] ?? null)) && is_array($_v47) || $_v47 instanceof ArrayAccess ? ($_v47["Create_routine_priv"] ?? null) : null)))) ? ((($_v48 = ($context["row"] ?? null)) && is_array($_v48) || $_v48 instanceof ArrayAccess ? ($_v48["Create_routine_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_Create_routine_priv\">
        <code>
          <dfn title=\"";
            // line 463
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating stored routines."), "html", null, true);
            yield "\">
            CREATE ROUTINE
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 471
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 472
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"Alter_routine_priv\" id=\"checkbox_Alter_routine_priv\" value=\"Y\" title=\"";
            // line 473
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows altering and dropping stored routines."), "html", null, true);
            yield "\"";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Alter_routine_priv", [], "array", true, true, false, 473) &&  !(null === (($_v49 = ($context["row"] ?? null)) && is_array($_v49) || $_v49 instanceof ArrayAccess ? ($_v49["Alter_routine_priv"] ?? null) : null)))) ? ((($_v50 = ($context["row"] ?? null)) && is_array($_v50) || $_v50 instanceof ArrayAccess ? ($_v50["Alter_routine_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_Alter_routine_priv\">
        <code>
          <dfn title=\"";
            // line 476
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows altering and dropping stored routines."), "html", null, true);
            yield "\">
            ALTER ROUTINE
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 484
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 485
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"Execute_priv\" id=\"checkbox_Execute_priv\" value=\"Y\" title=\"";
            // line 486
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows executing stored routines."), "html", null, true);
            yield "\"";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Execute_priv", [], "array", true, true, false, 486) &&  !(null === (($_v51 = ($context["row"] ?? null)) && is_array($_v51) || $_v51 instanceof ArrayAccess ? ($_v51["Execute_priv"] ?? null) : null)))) ? ((($_v52 = ($context["row"] ?? null)) && is_array($_v52) || $_v52 instanceof ArrayAccess ? ($_v52["Execute_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_Execute_priv\">
        <code>
          <dfn title=\"";
            // line 489
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows executing stored routines."), "html", null, true);
            yield "\">
            EXECUTE
          </dfn>
        </code>
      </label>
    </div>

    ";
            // line 496
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Create_view_priv", [], "array", true, true, false, 496)) {
                // line 497
                yield "      <div class=\"item\">
        ";
                // line 498
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 499
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"Create_view_priv\" id=\"checkbox_Create_view_priv\" value=\"Y\" title=\"";
                // line 500
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating new views."), "html", null, true);
                yield "\"";
                yield ((((($_v53 = ($context["row"] ?? null)) && is_array($_v53) || $_v53 instanceof ArrayAccess ? ($_v53["Create_view_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_Create_view_priv\">
          <code>
            <dfn title=\"";
                // line 503
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating new views."), "html", null, true);
                yield "\">
              CREATE VIEW
            </dfn>
          </code>
        </label>
      </div>
    ";
            }
            // line 510
            yield "
    ";
            // line 511
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Create View_priv", [], "array", true, true, false, 511)) {
                // line 512
                yield "      <div class=\"item\">
        ";
                // line 513
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 514
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"Create View_priv\" id=\"checkbox_Create View_priv\" value=\"Y\" title=\"";
                // line 515
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating new views."), "html", null, true);
                yield "\"";
                yield ((((($_v54 = ($context["row"] ?? null)) && is_array($_v54) || $_v54 instanceof ArrayAccess ? ($_v54["Create View_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_Create View_priv\">
          <code>
            <dfn title=\"";
                // line 518
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating new views."), "html", null, true);
                yield "\">
              CREATE VIEW
            </dfn>
          </code>
        </label>
      </div>
    ";
            }
            // line 525
            yield "
    ";
            // line 526
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Event_priv", [], "array", true, true, false, 526)) {
                // line 527
                yield "      <div class=\"item\">
        ";
                // line 528
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 529
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"Event_priv\" id=\"checkbox_Event_priv\" value=\"Y\" title=\"";
                // line 530
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows to set up events for the event scheduler."), "html", null, true);
                yield "\"";
                yield ((((($_v55 = ($context["row"] ?? null)) && is_array($_v55) || $_v55 instanceof ArrayAccess ? ($_v55["Event_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_Event_priv\">
          <code>
            <dfn title=\"";
                // line 533
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows to set up events for the event scheduler."), "html", null, true);
                yield "\">
              EVENT
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 541
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 542
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"Trigger_priv\" id=\"checkbox_Trigger_priv\" value=\"Y\" title=\"";
                // line 543
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating and dropping triggers."), "html", null, true);
                yield "\"";
                yield ((((($_v56 = ($context["row"] ?? null)) && is_array($_v56) || $_v56 instanceof ArrayAccess ? ($_v56["Trigger_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_Trigger_priv\">
          <code>
            <dfn title=\"";
                // line 546
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating and dropping triggers."), "html", null, true);
                yield "\">
              TRIGGER
            </dfn>
          </code>
        </label>
      </div>
    ";
            }
            // line 553
            yield "    </div>
  </div>
    </div>
    <div class=\"col\">

  <div class=\"card\">
    <div class=\"card-header\">
      <input type=\"checkbox\" class=\"sub_checkall_box\" id=\"checkall_Administration_priv\" title=\"";
            // line 560
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Check all"), "html", null, true);
            yield "\">
      <label for=\"checkall_Administration_priv\">";
            // line 561
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Administration"), "html", null, true);
            yield "</label>
    </div>

    <div class=\"card-body\">

    ";
            // line 566
            if ((($tmp = ($context["is_global"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 567
                yield "      <div class=\"item\">
        ";
                // line 568
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 569
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"Grant_priv\" id=\"checkbox_Grant_priv\" value=\"Y\" title=\"";
                // line 570
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows adding users and privileges without reloading the privilege tables."), "html", null, true);
                yield "\"";
                yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Grant_priv", [], "array", true, true, false, 570) &&  !(null === (($_v57 = ($context["row"] ?? null)) && is_array($_v57) || $_v57 instanceof ArrayAccess ? ($_v57["Grant_priv"] ?? null) : null)))) ? ((($_v58 = ($context["row"] ?? null)) && is_array($_v58) || $_v58 instanceof ArrayAccess ? ($_v58["Grant_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_Grant_priv\">
          <code>
            <dfn title=\"";
                // line 573
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows adding users and privileges without reloading the privilege tables."), "html", null, true);
                yield "\">
              GRANT
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 581
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 582
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"Super_priv\" id=\"checkbox_Super_priv\" value=\"Y\" title=\"";
                // line 583
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows connecting, even if maximum number of connections is reached; required for most administrative operations like setting global variables or killing threads of other users."), "html", null, true);
                yield "\"";
                // line 584
                yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Super_priv", [], "array", true, true, false, 584) &&  !(null === (($_v59 = ($context["row"] ?? null)) && is_array($_v59) || $_v59 instanceof ArrayAccess ? ($_v59["Super_priv"] ?? null) : null)))) ? ((($_v60 = ($context["row"] ?? null)) && is_array($_v60) || $_v60 instanceof ArrayAccess ? ($_v60["Super_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_Super_priv\">
          <code>
            <dfn title=\"";
                // line 587
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows connecting, even if maximum number of connections is reached; required for most administrative operations like setting global variables or killing threads of other users."), "html", null, true);
                yield "\">
              SUPER
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 595
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 596
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"Process_priv\" id=\"checkbox_Process_priv\" value=\"Y\" title=\"";
                // line 597
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows viewing processes of all users."), "html", null, true);
                yield "\"";
                yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Process_priv", [], "array", true, true, false, 597) &&  !(null === (($_v61 = ($context["row"] ?? null)) && is_array($_v61) || $_v61 instanceof ArrayAccess ? ($_v61["Process_priv"] ?? null) : null)))) ? ((($_v62 = ($context["row"] ?? null)) && is_array($_v62) || $_v62 instanceof ArrayAccess ? ($_v62["Process_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_Process_priv\">
          <code>
            <dfn title=\"";
                // line 600
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows viewing processes of all users."), "html", null, true);
                yield "\">
              PROCESS
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 608
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 609
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"Reload_priv\" id=\"checkbox_Reload_priv\" value=\"Y\" title=\"";
                // line 610
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows reloading server settings and flushing the server's caches."), "html", null, true);
                yield "\"";
                yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Reload_priv", [], "array", true, true, false, 610) &&  !(null === (($_v63 = ($context["row"] ?? null)) && is_array($_v63) || $_v63 instanceof ArrayAccess ? ($_v63["Reload_priv"] ?? null) : null)))) ? ((($_v64 = ($context["row"] ?? null)) && is_array($_v64) || $_v64 instanceof ArrayAccess ? ($_v64["Reload_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_Reload_priv\">
          <code>
            <dfn title=\"";
                // line 613
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows reloading server settings and flushing the server's caches."), "html", null, true);
                yield "\">
              RELOAD
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 621
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 622
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"Shutdown_priv\" id=\"checkbox_Shutdown_priv\" value=\"Y\" title=\"";
                // line 623
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows shutting down the server."), "html", null, true);
                yield "\"";
                yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Shutdown_priv", [], "array", true, true, false, 623) &&  !(null === (($_v65 = ($context["row"] ?? null)) && is_array($_v65) || $_v65 instanceof ArrayAccess ? ($_v65["Shutdown_priv"] ?? null) : null)))) ? ((($_v66 = ($context["row"] ?? null)) && is_array($_v66) || $_v66 instanceof ArrayAccess ? ($_v66["Shutdown_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_Shutdown_priv\">
          <code>
            <dfn title=\"";
                // line 626
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows shutting down the server."), "html", null, true);
                yield "\">
              SHUTDOWN
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 634
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 635
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"Show_db_priv\" id=\"checkbox_Show_db_priv\" value=\"Y\" title=\"";
                // line 636
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Gives access to the complete list of databases."), "html", null, true);
                yield "\"";
                yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Show_db_priv", [], "array", true, true, false, 636) &&  !(null === (($_v67 = ($context["row"] ?? null)) && is_array($_v67) || $_v67 instanceof ArrayAccess ? ($_v67["Show_db_priv"] ?? null) : null)))) ? ((($_v68 = ($context["row"] ?? null)) && is_array($_v68) || $_v68 instanceof ArrayAccess ? ($_v68["Show_db_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_Show_db_priv\">
          <code>
            <dfn title=\"";
                // line 639
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Gives access to the complete list of databases."), "html", null, true);
                yield "\">
              SHOW DATABASES
            </dfn>
          </code>
        </label>
      </div>
    ";
            } else {
                // line 646
                yield "      <div class=\"item\">
        ";
                // line 647
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 648
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"Grant_priv\" id=\"checkbox_Grant_priv\" value=\"Y\" title=\"";
                // line 649
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows user to give to other users or remove from other users the privileges that user possess yourself."), "html", null, true);
                yield "\"";
                // line 650
                yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Grant_priv", [], "array", true, true, false, 650) &&  !(null === (($_v69 = ($context["row"] ?? null)) && is_array($_v69) || $_v69 instanceof ArrayAccess ? ($_v69["Grant_priv"] ?? null) : null)))) ? ((($_v70 = ($context["row"] ?? null)) && is_array($_v70) || $_v70 instanceof ArrayAccess ? ($_v70["Grant_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_Grant_priv\">
          <code>
            <dfn title=\"";
                // line 653
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows user to give to other users or remove from other users the privileges that user possess yourself."), "html", null, true);
                yield "\">
              GRANT
            </dfn>
          </code>
        </label>
      </div>
    ";
            }
            // line 660
            yield "
    <div class=\"item\">
      ";
            // line 662
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 663
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"Lock_tables_priv\" id=\"checkbox_Lock_tables_priv\" value=\"Y\" title=\"";
            // line 664
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows locking tables for the current thread."), "html", null, true);
            yield "\"";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Lock_tables_priv", [], "array", true, true, false, 664) &&  !(null === (($_v71 = ($context["row"] ?? null)) && is_array($_v71) || $_v71 instanceof ArrayAccess ? ($_v71["Lock_tables_priv"] ?? null) : null)))) ? ((($_v72 = ($context["row"] ?? null)) && is_array($_v72) || $_v72 instanceof ArrayAccess ? ($_v72["Lock_tables_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_Lock_tables_priv\">
        <code>
          <dfn title=\"";
            // line 667
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows locking tables for the current thread."), "html", null, true);
            yield "\">
            LOCK TABLES
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 675
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 676
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"References_priv\" id=\"checkbox_References_priv\" value=\"Y\" title=\"";
            // line 677
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Has no effect in this MySQL version."), "html", null, true);
            yield "\"";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "References_priv", [], "array", true, true, false, 677) &&  !(null === (($_v73 = ($context["row"] ?? null)) && is_array($_v73) || $_v73 instanceof ArrayAccess ? ($_v73["References_priv"] ?? null) : null)))) ? ((($_v74 = ($context["row"] ?? null)) && is_array($_v74) || $_v74 instanceof ArrayAccess ? ($_v74["References_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_References_priv\">
        <code>
          <dfn title=\"";
            // line 680
            yield (((($tmp = ($context["supports_references_privilege"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating foreign key relations."), "html", null, true)) : ((((($tmp = ($context["is_mariadb"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Not used on MariaDB."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Not used for this MySQL version."), "html", null, true)))));
            yield "\">
            REFERENCES
          </dfn>
        </code>
      </label>
    </div>

    ";
            // line 687
            if ((($tmp = ($context["is_global"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 688
                yield "      <div class=\"item\">
        ";
                // line 689
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 690
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"Repl_client_priv\" id=\"checkbox_Repl_client_priv\" value=\"Y\" title=\"";
                // line 691
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows the user to ask where the replicas / primaries are."), "html", null, true);
                yield "\"";
                yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Repl_client_priv", [], "array", true, true, false, 691) &&  !(null === (($_v75 = ($context["row"] ?? null)) && is_array($_v75) || $_v75 instanceof ArrayAccess ? ($_v75["Repl_client_priv"] ?? null) : null)))) ? ((($_v76 = ($context["row"] ?? null)) && is_array($_v76) || $_v76 instanceof ArrayAccess ? ($_v76["Repl_client_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_Repl_client_priv\">
          <code>
            <dfn title=\"";
                // line 694
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows the user to ask where the replicas / primaries are."), "html", null, true);
                yield "\">
              REPLICATION CLIENT
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 702
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 703
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"Repl_slave_priv\" id=\"checkbox_Repl_slave_priv\" value=\"Y\" title=\"";
                // line 704
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Needed for the replication replicas."), "html", null, true);
                yield "\"";
                yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Repl_slave_priv", [], "array", true, true, false, 704) &&  !(null === (($_v77 = ($context["row"] ?? null)) && is_array($_v77) || $_v77 instanceof ArrayAccess ? ($_v77["Repl_slave_priv"] ?? null) : null)))) ? ((($_v78 = ($context["row"] ?? null)) && is_array($_v78) || $_v78 instanceof ArrayAccess ? ($_v78["Repl_slave_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_Repl_slave_priv\">
          <code>
            <dfn title=\"";
                // line 707
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Needed for the replication replicas."), "html", null, true);
                yield "\">
              REPLICATION SLAVE
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 715
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 716
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"Create_user_priv\" id=\"checkbox_Create_user_priv\" value=\"Y\" title=\"";
                // line 717
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating, dropping and renaming user accounts."), "html", null, true);
                yield "\"";
                yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Create_user_priv", [], "array", true, true, false, 717) &&  !(null === (($_v79 = ($context["row"] ?? null)) && is_array($_v79) || $_v79 instanceof ArrayAccess ? ($_v79["Create_user_priv"] ?? null) : null)))) ? ((($_v80 = ($context["row"] ?? null)) && is_array($_v80) || $_v80 instanceof ArrayAccess ? ($_v80["Create_user_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_Create_user_priv\">
          <code>
            <dfn title=\"";
                // line 720
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allows creating, dropping and renaming user accounts."), "html", null, true);
                yield "\">
              CREATE USER
            </dfn>
          </code>
        </label>
      </div>
    ";
            }
            // line 727
            yield "    </div>
  </div>
    </div>

  ";
            // line 731
            if ((($tmp = ($context["is_global"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 732
                yield "    <div class=\"col\">
    <div class=\"card\">
      <div class=\"card-header\">";
                // line 734
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Resource limits"), "html", null, true);
                yield "</div>
      <div class=\"card-body\">
      <p>
        <small><em>";
                // line 737
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Note: Setting these options to 0 (zero) removes the limit."), "html", null, true);
                yield "</em></small>
      </p>

      <div class=\"item\">
        <label for=\"text_max_questions\">
          <code>
            <dfn title=\"";
                // line 743
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Limits the number of queries the user may send to the server per hour."), "html", null, true);
                yield "\">
              MAX QUERIES PER HOUR
            </dfn>
          </code>
        </label>
        <input type=\"number\" name=\"max_questions\" id=\"text_max_questions\" value=\"";
                // line 749
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "max_questions", [], "any", true, true, false, 749) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "max_questions", [], "any", false, false, false, 749)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "max_questions", [], "any", false, false, false, 749), "html", null, true)) : ("0"));
                yield "\" title=\"";
                // line 750
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Limits the number of queries the user may send to the server per hour."), "html", null, true);
                yield "\">
      </div>

      <div class=\"item\">
        <label for=\"text_max_updates\">
          <code>
            <dfn title=\"";
                // line 756
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Limits the number of commands that change any table or database the user may execute per hour."), "html", null, true);
                yield "\">
              MAX UPDATES PER HOUR
            </dfn>
          </code>
        </label>
        <input type=\"number\" name=\"max_updates\" id=\"text_max_updates\" value=\"";
                // line 762
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "max_updates", [], "any", true, true, false, 762) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "max_updates", [], "any", false, false, false, 762)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "max_updates", [], "any", false, false, false, 762), "html", null, true)) : ("0"));
                yield "\" title=\"";
                // line 763
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Limits the number of commands that change any table or database the user may execute per hour."), "html", null, true);
                yield "\">
      </div>

      <div class=\"item\">
        <label for=\"text_max_connections\">
          <code>
            <dfn title=\"";
                // line 769
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Limits the number of new connections the user may open per hour."), "html", null, true);
                yield "\">
              MAX CONNECTIONS PER HOUR
            </dfn>
          </code>
        </label>
        <input type=\"number\" name=\"max_connections\" id=\"text_max_connections\" value=\"";
                // line 775
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "max_connections", [], "any", true, true, false, 775) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "max_connections", [], "any", false, false, false, 775)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "max_connections", [], "any", false, false, false, 775), "html", null, true)) : ("0"));
                yield "\" title=\"";
                // line 776
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Limits the number of new connections the user may open per hour."), "html", null, true);
                yield "\">
      </div>

      <div class=\"item\">
        <label for=\"text_max_user_connections\">
          <code>
            <dfn title=\"";
                // line 782
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Limits the number of simultaneous connections the user may have."), "html", null, true);
                yield "\">
              MAX USER_CONNECTIONS
            </dfn>
          </code>
        </label>
        <input type=\"number\" name=\"max_user_connections\" id=\"text_max_user_connections\" value=\"";
                // line 788
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "max_user_connections", [], "any", true, true, false, 788) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "max_user_connections", [], "any", false, false, false, 788)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "max_user_connections", [], "any", false, false, false, 788), "html", null, true)) : ("0"));
                yield "\" title=\"";
                // line 789
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Limits the number of simultaneous connections the user may have."), "html", null, true);
                yield "\">
      </div>
      </div>
    </div>
    </div>
    <div class=\"col\">

    <div class=\"card\">
      <div class=\"card-header\">SSL</div>
      <div class=\"card-body\">
      <div id=\"require_ssl_div\">
        <div class=\"item\">
          <input type=\"radio\" name=\"ssl_type\" id=\"ssl_type_NONE\" title=\"";
                // line 802
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Does not require SSL-encrypted connections."), "html", null, true);
                yield "\" value=\"NONE\"";
                // line 803
                yield (((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", true, true, false, 803) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 803)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 803)) : (null)) == "NONE") || ((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", true, true, false, 803) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 803)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 803)) : (null)) == ""))) ? (" checked") : (""));
                yield ">
          <label for=\"ssl_type_NONE\">
            <code>REQUIRE NONE</code>
          </label>
        </div>

        <div class=\"item\">
          <input type=\"radio\" name=\"ssl_type\" id=\"ssl_type_ANY\" title=\"";
                // line 811
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Requires SSL-encrypted connections."), "html", null, true);
                yield "\" value=\"ANY\"";
                // line 812
                yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", true, true, false, 812) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 812)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 812)) : (null)) == "ANY")) ? (" checked") : (""));
                yield ">
          <label for=\"ssl_type_ANY\">
            <code>REQUIRE SSL</code>
          </label>
        </div>

        <div class=\"item\">
          <input type=\"radio\" name=\"ssl_type\" id=\"ssl_type_X509\" title=\"";
                // line 820
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Requires a valid X509 certificate."), "html", null, true);
                yield "\" value=\"X509\"";
                // line 821
                yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", true, true, false, 821) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 821)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 821)) : (null)) == "X509")) ? (" checked") : (""));
                yield ">
          <label for=\"ssl_type_X509\">
            <code>REQUIRE X509</code>
          </label>
        </div>

        <div class=\"item\">
          <input type=\"radio\" name=\"ssl_type\" id=\"ssl_type_SPECIFIED\" value=\"SPECIFIED\"";
                // line 829
                yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", true, true, false, 829) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 829)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 829)) : (null)) == "SPECIFIED")) ? (" checked") : (""));
                yield ">
          <label for=\"ssl_type_SPECIFIED\">
            <code>SPECIFIED</code>
          </label>
        </div>

        <div id=\"specified_div\" style=\"padding-left:20px;\">
          <div class=\"item\">
            <label for=\"text_ssl_cipher\">
              <code>REQUIRE CIPHER</code>
            </label>
            <input type=\"text\" name=\"ssl_cipher\" id=\"text_ssl_cipher\" value=\"";
                // line 840
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_cipher", [], "any", true, true, false, 840) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_cipher", [], "any", false, false, false, 840)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_cipher", [], "any", false, false, false, 840), "html", null, true)) : (null));
                yield "\" size=\"80\" title=\"";
                // line 841
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Requires that a specific cipher method be used for a connection."), "html", null, true);
                yield "\"";
                // line 842
                yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", true, true, false, 842) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 842)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 842)) : (null)) != "SPECIFIED")) ? (" disabled") : (""));
                yield ">
          </div>

          <div class=\"item\">
            <label for=\"text_x509_issuer\">
              <code>REQUIRE ISSUER</code>
            </label>
            <input type=\"text\" name=\"x509_issuer\" id=\"text_x509_issuer\" value=\"";
                // line 849
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "x509_issuer", [], "any", true, true, false, 849) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "x509_issuer", [], "any", false, false, false, 849)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "x509_issuer", [], "any", false, false, false, 849), "html", null, true)) : (null));
                yield "\" size=\"80\" title=\"";
                // line 850
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Requires that a valid X509 certificate issued by this CA be presented."), "html", null, true);
                yield "\"";
                // line 851
                yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", true, true, false, 851) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 851)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 851)) : (null)) != "SPECIFIED")) ? (" disabled") : (""));
                yield ">
          </div>

          <div class=\"item\">
            <label for=\"text_x509_subject\">
              <code>REQUIRE SUBJECT</code>
            </label>
            <input type=\"text\" name=\"x509_subject\" id=\"text_x509_subject\" value=\"";
                // line 858
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "x509_subject", [], "any", true, true, false, 858) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "x509_subject", [], "any", false, false, false, 858)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "x509_subject", [], "any", false, false, false, 858), "html", null, true)) : (null));
                yield "\" size=\"80\" title=\"";
                // line 859
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Requires that a valid X509 certificate with this subject be presented."), "html", null, true);
                yield "\"";
                // line 860
                yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", true, true, false, 860) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 860)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 860)) : (null)) != "SPECIFIED")) ? (" disabled") : (""));
                yield ">
          </div>
        </div>
      </div>
      </div>
    </div>
    </div>
  ";
            }
            // line 868
            yield "  </div>
</div>
<input type=\"hidden\" name=\"grant_count\" value=\"";
            // line 870
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["grant_count"] ?? null) - ((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Grant_priv", [], "array", true, true, false, 870)) ? (1) : (0))), "html", null, true);
            yield "\">

";
        }
        // line 873
        yield "
";
        // line 874
        if ((($tmp = ($context["has_submit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 875
            yield "  <div>
    <input type=\"hidden\" name=\"update_privs\" value=\"1\">
    <input class=\"btn btn-primary\" type=\"submit\" value=\"";
            // line 877
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Update user privileges"), "html", null, true);
            yield "\">
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
        return "server/privileges/privileges_table.twig";
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
        return array (  1613 => 877,  1609 => 875,  1607 => 874,  1604 => 873,  1598 => 870,  1594 => 868,  1583 => 860,  1580 => 859,  1577 => 858,  1567 => 851,  1564 => 850,  1561 => 849,  1551 => 842,  1548 => 841,  1545 => 840,  1531 => 829,  1521 => 821,  1518 => 820,  1508 => 812,  1505 => 811,  1495 => 803,  1492 => 802,  1477 => 789,  1474 => 788,  1466 => 782,  1457 => 776,  1454 => 775,  1446 => 769,  1437 => 763,  1434 => 762,  1426 => 756,  1417 => 750,  1414 => 749,  1406 => 743,  1397 => 737,  1391 => 734,  1387 => 732,  1385 => 731,  1379 => 727,  1369 => 720,  1361 => 717,  1359 => 716,  1357 => 715,  1346 => 707,  1338 => 704,  1336 => 703,  1334 => 702,  1323 => 694,  1315 => 691,  1313 => 690,  1311 => 689,  1308 => 688,  1306 => 687,  1296 => 680,  1288 => 677,  1286 => 676,  1284 => 675,  1273 => 667,  1265 => 664,  1263 => 663,  1261 => 662,  1257 => 660,  1247 => 653,  1241 => 650,  1238 => 649,  1236 => 648,  1234 => 647,  1231 => 646,  1221 => 639,  1213 => 636,  1211 => 635,  1209 => 634,  1198 => 626,  1190 => 623,  1188 => 622,  1186 => 621,  1175 => 613,  1167 => 610,  1165 => 609,  1163 => 608,  1152 => 600,  1144 => 597,  1142 => 596,  1140 => 595,  1129 => 587,  1123 => 584,  1120 => 583,  1118 => 582,  1116 => 581,  1105 => 573,  1097 => 570,  1095 => 569,  1093 => 568,  1090 => 567,  1088 => 566,  1080 => 561,  1076 => 560,  1067 => 553,  1057 => 546,  1049 => 543,  1047 => 542,  1045 => 541,  1034 => 533,  1026 => 530,  1024 => 529,  1022 => 528,  1019 => 527,  1017 => 526,  1014 => 525,  1004 => 518,  996 => 515,  994 => 514,  992 => 513,  989 => 512,  987 => 511,  984 => 510,  974 => 503,  966 => 500,  964 => 499,  962 => 498,  959 => 497,  957 => 496,  947 => 489,  939 => 486,  937 => 485,  935 => 484,  924 => 476,  916 => 473,  914 => 472,  912 => 471,  901 => 463,  893 => 460,  891 => 459,  889 => 458,  878 => 450,  870 => 447,  868 => 446,  866 => 445,  855 => 437,  847 => 434,  845 => 433,  843 => 432,  833 => 424,  830 => 423,  827 => 421,  825 => 420,  818 => 416,  815 => 415,  812 => 413,  810 => 412,  808 => 411,  806 => 410,  795 => 402,  787 => 399,  785 => 398,  783 => 397,  772 => 389,  764 => 386,  762 => 385,  760 => 384,  750 => 376,  747 => 375,  744 => 373,  742 => 372,  735 => 368,  732 => 367,  729 => 365,  727 => 364,  725 => 363,  723 => 362,  715 => 357,  711 => 356,  703 => 350,  693 => 343,  685 => 340,  683 => 339,  681 => 338,  678 => 337,  676 => 336,  666 => 329,  658 => 326,  656 => 325,  654 => 324,  643 => 316,  635 => 313,  633 => 312,  631 => 311,  620 => 303,  612 => 300,  610 => 299,  608 => 298,  597 => 290,  589 => 287,  587 => 286,  585 => 285,  577 => 280,  573 => 279,  565 => 274,  558 => 270,  553 => 269,  547 => 267,  541 => 265,  539 => 264,  534 => 263,  532 => 262,  529 => 261,  526 => 260,  523 => 258,  521 => 257,  519 => 256,  517 => 255,  514 => 253,  512 => 252,  509 => 251,  502 => 246,  492 => 239,  486 => 236,  483 => 235,  480 => 233,  478 => 232,  468 => 225,  460 => 222,  449 => 213,  441 => 210,  430 => 201,  422 => 198,  411 => 189,  403 => 186,  392 => 177,  384 => 174,  373 => 165,  367 => 162,  364 => 161,  353 => 152,  345 => 149,  334 => 140,  326 => 137,  315 => 128,  307 => 125,  298 => 118,  294 => 117,  289 => 114,  282 => 110,  276 => 106,  267 => 103,  260 => 102,  256 => 101,  249 => 97,  240 => 91,  236 => 90,  231 => 87,  224 => 83,  218 => 79,  209 => 76,  202 => 75,  198 => 74,  191 => 70,  182 => 64,  178 => 63,  173 => 60,  166 => 56,  160 => 52,  151 => 49,  144 => 48,  140 => 47,  133 => 43,  124 => 37,  120 => 36,  115 => 33,  108 => 29,  102 => 25,  93 => 22,  86 => 21,  82 => 20,  75 => 16,  67 => 11,  60 => 7,  56 => 6,  51 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "server/privileges/privileges_table.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/privileges/privileges_table.twig");
    }
}

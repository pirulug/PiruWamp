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

/* config/form_display/input.twig */
class __TwigTemplate_51d673c225305023e3cb00ca423f3cf3 extends Template
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
        if ((($tmp = ($context["option_is_disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "  ";
            $context["tr_class"] = (($context["tr_class"] ?? null) . " disabled-field");
        }
        // line 4
        yield "<tr";
        if ((($tmp = ($context["tr_class"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["tr_class"] ?? null), "html", null, true);
            yield "\"";
        }
        yield ">
  <th>
    <label for=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["path"] ?? null), "html", null, true);
        yield "\">";
        yield ($context["name"] ?? null);
        yield "</label>

    ";
        // line 8
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["doc"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "      <span class=\"doc\">
        <a href=\"";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc"] ?? null), "html", null, true);
            yield "\" target=\"documentation\">";
            yield PhpMyAdmin\Html\Generator::getImage("b_help", \_gettext("Documentation"));
            yield "</a>
      </span>
    ";
        }
        // line 13
        yield "
    ";
        // line 14
        if ((($tmp = ($context["option_is_disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "      <span class=\"disabled-notice\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("This setting is disabled, it will not be applied to your configuration."), "html", null, true);
            yield "\">
        ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Disabled"), "html", null, true);
            yield "
      </span>
    ";
        }
        // line 19
        yield "
    ";
        // line 20
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["description"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 21
            yield "      <small>";
            yield ($context["description"] ?? null);
            yield "</small>
    ";
        }
        // line 23
        yield "  </th>

  <td>
    ";
        // line 26
        if ((($context["type"] ?? null) == "text")) {
            // line 27
            yield "      <input type=\"text\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["path"] ?? null), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["path"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" class=\"w-75";
            yield (((($tmp =  !($context["value_is_default"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((($tmp = ($context["has_errors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" custom field-error") : (" custom"))) : (""));
            yield "\">
    ";
        } elseif ((        // line 28
($context["type"] ?? null) == "password")) {
            // line 29
            yield "      <input type=\"password\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["path"] ?? null), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["path"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" class=\"w-75";
            yield (((($tmp =  !($context["value_is_default"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((($tmp = ($context["has_errors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" custom field-error") : (" custom"))) : (""));
            yield "\" spellcheck=\"false\">
    ";
        } elseif (((        // line 30
($context["type"] ?? null) == "short_text") &&  !is_iterable(($context["value"] ?? null)))) {
            // line 31
            yield "      ";
            // line 32
            yield "      <input type=\"text\" size=\"25\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["path"] ?? null), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["path"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" class=\"";
            yield (((($tmp =  !($context["value_is_default"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((($tmp = ($context["has_errors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("custom field-error") : ("custom"))) : (""));
            yield "\">
    ";
        } elseif ((        // line 33
($context["type"] ?? null) == "number_text")) {
            // line 34
            yield "      <input type=\"number\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["path"] ?? null), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["path"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" class=\"";
            yield (((($tmp =  !($context["value_is_default"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((($tmp = ($context["has_errors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("custom field-error") : ("custom"))) : (""));
            yield "\">
    ";
        } elseif ((        // line 35
($context["type"] ?? null) == "checkbox")) {
            // line 36
            yield "      <span class=\"checkbox";
            yield (((($tmp =  !($context["value_is_default"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((($tmp = ($context["has_errors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" custom field-error") : (" custom"))) : (""));
            yield "\">
        <input type=\"checkbox\" name=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["path"] ?? null), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["path"] ?? null), "html", null, true);
            yield "\"";
            yield (((($tmp = ($context["value"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
            yield ">
      </span>
    ";
        } elseif ((        // line 39
($context["type"] ?? null) == "select")) {
            // line 40
            yield "      <select name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["path"] ?? null), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["path"] ?? null), "html", null, true);
            yield "\" class=\"w-75";
            yield (((($tmp =  !($context["value_is_default"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((($tmp = ($context["has_errors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" custom field-error") : (" custom"))) : (""));
            yield "\">
        ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["select_values"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 42
                yield "          ";
                if (($context["val"] === true)) {
                    $context["val"] = \_gettext("Yes");
                } elseif (($context["val"] === false)) {
                    $context["val"] = \_gettext("No");
                }
                // line 43
                yield "          <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\"";
                yield ((Twig\Extension\CoreExtension::testEmpty($context["val"])) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((" label=\"" . \_gettext("None")) . "\""), "html", null, true)) : (""));
                yield ((((($context["key"] === ($context["value"] ?? null)) || ((($context["value"] ?? null) === true) && ($context["key"] === 1))) || ((($context["value"] ?? null) === false) && ($context["key"] === 0)))) ? (" selected") : (""));
                yield ((CoreExtension::inFilter($context["key"], ($context["select_values_disabled"] ?? null))) ? (" disabled") : (""));
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["val"], "html", null, true);
                yield "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['val'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            yield "      </select>
    ";
        } elseif ((        // line 46
($context["type"] ?? null) == "list")) {
            // line 47
            yield "      <textarea cols=\"35\" rows=\"5\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["path"] ?? null), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["path"] ?? null), "html", null, true);
            yield "\" class=\"";
            yield (((($tmp =  !($context["value_is_default"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((($tmp = ($context["has_errors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("custom field-error") : ("custom"))) : (""));
            yield "\">";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["value"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                if (($context["key"] != "wrapper_params")) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["val"], "html", null, true);
                    yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("
") : (""));
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            yield "</textarea>
    ";
        }
        // line 51
        yield "
    ";
        // line 52
        if ((($context["is_setup"] ?? null) && ($context["comment"] ?? null))) {
            // line 53
            yield "      <a class=\"userprefs-comment\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["comment"] ?? null), "html", null, true);
            yield "\">";
            yield PhpMyAdmin\Html\Generator::getImage("b_tblops", \_gettext("Comment"));
            yield "</a>
    ";
        }
        // line 55
        yield "
    ";
        // line 56
        if ((($tmp = ($context["set_value"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 57
            yield "      <a class=\"set-value hide\" href=\"#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["path"] ?? null), "html", null, true);
            yield "=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["set_value"] ?? null), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_gettext("Set value: %s"), ($context["set_value"] ?? null)), "html", null, true);
            yield "\">";
            // line 58
            yield PhpMyAdmin\Html\Generator::getImage("b_edit", Twig\Extension\CoreExtension::sprintf(\_gettext("Set value: %s"), ($context["set_value"] ?? null)));
            // line 59
            yield "</a>
    ";
        }
        // line 61
        yield "
    ";
        // line 62
        if ((($tmp = ($context["show_restore_default"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 63
            yield "      <a class=\"restore-default hide\" href=\"#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["path"] ?? null), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Restore default value"), "html", null, true);
            yield "\">";
            // line 64
            yield PhpMyAdmin\Html\Generator::getImage("s_reload", \_gettext("Restore default value"));
            // line 65
            yield "</a>
    ";
        }
        // line 67
        yield "
    ";
        // line 69
        yield "    ";
        if ((($tmp = ($context["has_errors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 70
            yield "      <dl class=\"inline_errors\">
        ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 72
                yield "          <dd>";
                yield $context["error"];
                yield "</dd>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            yield "      </dl>
    ";
        }
        // line 76
        yield "  </td>

  ";
        // line 78
        if ((($context["is_setup"] ?? null) &&  !(null === ($context["allows_customization"] ?? null)))) {
            // line 79
            yield "    <td class=\"userprefs-allow\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allow users to customize this value"), "html", null, true);
            yield "\">
      <input type=\"checkbox\" name=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["path"] ?? null), "html", null, true);
            yield "-userprefs-allow\"";
            yield (((($tmp = ($context["allows_customization"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
            yield " aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Allow users to customize this value"), "html", null, true);
            yield "\">
    </td>
  ";
        } elseif ((($tmp =         // line 82
($context["is_setup"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 83
            yield "    <td>&nbsp;</td>
  ";
        }
        // line 85
        yield "</tr>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "config/form_display/input.twig";
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
        return array (  369 => 85,  365 => 83,  363 => 82,  354 => 80,  349 => 79,  347 => 78,  343 => 76,  339 => 74,  330 => 72,  326 => 71,  323 => 70,  320 => 69,  317 => 67,  313 => 65,  311 => 64,  305 => 63,  303 => 62,  300 => 61,  296 => 59,  294 => 58,  286 => 57,  284 => 56,  281 => 55,  273 => 53,  271 => 52,  268 => 51,  264 => 49,  230 => 48,  222 => 47,  220 => 46,  217 => 45,  202 => 43,  195 => 42,  191 => 41,  182 => 40,  180 => 39,  171 => 37,  166 => 36,  164 => 35,  153 => 34,  151 => 33,  140 => 32,  138 => 31,  136 => 30,  125 => 29,  123 => 28,  112 => 27,  110 => 26,  105 => 23,  99 => 21,  97 => 20,  94 => 19,  88 => 16,  83 => 15,  81 => 14,  78 => 13,  70 => 10,  67 => 9,  65 => 8,  58 => 6,  48 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "config/form_display/input.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/config/form_display/input.twig");
    }
}

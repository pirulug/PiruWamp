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

/* config/form_display/display.twig */
class __TwigTemplate_b2051fb50a5cc134b092f9becb78e737 extends Template
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
        yield "<form method=\"post\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["action"] ?? null), "html_attr");
        yield "\" class=\"config-form disableAjax\">
  <input type=\"hidden\" name=\"tab_hash\" value=\"\">
  ";
        // line 3
        if ((($tmp = ($context["has_check_page_refresh"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "    <input type=\"hidden\" name=\"check_page_refresh\" id=\"check_page_refresh\" value=\"\">
  ";
        }
        // line 6
        yield "  ";
        yield PhpMyAdmin\Url::getHiddenInputs("", "", "server");
        yield "
  ";
        // line 7
        yield PhpMyAdmin\Url::getHiddenFields(($context["hidden_fields"] ?? null), "", true);
        yield "

  <ul class=\"nav nav-tabs\" id=\"configFormDisplayTab\" role=\"tablist\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tabs"] ?? null));
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
        foreach ($context['_seq'] as $context["id"] => $context["name"]) {
            // line 11
            yield "      <li class=\"nav-item\" role=\"presentation\">
        <a class=\"nav-link";
            // line 12
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" active") : (""));
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["id"], "html", null, true);
            yield "-tab\" href=\"#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["id"], "html", null, true);
            yield "\" data-bs-toggle=\"tab\" role=\"tab\" aria-controls=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["id"], "html", null, true);
            yield "\" aria-selected=\"";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
            yield "</a>
      </li>
    ";
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
        unset($context['_seq'], $context['id'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "  </ul>
  <div class=\"tab-content\">
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["forms"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
            // line 18
            yield "      <div class=\"tab-pane fade";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" show active") : (""));
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["form"], "name", [], "any", false, false, false, 18), "html", null, true);
            yield "\" role=\"tabpanel\" aria-labelledby=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["form"], "name", [], "any", false, false, false, 18), "html", null, true);
            yield "-tab\">
        <div class=\"card border-top-0\">
          <div class=\"card-body\">
            <h5 class=\"card-title visually-hidden\">";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["form"], "descriptions", [], "any", false, false, false, 21), "name", [], "any", false, false, false, 21), "html", null, true);
            yield "</h5>
            ";
            // line 22
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["form"], "descriptions", [], "any", false, false, false, 22), "desc", [], "any", false, false, false, 22))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 23
                yield "              <h6 class=\"card-subtitle mb-2 text-body-secondary\">";
                yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["form"], "descriptions", [], "any", false, false, false, 23), "desc", [], "any", false, false, false, 23);
                yield "</h6>
            ";
            }
            // line 25
            yield "
            <fieldset class=\"optbox\">
              <legend>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["form"], "descriptions", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
            yield "</legend>

              ";
            // line 30
            yield "              ";
            if ((is_iterable(CoreExtension::getAttribute($this->env, $this->source, $context["form"], "errors", [], "any", false, false, false, 30)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["form"], "errors", [], "any", false, false, false, 30)) > 0))) {
                // line 31
                yield "                <dl class=\"errors\">
                  ";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["form"], "errors", [], "any", false, false, false, 32));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 33
                    yield "                    <dd>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["error"], "html", null, true);
                    yield "</dd>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                yield "                </dl>
              ";
            }
            // line 37
            yield "
              <table class=\"table table-borderless\">
                ";
            // line 39
            yield CoreExtension::getAttribute($this->env, $this->source, $context["form"], "fields_html", [], "any", false, false, false, 39);
            yield "
              </table>
            </fieldset>
          </div>

          ";
            // line 44
            if ((($tmp = ($context["show_buttons"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 45
                yield "            <div class=\"card-footer\">
              <input class=\"btn btn-primary\" type=\"submit\" name=\"submit_save\" value=\"";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Apply"), "html", null, true);
                yield "\">
              <input class=\"btn btn-secondary\" type=\"button\" name=\"submit_reset\" value=\"";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Reset"), "html", null, true);
                yield "\">
            </div>
          ";
            }
            // line 50
            yield "        </div>
      </div>
    ";
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
        unset($context['_seq'], $context['_key'], $context['form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "  </div>
</form>

<span id=\"configInlineParamsData\"
      data-field-validators=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(($context["field_validators"] ?? null)), "html_attr");
        yield "\"
      data-default-values=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(($context["default_values"] ?? null)), "html_attr");
        yield "\"></span>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "config/form_display/display.twig";
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
        return array (  241 => 58,  237 => 57,  231 => 53,  215 => 50,  209 => 47,  205 => 46,  202 => 45,  200 => 44,  192 => 39,  188 => 37,  184 => 35,  175 => 33,  171 => 32,  168 => 31,  165 => 30,  160 => 27,  156 => 25,  150 => 23,  148 => 22,  144 => 21,  133 => 18,  116 => 17,  112 => 15,  85 => 12,  82 => 11,  65 => 10,  59 => 7,  54 => 6,  50 => 4,  48 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "config/form_display/display.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/config/form_display/display.twig");
    }
}

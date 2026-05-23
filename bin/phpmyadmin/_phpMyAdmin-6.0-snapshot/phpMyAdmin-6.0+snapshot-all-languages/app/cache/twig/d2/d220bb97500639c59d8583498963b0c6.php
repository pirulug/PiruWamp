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

/* server/user_groups/edit_user_groups.twig */
class __TwigTemplate_03e0340cb22921448a80b426121789ca extends Template
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
        yield "<div class=\"container\">
  ";
        // line 2
        if ((($context["user_group"] ?? null) == null)) {
            // line 3
            yield "    <h2>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add user group"), "html", null, true);
            yield "</h2>
  ";
        } else {
            // line 5
            yield "    <h2>";
            yield Twig\Extension\CoreExtension::sprintf(\_gettext("Edit user group: '%s'"), ($context["edit_user_group_special_chars"] ?? null));
            yield "</h2>
  ";
        }
        // line 7
        yield "
  <form action=\"";
        // line 8
        yield ($context["user_group_url"] ?? null);
        yield "\" method=\"post\" class=\"card disableAjax\">
    ";
        // line 9
        yield ($context["hidden_inputs"] ?? null);
        yield "
    <div class=\"card-header\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("User group menu assignments"), "html", null, true);
        yield "</div>

    <div class=\"card-body\">
      ";
        // line 13
        if ((($context["user_group"] ?? null) == null)) {
            // line 14
            yield "        <div class=\"mb-3\">
          <label class=\"form-label\" for=\"userGroup\">";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Group name:"), "html", null, true);
            yield "</label>
          <input class=\"form-control\" type=\"text\" name=\"userGroup\" id=\"userGroup\" maxlength=\"64\" autocomplete=\"off\" required>
        </div>
      ";
        }
        // line 19
        yield "
      <div class=\"form-check mb-3\">
        <input class=\"form-check-input checkall_box\" type=\"checkbox\" id=\"addUsersForm_checkall\" title=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Check all"), "html", null, true);
        yield "\">
        <label class=\"form-check-label\" for=\"addUsersForm_checkall\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Check all"), "html", null, true);
        yield "</label>
      </div>

      <div class=\"row\">
        ";
        // line 26
        yield ($context["tab_list"] ?? null);
        yield "
      </div>
    </div>

    <div class=\"card-footer\">
      <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 31
        yield (((($context["user_group"] ?? null) == null)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add user group"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Edit user group"), "html", null, true)));
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
        return "server/user_groups/edit_user_groups.twig";
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
        return array (  111 => 31,  103 => 26,  96 => 22,  92 => 21,  88 => 19,  81 => 15,  78 => 14,  76 => 13,  70 => 10,  66 => 9,  62 => 8,  59 => 7,  53 => 5,  47 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "server/user_groups/edit_user_groups.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/user_groups/edit_user_groups.twig");
    }
}

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

/* table/index_rename_form.twig */
class __TwigTemplate_6e8f47fd7107245c43f6a8abe50e6cae extends Template
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
        yield "<form action=\"";
        yield PhpMyAdmin\Url::getFromRoute("/table/indexes/rename");
        yield "\" method=\"post\" name=\"index_frm\" id=\"index_frm\" class=\"card ajax\">

  ";
        // line 3
        yield PhpMyAdmin\Url::getHiddenInputs(($context["form_params"] ?? null));
        yield "

  <div class=\"card-body\">
    <div class=\"index_info\">
      <div>
          <div class=\"label\">
              <strong>
                  <label for=\"input_index_name\">
                      ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Index name:"), "html", null, true);
        yield "
                      ";
        // line 12
        yield PhpMyAdmin\Html\Generator::showHint(\_gettext("\"PRIMARY\" <b>must</b> be the name of and <b>only of</b> a primary key!"));
        yield "
                  </label>
              </strong>
          </div>

          <input type=\"text\"
              name=\"index\"
              id=\"input_index_name\"
              size=\"25\"
              maxlength=\"64\"
              value=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["index"] ?? null), "getName", [], "method", false, false, false, 22), "html", null, true);
        yield "\"
              onfocus=\"this.select()\">
      </div>
    </div>
  </div>
  <div class=\"card-footer\">
    <button class=\"btn btn-secondary\" type=\"submit\" id=\"preview_index_frm\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Preview SQL"), "html", null, true);
        yield "</button>
  </div>
</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "table/index_rename_form.twig";
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
        return array (  85 => 28,  76 => 22,  63 => 12,  59 => 11,  48 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "table/index_rename_form.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/index_rename_form.twig");
    }
}

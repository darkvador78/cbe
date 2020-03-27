<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_335d13ff0947f9a2058d7a6ead378e43e7e9aa14a915e56f48f4dfb1cba1214a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<body class=\"no-trans\">
 
\t\t<!-- scrollToTop --> 
\t\t<div class=\"scrollToTop\"><i class=\"icon-up-open-big\"></i></div>

  <!-- banner start --> 
  <div id=\"banner\" class=\"banner\">
    <div class=\"banner-image\"></div>
    <div class=\"banner-caption\">
      <div class=\"container\">
        <div class=\"row\">\t\t\t\t\t 
          <div class=\"caption-data\" style=\"margin-top: 0px; opacity: 1;\" data-animation-effect=\"fadeIn\">
              <h1></h1>
              <h3 class=\"padding-top30\"></h3>
              <div class=\"padding-top60 contact-form\">
                
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->
  <section class=\"hero-caption secPadding\">

  <div class=\"container\">

<div class=\"row \" style=\"margin-top: 0px;\">
      <div class=\"col-sm-12 \">
<h2>Bienvenue chez :<strong>M.Z Formation</strong> - <span>La formation des</span>Entrepreneurs</h2>
<p>Notre Platforme dediée à la formation des demandeurs d'emploi souhaitant créer leur  propre entreprise,
  personnes à mobilité réduite qui souhaitent sans se deplacer etre accompagnés pour le projet de creation,
les entreprises qui veulent avoir des conseils sur la gestion de leur entreprise</p>
 </div>

    </div>

  </div>

</section>
<!-- section start --> 
  <section class=\"section transprant-bg pclear secPadding\">
    <div class=\"container no-view\" data-animation-effect=\"fadeIn\">
      <h1 id=\"services\" class=\"title text-center\">Ce que M.Z Formation vous offre :</h1>
      <div class=\"space\"></div>
      <div class=\"row\">
        <div class=\"col-md-4\">
          <div class=\"media block-list\">
            <div class=\"media-left\">
              <i class=\"fa fa-trophy\"></i>
            </div>
            <div class=\"media-body\">
              <h3 class=\"media-heading\">Des cours en ligne</h3>
              <blockquote>
                <p>Nous cours, issus du travail de plusieurs experts  en conseil à la création et gestion d'entreprise</p>
                
              </blockquote>
            </div>
          </div>
        </div>
        <div class=\"col-md-4\">
          <div class=\"media block-list\">
            <div class=\"media-left\">
              <i class=\"fa fa-gear\"></i>
            </div>
            <div class=\"media-body\">
              <h3 class=\"media-heading\">Une large librairie </h3>
              <blockquote>
                <p>Pour orienter vos recherches, et trouver tout ce dont vous avez besoin!</p>
                
              </blockquote>
            </div>
          </div>
        </div>
        <div class=\"col-md-4\">
          <div class=\"media block-list\">
            <div class=\"media-left\">
              <i class=\"fa fa-laptop\"></i>
            </div>
            <div class=\"media-body\">
              <h3 class=\"media-heading\">Divers supports d'accés en ligne</h3>
              <blockquote>
                <p>Nos ofrres sont facilement accessible depuis votre ordinateur ou tablette ou mobile</p>
                
              </blockquote>
            </div>
          </div>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-md-4\">
          <div class=\"media block-list\">
            <div class=\"media-left\">
              <i class=\"fa fa-clock-o\"></i>
            </div>
            <div class=\"media-body\">
              <h3 class=\"media-heading\">Accés illimité</h3>
              <blockquote>
                <p>Notre contenu est accessible sans limitation de durée</p>
                
              </blockquote>
            </div>
          </div>
        </div>
        <div class=\"col-md-4\">
          <div class=\"media block-list\">
            <div class=\"media-left\">
              <i class=\"fa fa-heart\"></i>
            </div>
            <div class=\"media-body\">
              <h3 class=\"media-heading\">Téléchargements de nos supports de cours</h3>
              <blockquote>
                <p>Un large choix de supports de cours à télécharger</p>
                
              </blockquote>
            </div>
          </div>
        </div>
        <div class=\"col-md-4\">
          <div class=\"media block-list\">
            <div class=\"media-left\">
              <i class=\"fa fa-magic\"></i>
            </div>
            <div class=\"media-body\">
              <h3 class=\"media-heading\">Certification </h3>
              <blockquote>
                <p>Nous vous delivrerons une Attestation de fin formation reconnue par l'état</p>
                
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </div>\t\t\t  
  </section>
  <!-- section end -->

  <!-- section start --> 
  <section class=\"section clearfix no-view secPadding\" data-animation-effect=\"fadeIn\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <h1 id=\"about\" class=\"title text-center\">A propos de : <span>M.Z Formation</span></h1>
          <p class=\"lead text-center\">Notre Sociéte est leader sur le marché du e-learning</p>
          <div class=\"space\"></div>
          <div class=\"row\">
            <div class=\"col-md-6\">
              <img src=\"images/section-image-1.png\" alt=\"\">
              <div class=\"space\"></div>
            </div>
            <div class=\"col-md-6\">
              <p>Depuis 2020, la société <strong>M.Z Formation</strong>, qui édite ce site, a toujours gardé le même objectif : simplifier la formation professionnelle en proposant des outils performants. M.Z Formation libère les organismes de formation et les formateurs des contraintes administratives et techniques pour leur permettre de 
                se concentrer sur ce qui est vraiment important. <strong>M.Z Formation</strong> c'est :</p>
              <ul class=\"list-unstyled\">
                <li><i class=\"fa fa-arrow-circle-right pr-10 colored\"></i> Zéro contraintes administratives </li>
                <li><i class=\"fa fa-arrow-circle-right pr-10 colored\"></i> Aucun requis pour suivre cette formation</li>
                <li><i class=\"fa fa-arrow-circle-right pr-10 colored\"></i> Accessibles à tous le monde</li>
                <li><i class=\"fa fa-arrow-circle-right pr-10 colored\"></i> Des cours de grande qualités</li>
                <li><i class=\"fa fa-arrow-circle-right pr-10 colored\"></i> Un accompagnement personnalisé</li>
              </ul>
            </div>
          </div>
          <div class=\"space\"></div>
          <h2>Nous vous offrons le meilleur parcours</h2>
          <div class=\"row\">
            <div class=\"col-md-6\">
              <p>Lors de cette évaluation, le stagiaire joue un rôle important : « à chaud », il répond, à un questionnaire pour donner son niveau d’appréciation sur la formation, puis, « à froid », il est à nouveau sollicité, pour donner son avis sur la formation, plusieurs semaines, voire plusieurs mois plus tard.</p>
                <ul class=\"list-unstyled\">
                <li><i class=\"fa fa-arrow-circle-right pr-10 colored\"></i>une évaluation est transmise aux participants</li>
                <li><i class=\"fa fa-arrow-circle-right pr-10 colored\"></i> Programme de formation professionnelle </li>
                <li><i class=\"fa fa-arrow-circle-right pr-10 colored\"></i> Attestation de formation professionnelle</li>
                <li><i class=\"fa fa-arrow-circle-right pr-10 colored\"></i> Bilan pédagogique et financier (BPF)</li>
                <li><i class=\"fa fa-arrow-circle-right pr-10 colored\"></i> Émargement de formation professionnelle</li>
              </ul>
              <p>la mise en place future de grilles d’évaluation communes à tous les financeurs devrait faciliter la mise en œuvre de l’évaluation des formations. En tout état de cause, la prise en compte de l’ensemble des critères de qualité pour un formateur indépendant nécessite de solides compétences en termes d’organisation et d’ingénierie de la formation.</p>
            </div>
            <div class=\"col-md-6\">
              <div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
                <div class=\"panel panel-default\">
                  <div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">
                    <h4 class=\"panel-title\">
                      <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                        Intégrez différentes étapes à votre module e-learning.
                      </a>
                    </h4>
                  </div>
                  <div id=\"collapseOne\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                    <div class=\"panel-body\">
                      Lors de cette évaluation, le stagiaire joue un rôle important : « à chaud », il répond, à un questionnaire pour donner son niveau d’appréciation sur la formation, puis, « à froid », il est à nouveau sollicité, pour donner son avis sur la formation, plusieurs semaines, voire plusieurs mois plus tard.
                    </div>
                  </div>
                </div>
                <div class=\"panel panel-default\">
                  <div class=\"panel-heading\" role=\"tab\" id=\"headingTwo\">
                    <h4 class=\"panel-title\">
                      <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                        les activités de votre formation à distance 
                      </a>
                    </h4>
                  </div>
                  <div id=\"collapseTwo\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">
                    <div class=\"panel-body\">
                      Lors de cette évaluation, le stagiaire joue un rôle important : « à chaud », il répond, à un questionnaire pour donner son niveau d’appréciation sur la formation, puis, « à froid », il est à nouveau sollicité, pour donner son avis sur la formation, plusieurs semaines, voire plusieurs mois plus tard.
                    </div>
                  </div>
                </div>
                <div class=\"panel panel-default\">
                  <div class=\"panel-heading\" role=\"tab\" id=\"headingThree\">
                    <h4 class=\"panel-title\">
                      <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                        Créez des contenus accessibles partout et à tout moment
                      </a>
                    </h4>
                  </div>
                  <div id=\"collapseThree\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree\">
                    <div class=\"panel-body\">
                      Lors de cette évaluation, le stagiaire joue un rôle important : « à chaud », il répond, à un questionnaire pour donner son niveau d’appréciation sur la formation, puis, « à froid », il est à nouveau sollicité, pour donner son avis sur la formation, plusieurs semaines, voire plusieurs mois plus tard.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- section end -->

  <!-- section start --> 
  <div class=\"default-bg colord secPadding\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-8 col-md-offset-2\">
          <h1 class=\"text-center\">“Quelle prétention de prétendre que l'informatique est récente : Adam et Eve avaient déjà un Apple !”</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- section end -->

  <!-- section start --> 
  <section class=\"section secPadding\">
    <div class=\"container\">
      <h1 class=\"text-center title\" id=\"portfolio\">Cours</h1>
      <div class=\"separator\"></div>
      <p class=\"lead text-center\">Accédez aux cours adaptés au rythme de vos projets ....</p>
      <br>\t\t\t
      <div class=\"row no-view\" data-animation-effect=\"fadeIn\">
        <div class=\"col-md-12\">

          <!-- isotope filters start -->
          <div class=\"filters text-center\">
            <ul class=\"nav nav-pills\">
              <li class=\"active\"><a href=\"#\" data-filter=\"*\">Tous</a></li>
              ";
        // line 258
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 258, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 259
            echo "              <li><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "title", [], "any", false, false, false, 259), "html", null, true);
            echo "\" data-filter=\".category";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 259), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "title", [], "any", false, false, false, 259), "html", null, true);
            echo "</a></li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 261
        echo "          
            </ul>
          </div>
          <!-- isotope filters end -->

      <!-- new-->

          <!-- portfolio items start -->
          <div class=\"isotope-container row grid-space-20\">
            ";
        // line 270
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 270, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 271
            echo "            <div class=\"col-sm-6 col-md-3 isotope-item category";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["course"], "category", [], "any", false, false, false, 271), "id", [], "any", false, false, false, 271), "html", null, true);
            echo "\">
              <div class=\"image-box\">
                <div class=\"overlay-container\">
                  ";
            // line 274
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["course"], "imageName", [], "any", false, false, false, 274))) {
                // line 275
                echo "                  <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/cours/" . twig_get_attribute($this->env, $this->source, $context["course"], "imageName", [], "any", false, false, false, 275))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "title", [], "any", false, false, false, 275), "html", null, true);
                echo "\">
               ";
            }
            // line 277
            echo "                  <a class=\"overlay\" data-toggle=\"modal\" data-target=\"#project-1\">
                    <i class=\"fa fa-search-plus\"></i>
                     
                  </a>
                </div>
                <a class=\"btn btn-default btn-block\" data-toggle=\"modal\" data-target=\"#project-1\">";
            // line 282
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "title", [], "any", false, false, false, 282), "html", null, true);
            echo "</a>
              </div>
              <!-- Modal -->
              <div class=\"modal fade\" id=\"project-1\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"project-1-label\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-lg\">
                  <div class=\"modal-content\">
                    <div class=\"modal-header\">
                      <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                      <h4 class=\"modal-title\" id=\"project-1-label\">";
            // line 290
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "title", [], "any", false, false, false, 290), "html", null, true);
            echo "</h4>
                    </div>
                    <div class=\"modal-body\">
                      
                      <div class=\"row\">\t\t\t\t\t\t\t\t\t\t\t\t 
                        <div class=\"col-md-12\">
                          ";
            // line 296
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["course"], "imageName", [], "any", false, false, false, 296))) {
                // line 297
                echo "                          <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/cours/" . twig_get_attribute($this->env, $this->source, $context["course"], "imageName", [], "any", false, false, false, 297))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "title", [], "any", false, false, false, 297), "html", null, true);
                echo "\">
                       ";
            }
            // line 299
            echo "                          <br/>
                          <h3>";
            // line 300
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "title", [], "any", false, false, false, 300), "html", null, true);
            echo "</h3>
                          <p>";
            // line 301
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "content", [], "any", false, false, false, 301), "html", null, true);
            echo "</p>
                        </div>
                      </div>
                    </div>
                    <div class=\"modal-footer\">
                      ";
            // line 306
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 307
                echo "                      <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cours_show", ["id" => twig_get_attribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 307)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-default\">Accedez aux cours &rarr;</a>
                      ";
            } else {
                // line 309
                echo "                      <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_login");
                echo "\" class=\"btn btn-sm btn-default\">login &rarr;</a>
                      ";
            }
            // line 311
            echo "
                      
                      <button type=\"button\" class=\"btn btn-sm btn-default\" data-dismiss=\"modal\">Fermer</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal end -->
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 321
        echo "
          </div>
          <!-- portfolio items end -->
        
        </div>
      </div>
    </div>
  </section>
  <!-- section end -->
<!-- section start --> 
  <section class=\"default-bg secPadding\">
    
<div class=\"container\">
<div class=\"row\">
  <div class='col-md-offset-2 col-md-8 text-center'>
  <h2>Commentaires</h2>
  </div>
</div>
<div class='row'>
  <div class='col-md-offset-2 col-md-8'>
    <div class=\"carousel slide\" data-ride=\"carousel\" id=\"quote-carousel\">
      <!-- Bottom Carousel Indicators -->
      <ol class=\"carousel-indicators\">
        <li data-target=\"#quote-carousel\" data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#quote-carousel\" data-slide-to=\"1\"></li>
        <li data-target=\"#quote-carousel\" data-slide-to=\"2\"></li>
      </ol>
      
      <!-- Carousel Slides / Quotes -->
      <div class=\"carousel-inner\">
      
        <!-- Quote 1 -->
        <div class=\"item active\">
          <blockquote>
            <div class=\"row\">
              <div class=\"col-sm-3 text-center\">
                <img class=\"img-circle\" src=\"https://s3.amazonaws.com/uifaces/faces/twitter/kolage/128.jpg\" style=\"width: 100px;height:100px;\">
              </div>
              <div class=\"col-sm-9\">
                <p>Cette formation est vraiment excellente, j’ai beaucoup appris et très apprécié, votre soutien et suivi sur ce module.</p>
                <small>David@80</small>
              </div>
            </div>
          </blockquote>
        </div>
        <!-- Quote 2 -->
        <div class=\"item\">
          <blockquote>
            <div class=\"row\">
              <div class=\"col-sm-3 text-center\">
                <img class=\"img-circle\" src=\"https://s3.amazonaws.com/uifaces/faces/twitter/mijustin/128.jpg\" style=\"width: 100px;height:100px;\">
              </div>
              <div class=\"col-sm-9\">
                <p>La formation en ligne m’a permis de moderniser mes écrits, d’aller droit au but et d’être plus positive sans m’affaibli</p>
                <small>capitain crochet001</small>
              </div>
            </div>
          </blockquote>
        </div>
        <!-- Quote 3 -->
        <div class=\"item\">
          <blockquote>
            <div class=\"row\">
              <div class=\"col-sm-3 text-center\">
                <img class=\"img-circle\" src=\"https://s3.amazonaws.com/uifaces/faces/twitter/keizgoesboom/128.jpg\" style=\"width: 100px;height:100px;\">
              </div>
              <div class=\"col-sm-9\">
                <p>J’ai suivi la formation en ligne avant d’assister à un atelier  : j’ai apprécié d’avoir une expérience commune avec mes </p>
                <small>claire de lune</small>
              </div>
            </div>
          </blockquote>
        </div>
      </div>              
    </div>                          
  </div>
</div>
</div>
  </section>
  <!-- section end -->
  ";
        // line 486
        echo "  <div class=\"row pt-3\">
    <!-- .footer start --> 
\t\t\t<div class=\"footer section\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<h1 class=\"title text-center\" id=\"contact\">Nous contacter</h1>
\t\t\t\t\t<div class=\"space\"></div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<div class=\"footer-content\">
\t\t\t\t\t\t\t\t<form role=\"form\" id=\"footer-form\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group has-feedback\">
\t\t\t\t\t\t\t\t\t\t<label class=\"sr-only\" for=\"name2\">Nom</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"name2\" placeholder=\"Nom\" name=\"name2\" required>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user form-control-feedback\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group has-feedback\">
\t\t\t\t\t\t\t\t\t\t<label class=\"sr-only\" for=\"email2\">Email</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"email2\" placeholder=\"Entrez votre email\" name=\"email2\" required>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope form-control-feedback\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group has-feedback\">
\t\t\t\t\t\t\t\t\t\t<label class=\"sr-only\" for=\"message2\">Message</label>
\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=\"8\" id=\"message2\" placeholder=\"Votre message\" name=\"message2\" required></textarea>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil form-control-feedback\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Validez\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<div class=\"footer-content\">
\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t<div class=\"widget-content\">

\t\t\t\t\t\t\t\t<p> Vous n’avez pas trouvé l’information que vous cherchez ? Remplissez le formulaire suivant, notre équipe vous apportera une réponse  dans les plus brefs délais. </p><br/>

\t\t\t\t\t\t\t\t<p class=\"contacts\"><i class=\"fa fa-map-marker\"></i> 100 rue de la melonniére 84120 Pertuis </p>

\t\t\t\t\t\t\t\t<p class=\"contacts\"><i class=\"fa fa-phone\"></i> 06.06.06.06.06</p>

\t\t\t\t\t\t\t\t<p class=\"contacts\"><i class=\"fa fa-envelope\"></i> support@M.Z Formation.com</p>

\t\t\t\t\t\t\t

\t\t\t\t\t\t\t</div>

            </aside>
            
\t\t\t\t\t\t\t\t<ul class=\"social-links\">
\t\t\t\t\t\t\t\t\t<li class=\"facebook\"><a target=\"_blank\" href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"twitter\"><a target=\"_blank\" href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"googleplus\"><a target=\"_blank\" href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"skype\"><a target=\"_blank\" href=\"#\"><i class=\"fa fa-skype\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"linkedin\"><a target=\"_blank\" href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"youtube\"><a target=\"_blank\" href=\"#\"><i class=\"fa fa-youtube\"></i></a></li> 
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
      <!-- .footer end -->
      <div class=\"container\">
        <div class=\"social text-center\">
            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
            <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
            <a href=\"#\"><i class=\"fa fa-flickr\"></i></a>
            <a href=\"#\"><i class=\"fa fa-github\"></i></a>
        </div>

        <div class=\"clear\"></div>
        <!--CLEAR FLOATS-->
   
</section>
<a href=\"#top\" class=\"topHome\"><i class=\"fa fa-chevron-up fa-2x\"></i></a>

      ";
        // line 566
        $this->displayBlock('script', $context, $blocks);
        // line 567
        echo "      
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 566
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  633 => 566,  622 => 567,  620 => 566,  538 => 486,  456 => 321,  441 => 311,  435 => 309,  429 => 307,  427 => 306,  419 => 301,  415 => 300,  412 => 299,  404 => 297,  402 => 296,  393 => 290,  382 => 282,  375 => 277,  367 => 275,  365 => 274,  358 => 271,  354 => 270,  343 => 261,  330 => 259,  326 => 258,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
<body class=\"no-trans\">
 
\t\t<!-- scrollToTop --> 
\t\t<div class=\"scrollToTop\"><i class=\"icon-up-open-big\"></i></div>

  <!-- banner start --> 
  <div id=\"banner\" class=\"banner\">
    <div class=\"banner-image\"></div>
    <div class=\"banner-caption\">
      <div class=\"container\">
        <div class=\"row\">\t\t\t\t\t 
          <div class=\"caption-data\" style=\"margin-top: 0px; opacity: 1;\" data-animation-effect=\"fadeIn\">
              <h1></h1>
              <h3 class=\"padding-top30\"></h3>
              <div class=\"padding-top60 contact-form\">
                
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->
  <section class=\"hero-caption secPadding\">

  <div class=\"container\">

<div class=\"row \" style=\"margin-top: 0px;\">
      <div class=\"col-sm-12 \">
<h2>Bienvenue chez :<strong>M.Z Formation</strong> - <span>La formation des</span>Entrepreneurs</h2>
<p>Notre Platforme dediée à la formation des demandeurs d'emploi souhaitant créer leur  propre entreprise,
  personnes à mobilité réduite qui souhaitent sans se deplacer etre accompagnés pour le projet de creation,
les entreprises qui veulent avoir des conseils sur la gestion de leur entreprise</p>
 </div>

    </div>

  </div>

</section>
<!-- section start --> 
  <section class=\"section transprant-bg pclear secPadding\">
    <div class=\"container no-view\" data-animation-effect=\"fadeIn\">
      <h1 id=\"services\" class=\"title text-center\">Ce que M.Z Formation vous offre :</h1>
      <div class=\"space\"></div>
      <div class=\"row\">
        <div class=\"col-md-4\">
          <div class=\"media block-list\">
            <div class=\"media-left\">
              <i class=\"fa fa-trophy\"></i>
            </div>
            <div class=\"media-body\">
              <h3 class=\"media-heading\">Des cours en ligne</h3>
              <blockquote>
                <p>Nous cours, issus du travail de plusieurs experts  en conseil à la création et gestion d'entreprise</p>
                
              </blockquote>
            </div>
          </div>
        </div>
        <div class=\"col-md-4\">
          <div class=\"media block-list\">
            <div class=\"media-left\">
              <i class=\"fa fa-gear\"></i>
            </div>
            <div class=\"media-body\">
              <h3 class=\"media-heading\">Une large librairie </h3>
              <blockquote>
                <p>Pour orienter vos recherches, et trouver tout ce dont vous avez besoin!</p>
                
              </blockquote>
            </div>
          </div>
        </div>
        <div class=\"col-md-4\">
          <div class=\"media block-list\">
            <div class=\"media-left\">
              <i class=\"fa fa-laptop\"></i>
            </div>
            <div class=\"media-body\">
              <h3 class=\"media-heading\">Divers supports d'accés en ligne</h3>
              <blockquote>
                <p>Nos ofrres sont facilement accessible depuis votre ordinateur ou tablette ou mobile</p>
                
              </blockquote>
            </div>
          </div>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-md-4\">
          <div class=\"media block-list\">
            <div class=\"media-left\">
              <i class=\"fa fa-clock-o\"></i>
            </div>
            <div class=\"media-body\">
              <h3 class=\"media-heading\">Accés illimité</h3>
              <blockquote>
                <p>Notre contenu est accessible sans limitation de durée</p>
                
              </blockquote>
            </div>
          </div>
        </div>
        <div class=\"col-md-4\">
          <div class=\"media block-list\">
            <div class=\"media-left\">
              <i class=\"fa fa-heart\"></i>
            </div>
            <div class=\"media-body\">
              <h3 class=\"media-heading\">Téléchargements de nos supports de cours</h3>
              <blockquote>
                <p>Un large choix de supports de cours à télécharger</p>
                
              </blockquote>
            </div>
          </div>
        </div>
        <div class=\"col-md-4\">
          <div class=\"media block-list\">
            <div class=\"media-left\">
              <i class=\"fa fa-magic\"></i>
            </div>
            <div class=\"media-body\">
              <h3 class=\"media-heading\">Certification </h3>
              <blockquote>
                <p>Nous vous delivrerons une Attestation de fin formation reconnue par l'état</p>
                
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </div>\t\t\t  
  </section>
  <!-- section end -->

  <!-- section start --> 
  <section class=\"section clearfix no-view secPadding\" data-animation-effect=\"fadeIn\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <h1 id=\"about\" class=\"title text-center\">A propos de : <span>M.Z Formation</span></h1>
          <p class=\"lead text-center\">Notre Sociéte est leader sur le marché du e-learning</p>
          <div class=\"space\"></div>
          <div class=\"row\">
            <div class=\"col-md-6\">
              <img src=\"images/section-image-1.png\" alt=\"\">
              <div class=\"space\"></div>
            </div>
            <div class=\"col-md-6\">
              <p>Depuis 2020, la société <strong>M.Z Formation</strong>, qui édite ce site, a toujours gardé le même objectif : simplifier la formation professionnelle en proposant des outils performants. M.Z Formation libère les organismes de formation et les formateurs des contraintes administratives et techniques pour leur permettre de 
                se concentrer sur ce qui est vraiment important. <strong>M.Z Formation</strong> c'est :</p>
              <ul class=\"list-unstyled\">
                <li><i class=\"fa fa-arrow-circle-right pr-10 colored\"></i> Zéro contraintes administratives </li>
                <li><i class=\"fa fa-arrow-circle-right pr-10 colored\"></i> Aucun requis pour suivre cette formation</li>
                <li><i class=\"fa fa-arrow-circle-right pr-10 colored\"></i> Accessibles à tous le monde</li>
                <li><i class=\"fa fa-arrow-circle-right pr-10 colored\"></i> Des cours de grande qualités</li>
                <li><i class=\"fa fa-arrow-circle-right pr-10 colored\"></i> Un accompagnement personnalisé</li>
              </ul>
            </div>
          </div>
          <div class=\"space\"></div>
          <h2>Nous vous offrons le meilleur parcours</h2>
          <div class=\"row\">
            <div class=\"col-md-6\">
              <p>Lors de cette évaluation, le stagiaire joue un rôle important : « à chaud », il répond, à un questionnaire pour donner son niveau d’appréciation sur la formation, puis, « à froid », il est à nouveau sollicité, pour donner son avis sur la formation, plusieurs semaines, voire plusieurs mois plus tard.</p>
                <ul class=\"list-unstyled\">
                <li><i class=\"fa fa-arrow-circle-right pr-10 colored\"></i>une évaluation est transmise aux participants</li>
                <li><i class=\"fa fa-arrow-circle-right pr-10 colored\"></i> Programme de formation professionnelle </li>
                <li><i class=\"fa fa-arrow-circle-right pr-10 colored\"></i> Attestation de formation professionnelle</li>
                <li><i class=\"fa fa-arrow-circle-right pr-10 colored\"></i> Bilan pédagogique et financier (BPF)</li>
                <li><i class=\"fa fa-arrow-circle-right pr-10 colored\"></i> Émargement de formation professionnelle</li>
              </ul>
              <p>la mise en place future de grilles d’évaluation communes à tous les financeurs devrait faciliter la mise en œuvre de l’évaluation des formations. En tout état de cause, la prise en compte de l’ensemble des critères de qualité pour un formateur indépendant nécessite de solides compétences en termes d’organisation et d’ingénierie de la formation.</p>
            </div>
            <div class=\"col-md-6\">
              <div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
                <div class=\"panel panel-default\">
                  <div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">
                    <h4 class=\"panel-title\">
                      <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                        Intégrez différentes étapes à votre module e-learning.
                      </a>
                    </h4>
                  </div>
                  <div id=\"collapseOne\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                    <div class=\"panel-body\">
                      Lors de cette évaluation, le stagiaire joue un rôle important : « à chaud », il répond, à un questionnaire pour donner son niveau d’appréciation sur la formation, puis, « à froid », il est à nouveau sollicité, pour donner son avis sur la formation, plusieurs semaines, voire plusieurs mois plus tard.
                    </div>
                  </div>
                </div>
                <div class=\"panel panel-default\">
                  <div class=\"panel-heading\" role=\"tab\" id=\"headingTwo\">
                    <h4 class=\"panel-title\">
                      <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                        les activités de votre formation à distance 
                      </a>
                    </h4>
                  </div>
                  <div id=\"collapseTwo\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">
                    <div class=\"panel-body\">
                      Lors de cette évaluation, le stagiaire joue un rôle important : « à chaud », il répond, à un questionnaire pour donner son niveau d’appréciation sur la formation, puis, « à froid », il est à nouveau sollicité, pour donner son avis sur la formation, plusieurs semaines, voire plusieurs mois plus tard.
                    </div>
                  </div>
                </div>
                <div class=\"panel panel-default\">
                  <div class=\"panel-heading\" role=\"tab\" id=\"headingThree\">
                    <h4 class=\"panel-title\">
                      <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                        Créez des contenus accessibles partout et à tout moment
                      </a>
                    </h4>
                  </div>
                  <div id=\"collapseThree\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree\">
                    <div class=\"panel-body\">
                      Lors de cette évaluation, le stagiaire joue un rôle important : « à chaud », il répond, à un questionnaire pour donner son niveau d’appréciation sur la formation, puis, « à froid », il est à nouveau sollicité, pour donner son avis sur la formation, plusieurs semaines, voire plusieurs mois plus tard.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- section end -->

  <!-- section start --> 
  <div class=\"default-bg colord secPadding\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-8 col-md-offset-2\">
          <h1 class=\"text-center\">“Quelle prétention de prétendre que l'informatique est récente : Adam et Eve avaient déjà un Apple !”</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- section end -->

  <!-- section start --> 
  <section class=\"section secPadding\">
    <div class=\"container\">
      <h1 class=\"text-center title\" id=\"portfolio\">Cours</h1>
      <div class=\"separator\"></div>
      <p class=\"lead text-center\">Accédez aux cours adaptés au rythme de vos projets ....</p>
      <br>\t\t\t
      <div class=\"row no-view\" data-animation-effect=\"fadeIn\">
        <div class=\"col-md-12\">

          <!-- isotope filters start -->
          <div class=\"filters text-center\">
            <ul class=\"nav nav-pills\">
              <li class=\"active\"><a href=\"#\" data-filter=\"*\">Tous</a></li>
              {% for cat in category %}
              <li><a href=\"{{ cat.title }}\" data-filter=\".category{{ cat.id }}\">{{ cat.title }}</a></li>
              {% endfor %}
          
            </ul>
          </div>
          <!-- isotope filters end -->

      <!-- new-->

          <!-- portfolio items start -->
          <div class=\"isotope-container row grid-space-20\">
            {% for course in cours %}
            <div class=\"col-sm-6 col-md-3 isotope-item category{{course.category.id}}\">
              <div class=\"image-box\">
                <div class=\"overlay-container\">
                  {% if course.imageName is not null %}
                  <img src=\"{{ asset('img/cours/'~course.imageName) }}\" alt=\"{{ course.title }}\">
               {% endif %}
                  <a class=\"overlay\" data-toggle=\"modal\" data-target=\"#project-1\">
                    <i class=\"fa fa-search-plus\"></i>
                     
                  </a>
                </div>
                <a class=\"btn btn-default btn-block\" data-toggle=\"modal\" data-target=\"#project-1\">{{ course.title }}</a>
              </div>
              <!-- Modal -->
              <div class=\"modal fade\" id=\"project-1\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"project-1-label\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-lg\">
                  <div class=\"modal-content\">
                    <div class=\"modal-header\">
                      <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                      <h4 class=\"modal-title\" id=\"project-1-label\">{{ course.title }}</h4>
                    </div>
                    <div class=\"modal-body\">
                      
                      <div class=\"row\">\t\t\t\t\t\t\t\t\t\t\t\t 
                        <div class=\"col-md-12\">
                          {% if course.imageName is not null %}
                          <img src=\"{{ asset('img/cours/'~course.imageName) }}\" alt=\"{{ course.title }}\">
                       {% endif %}
                          <br/>
                          <h3>{{ course.title }}</h3>
                          <p>{{ course.content }}</p>
                        </div>
                      </div>
                    </div>
                    <div class=\"modal-footer\">
                      {% if is_granted(\"ROLE_USER\") %}
                      <a href=\"{{ url('cours_show', {id: course.id}) }}\" class=\"btn btn-sm btn-default\">Accedez aux cours &rarr;</a>
                      {% else %}
                      <a href=\"{{ url('app_login') }}\" class=\"btn btn-sm btn-default\">login &rarr;</a>
                      {% endif %}

                      
                      <button type=\"button\" class=\"btn btn-sm btn-default\" data-dismiss=\"modal\">Fermer</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal end -->
            </div>
        {% endfor %}

          </div>
          <!-- portfolio items end -->
        
        </div>
      </div>
    </div>
  </section>
  <!-- section end -->
<!-- section start --> 
  <section class=\"default-bg secPadding\">
    
<div class=\"container\">
<div class=\"row\">
  <div class='col-md-offset-2 col-md-8 text-center'>
  <h2>Commentaires</h2>
  </div>
</div>
<div class='row'>
  <div class='col-md-offset-2 col-md-8'>
    <div class=\"carousel slide\" data-ride=\"carousel\" id=\"quote-carousel\">
      <!-- Bottom Carousel Indicators -->
      <ol class=\"carousel-indicators\">
        <li data-target=\"#quote-carousel\" data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#quote-carousel\" data-slide-to=\"1\"></li>
        <li data-target=\"#quote-carousel\" data-slide-to=\"2\"></li>
      </ol>
      
      <!-- Carousel Slides / Quotes -->
      <div class=\"carousel-inner\">
      
        <!-- Quote 1 -->
        <div class=\"item active\">
          <blockquote>
            <div class=\"row\">
              <div class=\"col-sm-3 text-center\">
                <img class=\"img-circle\" src=\"https://s3.amazonaws.com/uifaces/faces/twitter/kolage/128.jpg\" style=\"width: 100px;height:100px;\">
              </div>
              <div class=\"col-sm-9\">
                <p>Cette formation est vraiment excellente, j’ai beaucoup appris et très apprécié, votre soutien et suivi sur ce module.</p>
                <small>David@80</small>
              </div>
            </div>
          </blockquote>
        </div>
        <!-- Quote 2 -->
        <div class=\"item\">
          <blockquote>
            <div class=\"row\">
              <div class=\"col-sm-3 text-center\">
                <img class=\"img-circle\" src=\"https://s3.amazonaws.com/uifaces/faces/twitter/mijustin/128.jpg\" style=\"width: 100px;height:100px;\">
              </div>
              <div class=\"col-sm-9\">
                <p>La formation en ligne m’a permis de moderniser mes écrits, d’aller droit au but et d’être plus positive sans m’affaibli</p>
                <small>capitain crochet001</small>
              </div>
            </div>
          </blockquote>
        </div>
        <!-- Quote 3 -->
        <div class=\"item\">
          <blockquote>
            <div class=\"row\">
              <div class=\"col-sm-3 text-center\">
                <img class=\"img-circle\" src=\"https://s3.amazonaws.com/uifaces/faces/twitter/keizgoesboom/128.jpg\" style=\"width: 100px;height:100px;\">
              </div>
              <div class=\"col-sm-9\">
                <p>J’ai suivi la formation en ligne avant d’assister à un atelier  : j’ai apprécié d’avoir une expérience commune avec mes </p>
                <small>claire de lune</small>
              </div>
            </div>
          </blockquote>
        </div>
      </div>              
    </div>                          
  </div>
</div>
</div>
  </section>
  <!-- section end -->
  {# <section id=\"price\" class=\"price-table secPadding\">
     <div class=\"container text-center\"> 
       <div class=\"heading\">
          <h1 class=\"text-center title\" id=\"\">Our Price</h1>
      <div class=\"separator\"></div>
      <p class=\"lead text-center\">Lorem ipsum dolor sit amet laudantium molestias similique.<br> Quisquam incidunt ut laboriosam.</p>
      <br>\t
        </div> 
         <div class=\"row\"> 
          <div class=\"col-sm-3\">
            <div class=\"panel panel-default text-center\">
              <div class=\"panel-heading\">
                <h3>Basic</h3>
              </div>
              <div class=\"panel-body\">
                <h3 class=\"panel-title price\">\$9<span class=\"price-cents\">99</span><span class=\"price-month\">mo.</span></h3>
              </div>
              <ul class=\"list-group\">
                <li class=\"list-group-item\">5 Projects</li>
                <li class=\"list-group-item\">5 GB of Storage</li>
                <li class=\"list-group-item\">Up to 100 Users</li>
                <li class=\"list-group-item\">10 GB Bandwidth</li>
                <li class=\"list-group-item\">Security Suite</li>
                <li class=\"list-group-item\"><a class=\"btn btn-default\">Sign Up Now!</a></li>
              </ul>
            </div>          
          </div>
          <div class=\"col-sm-3\">
            <div class=\"panel panel-default text-center\">
              <div class=\"panel-heading\">
                <h3>Plus</h3>
              </div>
              <div class=\"panel-body\">
                <h3 class=\"panel-title price\">\$19<span class=\"price-cents\">99</span><span class=\"price-month\">mo.</span></h3>
              </div>
              <ul class=\"list-group\">
                <li class=\"list-group-item\">10 Projects</li>
                <li class=\"list-group-item\">10 GB of Storage</li>
                <li class=\"list-group-item\">Up to 250 Users</li>
                <li class=\"list-group-item\">25 GB Bandwidth</li>
                <li class=\"list-group-item\">Security Suite</li>
                <li class=\"list-group-item\"><a class=\"btn btn-default\">Sign Up Now!</a></li>
              </ul>
            </div>          
          </div>
          <div class=\"col-sm-3\">
            <div class=\"panel panel-danger text-center\">
              <div class=\"panel-heading\">
                <h3>Premium</h3>
              </div>
              <div class=\"panel-body\">
                <h3 class=\"panel-title price\">\$29<span class=\"price-cents\">99</span><span class=\"price-month\">mo.</span></h3>
              </div>
              <ul class=\"list-group\">
                <li class=\"list-group-item\">Unlimited</li>
                <li class=\"list-group-item\">50 GB of Storage</li>
                <li class=\"list-group-item\">Up to 1000 Users</li>
                <li class=\"list-group-item\">100 GB Bandwidth</li>
                <li class=\"list-group-item\">Security Suite</li>
                <li class=\"list-group-item\"><a class=\"btn btn-primary\">Sign Up Now!</a></li>
              </ul>
            </div>          
          </div>
          <div class=\"col-sm-3\">
            <div class=\"panel panel-default text-center\">
              <div class=\"panel-heading\">
                <h3>Ultimate</h3>
              </div>
              <div class=\"panel-body\">
                <h3 class=\"panel-title price\">\$49<span class=\"price-cents\">99</span><span class=\"price-month\">mo.</span></h3>
              </div>
              <ul class=\"list-group\">
                <li class=\"list-group-item\">Unlimited</li>
                <li class=\"list-group-item\">150 GB of Storage</li>
                <li class=\"list-group-item\">Unlimited</li>
                <li class=\"list-group-item\">500 GB Bandwidth</li>
                <li class=\"list-group-item\">Security Suite</li>
                <li class=\"list-group-item\"><a class=\"btn btn-default\">Sign Up Now!</a></li>
              </ul>
            </div>          
          </div>
   
        </div>
       </div>      
  </section> #}
  <div class=\"row pt-3\">
    <!-- .footer start --> 
\t\t\t<div class=\"footer section\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<h1 class=\"title text-center\" id=\"contact\">Nous contacter</h1>
\t\t\t\t\t<div class=\"space\"></div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<div class=\"footer-content\">
\t\t\t\t\t\t\t\t<form role=\"form\" id=\"footer-form\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group has-feedback\">
\t\t\t\t\t\t\t\t\t\t<label class=\"sr-only\" for=\"name2\">Nom</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"name2\" placeholder=\"Nom\" name=\"name2\" required>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user form-control-feedback\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group has-feedback\">
\t\t\t\t\t\t\t\t\t\t<label class=\"sr-only\" for=\"email2\">Email</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"email2\" placeholder=\"Entrez votre email\" name=\"email2\" required>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope form-control-feedback\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group has-feedback\">
\t\t\t\t\t\t\t\t\t\t<label class=\"sr-only\" for=\"message2\">Message</label>
\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=\"8\" id=\"message2\" placeholder=\"Votre message\" name=\"message2\" required></textarea>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil form-control-feedback\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Validez\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<div class=\"footer-content\">
\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t<div class=\"widget-content\">

\t\t\t\t\t\t\t\t<p> Vous n’avez pas trouvé l’information que vous cherchez ? Remplissez le formulaire suivant, notre équipe vous apportera une réponse  dans les plus brefs délais. </p><br/>

\t\t\t\t\t\t\t\t<p class=\"contacts\"><i class=\"fa fa-map-marker\"></i> 100 rue de la melonniére 84120 Pertuis </p>

\t\t\t\t\t\t\t\t<p class=\"contacts\"><i class=\"fa fa-phone\"></i> 06.06.06.06.06</p>

\t\t\t\t\t\t\t\t<p class=\"contacts\"><i class=\"fa fa-envelope\"></i> support@M.Z Formation.com</p>

\t\t\t\t\t\t\t

\t\t\t\t\t\t\t</div>

            </aside>
            
\t\t\t\t\t\t\t\t<ul class=\"social-links\">
\t\t\t\t\t\t\t\t\t<li class=\"facebook\"><a target=\"_blank\" href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"twitter\"><a target=\"_blank\" href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"googleplus\"><a target=\"_blank\" href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"skype\"><a target=\"_blank\" href=\"#\"><i class=\"fa fa-skype\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"linkedin\"><a target=\"_blank\" href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li class=\"youtube\"><a target=\"_blank\" href=\"#\"><i class=\"fa fa-youtube\"></i></a></li> 
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
      <!-- .footer end -->
      <div class=\"container\">
        <div class=\"social text-center\">
            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
            <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
            <a href=\"#\"><i class=\"fa fa-flickr\"></i></a>
            <a href=\"#\"><i class=\"fa fa-github\"></i></a>
        </div>

        <div class=\"clear\"></div>
        <!--CLEAR FLOATS-->
   
</section>
<a href=\"#top\" class=\"topHome\"><i class=\"fa fa-chevron-up fa-2x\"></i></a>

      {% block  script %}{% endblock %}
      
      {% endblock %}", "home/index.html.twig", "C:\\xampp\\htdocs\\Cbe\\templates\\home\\index.html.twig");
    }
}

<?php

/* ::base.html.twig */
class __TwigTemplate_b6f3b2959405b7b1ae925e3963e121c83513bb73d1b004f7ce2cb257316cc502 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'searchbar' => array($this, 'block_searchbar'),
            'nav' => array($this, 'block_nav'),
            'column3' => array($this, 'block_column3'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />
       
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body id=\"top\">
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 175
        echo "
        ";
        // line 176
        $this->displayBlock('javascripts', $context, $blocks);
        // line 177
        echo "    </body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony PhotoBusiness!";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/public/css/layout.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "
        ";
        // line 15
        $this->displayBlock('searchbar', $context, $blocks);
        // line 30
        echo "

        <div class=\"wrapper col2\">
          <div id=\"header\">
            <div id=\"logo\">
              <h1><a href=\"index.html\"><img src= \"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/public/images/logo.png"), "html", null, true);
        echo "\" height=\"50px;\"/>PhotoGallery</a></h1>
              <p></p>
            </div>

            ";
        // line 39
        $this->displayBlock('nav', $context, $blocks);
        // line 55
        echo "            
          </div>
        </div>
        <div class=\"wrapper col3\">
          ";
        // line 59
        $this->displayBlock('column3', $context, $blocks);
        // line 62
        echo "        </div>
        <div class=\"wrapper col4\">
          <div id=\"services\">
            <ul>
              <li><a href=\"#\"><strong>Weddings</strong><img src=\"images/demo/234x210.gif\" alt=\"\" /></a></li>
              <li><a href=\"#\"><strong>Corporate</strong><img src=\"images/demo/234x210.gif\" alt=\"\" /></a></li>
              <li><a href=\"#\"><strong>Lifestyle</strong><img src=\"images/demo/234x210.gif\" alt=\"\" /></a></li>
              <li class=\"last\"><a href=\"#\"><strong>Events</strong><img src=\"images/demo/234x210.gif\" alt=\"\" /></a></li>
              <li><a href=\"#\"><strong>Artistic</strong><img src=\"images/demo/234x210.gif\" alt=\"\" /></a></li>
              <li><a href=\"#\"><strong>Infants</strong><img src=\"images/demo/234x210.gif\" alt=\"\" /></a></li>
              <li><a href=\"#\"><strong>Architecture</strong><img src=\"images/demo/234x210.gif\" alt=\"\" /></a></li>
              <li class=\"last\"><a href=\"#\"><strong>Black &amp; White</strong><img src=\"images/demo/234x210.gif\" alt=\"\" /></a></li>
            </ul>
            <br class=\"clear\" />
          </div>
        </div>
        <div class=\"wrapper col5\">
          <div id=\"container\">
            <div id=\"content\">
              <h2>About This Free CSS Template</h2>
              <p>This is a W3C standards compliant free website template from <a href=\"http://www.os-templates.com/\">OS Templates</a>.</p>
              <p>This template is distributed using a <a href=\"http://www.os-templates.com/template-terms\">Website Template Licence</a>, which allows you to use and modify the template for both personal and commercial use when you keep the provided credit links in the footer.</p>
              <p>For more CSS templates visit <a href=\"http://www.os-templates.com/\">Free Website Templates</a>.</p>
              <p>Lacusenim inte trices lorem anterdum nam sente vivamus quis fauctor mauris. Wisinon vivamus wisis adipis laorem lobortis curabiturpiscingilla dui platea ipsum lacingilla.</p>
              <p>Semalique tor sempus vestibulum libero nibh pretium eget eu elit montes. Sedsemporttis sit intesque felit quis elis et cursuspenatibulum tincidunt non curabitae.</p>
            </div>
            <div id=\"column\">
              <div class=\"flickrbox\">
                <h2 class=\"title\">Flickr</h2>
                <ul>
                  <li><a href=\"#\"><img src=\"images/demo/80x80.gif\" alt=\"\" /></a></li>
                  <li><a href=\"#\"><img src=\"images/demo/80x80.gif\" alt=\"\" /></a></li>
                  <li class=\"last\"><a href=\"#\"><img src=\"images/demo/80x80.gif\" alt=\"\" /></a></li>
                  <li><a href=\"#\"><img src=\"images/demo/80x80.gif\" alt=\"\" /></a></li>
                  <li><a href=\"#\"><img src=\"images/demo/80x80.gif\" alt=\"\" /></a></li>
                  <li class=\"last\"><a href=\"#\"><img src=\"images/demo/80x80.gif\" alt=\"\" /></a></li>
                </ul>
                <br class=\"clear\" />
              </div>
            </div>
            <br class=\"clear\" />
          </div>
        </div>
        <div class=\"wrapper col6\">
          <div id=\"footer\">
            <div id=\"contactform\">
              <h2>Why Not Contact Us Today !</h2>
              <form action=\"#\" method=\"post\">
                <fieldset>
                  <legend>Contact Form</legend>
                  <label for=\"fullname\">Name:
                    <input id=\"fullname\" name=\"fullname\" type=\"text\" value=\"\" />
                  </label>
                  <label for=\"emailaddress\" class=\"margin\">Email:
                    <input id=\"emailaddress\" name=\"emailaddress\" type=\"text\" value=\"\" />
                  </label>
                  <label for=\"message\">Message:<br />
                    <textarea id=\"message\" name=\"message\" cols=\"40\" rows=\"4\"></textarea>
                  </label>
                  <p>
                    <input id=\"submitform\" name=\"submitform\" type=\"submit\" value=\"Submit\" />
                    &nbsp;
                    <input id=\"resetform\" name=\"resetform\" type=\"reset\" value=\"Reset\" />
                  </p>
                </fieldset>
              </form>
            </div>
            <!-- End Contact Form -->
            <div id=\"compdetails\">
              <div id=\"officialdetails\">
                <h2>Company Information !</h2>
                <ul>
                  <li>Copyright &copy; 2014 - All Rights Reserved</li>
                  <li>Company Name Ltd</li>
                  <li>Registered in England &amp; Wales</li>
                  <li>Company No. xxxxxxx</li>
                  <li class=\"last\">VAT No. xxxxxxxxx</li>
                </ul>
                <h2>Stay in The Know !</h2>
                <p><a href=\"#\">Get Our E-Newsletter</a> | <a href=\"#\">Grab The RSS Feed</a></p>
              </div>
              <div id=\"contactdetails\">
                <h2>Our Contact Details !</h2>
                <ul>
                  <li>Company Name</li>
                  <li>Street Name &amp; Number</li>
                  <li>Town</li>
                  <li>Postcode/Zip</li>
                  <li>Tel: xxxxx xxxxxxxxxx</li>
                  <li>Fax: xxxxx xxxxxxxxxx</li>
                  <li>Email: info@domain.com</li>
                  <li class=\"last\">LinkedIn: <a href=\"#\">Company Profile</a></li>
                </ul>
              </div>
              <div class=\"clear\"></div>
            </div>
            <div class=\"clear\"></div>
          </div>
        </div>
        <div class=\"wrapper col7\">
          <div id=\"copyright\">
            <ul>
              <li><a href=\"#\">Online Privacy Policy</a></li>
              <li><a href=\"#\">Terms of Use</a></li>
              <li><a href=\"#\">Permissions &amp; Trademarks</a></li>
              <li class=\"last\"><a href=\"#\">Product License Agreements</a></li>
            </ul>
            <p>Template by <a target=\"_blank\" href=\"http://www.os-templates.com/\" title=\"Free Website Templates\">OS Templates</a></p>
            <div class=\"clear\"></div>
          </div>
        </div>

        ";
    }

    // line 15
    public function block_searchbar($context, array $blocks = array())
    {
        // line 16
        echo "            <div class=\"wrapper col1\">
              <div id=\"topbar\">
                <div id=\"search\">
                  <form action=\"#\" method=\"post\">
                    <fieldset>
                      <legend>Site Search</legend>
                      <input type=\"text\" value=\"Search the site&hellip;\"  onfocus=\"this.value=(this.value=='Search the site&hellip;')? '' : this.value ;\" />
                      <input type=\"submit\" name=\"go\" id=\"go\" value=\"GO\" />
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
        ";
    }

    // line 39
    public function block_nav($context, array $blocks = array())
    {
        // line 40
        echo "                <ul id=\"topnav\">
                  <li class=\"last\"><a href=\"#\">Link Text</a></li>
                  <li><a href=\"#\">DropDown</a>
                    <ul>
                      <li><a href=\"#\">Link 1</a></li>
                      <li><a href=\"#\">Link 2</a></li>
                      <li><a href=\"#\">Link 3</a></li>
                    </ul>
                  </li>
                  <li><a href=\"pages/full-width.html\">Full Width</a></li>
                  <li><a href=\"pages/style-demo.html\">Style Demo</a></li>
                  <li class=\"active\"><a href=\"index.html\">Home</a></li>
                </ul>
                <br class=\"clear\" />
            ";
    }

    // line 59
    public function block_column3($context, array $blocks = array())
    {
        // line 60
        echo "             
          ";
    }

    // line 176
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 176,  268 => 60,  265 => 59,  247 => 40,  244 => 39,  227 => 16,  224 => 15,  108 => 62,  106 => 59,  100 => 55,  98 => 39,  91 => 35,  84 => 30,  82 => 15,  79 => 14,  76 => 13,  69 => 6,  66 => 5,  60 => 4,  54 => 177,  52 => 176,  49 => 175,  47 => 13,  41 => 10,  37 => 8,  35 => 5,  31 => 4,  26 => 1,);
    }
}

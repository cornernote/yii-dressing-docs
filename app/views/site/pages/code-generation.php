<?php
/**
 * @var $this YdWebController
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @author Zain Ul abidin <zainengineer@gmail.com>
 * @copyright 2013 Brett O'Donnell <cornernote@gmail.com>, Zain Ul abidin <zainengineer@gmail.com>
 * @link https://github.com/cornernote/yii-skeleton
 * @license http://www.gnu.org/copyleft/gpl.html
 */
$this->pageTitle = $this->pageHeading = t('Code Generation');
$this->pageSubheading = t('Generate your code with style');

// menu
$this->menu = YdSiteMenu::getItemsFromMenu('Help');

// breadcrumbs
//$this->breadcrumbs[] = t('Getting Started');
?>
<div class="row">

    <!-- Left menu BEGIN -->
    <div id="sidebar" class="span3">
        <ul class="nav nav-list bs-docs-sidenav affix-top">
            <li><a href="#model-phpdoc-blocks"><i class="icon-chevron-right"></i> Model phpDoc Blocks</a></li>
            <li><a href="#gii-setup"><i class="icon-chevron-right"></i> Gii Setup</a></li>
            <li><a href="#gii-model"><i class="icon-chevron-right"></i> Gii Model</a></li>
            <li><a href="#gii-crud"><i class="icon-chevron-right"></i> Gii Crud</a></li>
        </ul>
    </div>
    <!-- Left menu END -->

    <div class="span9">
        <section id="model-phpdoc-blocks">
            <div class="page-header"><h1>Model phpDoc Blocks</h1></div>

            <p class="lead">Ultimate code-generation for model properties, behaviors and relations.</p>

            <p>YiiDressing comes with an action class that will allow you to generate phpDoc code for your models.
                Just add it to your <code>actions()</code> method in any controller.</p>

<pre>class TestController extends Controller
{
    public function actions()
    {
        return array(
            'generateProperties' => array(
                'class' => 'dressing.actions.YdGeneratePropertiesAction',
            ),
        );
    }
}
</pre>

            <p>Now visit <code>index.php?r=test/generateProperties</code>.</p>

            <p>Note - code in your classed will only be replaced between the following strings, so ensure all your
                models have a comment at the top like this:</p>
<pre>/**
 * Your class description that will not be altered by GenerateProperties
 *
 * --- BEGIN GenerateProperties ---
 *
 *  this section will be replaced by GenerateProperties
 *
 * --- END GenerateProperties ---
 */
class MyModel extends CActiveRecord { ... }
</pre>

        </section>
        <section id="gii-setup">
            <div class="page-header"><h1>Gii Setup</h1></div>

            <p class="lead">Generate code that takes advantage of the many benefits of the YiiDressing library.</p>

            <p>Simply add the following to your Yii config. You may already have a section for gii in the
                <code>modules</code> section of your Yii config. If so you only need to alter the
                <code>generatorPaths</code> key.</p>

<pre>'modules' => array(
    'gii' => array(
        'class' => 'system.gii.GiiModule',
        'generatorPaths' => array(
            'dressing.gii',
        ),
    ),
),
</pre>
            <p>Now visit <code>index.php?r=gii</code>.</p>

        </section>
        <section id="gii-model">
            <div class="page-header"><h1>Gii Model</h1></div>

            <p class="lead">Instantly create models with benefits.</p>

            <p>The <code>model()</code> method is excluded if we are extending from <code>YdActiveRecord</code> because
                it has PHP 5.3 magic to allow it to determined the called class.</p>

            <p>We also add in some behaviors depending on your table structure.</p>
            <ul>
                <li><?php echo l('YdAuditBehavior', array('/site/doc', 'view' => 'YdAuditBehavior')); ?> is always added to allow tracking of changes to the data.</li>
                <li><?php echo l('YdLinkBehavior', array('/site/doc', 'view' => 'YdLinkBehavior')); ?> is always added to give methods such as
                    <code>getLink()</code> and <code>getUrl()</code> to your models.
                </li>
                <li><?php echo l('YdTimestampBehavior', array('/site/doc', 'view' => 'YdTimestampBehavior')); ?> is added if you have fields named created or updated.</li>
                <li><?php echo l('YdSoftDeleteBehavior', array('/site/doc', 'view' => 'YdSoftDeleteBehavior')); ?> is added if you have a field named deleted.</li>
            </ul>

            <p>The <code>attributeLabels()</code> method will be populated with strings encapsulated in
                <code>Yii::t('app', 'Field Name')</code> to make translation easier.</p>

            <p>A method called <code>getMenuLinks()</code> is created which can be put into the
                <code>YdWebController::menu</code> to produce a menu on the view and update pages.</p>

        </section>
        <section id="gii-crud">
            <div class="page-header"><h1>Gii Crud</h1></div>

            <p class="lead">Crud generation that leaves less work to become a working application.</p>

            <p>A <code>beforeRender()</code> method is added to your controller to assist with
                setting up global breadcrumbs. </p>

            <p>The <code>actionIndex()</code> method has been tweaked to auto-redirect the user if only one matching
                row was found. The grid is inside a partial view called <code>_grid</code> so that it can be rendered
                inside other views. It uses <?php echo l('YdGridView', array('/site/doc', 'view' => 'YdGridView')); ?>
                and by default has a multi-delete feature that will call <code>actionDelete()</code>. This feature can
                be extended to be a multi-anything feature in your application. It loads a partial view called
                <code>_search</code> which is an advanced search form that updates the grid using ajax.</p>

            <p>There is a common partial view called <code>_form</code> which is used by <code>actionCreate()</code> and
                <code>actionUpdate()</code> to allow the same form to be used. Upon saving the
                <?php echo l('YdReturnUrl', array('/site/doc', 'view' => 'YdReturnUrl')); ?> component is used to determine
                where to redirect the user.</p>

            <p>The <code>actionDelete()</code> method can also handle deleting individual records, and if you have a
                SoftDelete behavior it can also handle undeleting.</p>

            <p>You may notice that the <code>_list</code> and <code>_list_view</code> partial views are
                not used. They are intended to be swapped for <code>_grid</code> on the
                <code>index</code> view if you prefer a list to a grid.</p>

            <p>Inside <code>actionView()</code> is fairly plain. The view page uses
                <?php echo l('YdDetailView', array('/site/doc', 'view' => 'YdDetailView')); ?> to render the details.
            </p>

            <p>All the main views files render a partial view called <code>_menu</code>. This serves as a common list of
                links to allow navigation around the generated crud.</p>

        </section>

    </div>
</div>
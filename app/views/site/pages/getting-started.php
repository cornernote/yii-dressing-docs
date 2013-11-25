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
$this->pageTitle = $this->pageHeading = t('Getting Started');
$this->pageSubheading = t('How to configure the library in your Yii Application');

// menu
$this->menu = YdSiteMenu::getItemsFromMenu('Help');

// breadcrumbs
//$this->breadcrumbs[] = t('Getting Started');
?>

<div class="row">

    <!-- Left menu BEGIN -->
    <div id="sidebar" class="span3">
        <ul class="nav nav-list bs-docs-sidenav affix-top">
            <li><a href="#installation"><i class="icon-chevron-right"></i> Install</a></li>
            <li><a href="#configuration"><i class="icon-chevron-right"></i> Configure</a></li>
            <li><a href="#what-next"><i class="icon-chevron-right"></i> What next?</a></li>
        </ul>
    </div>
    <!-- Left menu END -->

    <div class="span9">

        <!-- Installation BEGIN -->
        <section id="installation">
            <div class="page-header">
                <h1>Installation</h1>
            </div>

            <p class="lead">You basically have four options to include YiiDressing into your web application.</p>

            <h2>Installation by hand</h2>

            <p>Main foolproof method applicable to any type of a project is to grab a zip bundle containing YiiDressing.
                Download it, unpack its contents to some directory inside your web application and proceed to "<a href="#configuration">Configure</a>" section below.
            </p>

            <p>
                <a class="btn btn-large" href="https://github.com/cornernote/yii-dressing/archive/master.zip">
                    Download YiiDressing
                </a>
            </p>

            <h2>Installation by cloning the development repo</h2>

            <p>You can just clone our repository at GitHub into you web application, instead of relying on our end-user bundle.
                This way you'll get easy updates but you'll get a lot of development-specific stuff like build script and test harness,
                which you probably don't really need.</p>

            <p>To install the full Github repository of YiiDressing into your project, issue the following command from the root of your codebase:</p>
            <pre><code>$ git clone git@github.com:cornernote/yii-dressing.git /path/to/desired/install/location</code></pre>

            <h2>Installation via Composer</h2>

            <p>You can install YiiDressing using <a href="http://getcomposer.org/doc/00-intro.md">Composer</a>.</p>

            <p>The Composer configuration line for <code>require</code> section is
                <code>"mrphp/yii-dressing": "dev-master"</code></p>

            <p>See details at
                <a href="https://packagist.org/packages/mrphp/yii-dressing">YiiDressing page at Packagist.org</a>.
            </p>

            <h2>Using the YiiSkeleton project</h2>

            <p>Mr PHP has another opensource project called
                <a href="https://github.com/mrphp/yii-skeleton">YiiSkeleton</a>, which is the prepared web application we use in our own workflow.
                YiiSkeleton is configured to use YiiDressing and all of it's components.
            </p>

            <p>
                <a class="btn btn-large btn-primary" href="https://github.com/cornernote/yii-skeleton/archive/master.zip">
                    Download YiiSkeleton
                </a>
            </p>
        </section>
        <!-- Installation END -->

        <!-- Configuration BEGIN -->
        <section id="configuration">
            <div class="page-header">
                <h1>Configure the component</h1>
            </div>

            <p class="lead">Now, that we have placed the library where it belongs, lets configure it.</p>

            <p>YiiDressing has the main component called
                <code>YdDressing</code> which should be attached as a Yii application component.</p>

            <p>So, the minimal configuration snippet for YdDressing looks like this:</p>

<pre>'components' => array(
    'dressing' => array(
        'class' => 'path/to/yii-dressing/YdDressing',
    ),
    ... other components ...
),
</pre>

            <p>You should place this snippet inside the Yii config, usually config/main.php.</p>

            <p>
                <span class="label label-info">Note</span> This is absolutely minimal configuration, all property will be set to defaults.
                You can see the full list of configuration parameters for YdDressing component in the
                <?php echo l(t('YdDressing Class Documentation'), array('/site/doc', 'view' => 'YdDressing')); ?>.</p>
        </section>
        <!-- Configuration END -->

        <!-- What's next BEGIN -->
        <section id="what-next">
            <div class="page-header">
                <h1>What next?</h1>
            </div>
            <p class="lead">Now go to documentation about built-in features of the class library to check out what you can do now utilizing full power of YiiDressing.</p>

            <?php echo l(t('Visit feature library'), array('/site/page', 'view' => 'feature-library'), array('class' => 'btn btn-large btn-primary')); ?>
        </section>
        <!-- What's next END -->

    </div>
</div>
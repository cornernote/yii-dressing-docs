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
$this->pageTitle = $this->pageHeading = t('Error Handling');
$this->pageSubheading = t('Always know when there is a problem');

// menu
$this->menu = YdSiteMenu::getItemsFromMenu('Help');

// breadcrumbs
//$this->breadcrumbs[] = t('Getting Started');
?>
<div class="row">

    <!-- Left menu BEGIN -->
    <div id="sidebar" class="span3">
        <ul class="nav nav-list bs-docs-sidenav affix-top">
            <li><a href="#error-handler"><i class="icon-chevron-right"></i> Error Handler</a></li>
            <li><a href="#fatal-error-catch"><i class="icon-chevron-right"></i> Catch Fatal Errors</a></li>
        </ul>
    </div>
    <!-- Left menu END -->

    <div class="span9">
        <section id="error-handler">
            <div class="page-header"><h1>Error Handler</h1></div>

            <p class="lead">In live mode, keep your pretty HTML stack dumps so that you can view them later.</p>

            <p>Yii's built-in error handling is amazing... when you are in debug mode. However as soon as you set
                <code>YII_DEBUG</code> to false you stop getting those pretty error messages, which can make it tricky to
                find a problem in a live environment.</p>

            <p>YiiDressing provides an extension of Yii's error handler called <?php echo l('YdErrorHandler', array('/site/doc', 'view' => 'YdErrorHandler')); ?>.</p>

            <h2>Installation</h2>

            <p>Setup is a breeze, simply override the default error handler in your Yii config.</p>

<pre>'components' => array(
    'errorHandler' => array(
        'class' => 'dressing.components.YdErrorHandler',
    ),
),
</pre>
            <p>Now any errors will automatically be written to <code>runtime/errors</code> as plain html files.
                If <code>YII_DEBUG</code> is turned on then you will also see the messages on the screen as you usually
                would.</p>

        </section>
        <section id="fatal-error-catch">
            <div class="page-header"><h1>Catch Fatal Errors</h1></div>

            <p class="lead">Don't let any fatal errors slip by without your notice.</p>

            <p>The <?php echo l('YdFatalErrorCatch', array('/site/doc', 'view' => 'YdFatalErrorCatch')); ?> class allows
                you to make use of PHP's <code>register_shutdown_function()</code> to handle errors that would usually
                abort PHP's execution.</p>

            <p>It takes advantage of YdErrorHandler to save the fatal error messages to the
                <code>runtime/errors</code> folder.</p>

            <h2>Installation</h2>

            <p>You will need to add the following to your <code>preload</code> and <code>components</code> sections in
                your Yii config:</p>

            <pre>'preload' => array('log', 'fatalErrorCatch'),</pre>
<pre>'components' => array(
    'fatalErrorCatch' => array(
        'class' => 'dressing.components.YdFatalErrorCatch',
    ),
),
</pre>
        </section>

    </div>
</div>
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
$this->pageTitle = $this->pageHeading = t('Audit Tracking');
$this->pageSubheading = t('Monitor site activity and data changes');

// menu
$this->menu = YdSiteMenu::getItemsFromMenu('Help');

// breadcrumbs
//$this->breadcrumbs[] = t('Getting Started');
?>
<div class="row">

    <!-- Left menu BEGIN -->
    <div id="sidebar" class="span3">
        <ul class="nav nav-list bs-docs-sidenav affix-top">
            <li><a href="#audit-tracker"><i class="icon-chevron-right"></i> Audit Tracker</a></li>
            <li><a href="#audit-behavior"><i class="icon-chevron-right"></i> Audit Behavior</a></li>
            <li><a href="#viewing-data"><i class="icon-chevron-right"></i> Viewing the Data</a></li>
        </ul>
    </div>
    <!-- Left menu END -->

    <div class="span9">
        <section id="audit-tracker">
            <div class="page-header"><h1>Audit Tracker</h1></div>

            <p class="lead">Track site activity including everything you need to know about the hit.</p>

            <p>Tracking detailed visitor hits is simple with <?php echo l('YdAuditTracker', array('/site/doc', 'view' => 'YdAuditTracker')); ?>.
                It will automatically create a YdAudit record, then when the application ends it will update it with memory and time information.
            </p>

            <p><?php echo l('YdAudit', array('/site/doc', 'view' => 'YdAudit')); ?> will store as much information about the request as it can gather, including:
            </p>
            <ul>
                <li>Links - Requested URL, referring URL, redirecting to URL (read from the headers at the end of the application)</li>
                <li>User - Visitors IP Address and logged in user's ID</li>
                <li>Superglobals - ($_GET/$_POST/$_SESSION/$_FILES/$_COOKIE), the arrays are serialized then compressed using gzip</li>
                <li>Timers - Start and end times of the application</li>
                <li>Memory - Memory usage and peak memory usage</li>
                <li>AuditTrails - A count of the AuditTrails, see YdAuditTrailBehavior below</li>
            </ul>


            <h2>Installation</h2>

            <p>It is recommended to track the hit early in your application. You can do this by declaring a preloaded
                application component using the <code>preload</code> section of your Yii config.
            </p>

            <pre>'preload' => array('log','auditTracker'),</pre>

            <p>If you want to alter the properties of YdAuditTracker, or if you did not bootstrap your application with
                <?php echo l('YdBase', array('/site/doc', 'view' => 'YdBase')); ?> you will also need to declare auditTracker in the
                <code>components</code> section of your Yii config.
            </p>

<pre>'components' => array(
    'auditTracker' => array(
        'class' => 'dressing.components.YdAuditTracker',
    ),
),
</pre>

        </section>
        <section id="audit-behavior">
            <div class="page-header"><h1>Audit Behavior</h1></div>

            <p class="lead">Track data changes to your model data and relate those changes to an Audit.</p>

            <p><?php echo l('YdAuditBehavior', array('/site/doc', 'view' => 'YdAuditBehavior')); ?> can be attached to any model that extends from
                <?php echo l('YdActiveRecord', array('/site/doc', 'view' => 'YdActiveRecord')); ?>. It will implements a callback whenever
                you call save() or delete() that will detect the old and new field values and preserve them in an
                <?php echo l('YdAuditTrail', array('/site/doc', 'view' => 'YdAuditTrail')); ?> record.
            </p>

            <h2>Installation</h2>

            <p>Add the following code to any of your models. Also ensure they extend from YdActiveRecord so that
                YdActiveRecord::$dbAttributes is populated.</p>
<pre>public function behaviors() {
    return array(
        'AuditBehavior' => array(
            'class' => 'dressing.behaviors.YdAuditBehavior',
        ),
    );
}
</pre>


        </section>
        <section id="viewing-data">
            <div class="page-header"><h1>Viewing the Data</h1></div>

            <p class="lead">Check out the awesome data you are collecting.</p>

            <p>We have bundled YiiDressing with controllers and views to give you hands-on access to the audit data.</p>

            <h2>Installation</h2>

            <p>Add the following to the <code>controllerMap</code> section of your Yii config:</p>
<pre>'controllerMap' => array(
    'audit' => 'dressing.controllers.YdAuditController',
    'auditTrail' => 'dressing.controllers.YdAuditTrailController',
),
</pre>

        </section>

    </div>
</div>
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
$this->pageTitle = $this->pageHeading = t('Email Handling');
$this->pageSubheading = t('Take control of email with templates and a spool system');

// menu
$this->menu = YdSiteMenu::getItemsFromMenu('Help');

// breadcrumbs
//$this->breadcrumbs[] = t('Getting Started');
?>
<div class="row">

    <!-- Left menu BEGIN -->
    <div id="sidebar" class="span3">
        <ul class="nav nav-list bs-docs-sidenav affix-top">
            <li><a href="#installation"><i class="icon-chevron-right"></i> Installation</a></li>
            <li><a href="#sending-emails"><i class="icon-chevron-right"></i> Sending Emails</a></li>
            <li><a href="#email-templates"><i class="icon-chevron-right"></i> Email Templates</a></li>
            <li><a href="#email-spool"><i class="icon-chevron-right"></i> Email Spool</a></li>
        </ul>
    </div>
    <!-- Left menu END -->
    <div class="span9">
        <section id="installation">
            <div class="page-header"><h1>Installation</h1></div>

            <p class="lead">Get started in just a few steps.</p>

            <p>Generate the table by running the SQL in
                <code>yii-dressing/migrations/m000000_000004_email.sql</code>.</p>

            <p>Add the following to your Yii config:</p>
<pre>'components' => array(
    'email' => array(
        'class' => 'app.components.Email',
        'renderMethod' => 'php', // php or database
        'fromName' => 'Your Name',
        'fromEmail' => 'you@dom.ain',
    ),
    'swiftMailer' => array(
        'class' => 'dressing.components.YdSwiftMailer',
    ),
),
</pre>

            <p>Create an Email class in <code>components/Email.php</code> that you will use to define the emails
                that are sent by the application.</p>
            <pre>class Email extends YdEmail{ }</pre>

        </section>
        <section id="sending-emails">
            <div class="page-header"><h1>Sending Emails</h1></div>

            <p>The most simple way to send an email is to use the built in <code>sendEmail()</code> method.</p>
            <pre>Yii::app()->email->sendEmail('webmaster@localhost', 'subject', 'message');</pre>

        </section>
        <section id="email-templates">
            <div class="page-header"><h1>Email Templates</h1></div>

            <p>To send more complex emails you will need to use Email Templates.</p>

            <h2>Send Method</h2>

            <p>Add the following example method to your Email class.</p>
<pre>class Email extends YdEmail
{
    public function sendExample($user)
    {
        $viewParams = array('user' => $user);
        $message = $this->renderEmailTemplate('example', $viewParams);
        $emailSpool = $this->getEmailSpool($message);
        $emailSpool->priority = 10;
        $emailSpool->to_email = $user->email;
        $emailSpool->to_name = $user->name;
        $emailSpool->from_email = $this->fromEmail;
        $emailSpool->from_name = $this->fromName;
        $emailSpool->model = get_class($user);
        $emailSpool->model_id = $user->id;
        $emailSpool->save(false);
    }
}
</pre>

            <h2>Views</h2>

            <p><code>views/emails/example/subject.php</code></p>
            <pre>&lt;?php echo 'hello' . $user->name;</pre>
            <p><code>views/emails/example/title.php</code></p>
            <pre>&lt;?php echo 'hello' . $user->name;</pre>
            <p><code>views/emails/example/html.php</code></p>
            <pre>echo 'Here is some &lt;b&gt;HTML&lt;/b&gt; contents';</pre>
            <p><code>views/emails/example/text.php</code></p>
            <pre>echo 'Here is some TEXT contents';</pre>

            <h2>Database Views</h2>

            <p>You can store your views in the <code>email_template</code> email table, in which case you will need
                to use <a href="http://mustache.github.io/">mustache</a> formatting in your templates.</p>

            <p>Add the following to the <code>controllerMap</code> section of your Yii config:</p>
<pre>'controllerMap' => array(
    'emailTemplate' => 'dressing.controllers.YdEmailTemplateController',
),
</pre>
            <p>Now you can visit <code>index.php?r=emailTemplate</code> to manage your email templates.</p>

            <h2>Sending</h2>
            <p>The example email can be sent to the first user using the following code:</p>
            <pre>Yii::app()->email->sendExample(User::model()->find());</pre>


        </section>

        <section id="email-spool">
            <div class="page-header"><h1>Email Spool</h1></div>
            <h2>Viewing the Spool</h2>

            <p>Add the following to the <code>controllerMap</code> section of your Yii config:</p>
<pre>'controllerMap' => array(
    'emailSpool' => 'dressing.controllers.YdEmailSpoolController',
),
</pre>
            <p>Goto <code>index.php?r=emailSpool</code> to view the spooled emails.</p>

            <h2>Processing the Spool</h2>

            <p>Add the following to the <code>commandMap</code> section of your Yii config:</p>
<pre>'commandMap' => array(
    'emailSpool' => 'dressing.commands.YdEmailSpoolCommand',
),
</pre>
            <p>Run <code>./yiic emailSpool live</code> to start the spool. This should be added to your cron
                with something like
                <a href="http://www.unixwiz.net/tools/lockrun.html">lockrun</a> for overlap protection.</p>

        </section>

    </div>

</div>
<?php
/**
 * @var $this YdWebController
 * @var $content
 *
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @author Zain Ul abidin <zainengineer@gmail.com>
 * @copyright 2013 Brett O'Donnell <cornernote@gmail.com>, Zain Ul abidin <zainengineer@gmail.com>
 * @link https://github.com/cornernote/yii-skeleton
 * @license http://www.gnu.org/copyleft/gpl.html
 */
?>
<?php
if ($this->showNavBar) {
    $this->widget('dressing.widgets.YdNavbar', array(
        'id' => 'navbar',
        'fixed' => 'top',
        'fluid' => false,
        'collapse' => true,
        'items' => SiteMenu::topMenu(),
//        'constantItems' => array(
//            YdMenu::userMenu(),
//        ),
    ));
}
?>
<div id="holder">
    <div id="body">
        <header class="jumbotron<?php echo YdHelper::isFrontPage() ? '' : ' subhead'; ?>">
            <div class="container">
                <?php
                if ($this->pageHeading) {
                    echo '<h1 class="header">' . $this->pageHeading . '</h1>';
                }
                if ($this->pageSubheading) {
                    echo '<p class="lead">' . $this->pageSubheading . '</p>';
                }
                ?>
            </div>
        </header>
        <div id="content" class="container">
            <?php
            if ($this->menu) {
                $this->widget('bootstrap.widgets.TbMenu', array(
                    'id' => 'menu',
                    'type' => 'tabs',
                    'items' => $this->menu,
                ));
            }
            if ($this->breadcrumbs) {
                $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
                    'id' => 'breadcrumb',
                    'links' => $this->breadcrumbs,
                    'separator' => '',
                ));
            }
            echo user()->multiFlash();
            echo $content;
            ?>
        </div>
    </div>


    <footer class="footer">
        <div class="container">
            <p class="powered">
                Powered by <a target="_blank" href="http://www.yiiframework.com">Yii Framework</a> /
                <a target="_blank" href="http://yiibooster.clevertech.biz/">YiiBooster</a> /
                <a target="_blank" href="http://www.jquery.com">jQuery</a> /
                <a target="_blank" href="http://twitter.github.com/bootstrap/">Twitter Bootstrap</a>
            </p>

            <p class="copy">Copyright &copy; 2013 by <a href="http://mrphp.com.au">Mr PHP</a></p>
            <?php
            $this->renderPartial('dressing.views.audit._footer');
            //echo '<p class="pull-right">' . l(t('Back to Top') . ' &uarr;', '#') . '</p>';
            ?>
        </div>
    </footer>

</div>
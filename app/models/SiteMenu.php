<?php

/**
 * Class SiteMenu
 */
class SiteMenu extends YdSiteMenu
{

    static public function topMenu()
    {
        $menu = array();

        // main
        $menu[] = array(
            'class' => 'bootstrap.widgets.TbMenu',
            'items' => self::getItemsFromMenu('Main'),
        );

        // system
        if (Yii::app()->user->checkAccess('admin')) {
            $menu[] = array(
                'class' => 'bootstrap.widgets.TbMenu',
                'htmlOptions' => array(
                    'class' => 'pull-right',
                ),
                'items' => array(
                    array(
                        'label' => Yii::t('dressing', 'System'),
                        'icon' => 'icon-gears',
                        'items' => self::getItemsFromMenu('System'),
                    ),
                ),
            );
        }

        // help
        $menu[] = array(
            'class' => 'bootstrap.widgets.TbMenu',
            'htmlOptions' => array(
                'class' => 'pull-right',
            ),
            'items' => array(
                array(
                    'label' => Yii::t('dressing', 'Help'),
                    'icon' => 'icon-question-sign',
                    'items' => self::getItemsFromMenu('Help'),
                ),
            ),
        );

        return $menu;
    }


} 
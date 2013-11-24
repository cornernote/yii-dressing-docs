<?php

/**
 * Class SiteMenu
 */
class SiteMenu extends YdSiteMenu
{

    /**
     * @return array
     */
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

    /**
     * @return mixed
     */
    public function relations()
    {
        if (!empty(Yii::app()->dressing->modelMap['YdSiteMenu']['relations']))
            return Yii::app()->dressing->modelMap['YdSiteMenu']['relations'];
        return array();
    }

    /**
     * @return mixed
     */
    public function behaviors()
    {
        if (!empty(Yii::app()->dressing->modelMap['YdSiteMenu']['behaviors']))
            return Yii::app()->dressing->modelMap['YdSiteMenu']['behaviors'];
        return array();
    }

} 
<?php
/**
 * @author Brett O'Donnell <cornernote@gmail.com>
 * @copyright 2013 Mr PHP
 * @link https://github.com/cornernote/yii-skeleton
 * @license http://www.gnu.org/copyleft/gpl.html
 */
echo '<?php' . "\n";
echo "\$this->pageTitle = \$this->pageHeading = '" . addslashes($this->pageTitle) . "'" . "\n";
echo '?>' . "\n";
echo "\n";
echo $content;
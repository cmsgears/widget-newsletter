<?php
namespace cmsgears\widgets\newsletter;

// Yii Imports
use \Yii;
use yii\base\Widget;
use yii\base\InvalidConfigException;

class FollowMe extends \cmsgears\core\common\widgets\BaseWidget {

	// Variables ---------------------------------------------------

	// Public Variables --------------------

	// Constructor and Initialisation ------------------------------

	// yii\base\Object

    public function init() {

        parent::init();

		// Do init tasks
    }

	// Instance Methods --------------------------------------------

	// yii\base\Widget

    public function run() {

		$widgetHtml = $this->render( $this->viewFile );

		return Html::tag( 'div', $widgetHtml, $this->options );
    }
}

?>
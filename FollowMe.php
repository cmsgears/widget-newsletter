<?php
namespace cmsgears\widgets\newsletter;

// Yii Imports
use \Yii;
use yii\base\Widget;
use yii\base\InvalidConfigException;

class FollowMe extends Widget {

	// Variables ---------------------------------------------------

	// Public Variables --------------------

	/**
	 * The html options for the parent container.
	 */
	public $options;

	/**
	 * The path at which view file is located. It can have alias. By default it's the views folder within widget directory.
	 */
	public $viewPath	= null;

	/**
	 * The view file used to render widget.
	 */
	public $view		= 'simple';

	// Constructor and Initialisation ------------------------------

	// yii\base\Object

    public function init() {

        parent::init();

		// Do init tasks
    }

	// Instance Methods --------------------------------------------

	// yii\base\Widget

    public function run() {

		$widgetHtml = $this->render( $this->view );

		return Html::tag( 'div', $widgetHtml, $this->options );
    }
}

?>
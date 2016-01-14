<?php
namespace cmsgears\widgets\newsletter;

// Yii Imports
use \Yii;
use yii\helpers\Html;
use yii\base\InvalidConfigException;

// CMG Imports
use cmsgears\widgets\newsletter\assets\NewsletterAssets;

class FollowMe extends \cmsgears\core\common\base\Widget {

	// Variables ---------------------------------------------------

	// Public Variables --------------------

	public $btnText	= "Follow Us";

	// Constructor and Initialisation ------------------------------

	// yii\base\Object

    public function init() {

        parent::init();
		
		// Do init tasks
    }

	// Instance Methods --------------------------------------------

	// yii\base\Widget

    public function run() {

		if( $this->loadAssets ) {

			NewsletterAssets::register( $this->getView() );
		}

		$widgetHtml = $this->renderWidget();

		return Html::tag( 'div', $widgetHtml, $this->options );
    }

	public function renderWidget( $config = [] ) {

		$widgetHtml = $this->render( $this->template, [ 'btnText' => $this->btnText ] );

		return $widgetHtml;
	}
}

?>
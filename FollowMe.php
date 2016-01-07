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

		if( $this->loadAssets ) {

			NewsletterAssets::register( $this->getView() );
		}
    }

	// Instance Methods --------------------------------------------

	// yii\base\Widget

    public function run() {

		$widgetHtml = $this->render( $this->template, [ 'btnText' => $this->btnText ] );

		return Html::tag( 'div', $widgetHtml, $this->options );
    }
}

?>
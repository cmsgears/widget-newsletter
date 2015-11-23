<?php
namespace cmsgears\widgets\newsletter;

// Yii Imports
use \Yii;
use yii\helpers\Html;
use yii\base\Widget;
use yii\base\InvalidConfigException;

class FollowMe extends \cmsgears\core\common\base\Widget {

	// Variables ---------------------------------------------------

	// Public Variables --------------------

	public $btnText	= "Follow Us";

	// Constructor and Initialisation ------------------------------

	// yii\base\Object

    public function init() {

        parent::init();

		if( $this->loadAssets ) {

			NewsletterAssetBundle::register( $this->getView() );
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
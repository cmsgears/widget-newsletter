<?php
namespace cmsgears\widgets\newsletter\assets;

// Yii Imports
use yii\web\AssetBundle;
use yii\web\View;

class NewsletterAssetBundle extends AssetBundle {

	// Public variables --------------------------------------------

	// Path Configuration

    public $sourcePath = '@cmsgears/widget-newsletter/resources';

	// Load CSS

	public $css     = [
		// specify styles
    ];

	// Load Javascript

    public $js      = [
		'scripts/api-processor.js'
    ];

	// Define the Position to load Assets
    public $jsOptions = [
        'position' => View::POS_END
    ];

	// Define dependent Asset Loaders
    public $depends = [
		'yii\web\JqueryAsset',
		'cmsgears\core\common\assets\CMTAssetBundle'
    ];

	// Constructor and Initialisation ------------------------------

	public function __construct() {

		parent::__construct();
	}
}

?>
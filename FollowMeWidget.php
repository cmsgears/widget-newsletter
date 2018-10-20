<?php
/**
 * This file is part of CMSGears Framework. Please view License file distributed
 * with the source code for license details.
 *
 * @link https://www.cmsgears.org/
 * @copyright Copyright (c) 2015 VulpineCode Technologies Pvt. Ltd.
 */

namespace cmsgears\widgets\newsletter;

// Yii Imports
use yii\helpers\Html;

// CMG Imports
use cmsgears\core\common\base\Widget;

class FollowMeWidget extends Widget {

	// Variables ---------------------------------------------------

	// Globals -------------------------------

	// Constants --------------

	// Public -----------------

	// Protected --------------

	// Variables -----------------------------

	// Public -----------------

    public $btnText	= "Join Us";

	public $ajaxUrl	= 'newsletter/site/sign-up'; // CMT App Request - Submit Path

	// CMT JS Framework to handle ajax request
	public $cmtApp			= 'core';
    public $cmtController	= 'default';
    public $cmtAction		= 'default';

	// Protected --------------

	// Private ----------------

	// Traits ------------------------------------------------------

	// Constructor and Initialisation ------------------------------

	// Instance methods --------------------------------------------

	// Yii interfaces ------------------------

	// Yii parent classes --------------------

	// yii\base\Widget

	// CMG interfaces ------------------------

	// CMG parent classes --------------------

	// FollowMeWidget ------------------------

	public function renderWidget( $config = [] ) {

		$widgetHtml = $this->render( $this->template, [ 'widget' => $this ] );

		if( $this->wrap ) {

			return Html::tag( $this->wrapper, $widgetHtml, $this->options );
		}

		return $widgetHtml;
	}

}

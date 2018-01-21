<form class="cmt-form" id="frm-newsletter" cmt-controller="newsletter" cmt-action="register" action="<?php echo Yii::$app->urlManager->createAbsoluteUrl( "apix/newsletter" ); ?>" method="post">
		<div class="max-area-cover spinner"><div class="valign-center cmti cmti-2x cmti-spinner-1 spin"></div></div>

		<div class="frm-field">
			<div class="frm-icon-element email">
				<i class="cmti cmti-at"></i><input type="text" name="Newsletter[email]" placeholder="Email *">
			</div>
			<span class="error" cmt-error="email"></span>
		</div>

		<div class="frm-actions">
			<input class="submit" type="submit" name="submit" value="<?=$btnText?>">
		</div>

		<div class="message warning"></div>
</form>
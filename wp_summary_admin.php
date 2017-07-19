<?php
if (isset($_POST['submitSummary'])) {
	$summaryHead = $_POST['SummaryHead'];

	update_option('summary_head', $summaryHead);

	if (isset($_POST['SummaryShowLink'])) {
		update_option('summary_showlink','true');
	} else {
		update_option('summary_showlink','false');
	}

	$summaryListType = $_POST['SummaryType'];
	update_option('summary_listtype',$summaryListType);
}

$summaryShowLink =  get_option( 'summary_showlink' );
$summaryHead = get_option('summary_head');
$summaryListType = get_option('summary_listtype');
?>
<div class="wrap">
	<h2>General Settings</h2>
	<form method="post">
		<em>(Hint: you can use <strong>[summary]</strong> anywhere in your post if you don't want to display it at the beginning)</em><br />
		<br />

		Text to display before the summary :<br />
		<input type="text" name="SummaryHead" value="<?php echo $summaryHead; ?>" /><br />
		<br />
		<input type="radio" name="SummaryType" value="1" <?php if ($summaryListType == 1) echo 'checked '; ?>/> Unordered List (UL)<br />
		<input type="radio" name="SummaryType" value="2" <?php if ($summaryListType == 2) echo 'checked '; ?>/> Ordered List (OL)<br />
		<br />
		<input type="checkbox" name="SummaryShowLink" id="chk_link" <?php if ($summaryShowLink == 'true') echo 'checked '; ?>/> I want to promote WP Summary in my footer (thank you very much !)<br />
		(Will look like '<a href="http://wordpress.org/extend/plugins/wp-summary/">Plugin WP Summary</a> by <a href="http://dsampaolo.com/blog/">DSampaolo</a>')<br />
		<br />
		<input type="submit" class="button-primary" name="submitSummary" value="Save changes" />
	</form>
</div>
<div class="wrap">
	<h2>Donations welcomed !</h2>
	If you enjoy my work and want to thank me, feel free to donate some cash ;)
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
	<input type="hidden" name="cmd" value="_s-xclick">
	<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
	">
	<input type="image" src="https://www.paypal.com/en_US/FR/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
	<img alt="" border="0" src="https://www.paypal.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
	</form>
        Fell free to connect with me on Twitter, too. :) <a href="http://twitter.com/dsampaolo">@dsampaolo</a>
</div>

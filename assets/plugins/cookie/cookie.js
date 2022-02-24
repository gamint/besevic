$(document).ready(function() {
	$('body').ihavecookies({
		title: 'Accept Cookies & Privacy Policy?',
		message: 'We use cookies to improve your experience on our website and to show you personalised content. You can allow all or manage them individually. Click the <strong>accept</strong> button below',
		delay: 600,
		expires: 1,
		link: '#privacy',
		onAccept: function(){
			var myPreferences = $.fn.ihavecookies.cookie();
			console.log('Yay! The following preferences were saved...');
			console.log(myPreferences);
		},
		uncheckBoxes: true,
		acceptBtnLabel: 'Accept Cookies',
		moreInfoLabel: 'More information'
	});

	if ($.fn.ihavecookies.preference('marketing') === true) {
		console.log('This should run because marketing is accepted.');
	}
});
$(function () {
	checkWindowWidth();
});

function checkWindowWidth() {
	if ($(window).width() < 800) {
		$('#fast-links .flexcenter').contents().unwrap();
	}
}

$(window).resize(function () {
	checkWindowWidth();
})
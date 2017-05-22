$(function () {
	//ge totalsumman ett standardvärde
	var total = 0;

	//ge alla yrken ett värde/pris
	var rekryteringPrices = [0, 20000, 22000, 15000, 23000, 28000, 39000, 28000, 29000, 29000, 29000, 22000, 22000, 39000];
	/*
	Kundtjänst;20000
	Teknisksupport;22000
	Callcenterpersonal;15000
	Innesäljare;23000
	Account Manager;28000
	KAM;39000
	Fältsäljare;28000
	Ekonomiassistent;29000
	Löneadministratör;29000
	Administratör;29000
	Administratör;22000
	Receptionist;22000
	Teamledare;39000
	*/


	//ge alla yrken sitt pris i dropdown-listan
	$('#rekrytering-yrke option').each(function (i) {
		$(this).attr("value", rekryteringPrices[i]);
	});

	//ändra priset när man väljer yrke eller år
	$('#rekrytering-yrke, #rekrytering-year').change(function () {
		var price = $('#rekrytering-yrke option:selected').val();
		var year = $('#rekrytering-year option:selected').val();
		var category = (10 / 100) * parseInt(price);

		total = (category * (year * 1.1) + parseInt(price));

		$('#total').text(total + " sek");
	});
})
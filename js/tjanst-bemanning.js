$(function () {
	//ge alla yrken ett värde, dvs pris
	var prices = [0, 101, 104, 95, 110, 121, 145, 112, 119, 119, 119, 112, 149];
	/*
		Default;0
		Kundtjänst;101
		Teknisksupport;104
		Callcenterpersonal;95
		Innesäljare;110
		Account Manager;121
		KAM;145
		Fältsäljare;112
		Ekonomiassistent;119
		Löneadministratör;119
		Administratör;119
		Receptionist;112
		Teamledare;149
	*/

	//ge alla årserfarenhet ett värde
	var years = [2.2, 2.3, 2.4, 2.6, 3.0, 3.2];

	//ändra value-värden på yrke-dropdown så att varje yrke får sitt pris
	$('#yrke option').each(function (i) {
		$(this).attr("value", prices[i]);
	});

	//ändra priset när man väljer yrke eller år
	$('#yrke, #year').change(function () {
		var price = $('#yrke option:selected').val();
		var year = $('#year option:selected').val();
		var total = price * years[year];

		$('#total').text(total.toFixed(2) + " sek/timma");
	})
})
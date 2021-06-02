$(document).ready(function () {
	$.ajax({
		url: base_url + "Dashboard/get_statistik/",
		type: "post",
		dataType: "json",
		success: function (data) {
			console.log(data.tahun);
			var ctx = document.getElementById("statisticsChart").getContext("2d");
			var statisticsChart = new Chart(ctx, {
				type: "line",
				data: {
					labels: [
						"Jan",
						"Feb",
						"Mar",
						"Apr",
						"May",
						"Jun",
						"Jul",
						"Aug",
						"Sep",
						"Oct",
						"Nov",
						"Dec",
					],
					datasets: [
						{
							label: "Perkawinan",
							borderColor: "#f3545d",
							pointBackgroundColor: "rgba(243, 84, 93, 0.6)",
							pointRadius: 0,
							backgroundColor: "rgba(243, 84, 93, 0.4)",
							legendColor: "#f3545d",
							fill: true,
							borderWidth: 2,
							data: data.perkawinan,
						},
						{
							label: "Baptisan",
							borderColor: "#fdaf4b",
							pointBackgroundColor: "rgba(253, 175, 75, 0.6)",
							pointRadius: 0,
							backgroundColor: "rgba(253, 175, 75, 0.4)",
							legendColor: "#fdaf4b",
							fill: true,
							borderWidth: 2,
							data: data.baptisan,
						},
						{
							label: "Jemaat",
							borderColor: "#177dff",
							pointBackgroundColor: "rgba(23, 125, 255, 0.6)",
							pointRadius: 0,
							backgroundColor: "rgba(23, 125, 255, 0.4)",
							legendColor: "#177dff",
							fill: true,
							borderWidth: 2,
							data: data.jemaat,
						},
					],
				},
				options: {
					responsive: true,
					maintainAspectRatio: false,
					legend: {
						display: false,
					},
					tooltips: {
						bodySpacing: 4,
						mode: "nearest",
						intersect: 0,
						position: "nearest",
						xPadding: 10,
						yPadding: 10,
						caretPadding: 10,
					},
					layout: {
						padding: { left: 5, right: 5, top: 15, bottom: 15 },
					},
					scales: {
						yAxes: [
							{
								ticks: {
									fontStyle: "500",
									beginAtZero: false,
									maxTicksLimit: 5,
									padding: 10,
								},
								gridLines: {
									drawTicks: false,
									display: false,
								},
							},
						],
						xAxes: [
							{
								gridLines: {
									zeroLineColor: "transparent",
								},
								ticks: {
									padding: 10,
									fontStyle: "500",
								},
							},
						],
					},
					legendCallback: function (chart) {
						var text = [];
						text.push('<ul class="' + chart.id + '-legend html-legend">');
						for (var i = 0; i < chart.data.datasets.length; i++) {
							text.push(
								'<li><span style="background-color:' +
									chart.data.datasets[i].legendColor +
									'"></span>'
							);
							if (chart.data.datasets[i].label) {
								text.push(chart.data.datasets[i].label);
							}
							text.push("</li>");
						}
						text.push("</ul>");
						return text.join("");
					},
				},
			});

			var myLegendContainer = document.getElementById("myChartLegend");
			// generate HTML legend
			myLegendContainer.innerHTML = statisticsChart.generateLegend();
			// bind onClick event to all LI-tags of the legend
			var legendItems = myLegendContainer.getElementsByTagName("li");
			for (var i = 0; i < legendItems.length; i += 1) {
				legendItems[i].addEventListener("click", legendClickCallback, false);
			}

			var barChart = document.getElementById("barCharttahun").getContext("2d");
			var myBarChart = new Chart(barChart, {
				type: "bar",
				data: {
					labels: data.tahun,
					datasets: [
						{
							label: "Registrasi Taman Kanak-Kanak",
							backgroundColor: "rgb(23, 125, 255)",
							borderColor: "rgb(23, 125, 255)",
							data: data.tk,
						},
					],
				},
				options: {
					responsive: true,
					maintainAspectRatio: false,
					scales: {
						yAxes: [
							{
								ticks: {
									beginAtZero: true,
								},
							},
						],
					},
				},
			});
		},
	});
});

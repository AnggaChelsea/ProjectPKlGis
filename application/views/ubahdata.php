<!doctype html>
<html>

<head>
	<title>Grid Lines Display Settings</title>
	<script src="<?= base_url() ?>template3/js/Chart.min.js"></script>
	<script src="<?= base_url() ?>template3/js/utils.js"></script>
	<style>
		canvas {
			-moz-user-select: none;
			-webkit-user-select: none;
			-ms-user-select: none;
		}

		.chart-container {
			width: 500px;
			margin-left: 40px;
			margin-right: 40px;
			margin-bottom: 40px;
		}

		.container {
			display: flex;
			flex-direction: row;
			flex-wrap: wrap;
			justify-content: center;
		}
	</style>
</head>

<body>
	<div class="container"></div>
	<script>
		function createConfig(gridlines, title) {
			return {
				type: 'line',
				data: {
					labels: ['January', 'February', 'Maret', 'April', 'Mai', 'Juni', 'July', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
					datasets: [{
						label: 'Sekolah terdaftar yang mudah akses',
						backgroundColor: window.chartColors.red,
						borderColor: window.chartColors.red,
						data: [20, 40, 59, 20, 25, 34, 20, 100, 20, 15, 14, 22],
						fill: false,
					}, {
						label: 'Sekolah terdaftar yang terpelosok',
						fill: false,
						backgroundColor: window.chartColors.blue,
						borderColor: window.chartColors.blue,
						data: [1, 3, 2, 9, 1, 9, 0, 0, 0, 5, 4, 22],
					}]
				},
				options: {
					responsive: true,
					title: {
						display: true,
						text: title
					},
					scales: {
						xAxes: [{
							gridLines: gridlines
						}],
						yAxes: [{
							gridLines: gridlines,
							ticks: {
								min: 0,
								max: 100,
								stepSize: 10
							}
						}]
					}
				}
			};
		}

		window.onload = function() {
			var container = document.querySelector('.container');

			[{
				title: 'Di Tahun 2019',
				gridLines: {
					drawBorder: true,
					display: true
				}
			}, {
				title: 'Di Tahun 2020',
				gridLines: {
					display: true,
					drawBorder: true
				}
			}, {
				title: 'Di Tahun 2021',
				gridLines: {
					display: true,
					drawBorder: true,
					drawOnChartArea: true,
				}
			}].forEach(function(details) {
				var div = document.createElement('div');
				div.classList.add('chart-container');

				var canvas = document.createElement('canvas');
				div.appendChild(canvas);
				container.appendChild(div);

				var ctx = canvas.getContext('2d');
				var config = createConfig(details.gridLines, details.title);
				new Chart(ctx, config);
			});
		};
	</script>

	<button class="btn btn-outline-primary ">Back Home</button>
</body>

</html>
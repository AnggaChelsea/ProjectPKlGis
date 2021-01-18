
<!doctype html>
<html>

<head>
	<title>Grid Lines Display Settings</title>
	<script src="<?= base_url() ?>template3/js/Chart.min.js"></script>
	<script src="<?= base_url() ?>template3/js/utils.js"></script>
	<style>
		canvas{
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
					labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
					datasets: [{
						label: 'Sekolah terdaftar yang rerpelosok',
						backgroundColor: window.chartColors.red,
						borderColor: window.chartColors.red,
						data: [10, 30, 39, 20, 25, 34, 0],
						fill: false,
					}, {
						label: 'My Second dataset',
						fill: false,
						backgroundColor: window.chartColors.blue,
						borderColor: window.chartColors.blue,
						data: [18, 33, 22, 19, 11, 39, 30],
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

			[ {
				title: 'In year 2019',
				gridLines: {
					display: true
				}
			}, {
				title: 'Display: false, no border',
				gridLines: {
					display: false,
					drawBorder: true
				}
			}, {
				title: 'DrawOnChartArea: false',
				gridLines: {
					display: true,
					drawBorder: true,
					drawOnChartArea: false,
				}
			}, {
				title: 'DrawTicks: false',
				gridLines: {
					display: true,
					drawBorder: true,
					drawOnChartArea: true,
					drawTicks: false,
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
</body>

</html>

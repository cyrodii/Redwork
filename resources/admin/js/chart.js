var color = Chart.helpers.color;
	function createConfig(legendPosition, colorName) {
		return {
			type: 'line',
			data: {
				labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
				datasets: [{
					label: 'My First dataset',
					data: [
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor()
					],
					backgroundColor: color(window.chartColors[colorName]).alpha(0.5).rgbString(),
					borderColor: window.chartColors[colorName],
					borderWidth: 1
				}]
			},
			
			options: {
				responsive: true,
				legend: {
					position: legendPosition,
				},
				
				scales: {
					xAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							gridLines: {
								color: 'rgba(119, 119, 119, 0.2)'
							},
							labelString: 'Month'
						}
					}],
					yAxes: [{
						display: true,
						gridLines: {
							color: 'rgba(119, 119, 119,0.2)'
						},
						scaleLabel: {
							display: true,
							labelString: 'Value'
						}
					}]
				},
				
			}
		};
	}

	window.onload = function() {
		[{
			id: 'chart-legend-top',
			legendPosition: 'top',
			color: 'green'
		}, {
			id: 'chart-legend-right',
			legendPosition: 'right',
			color: 'blue'
		}, {
			id: 'chart-legend-bottom',
			legendPosition: 'bottom',
			color: 'red'
		}, {
			id: 'chart-legend-left',
			legendPosition: 'left',
			color: 'yellow'
		}].forEach(function(details) {
			var ctx = document.getElementById(details.id).getContext('2d');
			var config = createConfig(details.legendPosition, details.color);
			new Chart(ctx, config);
		});
	};
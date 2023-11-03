
jQuery(function() {
	'use strict';

	/* Chart.js docs: https://www.chartjs.org/ */
	
	window.chartColors = {
		green: '#75c181',
		gray: '#a9b5c9',
		text: '#252930',
		border: '#e7e9ed'
	};
	
	/* Random number generator for demo purpose */
	var randomDataPoint = function(){ return Math.round(Math.random()*10000)};
	
	
	//Chart.js Line Chart Example 
	
	var lineChartConfig = {
		type: 'line',
	
		data: {
			labels: ['Day 1', 'Day 2', 'Day 3', 'Day 4', 'Day 5', 'Day 6', 'Day 7'],
			
			datasets: [{
				label: 'Buy',
				fill: false,
				backgroundColor: window.chartColors.green,
				borderColor: window.chartColors.green,
				data: [
					randomDataPoint(),
					randomDataPoint(),
					randomDataPoint(),
					randomDataPoint(),
					randomDataPoint(),
					randomDataPoint(),
					randomDataPoint()
				],
			}, {
				label: 'Sell',
				borderDash: [3, 5],
				backgroundColor: window.chartColors.gray,
				borderColor: window.chartColors.gray,
				
				data: [
					randomDataPoint(),
					randomDataPoint(),
					randomDataPoint(),
					randomDataPoint(),
					randomDataPoint(),
					randomDataPoint(),
					randomDataPoint()
				],
				fill: false,
			}]
		},
		options: {
			responsive: true,	
			aspectRatio: 1.5,
			
			legend: {
				display: true,
				position: 'bottom',
				align: 'end',
			},
			
			title: {
				display: true,
				text: 'Buy To Sale',
				
			}, 
			tooltips: {
				mode: 'index',
				intersect: false,
				titleMarginBottom: 10,
				bodySpacing: 10,
				xPadding: 16,
				yPadding: 16,
				borderColor: window.chartColors.border,
				borderWidth: 1,
				backgroundColor: '#fff',
				bodyFontColor: window.chartColors.text,
				titleFontColor: window.chartColors.text,
	
				callbacks: {
					//Ref: https://stackoverflow.com/questions/38800226/chart-js-add-commas-to-tooltip-and-y-axis
					label: function(tooltipItem, data) {
						if (parseInt(tooltipItem.value) >= 1000) {
							return "$" + tooltipItem.value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
						} else {
							return '$' + tooltipItem.value;
						}
					}
				},
	
			},
			hover: {
				mode: 'nearest',
				intersect: true
			},
			scales: {
				xAxes: [{
					display: true,
					gridLines: {
						drawBorder: false,
						color: window.chartColors.border,
					},
					scaleLabel: {
						display: false,
					
					}
				}],
				yAxes: [{
					display: true,
					gridLines: {
						drawBorder: false,
						color: window.chartColors.border,
					},
					scaleLabel: {
						display: false,
					},
					ticks: {
						beginAtZero: true,
						userCallback: function(value, index, values) {
							return '$' + value.toLocaleString();   //Ref: https://stackoverflow.com/questions/38800226/chart-js-add-commas-to-tooltip-and-y-axis
						}
					},
				}]
			}
		}
	};
	
	
	
	// Chart.js Bar Chart Example 
	
	let barChartConfig = {
		type: 'bar',
		
		data: {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			datasets: [{
				label: 'Buy',
				backgroundColor: 'rgba(255, 99, 132, 0.2)',
				borderColor: 'rgba(255, 99, 132, 1)',
				borderWidth: 1,
				data: [25, 45, 76, 75, 62, 37, 83],
			}, {
				label: 'Sale',
				backgroundColor: 'rgba(54, 162, 235, 0.2)',
				borderColor: 'rgba(54, 162, 235, 1)',
				borderWidth: 1,
				data: [40, 22, 68, 31, 77, 58, 92],
			}]
		},
		options: {
			responsive: true,
			aspectRatio: 1.5,
			legend: {
				position: 'bottom',
				align: 'end',
			},
			title: {
				display: true,
				text: 'Buy to Sale'
			},
			tooltips: {
				mode: 'index',
				intersect: false,
				titleMarginBottom: 10,
				bodySpacing: 10,
				xPadding: 16,
				yPadding: 16,
				borderColor: window.chartColors.border,
				borderWidth: 1,
				backgroundColor: '#fff',
				bodyFontColor: window.chartColors.text,
				titleFontColor: window.chartColors.text,
	
			},
			scales: {
				xAxes: [{
					display: true,
					gridLines: {
						drawBorder: false,
						color: window.chartColors.border,
					},
	
				}],
				yAxes: [{
					display: true,
					gridLines: {
						drawBorder: false,
						color: window.chartColors.borders,
					},
					ticks: {
						beginAtZero: true,
						userCallback: function(value, index, values) {
							return '$' + value.toLocaleString();   //Ref: https://stackoverflow.com/questions/38800226/chart-js-add-commas-to-tooltip-and-y-axis
						}
					},
					
				}]
			}
			
		}
	}

	let totalBarChartConfig = {
		type: 'bar',
		
		data: {
			labels: ['Buy/Sale'],
			datasets: [{
				label: 'Buy',
				backgroundColor: 'rgba(255, 99, 132, 0.2)',
				borderColor: 'rgba(255, 99, 132, 1)',
				borderWidth: 1,
				data: [25],
			}, {
				label: 'Sale',
				backgroundColor: 'rgba(54, 162, 235, 0.2)',
				borderColor: 'rgba(54, 162, 235, 1)',
				borderWidth: 1,
				data: [25],
			}]
		},
		options: {
			responsive: true,
			aspectRatio: 1.5,
			legend: {
				position: 'bottom',
				align: 'end',
			},
			
			title: {
				display: true,
				text: 'Total'
			},
			tooltips: {
				mode: 'index',
				intersect: false,
				titleMarginBottom: 10,
				bodySpacing: 10,
				xPadding: 16,
				yPadding: 16,
				borderColor: window.chartColors.border,
				borderWidth: 1,
				backgroundColor: '#fff',
				bodyFontColor: window.chartColors.text,
				titleFontColor: window.chartColors.text,
				
	
			},
			scales: {
				xAxes: [{
					display: true,
					gridLines: {
						drawBorder: false,
						color: window.chartColors.border,
					},
	
				}],
				yAxes: [{
					display: true,
					gridLines: {
						drawBorder: false,
						color: window.chartColors.borders,
					},
					ticks: {
						beginAtZero: true,
						userCallback: function(value, index, values) {
							return '$' + value.toLocaleString();   //Ref: https://stackoverflow.com/questions/38800226/chart-js-add-commas-to-tooltip-and-y-axis
						}
					},
					
				}]
			}
			
		}
	}
	
	// Generate charts on load
	window.addEventListener('load', function(){
		
		
		$.post("read_chart_data.php", { 
			link: $("#area_select").val() 
		}, function(data, status) {
			const records = JSON.parse(data);
			updateChartsAndUI(records);

			var barChart = document.getElementById('canvas-barchart').getContext('2d');
			window.myBar = new Chart(barChart, barChartConfig);
			
			
			var lineChart = document.getElementById('canvas-linechart').getContext('2d');
			window.myLine = new Chart(lineChart, lineChartConfig);

			var totalBarChart = document.getElementById('canvas-barchart-total').getContext('2d');
			window.myTotalBar = new Chart(totalBarChart, totalBarChartConfig);
		});
	});	

	// Generate charts on selecting the area
	$("#area_select").on('change', function() {
		
		$.post("read_chart_data.php", { 
			link: $(this).val() 
		}, function(data, status) {
			const records = JSON.parse(data);
			updateChartsAndUI(records);
			window.myBar.update();
			window.myTotalBar.update();
		});
	});

	function updateChartsAndUI(records) {
		let i = 0;
		const labels = records.map(rec => `${rec.firstname} ${rec.lastname}`);
		const buyPrices = records.map(rec => rec.buyPrice);
		const sellPrices = records.map(rec => rec.sellPrice);
		
		console.log(records.length);
		const sumOfBuyPrices = buyPrices.reduce((total, price) => total + parseFloat(price), 0);
		const sumOfSellPrices = sellPrices.reduce((total, price) => total + parseFloat(price), 0);
		const profitRatio = (sumOfSellPrices - sumOfBuyPrices) / sumOfBuyPrices * 100;
	
		$("#total_buy_price").text("$" + sumOfBuyPrices.toLocaleString());
		$("#total_sell_price").text("$" + sumOfSellPrices.toLocaleString());
		$("#profit_ratio").text(profitRatio.toFixed(2) + "%");
		$('#count').text(records.length);
		$("#display_notes").empty();
		records.map(record => {
			$.post("read_takers.php", {email: record.email}, function(data, status) {
				const fullName = JSON.parse(data);
				$("#display_notes").append(`<tr><td>${fullName[0].firstname} ${fullName[0].lastname}</td><td>${record.note}</td></tr>`);
			});
		});
		
		barChartConfig.data.labels = labels;
		barChartConfig.data.datasets[0].data = buyPrices;
		barChartConfig.data.datasets[1].data = sellPrices;
	
		
		lineChartConfig.data.labels = labels;
		lineChartConfig.data.datasets[0].data = buyPrices;
		lineChartConfig.data.datasets[1].data = sellPrices;
		
		totalBarChartConfig.data.datasets[0].data = [sumOfBuyPrices];
		totalBarChartConfig.data.datasets[1].data = [sumOfSellPrices];
	}

	
    // // Get references to the select all checkbox and other checkboxes
    // var selectAllCheckbox = document.getElementById('select_all_check');
    // var otherCheckboxes = document.querySelectorAll('.other-checkbox');

    // // Add event listener to the select all checkbox
    // selectAllCheckbox.addEventListener('change', function() {
    //     // Iterate through other checkboxes and set their checked property to match the select all checkbox
	// 	debugger;
    //     for (var i = 0; i < otherCheckboxes.length; i++) {
    //         otherCheckboxes[i].checked = selectAllCheckbox.checked;
    //     }
    // });

    // // Add event listeners to other checkboxes to uncheck the select all checkbox if any of them is unchecked
    // for (var i = 0; i < otherCheckboxes.length; i++) {
    //     otherCheckboxes[i].addEventListener('change', function() {
    //         // If any other checkbox is unchecked, uncheck the select all checkbox
    //         if (!this.checked) {
    //             selectAllCheckbox.checked = false;
    //         }
    //     });
    // }


});
	

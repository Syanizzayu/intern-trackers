// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Bar Chart Example
var ctx = document.getElementById("myBarChart");
var logStatusChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Approved Logs", "Pending Logs"],
        datasets: [{
            label: "Number of Logs",
            backgroundColor: ["#1cc88a", "#f6c23e"],
            hoverBackgroundColor: ["#17a673", "#dda20a"],
            borderColor: ["#1cc88a", "#f6c23e"],
            data: [12, 6]
        }]
    },
    
   options: {
        maintainAspectRatio: false,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    stepSize: 2,
                    callback: function(value) {
                        return value + " logs";
                    }
                },
                gridLines: {
                    color: "rgb(234, 236, 244)",
                    zeroLineColor: "rgb(234, 236, 244)",
                    drawBorder: false,
                    borderDash: [2],
                    zeroLineBorderDash: [2]
                }
            }],
            xAxes: [{
                gridLines: {
                    display: false,
                    drawBorder: false
                }
            }]
        },
        legend: {
            display: false
        },
        tooltips: {
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            borderColor: '#dddfeb',
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            callbacks: {
                label: function(tooltipItem) {
                    return "Logs: " + tooltipItem.yLabel;
                }
            }
        }
    }
    
});




    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/bootstrap.js"></script>
    <script src="/assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

<script>
        var ctx = document.getElementById('myChart').getContext("2d");

        var gradientStroke = ctx.createLinearGradient(500, 0, 100, 0);
        gradientStroke.addColorStop(0, '#00d8c0');
        gradientStroke.addColorStop(1, '#ff6a72');

        var gradientFill = ctx.createLinearGradient(500, 0, 100, 0);
        gradientFill.addColorStop(0, "rgba(0, 216, 192, 0.10)");
        gradientFill.addColorStop(1, "rgba(255, 106, 114, 0.10)");

        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL"],
                datasets: [{
                    label: "Data",
                    borderColor: gradientStroke,
                    pointBorderColor: gradientStroke,
                    pointBackgroundColor: gradientStroke,
                    pointHoverBackgroundColor: gradientStroke,
                    pointHoverBorderColor: gradientStroke,
                    pointBorderWidth: 2,
                    pointHoverRadius: 2,
                    pointHoverBorderWidth: 1,
                    pointRadius: 3,
                    fill: true,
                    backgroundColor: gradientFill,
                    borderWidth: 2,
                    data: [50, 150, 200, 270, 320, 470, 500]
                }]
            },
            options: {
                legend: {
                    position: "bottom"
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            fontColor: "grey",
                            fontStyle: "bold",
                            beginAtZero: true,
                            maxTicksLimit: 5,
                            padding: 20
                        },
                        gridLines: {
                            drawTicks: false,
                            display: false
                        }

                    }],
                    xAxes: [{
                        gridLines: {
                            zeroLineColor: "transparent"
                        },
                        ticks: {
                            padding: 20,
                            fontColor: "grey",
                            fontStyle: "bold"
                        }
                    }]
                }
            }
        });

        var pieData = {
            labels: ["RETURNS", "SALES", "DISCOUNTS"],
            datasets: [{
                data: [320, 500, 230],
                backgroundColor: ["#e53759", "#1676b7", "#d69d19"],
                hoverBackgroundColor: ["#ce2143", "#0c6099", "#bc8612"]
            }]
        };
        var options = {
            segmentShowStroke: false,
            animateScale: true,
            responsive: true,
            legend: {
                display: true,
                position: "bottom"
            },

        };
        var gas2 = document.getElementById("pie").getContext("2d");
        new Chart(gas2, {
            type: "pie",
            data: pieData,
            options: options
        });
    </script>


</body>

</html>
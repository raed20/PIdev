import Highcharts from 'highcharts/highstock'; // Import Highstock instead of Highcharts for stock charts
import 'highcharts/modules/stock'; // Import the Highstock module
import 'highcharts/modules/annotations'; // Import additional modules if needed
document.addEventListener('DOMContentLoaded', function () {
    const stockSymbol = document.getElementById('id').dataset.symbol;
    const stockDataEndpoint = '/getStockDataJson/' + stockSymbol;
    

    fetch(stockDataEndpoint)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            if (!Array.isArray(data)) {
                throw new Error('Invalid JSON data received');
            }
            renderStockChart(data);
        })
        .catch(error => console.error('Error fetching stock data:', error));
});
function renderStockChart(data) {
    Highcharts.chart('chartContainer', {
        title: {
            text: data[0].ticker
        },
        series: [{
            type: 'candlestick',
            color: '#3d30bb',
            risingColor: '#dee9f8',
            name: 'Stock Price',
            data: data.map(result => [new Date(result.t), result.o, result.h, result.l, result.c])
        }],
        xAxis: {
            type: 'datetime'
        },
        yAxis: {
            title: {
                text: 'Price'
            },
            labels: {
                formatter: function () {
                    return '$' + this.value;
                }
            }
        },
        tooltip: {
            xDateFormat: '%B %e, %Y',
            shared: true
        }
    });
}

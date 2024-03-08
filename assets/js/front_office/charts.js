document.addEventListener('DOMContentLoaded', function () {
    // Fetch stock data using AJAX
    fetch('{{ stockDataEndpoint }}')
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            // Process the retrieved data and render it using CanvasJS
            renderStockChart(data);
        })
        .catch(error => console.error('Error fetching stock data:', error));
});

function renderStockChart(data) {
    // Extract the results from the JSON response
    const results = data.results;

    // Initialize arrays to hold data points
    const labels = []; // X-axis labels
    const prices = []; // Y-axis prices

    // Iterate over each result to extract necessary data
    results.forEach(result => {
        // Extract the date and convert it to a readable format
        const date = new Date(result.t);
        const formattedDate = date.toLocaleDateString();

        // Add the formatted date to the labels array
        labels.push(formattedDate);

        // Add the closing price to the prices array
        prices.push(result.c);
    });

    // Get the chart container element
    const chartContainer = document.getElementById('chartContainer');

    // Create the chart using Chart.js
    const ctx = chartContainer.getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Closing Price',
                data: prices,
                borderColor: 'blue',
                backgroundColor: 'transparent',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                x: {
                    type: 'time',
                    time: {
                        unit: 'day'
                    }
                }
            }
        }
    });
}

function toggleDataSeries(e) {
    if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
        e.dataSeries.visible = false;
    } else {
        e.dataSeries.visible = true;
    }
    e.chart.render();
}

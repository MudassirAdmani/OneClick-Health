// Sample data for the first chart
var data1 = {
    labels: ["A", "B", "C", "D", "E"],
    datasets: [
        {
            label: "Dataset 1",
            data: [10, 20, 15, 25, 30],
            backgroundColor: "rgba(75, 192, 192, 0.2)",
            borderColor: "rgba(75, 192, 192, 1)",
            borderWidth: 1,
        },
    ],
};

// Chart configuration for the first chart
var options1 = {
    scales: {
        y: {
            beginAtZero: true,
        },
    },
};

// Get the first canvas element
var ctx1 = document.getElementById("myChart1").getContext("2d");

// Create the first chart
var myChart1 = new Chart(ctx1, {
    type: "bar",
    data: data1,
    options: options1,
});

// Sample data for the second chart
var data2 = {
    labels: ["X", "Y", "Z"],
    datasets: [
        {
            label: "Dataset 2",
            data: [40, 15, 30],
            backgroundColor: "rgba(255, 99, 132, 0.2)",
            borderColor: "rgba(255, 99, 132, 1)",
            borderWidth: 1,
        },
    ],
};

// Chart configuration for the second chart
var options2 = {
    scales: {
        y: {
            beginAtZero: true,
        },
    },
};

// Get the second canvas element
var ctx2 = document.getElementById("myChart2").getContext("2d");

// Create the second chart
var myChart2 = new Chart(ctx2, {
    type: "bar",
    data: data2,
    options: options2,
});

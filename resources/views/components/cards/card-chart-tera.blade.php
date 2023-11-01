<div class="card my-4 p-4">
  <div>
    <canvas id="myChart" width="400" height="400"></canvas>
  </div>
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    var ctx = document.getElementById('myChart').getContext('2d');

    var data = {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
      datasets: [{
        label: 'Data Set 1',
        data: [12, 19, 3, 5, 2],
        backgroundColor: 'rgba(75, 192, 192, 0.2)',
        borderColor: 'rgba(75, 192, 192, 1)',
        borderWidth: 1
      }]
    };

    var options = {
      maintainAspectRatio: false,
      scales: {
        y: {
          beginAtZero: true
        }
      }
    };

    var myChart = new Chart(ctx, {
      type: 'bar',
      data: data,
      options: options
    });
  });
  </script>

</div>
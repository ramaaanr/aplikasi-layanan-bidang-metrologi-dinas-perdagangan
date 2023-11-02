<div class="card my-4 p-4">
  <div>
    <canvas id="myChart" width="400" height="400"></canvas>
  </div>
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('myChart').getContext('2d');

    const labels = ['Januari',
      'Februari',
      'Maret',
      'April',
      'Mei',
      'Juni',
      'Juli',
      'Agustus',
      'September',
      'Oktober',
      'November',
      'Desember'
    ];
    const data = {
      labels: labels,
      datasets: [{
          label: 'Diajukan',
          data: [10, 20, 30, 12, 14, 15, 1, 17, 14, 15, 1, 17],
          backgroundColor: '#fde047',
        },
        {
          label: 'Dijadwalkan',
          data: [10, 20, 30, 12, 14, 15, 1, 17, 14, 15, 1, 17],
          backgroundColor: '#3b82f6',
        },
        {
          label: 'Selesai',
          data: [10, 20, 30, 12, 14, 15, 1, 17, 14, 15, 1, 17],
          backgroundColor: '#22c55e',
        },
        {
          label: 'Dibatalkan',
          data: [10, 20, 30, 12, 14, 15, 1, 17, 14, 15, 1, 17],
          backgroundColor: '#ef4444',
        },
      ]
    };
    const config = {
      type: 'bar',
      data: data,
      options: {
        maintainAspectRatio: false,
        responsive: true,
        plugins: {
          legend: {
            position: 'top',
          },
          title: {
            display: true,
            text: 'Pengajuan dan Pengujian Tera periode 2023'
          }
        }
      },
    };

    var myChart = new Chart(ctx, config);
  });
  </script>

</div>
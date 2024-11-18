@extends('admin.sidebar')

@section('content')
<canvas id="myChart"
 width="400" height="200"></canvas>

  <script> 

    const ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['Januari', 'Feburari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
        datasets: [{
          label: 'My First Dataset',
          data: [10000000, 15000000, 20000000, 20000000, 25000000, 35000000, 40000000, 45000000, 50000000, 45000000, 40000000, 50000000],
          backgroundColor: 'rgba(255, 99, 132, 0.2)',
          borderColor: 'rgba(255, 99, 132, 1)',
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>
@endsection
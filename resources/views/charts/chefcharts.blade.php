<div class="flex justify-center">
    <div style="width: 400px; height: 400px;" class="">
        <canvas id="Conultation"></canvas>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('Conultation').getContext('2d');
    var servicesChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Not Validated', 'Validated', 'Rejected'],
            datasets: [{
                data: [@json($notValidated) , @json($validated), @json($rejected)],
                backgroundColor: [
                    'rgb(255, 99, 132)', 'rgb(54, 162, 235)'
                ],
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Percentage of Consultations'
                }
            }
        }
    });


</script>

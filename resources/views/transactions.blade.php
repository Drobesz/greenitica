@include('header')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    $( document ).ready(function() {
        const labels = [@foreach ($transactions as $transaction) '{{$transaction->date}}',@endforeach];
        const data = {
            labels: labels,
            datasets: [{
                label: 'Carbon points',
                data: [@foreach ($transactions as $transaction) {{$transaction->amount}},@endforeach],
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.1
            }]
        };

        const ctx = document.getElementById('chartdiv');

        new Chart(ctx, {
            type: 'line',
            data: data,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

    });
</script>

<canvas id="chartdiv">


</canvas>

<table class="ui celled table">
    <thead>
    <tr>
        <th>Dátum</th>
        <th>Partner neve</th>
        <th>Összeg</th>
        <th>Karbon pontok</th>
    </tr>
    </thead>
    <tbody>
    @foreach($transactions as $transaction)
        <tr>
            <td>{{$transaction->date}}</td>
            <td>{{$transaction->partner->name}}</td>
            <td>{{$transaction->amount}}</td>
            <td>{{$transaction->carbon_token}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

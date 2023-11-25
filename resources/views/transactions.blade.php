@include('header')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    $( document ).ready(function() {
        const labels = [@foreach ($transactions as $transaction) '{{$transaction->date}}',@endforeach];
        const data = {
            labels: labels,
            datasets: [{
                label: 'Carbon points',
                data: [@foreach ($transactions as $transaction) {{$transaction->carbon_token}},@endforeach],
                fill: false,
                borderColor: '#2185D0',
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
                        beginAtZero: false
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
        <th>Date</th>
        <th>Merchant</th>
        <th>Spent Amount</th>
        <th>Gained Carbon Credits</th>
    </tr>
    </thead>
    <tbody>
    @foreach($transactions as $transaction)
        <tr>
            <td>{{$transaction->date}}</td>
            <td>{{$transaction->partner->name}}</td>
            <td>{{$transaction->amount}}</td>
            <td><b>{{$transaction->carbon_token}}</b></td>
        </tr>
    @endforeach
    </tbody>
</table>

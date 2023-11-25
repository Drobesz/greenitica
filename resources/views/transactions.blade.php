@include('header')
<table class="ui celled table">
    <thead>
    <tr><th>Dátum</th>
  <th>Partner neve</th>
   <th>Összeg</th>
   <th>Karbon pontok</th>
    </tr></thead>
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

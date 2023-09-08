<!-- resources/views/total-payment/index.blade.php -->
<h1>Total Payment</h1>
<table>
    <thead>
        <tr>
            <th>Project ID</th>
            <th>Total Tagihan</th>
            <th>Tanggal Tagihan</th>
            <th>Detail</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($totalPayments as $totalPayment)
        <tr>
            <td>{{ $totalPayment->project_id }}</td>
            <td>{{ $totalPayment->total_tagihan }}</td>
            <td>{{ $totalPayment->tanggal_tagihan }}</td>
            <td><a href="{{ route('total-payment.show', $totalPayment) }}">Detail</a></td>
        </tr>
        @endforeach
    </tbody>
</table>


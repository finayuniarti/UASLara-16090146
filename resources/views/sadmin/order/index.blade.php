@extends('sadmin.template')

@section('main')
  <div id="order">
    <h2>Notifikasi</h2>

    @include('_partial.flash_message')
    @include('sadmin.akun.cari_akun')

    @if(count($order_list) > 0)
      <table class="table">
        <thead>
          <tr>
            <th>Nama</th>
            <th>Order</th>
            <th>Tanggal</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
					@foreach ($order_list as $order)
					<tr>
						<td>{{ $order->nama }}</td>
						<td>{{ $order->item->nama_item }}</td>
						<td>{{ $order->created_at->format('d-m-Y H:i') }}</td>
						<td>
							<div class="box-button">
								{{ link_to('sadmin/order/' . $order -> id, 'Detail', ['class' => 'btn btn-success btn-sm']) }}
							</div>
							<div class="box-button">
								{!! Form::open(['method' => 'DELETE', 'action' => ['NotifController@destroy', $order->id]]) !!}
								{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
								{!! Form::close() !!}
							</div>
						</td>
					</tr>
					@endforeach
				</tbody>
      </table>
    @else
      <p> Tidak Ada Order</p>
    @endif

    <div class="table-nav" style="margin-bottom : 100px;">
      <div class="jumlah-data">
        <strong>Jumlah Order: {{ $jumlah_order }}</strong>
      </div>
      <div class="paging">
        {{ $order_list->links() }}
      </div>
    </div>

  </div>
@stop

@section('footer')
  @include('sadmin.footer')
@stop

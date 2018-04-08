@extends('layout.main')

@section('title', "Finance Dashboard")

@include('headers.table')

@section('main-content')
<div class="content">
	<div class="row">
		<div class="col-md-6">
				<div class="card card-chart">
						<div class="card-header">
								<h4 class="card-title">Debt Tracker</h4>
							</div>
							<div class="card card-chart">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>Supplier</th>
											<th>Total Balance</th>
											<th>Term Due</th>
										</tr>
									</thead>

									<tbody>
										<tr>
											<td><a href= '#'>Dhunwell</a></td>
											<td><a href= '#'>Php 500</a></td>
											<td><a href= '#'>{{Carbon\Carbon::now()->format('M d, Y')	}}</a></td>
										</tr>
									</tbody>
								</table>
						</div>
				</div>
			</div>

				<div class="col-md-6">
						<div class="card card-chart">
								<div class="card-header">
										<h4 class="card-title">Cashflow</h4>
									</div>
									<div class="card card-chart">
										<table class="table table-hover">
											<thead>
												<tr>
													<th>Date</th>
													<th>Source</th>
													<th>Amount</th>
													<th>Method</th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<td><a href= '#'>{{Carbon\Carbon::now()->format('M d, Y')	}}</a></td>
													<td><a href= '#'>Crisostomo Ibarra</a></td>
													<td><a href= '#'>Php 500</a></td>
													<td><a href= '#'>Inflow</a></td>
												</tr>

												<tr>
													<td><a href= '#'>{{Carbon\Carbon::now()->format('M d, Y')	}}</a></td>
													<td><a href= '#'>Dhunwell</a></td>
													<td><a href= '#'>Php 250</a></td>
													<td><a href= '#'>Outflow</a></td>
												</tr>
											</tbody>
										</table>
								</div>
						</div>
					</div>
			</div>
	</div>
@endsection

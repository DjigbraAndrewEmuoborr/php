@extends('layouts.manage')

@section('title', 'Manage Merchants')

@section('contents')

<div class="container">
    <div class="card card-statistics">
        <div class="card-header d-sm-flex justify-content-between align-items-center py-3">
            <div class="card-heading align-items-center mb-3 mb-sm-0">
                <h4 class="card-title">Manage Merchants</h4>
            </div>
            <div class="dropdown">
                <input type="text" class="form-control form-control-sm" placeholder="Search Table" />
            </div>
        </div>
        <div class="card-body scrollbar scroll_dark">
            <table id="datatable-buttons" class="table table-responsive">
                <thead>
                    <tr>
                        <th>ID No.</th>
                        <th>Shop Name</th>
                        <th>Shop Owner</th>
                        <th>Alt Phone 1</th>
                        <th>Alt Phone 2</th>
                        <th>Business Type</th>
                        <th>Business description</th>
                        <th>Subscription</th>
                        <th>Time Registered</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                @if (count($merchants) < 1) 
                <tbody class="text-muted text-center">
                    <tr class="text-center">
                        <td>You have no Investment Deposits Yet</td>
                    </tr>
                    </tbody>
                    @else
                    <tbody class="text-muted">
                        @foreach ($merchants as $merchant)

                        <tr>
                            <td>{{ $merchant->id }}</td>
                            <td>{{ $merchant->biz_name }}</td>
                            <td>{{ $merchant->muser->name }}</td>
                            <td>{{ $merchant->biz_name }}</td>
                            <td>{{ $merchant->biz_name }}</td>
                            <td>{{ $merchant->biz_type }}</td>
                            <td>{{ $merchant->biz_name }}</td>
                            <td>{{ $merchant->biz_name }}</td>
                            <td>{{ $merchant->created_at->isoFormat('LLLL') }}</td>
                            <td>
                                <label class="badge mb-0 {{ $merchant->isActive() ? 'badge-primary' : 'badge-danger' }}"> {{ $merchant->isActive() ? 'Available to Withdraw' : 'Not Matured yet' }}</label>
                            </td>
                            <td>
                                <div class="btn-group mb-1">
                                    <a href="javascript:void(0)" data-href="{{ route('admin.approve.merchants',['id'=>base64enc($merchant->id)]) }}" class="btn btn-badge badge-primary btn-withdraw m-1 {{ $merchant->isActive() ? '' : 'disabled' }}">Approve</a>
                                    <a href="" class="btn btn-badge badge-danger m-1">Ban</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
            </table>
        </div>
        {{ $merchants->links() }}
    </div>
</div>

@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js">
</script>

<script>
    $(document).ajaxStart(function() {
        $.LoadingOverlay("show");
    });
    $(document).ajaxStop(function() {
        $.LoadingOverlay("hide");
    });

</script>

@endpush

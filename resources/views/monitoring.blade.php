@extends('layouts.master')

@section('style')
    <link href="/assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Monitoring User</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List Users</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="10">#</th>
                            <th width="50">Status</th>
                            <th>Username</th>
                            <th>Profile</th>
                            <th>Address</th>
                            <th>Exp</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            @php
                                $activated = false;
                                $address = '';
                                $exp = $user['comment'] ?? '';

                                foreach ($actives as $active) {
                                    if ($active['name'] == $user['name']) {
                                        $activated = true;
                                        $address = $active['address'];
                                    }
                                }
                            @endphp

                            <tr>
                                <td class="text-center"><i class="fas fa-circle {{ $activated ? 'text-success' : 'text-danger' }}"></i></td>
                                <td>{{ $activated ? 'Up' : 'Down' }}</td>
                                <td>{{ $user['name'] }}</td>
                                <td>{{ $user['profile'] }}</td>
                                <td>{{ $address }}</td>
                                <td>{{ $exp }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="/assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
@endsection

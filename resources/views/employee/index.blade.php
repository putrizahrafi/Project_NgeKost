@extends('layouts.app1')

@section('content')
    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-6">
                <h4 class="mb-3">{{ $pageTitle }}</h4>
            </div>
            <div class="col-lg-3 col-xl-6">
                <ul class="list-inline mb-0 float-end">
                    <li class="list-inline-item">
                        <a href="{{ route('employees.exportExcel') }}" class="btn btn-outline-success">
                            <i class="bi bi-download me-1"></i> to Excl
                        </a>
                        <a href="{{ route('employees.exportPdf') }}" class="btn btn-outline-danger">
                            <i class="bi bi-download me-1"></i> to PDF
                        </a>
                    </li>
                    <li class="list-inline-item">
                {{-- <div class="d-grid gap-2"> --}}
                    <hr><a href="{{ route('employees.create') }}" class="btn btn-primary">
                        <i class='bx bx-user-plus' style='color:#ffffff' ></i>Isi data dirimu
                    </a>
                {{-- </div> --}}
                    </li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover table-striped mb-0 bg-white datatable" id="employeeTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>No.</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>Position</th>
                        <th></th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    @vite('resources/js/app.js')
@endsection
@push('scripts')
    <script type="module">
        $(document).ready(function() {
            $('#employeeTable').DataTable({
            serverSide: true,
                processing: true,
                ajax: "/getEmployees",
                columns: [
                    { data: "id", name: "id", visible: false },
                    { data: "DT_RowIndex", name: "DT_RowIndex", orderable: false, searchable: false },
                    { data: "firstname", name: "firstname" },
                    { data: "lastname", name: "lastname" },
                    { data: "email", name: "email" },
                    { data: "age", name: "age" },
                    { data: "position.name", name: "position.name" },
                    { data: "actions", name: "actions", orderable: false, searchable: false },
                ],
                order: [[0, "desc"]],
                lengthMenu: [
                    [10, 25, 50, 100, -1],
                    [10, 25, 50, 100, "All"],
                ],
            });
        });
    </script>
@endpush

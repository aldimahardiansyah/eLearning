@extends('admin.main')
@section('content')
    <div class="pagetitle">
        <h1>Student</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"></li>
                <li class="breadcrumb-item active">Student</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="card">
            <div class="card-body">
                <a href="/admin/student/create" class="btn btn-primary my-2">+ Student</a>
                <table class="table">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>NIM</th>
                        <th>Class</th>
                        <th>Major</th>
                        <th>Course</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($students as $student)
                        <tr>
                            <td>1</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->nim }}</td>
                            <td>{{ $student->class }}</td>
                            <td>{{ $student->major }}</td>
                            <td>{{ $student->course->name ?? 'Belum mengikuti course' }}</td>
                            <td>
                                <a href="#" class="btn btn-warning">Edit</a>
                                <a href="#" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </section>
@endsection

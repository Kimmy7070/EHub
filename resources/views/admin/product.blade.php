@extends('admin.layout')

@section('body')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Products</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Datatables</h5>
                        <p>Add lightweight datatables to your project with using the <a
                                href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple
                                DataTables</a> library. Just add <code>.datatable</code> class name to any table you
                            wish to conver to a datatable</p>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Query</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $contact)

                                <tr>
                                    <th scope="row">{{ $contact->id }}</th>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->query }}</td>
                                    <td>{{ $contact->created_at }}</td>
                                    <td><button type="button" class="btn btn-danger"><i class='bi bi-trash'></i></button></td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
    <a href="{{ url('/admin/add_product') }}"><button type="button" class="btn btn-success"><i class="bi bi-plus">Add Product</i></button></a>
</main><!-- End #main -->

@stop

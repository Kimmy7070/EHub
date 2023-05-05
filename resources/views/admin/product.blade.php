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
                        {{-- <p>Add lightweight datatables to your project with using the <a
                                href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple
                                DataTables</a> library. Just add <code>.datatable</code> class name to any table you
                            wish to conver to a datatable</p> --}}

                            <form action="">
                                <div class="form-group">
                                    <input type="search" class="col-5 p-1 mt-1" style="border-radius: 10px">
                                    <input type="submit" value="Search" class="btn btn-primary mr-3">
                                    <a href="{{ url('add_product') }}"><button type="button" class="btn btn-success"><i class="bi bi-plus">Add Product</i></button></a>

                                </div>

                            </form>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Query</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Product_data as $product)

                                <tr>
                                    <th scope="row">{{ $product->id }}</th>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->category }}</td>
                                    <td>{{ $product->mrp }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>{{ $product->img-1 }}</td>
                                    <td>{{ $product->img-2 }}</td>
                                    <td>{{ $product->img-3 }}</td>
                                    <td>{{ $product->desc }}</td>
                                    <td>{{ $product->short-desc }}</td>
                                    <td>{{ $product->meta-title }}</td>
                                    <td>{{ $product->meta-desc }}</td>
                                    <td>{{ $product->meta-keyword }}</td>
                                    <td>{{ $product->status }}</td>

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
</main><!-- End #main -->

@stop

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
                                    <input type="search" class="col-5 p-1 mt-1" style="border-radius: 10px" name="search">

                                    <button class="btn btn-primary" type="submit">Search</button>
                                    {{ $search }}
                                </div>

                            </form>
                            <br>
                            <a href="{{ url('add_product') }}"><button type="button" class="btn btn-success"><i
                                        class="bi bi-plus">Add Product</i></button></a>
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">category</th>
                                        <th scope="col">mrp</th>
                                        <th scope="col">price</th>
                                        <th scope="col">quantity</th>
                                        <th scope="col">img1</th>
                                        <th scope="col">img2</th>
                                        <th scope="col">img3</th>
                                        <th scope="col">status</th>
                                        <th scope="col">Edit</th>
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
                                            <td>
                                                @if ($product->quantity >= '1')
                                                    {{ $product->quantity }}
                                            </td>
                                        @else
                                            <button type="button" class="badge bg-warning">Out of Stock</button></td>
                                    @endif
                                    </td>
                                    <td><a href="{{ url('storage/' . $product->img1) }}"><img
                                                src="{{ url('storage/' . $product->img1) }}" width="30rem" height="auto"
                                                alt=""></a></td>
                                    <td><a href="{{ url('storage/' . $product->img2) }}"><img
                                                src="{{ url('storage/' . $product->img2) }}" width="30rem" height="auto"
                                                alt=""></a></td>
                                    <td><a href="{{ url('storage/' . $product->img3) }}"><img
                                                src="{{ url('storage/' . $product->img3) }}" width="30rem" height="auto"
                                                alt=""></a></td>
                                    <td>
                                        @if ($product->status == '1')
                                            <button type="button" class="btn btn-danger">Inactive</button>
                                    </td>
                                @elseif ($product->status == '0')
                                    <button type="button" class="btn btn-sucess">Active</button></td>
                                    @endif


                                    <td><button type="button" class="btn btn-success"><i
                                                class="bi bi-pencil-square"></i></button></td>
                                    <td>
                                        <form action="{{ url('/admin/product/delete', ['id' => $product->id]) }}">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-danger" name="delete"><i
                                                        class='bi bi-trash'></i></button>
                                            </div>

                                        </form>
                                    </td>
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

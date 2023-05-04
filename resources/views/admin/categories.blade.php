@extends('admin.layout')

@section('body')
<<<<<<< HEAD

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Products</h1>
=======
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Categories</h1>
>>>>>>> 06fbfd5eba602b36f92df19d8db7b4f3b49779c0
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Datatables</h5>
<<<<<<< HEAD
                        <p>Add lightweight datatables to your project with using the <a
                                href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple
                                DataTables</a> library. Just add <code>.datatable</code> class name to any table you
                            wish to conver to a datatable</p>

=======
                        {{-- <p>Add lightweight datatables to your project with using the <a
                                href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple
                                DataTables</a> library. Just add <code>.datatable</code> class name to any table you
                            wish to conver to a datatable</p> --}}
                            <form action="">
                                <div class="form-group">
                                    <input type="search" class="col-5 p-1 mt-1" style="border-radius: 10px">
                                    <input type="submit" value="Search" class="btn btn-primary mr-3">
                                    <a href="{{ url('/admin/add_categories') }}"><button type="button" class="btn btn-success"><i class="bi bi-plus">Add Categories</i></button></a>
                                </div>

                            </form>

                            <br>
                            <br>
>>>>>>> 06fbfd5eba602b36f92df19d8db7b4f3b49779c0
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
<<<<<<< HEAD
                                    <th scope="col">Category</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Edit</th>
=======
                                    <th scope="col">Name</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Time</th>
>>>>>>> 06fbfd5eba602b36f92df19d8db7b4f3b49779c0
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
<<<<<<< HEAD
                                {{-- @foreach ($cat_data as $categories) --}}

                                <tr>
                                    <th scope="row">{{ $categories->id }}</th>
                                    <td>{{ $categories->category }}</td>
                                    <td><span class="badge badge-pill badge-danger">Status</span></td>
                                    <td><button type="button" class="btn btn-danger"><i class='bi bi-trash'></i></button></td>
                                    <td><button type="button" class="btn btn-danger"><i class='bi bi-trash'></i></button></td>
                                </tr>
                                {{-- @endforeach --}}

=======
                                @foreach ($data as $cat)

                                <tr>
                                    <th scope="row">{{ $cat->id }}</th>
                                    <td>{{ $cat->cat_name }}</td>
                                    <td>{{ $cat->cat_status }}</td>
                                    <td>{{ $cat->created_at }}</td>
                                    <td><button type="button" class="btn btn-danger"><i class='bi bi-trash'></i></button></td>
                                </tr>
                                @endforeach
                                {{-- <tr>
                                    <th scope="row">2</th>
                                    <td>Bridie Kessler</td>
                                    <td>Developer</td>
                                    <td>35</td>
                                    <td>2014-12-05</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Ashleigh Langosh</td>
                                    <td>Finance</td>
                                    <td>45</td>
                                    <td>2011-08-12</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Angus Grady</td>
                                    <td>HR</td>
                                    <td>34</td>
                                    <td>2012-06-11</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Raheem Lehner</td>
                                    <td>Dynamic Division Officer</td>
                                    <td>47</td>
                                    <td>2011-04-19</td>
                                </tr> --}}
>>>>>>> 06fbfd5eba602b36f92df19d8db7b4f3b49779c0
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
<<<<<<< HEAD
    <a href="{{ url('/admin/add_product') }}"><button type="button" class="btn btn-success"><i class="bi bi-plus">Add Product</i></button></a>
</main><!-- End #main -->

=======
</main><!-- End #main -->
>>>>>>> 06fbfd5eba602b36f92df19d8db7b4f3b49779c0
@stop

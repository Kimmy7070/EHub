@extends('admin.layout')

@section('body')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Orders</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin.blade.php">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Data</li>
            </ol>
        </nav>
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
                                    <input type="submit" value="Search" class="btn btn-primary mr-3">                                </div>

                            </form>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Zip code</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Pay method</th>
                                    <th scope="col">User_id</th>
                                    <th scope="col">Product_name</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $order)

                                <tr>
                                    <th scope="row">{{ $order->id }}</th>
                                    <td>{{ $order->fname." ".$order->lname }}</td>
                                    <td>{{ $order->address }}</td>
                                    <td>{{ $order->zip }}</td>
                                    <td>{{ $order->city }}</td>
                                    <td>{{ $order->phone }}</td>
                                    <td>{{ $order->email }}</td>
                                    <td>{{ $order->pm }}</td>
                                    <td>{{ $order->user_id }}</td>
                                    <td>{{ $order->name }}</td>
                                    <td>{{ $order->total }}</td>
                                    <td>{{ $order->status }}</td>
                                    <td>
                                        <form action="{{ url('/admin/contact/delete', ['id' => $order->id]) }}">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-danger" name="delete"><i
                                                        class='bi bi-trash'></i></button>
                                            </div>

                                        </form>
                                    </td>
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

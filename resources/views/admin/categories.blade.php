@extends('admin.layout')

@section('body')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Categories</h1>
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
                                    <input type="search" name="search" class="col-5 p-1 mt-1" style="border-radius: 10px" value="{{$search}}">
                                    <button class="btn btn-primary" type="submit">Search</button>
                                    {{ $search }}
                                </div>

                            </form>
                            <br>
                            <a href="{{ url('/admin/add_categories/form') }}"><button type="button"
                                    class="btn btn-success"><i class="bi bi-plus">Add Categories</i></button></a>
                            <br>
                            <br>
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $cat)
                                        <tr>
                                            <th scope="row">{{ $cat->id }}</th>
                                            <td>{{ $cat->cat_name }}</td>
                                            <td>{{ $cat->cat_status }}</td>
                                            <td>{{ $cat->created_at }}</td>
                                            <td><button type="button" class="btn btn-danger"><i
                                                        class='bi bi-trash'></i></button></td>
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

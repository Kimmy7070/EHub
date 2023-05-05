@extends('admin.layout')

@section('body')



    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Add Products</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin.blade.php">Home</a></li>
                    <li class="breadcrumb-item">Forms</li>
                    <li class="breadcrumb-item active">Elements</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-6">

                    <div class="card" style="width: 200%">
                        <div class="card-body" style="width: 100%">
                            <h5 class="card-title">General Form Elements</h5>

                            <!-- Add product form -->
                            <form action="{{url('/admin/add_product/add')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Category</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="category" id="cars">
                                            @foreach ( $data as $category )
                                            <option class="form-control" value="{{$category->cat_name}}">{{$category->cat_name}}</option>

                                            @endforeach


                                          </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">MRP</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="mrp">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Price</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="price">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Quantity</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="quantity">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Image 1</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file" id="img1" name="img1">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Image 2</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file" id="formFile" name="img2">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Image 3</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file" id="formFile" name="img3">
                                    </div>
                                </div>

                                {{-- <div class="row mb-3">
                                    <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputTime" class="col-sm-2 col-form-label">Time</label>
                                    <div class="col-sm-10">
                                        <input type="time" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputColor" class="col-sm-2 col-form-label">Color Picker</label>
                                    <div class="col-sm-10">
                                        <input type="color" class="form-control form-control-color" id="exampleColorInput"
                                            value="#4154f1" title="Choose your color">
                                    </div>
                                </div> --}}

                                <div class="row mb-3">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" style="height: 100px" name="desc"></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Short Description</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" style="height: 100px" name="short_desc"></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Meta Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="meta_title">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Meta Description" class="col-sm-2 col-form-label">Meta Description</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" style="height: 100px" name="meta_desc"></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Meta Keyword</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="meta_keyword">
                                    </div>
                                </div>


                                {{-- <fieldset class="row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                id="gridRadios1" value="option1" checked>
                                            <label class="form-check-label" for="gridRadios1">
                                                First radio
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                id="gridRadios2" value="option2">
                                            <label class="form-check-label" for="gridRadios2">
                                                Second radio
                                            </label>
                                        </div>
                                        <div class="form-check disabled">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios"
                                                value="option" disabled>
                                            <label class="form-check-label" for="gridRadios3">
                                                Third disabled radio
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0">Checkboxes</legend>
                                    <div class="col-sm-10">

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                                            <label class="form-check-label" for="gridCheck1">
                                                Example checkbox
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck2" checked>
                                            <label class="form-check-label" for="gridCheck2">
                                                Example checkbox 2
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Disabled</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="Read only / Disabled" disabled>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Select</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Multi Select</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" multiple aria-label="multiple select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div> --}}

                                <div class="row mb-3">
                                    <a href=""><button type="submit" name="submit" class="btn btn-success"><i class="bi bi-plus">Add Product</i></button></a>
                                </div>

                            </form><!-- End General Form Elements -->

                        </div>
                    </div>

                </div>

            </div>
            </div>
        </section>

    </main><!-- End #main -->

@stop

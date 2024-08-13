@extends('admin.master')

@section('title')
    Supplier
@endsection

@section('body')
    <!--app-content open-->
    <div class="app-content main-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">


                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Supplier</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Manage Supplier</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- Row -->
                <!-- End Row -->


                <!-- ROW-1 OPEN -->
                <div class="row" id="user-profile">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="card-header border-bottom">
                                            <span>
                                                <h3 class="card-title">All Supplier</h3>
                                            </span>
                                            <a href="{{ route('supplier.create') }}"
                                                class="btn btn-primary ms-auto d-block">Add Supplier</a>
                                        </div>
                                        <p class="text-center text-success">{{session('message')}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="wideget-user-tab">
                                    <div class="tab-menu-heading">
                                        <div class="tabs-menu1">
                                            <ul class="nav">
                                                <li><a href="#supplier" class="active show" data-bs-toggle="tab">Supplier</a></li>
                                                <li><a href="#vendor" data-bs-toggle="tab">Vendor</a></li>
                                                <li><a href="#both" data-bs-toggle="tab">Both</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane active show" id="supplier">

                                <div class="row row-sm">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header border-bottom">
                                                <h3 class="card-title">Supplier</h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered text-nowrap border-bottom " >
                                                        <thead>
                                                            <tr class="text-center">
                                                                {{-- <th class="wd-15p border-bottom-0">Sl</th> --}}
                                                                <th class="wd-15p border-bottom-0">Name</th>
                                                                <th class="wd-15p border-bottom-0">Phone</th>
                                                                <th class="wd-20p border-bottom-0">Email</th>
                                                                <th class="wd-15p border-bottom-0">Company Name</th>
                                                                <th class="wd-10p border-bottom-0">Adderss</th>
                                                                <th class="wd-25p border-bottom-0">Bank Account No</th>
                                                                <th class="wd-25p border-bottom-0">Image</th>
                                                                <th class="wd-25p border-bottom-0">Details</th>
                                                                <th class="wd-25p border-bottom-0">Status</th>
                                                                <th class="wd-25p border-bottom-0">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            @foreach ($supplier as $suppliers)
                                                                @if ($suppliers->supplier_type == 0)
                                                                    <tr class="text-center">
                                                                        {{-- <td>{{ $loop->iteration }}</td> --}}
                                                                        <td>{{ $suppliers->name }}</td>
                                                                        <td>{{ $suppliers->phone }}</td>
                                                                        <td>{{ $suppliers->email }}</td>
                                                                        <td>{{ $suppliers->company_name }}</td>
                                                                        <td>{{ $suppliers->address }}</td>
                                                                        <td>{{ $suppliers->bank_account }}</td>
                                                                        <td>
                                                                            <img src="{{ asset($suppliers->person_image) }}"
                                                                                alt="" height="50" width="50">
                                                                        </td>
                                                                        <td>
                                                                            <a href="" class="btn btn-info">Details</a>
                                                                        </td>
                                                                        <td>{{ $suppliers->status == 1 ? 'Published' : 'Unpublished' }}
                                                                        </td>
                                                                        <td class="justify-content-center">
                                                                            <a href="{{ route('supplier.edit', $suppliers->id) }}"
                                                                                class="btn btn-primary btn-sm me-2 float-start">
                                                                                <i class="fa fa-edit"></i>
                                                                            </a>

                                                                            @if ($suppliers->status == 1)
                                                                                <a href="{{ route('supplier.show', $suppliers->id) }}"
                                                                                    class="btn btn-warning btn-sm me-2 float-start">
                                                                                    <i class="fa fa-eye-slash"></i>
                                                                                </a>
                                                                            @else
                                                                                <a href="{{ route('supplier.show', $suppliers->id) }}"
                                                                                    class="btn btn-success btn-sm me-2 float-start">
                                                                                    <i class="fa fa-eye"></i>
                                                                                </a>
                                                                            @endif

                                                                            <form
                                                                                action="{{ route('supplier.destroy', $suppliers->id) }}"
                                                                                method="post">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button type="submit"
                                                                                    class="btn btn-danger btn-sm"
                                                                                    onclick="return confirm('Are you sure delete this!!')">
                                                                                    <i class="fa fa-trash"></i>
                                                                                </button>
                                                                            </form>
                                                                        </td>
                                                                    </tr>
                                                                @endif
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="tab-pane" id="vendor">

                                <div class="row row-sm">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header border-bottom">
                                                <h3 class="card-title">Vendor</h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table id="example3" class="table table-bordered text-nowrap border-bottom">
                                                        <thead>
                                                            <tr class="text-center">
                                                                {{-- <th class="wd-15p border-bottom-0">Sl</th> --}}
                                                                <th class="wd-15p border-bottom-0">Name</th>
                                                                <th class="wd-15p border-bottom-0">Phone</th>
                                                                <th class="wd-20p border-bottom-0">Email</th>
                                                                <th class="wd-15p border-bottom-0">Company Name</th>
                                                                <th class="wd-10p border-bottom-0">Adderss</th>
                                                                <th class="wd-25p border-bottom-0">Bank Account No</th>
                                                                <th class="wd-25p border-bottom-0">Image</th>
                                                                <th class="wd-25p border-bottom-0">Details</th>
                                                                <th class="wd-25p border-bottom-0">Status</th>
                                                                <th class="wd-25p border-bottom-0">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($supplier as $suppliers)
                                                                @if ($suppliers->supplier_type == 1)
                                                                    <tr class="text-center">
                                                                        {{-- <td>{{ $loop->iteration }}</td> --}}
                                                                        <td>{{ $suppliers->name }}</td>
                                                                        <td>{{ $suppliers->phone }}</td>
                                                                        <td>{{ $suppliers->email }}</td>
                                                                        <td>{{ $suppliers->company_name }}</td>
                                                                        <td>{{ $suppliers->address }}</td>
                                                                        <td>{{ $suppliers->bank_account }}</td>
                                                                        <td>
                                                                            <img src="{{ asset($suppliers->person_image) }}"
                                                                                alt="" height="50" width="50">
                                                                        </td>
                                                                        <td>
                                                                            <a href="" class="btn btn-info">Details</a>
                                                                        </td>
                                                                        <td>{{ $suppliers->status == 1 ? 'Published' : 'Unpublished' }}
                                                                        </td>
                                                                        <td class="justify-content-center">
                                                                            <a href="{{ route('supplier.edit', $suppliers->id) }}"
                                                                                class="btn btn-primary btn-sm me-2 float-start">
                                                                                <i class="fa fa-edit"></i>
                                                                            </a>

                                                                            @if ($suppliers->status == 1)
                                                                                <a href="{{ route('supplier.show', $suppliers->id) }}"
                                                                                    class="btn btn-warning btn-sm me-2 float-start">
                                                                                    <i class="fa fa-eye-slash"></i>
                                                                                </a>
                                                                            @else
                                                                                <a href="{{ route('supplier.show', $suppliers->id) }}"
                                                                                    class="btn btn-success btn-sm me-2 float-start">
                                                                                    <i class="fa fa-eye"></i>
                                                                                </a>
                                                                            @endif

                                                                            <form
                                                                                action="{{ route('supplier.destroy', $suppliers->id) }}"
                                                                                method="post">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button type="submit"
                                                                                    class="btn btn-danger btn-sm"
                                                                                    onclick="return confirm('Are you sure delete this!!')">
                                                                                    <i class="fa fa-trash"></i>
                                                                                </button>
                                                                            </form>
                                                                        </td>
                                                                    </tr>
                                                                @endif
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane" id="both">

                                <div class="row row-sm">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header border-bottom">
                                                <h3 class="card-title">Both</h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive deleted-table">
                                                    <table id="delete-datatable" class="table table-bordered text-nowrap border-bottom">
                                                        <thead>
                                                            <tr class="text-center">
                                                                {{-- <th class="wd-15p border-bottom-0">Sl</th> --}}
                                                                <th class="wd-15p border-bottom-0">Name</th>
                                                                <th class="wd-15p border-bottom-0">Phone</th>
                                                                <th class="wd-20p border-bottom-0">Email</th>
                                                                <th class="wd-15p border-bottom-0">Company Name</th>
                                                                <th class="wd-10p border-bottom-0">Adderss</th>
                                                                <th class="wd-25p border-bottom-0">Bank Account No</th>
                                                                <th class="wd-25p border-bottom-0">Image</th>
                                                                <th class="wd-25p border-bottom-0">Details</th>
                                                                <th class="wd-25p border-bottom-0">Status</th>
                                                                <th class="wd-25p border-bottom-0">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            @foreach ($supplier as $suppliers)
                                                                @if ($suppliers->supplier_type == 2)
                                                                    <tr class="text-center">
                                                                        {{-- <td>{{ $loop->iteration }}</td> --}}
                                                                        <td>{{ $suppliers->name }}</td>
                                                                        <td>{{ $suppliers->phone }}</td>
                                                                        <td>{{ $suppliers->email }}</td>
                                                                        <td>{{ $suppliers->company_name }}</td>
                                                                        <td>{{ $suppliers->address }}</td>
                                                                        <td>{{ $suppliers->bank_account }}</td>
                                                                        <td>
                                                                            <img src="{{ asset($suppliers->person_image) }}"
                                                                                alt="" height="50" width="50">
                                                                        </td>
                                                                        <td>
                                                                            <a href="" class="btn btn-info">Details</a>
                                                                        </td>
                                                                        <td>{{ $suppliers->status == 1 ? 'Published' : 'Unpublished' }}
                                                                        </td>
                                                                        <td class="justify-content-center">
                                                                            <a href="{{ route('supplier.edit', $suppliers->id) }}"
                                                                                class="btn btn-primary btn-sm me-2 float-start">
                                                                                <i class="fa fa-edit"></i>
                                                                            </a>

                                                                            @if ($suppliers->status == 1)
                                                                                <a href="{{ route('supplier.show', $suppliers->id) }}"
                                                                                    class="btn btn-warning btn-sm me-2 float-start">
                                                                                    <i class="fa fa-eye-slash"></i>
                                                                                </a>
                                                                            @else
                                                                                <a href="{{ route('supplier.show', $suppliers->id) }}"
                                                                                    class="btn btn-success btn-sm me-2 float-start">
                                                                                    <i class="fa fa-eye"></i>
                                                                                </a>
                                                                            @endif

                                                                            <form
                                                                                action="{{ route('supplier.destroy', $suppliers->id) }}"
                                                                                method="post">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button type="submit"
                                                                                    class="btn btn-danger btn-sm"
                                                                                    onclick="return confirm('Are you sure delete this!!')">
                                                                                    <i class="fa fa-trash"></i>
                                                                                </button>
                                                                            </form>
                                                                        </td>
                                                                    </tr>
                                                                @endif
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <!-- COL-END -->
                </div>
            </div>
            <!-- ROW-1 CLOSED -->





        </div>
    </div>
    </div>
    <!-- CONTAINER CLOSED -->
@endsection

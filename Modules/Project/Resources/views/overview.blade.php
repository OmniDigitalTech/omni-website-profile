@extends('management::layouts.master')
@section('title')
    Overview
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card mt-n4 mx-n4">
                <div class="bg-warning-subtle">
                    <div class="card-body pb-0 px-4">
                        <div class="row mb-3">
                            <div class="col-md">
                                <div class="row align-items-center g-3">
                                    <div class="col-md-auto">
                                        <div class="avatar-md">
                                            <div class="avatar-title bg-white rounded-circle">
                                                <img src="{{ URL::asset('build/images/brands/slack.png') }}" alt="" class="avatar-xs">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div>
                                            <h4 class="fw-bold">{{ ucwords($project->title) }}</h4>
                                            <div class="hstack gap-3 flex-wrap">
                                                <div><i class="ri-building-line align-bottom me-1"></i> Omni Digital Technology</div>
                                                <div class="vr"></div>
                                                <div>Create Date : <span class="fw-medium">{{ $project->created_at }}</span></div>
                                                <div class="vr"></div>
                                                <div>Due Date : <span class="fw-medium">{{ $project->deadline }}</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <ul class="nav nav-tabs-custom border-bottom-0" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active fw-semibold" data-bs-toggle="tab" href="#project-overview"
                                   role="tab">
                                    Overview
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#project-documents" role="tab">
                                    Documents
                                </a>
                            </li>
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#project-activities" role="tab">--}}
{{--                                    Activities--}}
{{--                                </a>--}}
{{--                            </li>--}}
                        </ul>
                    </div>
                    <!-- end card body -->
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="tab-content text-muted">
                <div class="tab-pane fade show active" id="project-overview" role="tabpanel">
                    <div class="row">
                        <div class="col-xl-9 col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-muted">
                                        <h6 class="mb-3 fw-semibold text-uppercase">Summary</h6>
                                        {!! $project->description !!}

                                        <div class="pt-3 border-top border-top-dashed mt-4">
                                            <div class="row">

                                                <div class="col-lg-3 col-sm-6">
                                                    <div>
                                                        <p class="mb-2 text-uppercase fw-medium">Create Date :</p>
                                                        <h5 class="fs-15 mb-0">{{ $project->created_at }}</h5>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div>
                                                        <p class="mb-2 text-uppercase fw-medium">Due Date :</p>
                                                        <h5 class="fs-15 mb-0">{{ $project->deadline }}</h5>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div>
                                                        <p class="mb-2 text-uppercase fw-medium">Price :</p>
                                                        <h5 class="fs-15 mb-0">{{ $project->price }}</h5>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div>
                                                        <p class="mb-2 text-uppercase fw-medium">Status :</p>
                                                        @if($project->status == 'Inprogress')
                                                            <div class="badge bg-warning fs-12">{{ $project->status }}</div>
                                                        @else
                                                            <div class="badge bg-success fs-12">{{ $project->status }}</div>
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->

                            <div class="card text-muted">
                                <div class="card-header">
                                    <div class="row justify-content-between">
                                        <div class="col-6">
                                            <h5 class="fw-semibold text-uppercase align-middle">Payment History</h5>
                                        </div>
                                        <div class="col-6">
                                            <a href="{{ route('management.project.invoice.create', $project) }}" class="btn btn-sm btn-success float-end"><i class="ri-add-line align-bottom me-1"></i>Add Invoice</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive table-card">
                                        <table class="table table-nowrap table-striped-columns mb-0">
                                            <thead class="table-light">
                                            <tr>
                                                <th scope="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="cardtableCheck">
                                                        <label class="form-check-label" for="cardtableCheck"></label>
                                                    </div>
                                                </th>
                                                <th scope="col">Code</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Total</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($project->invoices as $invoice)
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="cardtableCheck{{ $invoice->id }}">
                                                            <label class="form-check-label" for="cardtableCheck{{ $invoice->id }}"></label>
                                                        </div>
                                                    </td>
                                                    <td><a href="#" class="fw-semibold">{{ $invoice->code }}</a></td>
                                                    <td>{{ $invoice->created_at }}</td>
                                                    <td>{{ $invoice->TotalAmount }}</td>
                                                    <td><span class="badge bg-success">{{ $invoice->status }}</span></td>
                                                    <td>
                                                        <button type="button" class="btn btn-sm btn-light">Details</button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- ene col -->
                        <div class="col-xl-3 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4>{{ ucwords(@$project->client->name) }}</h4>
                                    <div class="row">
                                        <div class="col-5">
                                            <span>Contact</span> <br>
                                            <span>{{ @$project->client->phone }}</span>
                                        </div>
                                        <div class="col-7">
                                            <span>Email</span> <br>
                                            <span>{{ @$project->client->email }}</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0"><i class="mdi mdi-currency-usd"></i> Payment</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive table-card">
                                        <table class="table mb-0">
                                            <tbody>
                                            @foreach($project->payments as $payment)
                                                <tr>
                                                    <td class="fw-medium">
                                                        {{ ucwords(strtolower($payment->type)) }} <br>
                                                        {{ $payment->created_at }}
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        {{ $payment->value }}
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        @if($payment->status == \App\Models\Payment::PAID)
                                                            <div class="badge bg-success-subtle text-success fs-12">{{ $payment->status }}</div>
                                                        @else
                                                            <div class="badge bg-warning-subtle text-warning fs-12">{{ $payment->status }}</div>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        <!--end table-->
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0"><i class="mdi mdi-bell"></i> Subscription</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive table-card">
                                        <table class="table mb-0">
                                            <tbody>
                                                @foreach($project->subscriptions as $subscription)
                                                    <tr>
                                                        <td class="fw-medium">
                                                            {{ $subscription->name }} <br>
                                                            {{ $subscription->billing_date }}
                                                        </td>
                                                        <td class="align-middle text-center">
                                                            <div class="badge bg-success-subtle text-success fs-12">Active</div>
                                                        </td>
                                                        <td class="align-middle text-center">
                                                            <a href="" class="btn btn-sm btn-danger"><i class="mdi mdi-trash-can"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <!--end table-->
                                    </div>
                                    <div class="mt-4 pt-2 hstack gap-2">
                                        <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal"
                                                data-bs-target="#addSubscriptionModal"><i class="ri-add-line me-1 align-bottom"></i>
                                            Add Subscription</button>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end tab pane -->
                <div class="tab-pane fade" id="project-documents" role="tabpanel">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <h5 class="card-title flex-grow-1">Documents</h5>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive table-card">
                                        <table class="table table-borderless align-middle mb-0">
                                            <thead class="table-light">
                                            <tr>
                                                <th scope="col">File Name</th>
                                                <th scope="col">Type</th>
                                                <th scope="col">Size</th>
                                                <th scope="col">Upload Date</th>
                                                <th scope="col" style="width: 120px;">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm">
                                                            <div
                                                                class="avatar-title bg-light text-secondary rounded fs-24 shadow">
                                                                <i class="ri-folder-zip-line"></i>
                                                            </div>
                                                        </div>
                                                        <div class="ms-3 flex-grow-1">
                                                            <h5 class="fs-14 mb-0"><a href="javascript:void(0)"
                                                                                      class="text-body">Artboard-documents.zip</a>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Zip File</td>
                                                <td>4.57 MB</td>
                                                <td>12 Dec 2021</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0);"
                                                           class="btn btn-soft-secondary btn-sm btn-icon shadow-none"
                                                           data-bs-toggle="dropdown" aria-expanded="true">
                                                            <i class="ri-more-fill"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="ri-eye-fill me-2 align-bottom text-muted"></i>View</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="ri-download-2-fill me-2 align-bottom text-muted"></i>Download</a>
                                                            </li>
                                                            <li class="dropdown-divider"></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="ri-delete-bin-5-fill me-2 align-bottom text-muted"></i>Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm">
                                                            <div
                                                                class="avatar-title bg-light text-danger rounded fs-24 shadow">
                                                                <i class="ri-file-pdf-fill"></i>
                                                            </div>
                                                        </div>
                                                        <div class="ms-3 flex-grow-1">
                                                            <h5 class="fs-14 mb-0"><a href="javascript:void(0);"
                                                                                      class="text-body">Bank Management System</a>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>PDF File</td>
                                                <td>8.89 MB</td>
                                                <td>24 Nov 2021</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0);"
                                                           class="btn btn-soft-secondary btn-sm btn-icon shadow-none"
                                                           data-bs-toggle="dropdown" aria-expanded="true">
                                                            <i class="ri-more-fill"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="ri-eye-fill me-2 align-bottom text-muted"></i>View</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="ri-download-2-fill me-2 align-bottom text-muted"></i>Download</a>
                                                            </li>
                                                            <li class="dropdown-divider"></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="ri-delete-bin-5-fill me-2 align-bottom text-muted"></i>Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm">
                                                            <div
                                                                class="avatar-title bg-light text-secondary rounded fs-24 shadow">
                                                                <i class="ri-video-line"></i>
                                                            </div>
                                                        </div>
                                                        <div class="ms-3 flex-grow-1">
                                                            <h5 class="fs-14 mb-0"><a href="javascript:void(0);"
                                                                                      class="text-body">Tour-video.mp4</a></h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>MP4 File</td>
                                                <td>14.62 MB</td>
                                                <td>19 Nov 2021</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0);"
                                                           class="btn btn-soft-secondary btn-sm btn-icon shadow-none"
                                                           data-bs-toggle="dropdown" aria-expanded="true">
                                                            <i class="ri-more-fill"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="ri-eye-fill me-2 align-bottom text-muted"></i>View</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="ri-download-2-fill me-2 align-bottom text-muted"></i>Download</a>
                                                            </li>
                                                            <li class="dropdown-divider"></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="ri-delete-bin-5-fill me-2 align-bottom text-muted"></i>Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm">
                                                            <div
                                                                class="avatar-title bg-light text-success rounded fs-24 shadow">
                                                                <i class="ri-file-excel-fill"></i>
                                                            </div>
                                                        </div>
                                                        <div class="ms-3 flex-grow-1">
                                                            <h5 class="fs-14 mb-0"><a href="javascript:void(0);"
                                                                                      class="text-body">Account-statement.xsl</a>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>XSL File</td>
                                                <td>2.38 KB</td>
                                                <td>14 Nov 2021</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0);"
                                                           class="btn btn-soft-secondary btn-sm btn-icon shadow-none"
                                                           data-bs-toggle="dropdown" aria-expanded="true">
                                                            <i class="ri-more-fill"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="ri-eye-fill me-2 align-bottom text-muted"></i>View</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="ri-download-2-fill me-2 align-bottom text-muted"></i>Download</a>
                                                            </li>
                                                            <li class="dropdown-divider"></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="ri-delete-bin-5-fill me-2 align-bottom text-muted"></i>Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm">
                                                            <div
                                                                class="avatar-title bg-light text-warning rounded fs-24 shadow">
                                                                <i class="ri-folder-fill"></i>
                                                            </div>
                                                        </div>
                                                        <div class="ms-3 flex-grow-1">
                                                            <h5 class="fs-14 mb-0"><a href="javascript:void(0);"
                                                                                      class="text-body">Project Screenshots
                                                                    Collection</a></h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Floder File</td>
                                                <td>87.24 MB</td>
                                                <td>08 Nov 2021</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0);"
                                                           class="btn btn-soft-secondary btn-sm btn-icon shadow-none"
                                                           data-bs-toggle="dropdown" aria-expanded="true">
                                                            <i class="ri-more-fill"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="ri-eye-fill me-2 align-bottom text-muted"></i>View</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="ri-download-2-fill me-2 align-bottom text-muted"></i>Download</a>
                                                            </li>
                                                            <li class="dropdown-divider"></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="ri-delete-bin-5-fill me-2 align-bottom text-muted"></i>Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm">
                                                            <div
                                                                class="avatar-title bg-light text-danger rounded fs-24 shadow">
                                                                <i class="ri-image-2-fill"></i>
                                                            </div>
                                                        </div>
                                                        <div class="ms-3 flex-grow-1">
                                                            <h5 class="fs-14 mb-0"><a href="javascript:void(0);"
                                                                                      class="text-body">Velzon-logo.png</a></h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>PNG File</td>
                                                <td>879 KB</td>
                                                <td>02 Nov 2021</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0);"
                                                           class="btn btn-soft-secondary btn-sm btn-icon shadow-none"
                                                           data-bs-toggle="dropdown" aria-expanded="true">
                                                            <i class="ri-more-fill"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="ri-eye-fill me-2 align-bottom text-muted"></i>View</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="ri-download-2-fill me-2 align-bottom text-muted"></i>Download</a>
                                                            </li>
                                                            <li class="dropdown-divider"></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                                        class="ri-delete-bin-5-fill me-2 align-bottom text-muted"></i>Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="text-center mt-3">
                                        <a href="javascript:void(0);" class="text-success "><i
                                                class="mdi mdi-loading mdi-spin fs-20 align-middle me-2"></i> Load more
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end tab pane -->
{{--                <div class="tab-pane fade" id="project-activities" role="tabpanel">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <h5 class="card-title">Activities</h5>--}}
{{--                            <div class="acitivity-timeline py-3">--}}
{{--                                <div class="acitivity-item d-flex">--}}
{{--                                    <div class="flex-shrink-0">--}}
{{--                                        <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" alt=""--}}
{{--                                             class="avatar-xs rounded-circle acitivity-avatar shadow" />--}}
{{--                                    </div>--}}
{{--                                    <div class="flex-grow-1 ms-3">--}}
{{--                                        <h6 class="mb-1">Oliver Phillips <span--}}
{{--                                                class="badge bg-primary-subtle text-primary align-middle">New</span></h6>--}}
{{--                                        <p class="text-muted mb-2">We talked about a project on linkedin.</p>--}}
{{--                                        <small class="mb-0 text-muted">Today</small>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="acitivity-item py-3 d-flex">--}}
{{--                                    <div class="flex-shrink-0 avatar-xs acitivity-avatar">--}}
{{--                                        <div class="avatar-title bg-success-subtle text-success rounded-circle shadow">--}}
{{--                                            N--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="flex-grow-1 ms-3">--}}
{{--                                        <h6 class="mb-1">Nancy Martino <span--}}
{{--                                                class="badge bg-secondary-subtle text-secondary align-middle">In--}}
{{--                                                Progress</span></h6>--}}
{{--                                        <p class="text-muted mb-2"><i class="ri-file-text-line align-middle ms-2"></i>--}}
{{--                                            Create new project Buildng product</p>--}}
{{--                                        <div class="avatar-group mb-2">--}}
{{--                                            <a href="javascript: void(0);" class="avatar-group-item shadow"--}}
{{--                                               data-bs-toggle="tooltip" data-bs-placement="top" title=""--}}
{{--                                               data-bs-original-title="Christi">--}}
{{--                                                <img src="{{ URL::asset('build/images/users/avatar-4.jpg') }}" alt=""--}}
{{--                                                     class="rounded-circle avatar-xs" />--}}
{{--                                            </a>--}}
{{--                                            <a href="javascript: void(0);" class="avatar-group-item shadow"--}}
{{--                                               data-bs-toggle="tooltip" data-bs-placement="top" title=""--}}
{{--                                               data-bs-original-title="Frank Hook">--}}
{{--                                                <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt=""--}}
{{--                                                     class="rounded-circle avatar-xs" />--}}
{{--                                            </a>--}}
{{--                                            <a href="javascript: void(0);" class="avatar-group-item shadow"--}}
{{--                                               data-bs-toggle="tooltip" data-bs-placement="top" title=""--}}
{{--                                               data-bs-original-title=" Ruby">--}}
{{--                                                <div class="avatar-xs">--}}
{{--                                                    <div class="avatar-title rounded-circle bg-light text-primary">--}}
{{--                                                        R--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <a href="javascript: void(0);" class="avatar-group-item shadow"--}}
{{--                                               data-bs-toggle="tooltip" data-bs-placement="top" title=""--}}
{{--                                               data-bs-original-title="more">--}}
{{--                                                <div class="avatar-xs">--}}
{{--                                                    <div class="avatar-title rounded-circle">--}}
{{--                                                        2+--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <small class="mb-0 text-muted">Yesterday</small>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="acitivity-item py-3 d-flex">--}}
{{--                                    <div class="flex-shrink-0">--}}
{{--                                        <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt=""--}}
{{--                                             class="avatar-xs rounded-circle acitivity-avatar shadow" />--}}
{{--                                    </div>--}}
{{--                                    <div class="flex-grow-1 ms-3">--}}
{{--                                        <h6 class="mb-1">Natasha Carey <span--}}
{{--                                                class="badge bg-success-subtle text-success align-middle">Completed</span>--}}
{{--                                        </h6>--}}
{{--                                        <p class="text-muted mb-2">Adding a new event with attachments</p>--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-xxl-4">--}}
{{--                                                <div class="row border border-dashed gx-2 p-2 mb-2">--}}
{{--                                                    <div class="col-4">--}}
{{--                                                        <img src="{{ URL::asset('build/images/small/img-2.jpg') }}" alt=""--}}
{{--                                                             class="img-fluid rounded shadow" />--}}
{{--                                                    </div>--}}
{{--                                                    <!--end col-->--}}
{{--                                                    <div class="col-4">--}}
{{--                                                        <img src="{{ URL::asset('build/images/small/img-3.jpg') }}" alt=""--}}
{{--                                                             class="img-fluid rounded shadow" />--}}
{{--                                                    </div>--}}
{{--                                                    <!--end col-->--}}
{{--                                                    <div class="col-4">--}}
{{--                                                        <img src="{{ URL::asset('build/images/small/img-4.jpg') }}" alt=""--}}
{{--                                                             class="img-fluid rounded shadow" />--}}
{{--                                                    </div>--}}
{{--                                                    <!--end col-->--}}
{{--                                                </div>--}}
{{--                                                <!--end row-->--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <small class="mb-0 text-muted">25 Nov</small>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="acitivity-item py-3 d-flex">--}}
{{--                                    <div class="flex-shrink-0">--}}
{{--                                        <img src="{{ URL::asset('build/images/users/avatar-6.jpg') }}" alt=""--}}
{{--                                             class="avatar-xs rounded-circle acitivity-avatar shadow" />--}}
{{--                                    </div>--}}
{{--                                    <div class="flex-grow-1 ms-3">--}}
{{--                                        <h6 class="mb-1">Bethany Johnson</h6>--}}
{{--                                        <p class="text-muted mb-2">added a new member to velzon dashboard</p>--}}
{{--                                        <small class="mb-0 text-muted">19 Nov</small>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="acitivity-item py-3 d-flex">--}}
{{--                                    <div class="flex-shrink-0">--}}
{{--                                        <div class="avatar-xs acitivity-avatar">--}}
{{--                                            <div class="avatar-title rounded-circle bg-danger-subtle text-danger">--}}
{{--                                                <i class="ri-shopping-bag-line"></i>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="flex-grow-1 ms-3">--}}
{{--                                        <h6 class="mb-1">Your order is placed <span--}}
{{--                                                class="badge bg-danger-subtle text-danger align-middle ms-1">Out of--}}
{{--                                                Delivery</span></h6>--}}
{{--                                        <p class="text-muted mb-2">These customers can rest assured their order has been--}}
{{--                                            placed.</p>--}}
{{--                                        <small class="mb-0 text-muted">16 Nov</small>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="acitivity-item py-3 d-flex">--}}
{{--                                    <div class="flex-shrink-0">--}}
{{--                                        <img src="{{ URL::asset('build/images/users/avatar-7.jpg') }}" alt=""--}}
{{--                                             class="avatar-xs rounded-circle acitivity-avatar shadow" />--}}
{{--                                    </div>--}}
{{--                                    <div class="flex-grow-1 ms-3">--}}
{{--                                        <h6 class="mb-1">Lewis Pratt</h6>--}}
{{--                                        <p class="text-muted mb-2">They all have something to say beyond the words on the--}}
{{--                                            page. They can come across as casual or neutral, exotic or graphic. </p>--}}
{{--                                        <small class="mb-0 text-muted">22 Oct</small>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="acitivity-item py-3 d-flex">--}}
{{--                                    <div class="flex-shrink-0">--}}
{{--                                        <div class="avatar-xs acitivity-avatar">--}}
{{--                                            <div class="avatar-title rounded-circle bg-info-subtle text-info shadow">--}}
{{--                                                <i class="ri-line-chart-line"></i>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="flex-grow-1 ms-3">--}}
{{--                                        <h6 class="mb-1">Monthly sales report</h6>--}}
{{--                                        <p class="text-muted mb-2"><span class="text-danger">2 days left</span>--}}
{{--                                            notification to submit the monthly sales report. <a href="javascript:void(0);"--}}
{{--                                                                                                class="link-warning text-decoration-underline">Reports Builder</a></p>--}}
{{--                                        <small class="mb-0 text-muted">15 Oct</small>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="acitivity-item d-flex">--}}
{{--                                    <div class="flex-shrink-0">--}}
{{--                                        <img src="{{ URL::asset('build/images/users/avatar-8.jpg') }}" alt=""--}}
{{--                                             class="avatar-xs rounded-circle acitivity-avatar shadow" />--}}
{{--                                    </div>--}}
{{--                                    <div class="flex-grow-1 ms-3">--}}
{{--                                        <h6 class="mb-1">New ticket received <span--}}
{{--                                                class="badge bg-success-subtle text-success align-middle">Completed</span>--}}
{{--                                        </h6>--}}
{{--                                        <p class="text-muted mb-2">User <span class="text-secondary">Erica245</span>--}}
{{--                                            submitted a ticket.</p>--}}
{{--                                        <small class="mb-0 text-muted">26 Aug</small>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!--end card-body-->--}}
{{--                    </div>--}}
{{--                    <!--end card-->--}}
{{--                </div>--}}
                <!-- end tab pane -->
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
    <!-- Modal -->
    <div class="modal fade" id="addSubscriptionModal" tabindex="-1" aria-labelledby="addSubscriptionModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0">
                <div class="modal-header p-3 ps-4 bg-success-subtle">
                    <h5 class="modal-title" id="inviteMembersModalLabel"><i class="mdi mdi-bell"></i> Subscription</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('management.project.subscription.store', $project) }}" method="post">
                    @csrf
                    <div class="modal-body p-4">
                        <div class="mb-3">
                            <label class="form-label" for="project-title-input">Name</label>
                            <input type="text" class="form-control" name="name" id="project-title-input" placeholder="Enter project title" required>
                        </div>
                        <div class="mb-3">
                            <label for="choices-privacy-status-input" class="form-label">Subscription</label>
                            <select name="type" class="form-select" data-choices data-choices-search-false
                                    id="choices-privacy-status-input">
                                <option value="{{ \App\Models\Subscription::YEARLY }}" selected>{{ \App\Models\Subscription::YEARLY }}</option>
                                <option value="{{ \App\Models\Subscription::MONTHLY }}">{{ \App\Models\Subscription::MONTHLY }}</option>
                                <option value="{{ \App\Models\Subscription::DAILY }}">{{ \App\Models\Subscription::DAILY }}</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="datepicker-deadline-input" class="form-label">Billing Date</label>
                            <input type="text" name="billing_date" class="form-control" id="datepicker-deadline-input"
                                   placeholder="Enter due date" data-provider="flatpickr">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light w-xs" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success w-xs">Add</button>
                    </div>
                </form>
            </div>
            <!-- end modal-content -->
        </div>
        <!-- modal-dialog -->
    </div>

@endsection
@section('script')
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection

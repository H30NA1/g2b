@extends('admin.layouts.master')

@section('title', 'G2B Admin')

@push('css')

@endpush

@section('content')
<div class="content-body">
    <!-- row -->
    <div class="page-titles">
        <ol class="breadcrumb">
            <li>
                <h5 class="bc-title">Performance</h5>
            </li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Home </a>
            </li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Performance</a></li>
        </ol>
        <a class="text-primary fs-13" data-bs-toggle="offcanvas" href="#offcanvasExample1" role="button" aria-controls="offcanvasExample1">+ Add Task</a>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive active-projects manage-client">
                            <div class="tbl-caption">
                                <h4 class="heading mb-0">Performance Indicators</h4>
                            </div>
                            <table id="empoloyees-tblwrapper" class="table">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Designation</th>
                                        <th>Rating</th>
                                        <th>Added By</th>
                                        <th>Created Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="javascript:void(0)">Jack</a>
                                        </td>
                                        <td><span>Civil Engineer</span></td>
                                        <td>
                                            <i class="fa-sharp fa-solid fa-star text-orange"></i>
                                            <i class="fa-sharp fa-solid fa-star text-orange"></i>
                                            <i class="fa-solid fa-star-half-stroke text-orange"></i>
                                            <i class="fa-solid fa-star-half-stroke text-orange"></i>
                                            <span>4.0</span>
                                        </td>
                                        <td>
                                            <span>John Marry</span>
                                        </td>
                                        <td>
                                            <span>14 Feb 2023</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="javascript:void(0)">Khalid</a>
                                        </td>
                                        <td><span>Software Engineer</span></td>
                                        <td>
                                            <i class="fa-sharp fa-solid fa-star text-orange"></i>
                                            <i class="fa-sharp fa-solid fa-star text-orange"></i>
                                            <i class="fa-solid fa-star-half-stroke text-orange"></i>
                                            <i class="fa-solid fa-star-half-stroke text-orange"></i>
                                            <span>2.1</span>
                                        </td>
                                        <td>
                                            <span>Caty Fsa</span>
                                        </td>
                                        <td>
                                            <span>18 Feb 2023</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="javascript:void(0)">Ethan</a>
                                        </td>
                                        <td><span>Website Engineer</span></td>
                                        <td>
                                            <i class="fa-sharp fa-solid fa-star text-orange"></i>
                                            <i class="fa-solid fa-star-half-stroke text-orange"></i>
                                            <i class="fa-solid fa-star-half-stroke text-orange"></i>
                                            <i class="fa-solid fa-star-half-stroke text-orange"></i>
                                            <span>3.1</span>
                                        </td>
                                        <td>
                                            <span>John Marry</span>
                                        </td>
                                        <td>
                                            <span>19 Feb 2023</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="javascript:void(0)">Peter</a>
                                        </td>
                                        <td><span>Software Engineer</span></td>
                                        <td>
                                            <i class="fa-sharp fa-solid fa-star text-orange"></i>
                                            <i class="fa-sharp fa-solid fa-star text-orange"></i>
                                            <i class="fa-solid fa-star-half-stroke text-orange"></i>
                                            <i class="fa-solid fa-star-half-stroke text-orange"></i>
                                            <span>4.0</span>
                                        </td>
                                        <td>
                                            <span>Geeta Marry</span>
                                        </td>
                                        <td>
                                            <span>14 Feb 2023</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="javascript:void(0)">Aaron</a>
                                        </td>
                                        <td><span>Civil Engineer</span></td>
                                        <td>
                                            <i class="fa-sharp fa-solid fa-star text-orange"></i>
                                            <i class="fa-sharp fa-solid fa-star text-orange"></i>
                                            <i class="fa-solid fa-star-half-stroke text-orange"></i>
                                            <i class="fa-solid fa-star-half-stroke text-orange"></i>
                                            <span>4.0</span>
                                        </td>
                                        <td>
                                            <span>John Marry</span>
                                        </td>
                                        <td>
                                            <span>14 Feb 2023</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="javascript:void(0)">Scott</a>
                                        </td>
                                        <td><span>Software Engineer</span></td>
                                        <td>
                                            <i class="fa-sharp fa-solid fa-star text-orange"></i>
                                            <i class="fa-sharp fa-solid fa-star text-orange"></i>
                                            <i class="fa-solid fa-star-half-stroke text-orange"></i>
                                            <i class="fa-solid fa-star-half-stroke text-orange"></i>
                                            <span>2.1</span>
                                        </td>
                                        <td>
                                            <span>Caty Fsa</span>
                                        </td>
                                        <td>
                                            <span>18 Feb 2023</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="javascript:void(0)">Morris</a>
                                        </td>
                                        <td><span>Website Engineer</span></td>
                                        <td>
                                            <i class="fa-sharp fa-solid fa-star text-orange"></i>
                                            <i class="fa-solid fa-star-half-stroke text-orange"></i>
                                            <i class="fa-solid fa-star-half-stroke text-orange"></i>
                                            <i class="fa-solid fa-star-half-stroke text-orange"></i>
                                            <span>3.1</span>
                                        </td>
                                        <td>
                                            <span>John Marry</span>
                                        </td>
                                        <td>
                                            <span>19 Feb 2023</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="javascript:void(0)">Robin</a>
                                        </td>
                                        <td><span>Software Engineer</span></td>
                                        <td>
                                            <i class="fa-sharp fa-solid fa-star text-orange"></i>
                                            <i class="fa-sharp fa-solid fa-star text-orange"></i>
                                            <i class="fa-solid fa-star-half-stroke text-orange"></i>
                                            <i class="fa-solid fa-star-half-stroke text-orange"></i>
                                            <span>4.0</span>
                                        </td>
                                        <td>
                                            <span>Geeta Marry</span>
                                        </td>
                                        <td>
                                            <span>14 Feb 2023</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="javascript:void(0)">Samuel</a>
                                        </td>
                                        <td><span>Civil Engineer</span></td>
                                        <td>
                                            <i class="fa-sharp fa-solid fa-star text-orange"></i>
                                            <i class="fa-sharp fa-solid fa-star text-orange"></i>
                                            <i class="fa-solid fa-star-half-stroke text-orange"></i>
                                            <i class="fa-solid fa-star-half-stroke text-orange"></i>
                                            <span>4.0</span>
                                        </td>
                                        <td>
                                            <span>John Marry</span>
                                        </td>
                                        <td>
                                            <span>14 Feb 2023</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="javascript:void(0)">Cedric</a>
                                        </td>
                                        <td><span>Software Engineer</span></td>
                                        <td>
                                            <i class="fa-sharp fa-solid fa-star text-orange"></i>
                                            <i class="fa-sharp fa-solid fa-star text-orange"></i>
                                            <i class="fa-solid fa-star-half-stroke text-orange"></i>
                                            <i class="fa-solid fa-star-half-stroke text-orange"></i>
                                            <span>2.1</span>
                                        </td>
                                        <td>
                                            <span>Caty Fsa</span>
                                        </td>
                                        <td>
                                            <span>18 Feb 2023</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="javascript:void(0)">Sandy</a>
                                        </td>
                                        <td><span>Website Engineer</span></td>
                                        <td>
                                            <i class="fa-sharp fa-solid fa-star text-orange"></i>
                                            <i class="fa-solid fa-star-half-stroke text-orange"></i>
                                            <i class="fa-solid fa-star-half-stroke text-orange"></i>
                                            <i class="fa-solid fa-star-half-stroke text-orange"></i>
                                            <span>3.1</span>
                                        </td>
                                        <td>
                                            <span>John Marry</span>
                                        </td>
                                        <td>
                                            <span>19 Feb 2023</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="javascript:void(0)">Joe</a>
                                        </td>
                                        <td><span>Software Engineer</span></td>
                                        <td>
                                            <i class="fa-sharp fa-solid fa-star text-orange"></i>
                                            <i class="fa-sharp fa-solid fa-star text-orange"></i>
                                            <i class="fa-solid fa-star-half-stroke text-orange"></i>
                                            <i class="fa-solid fa-star-half-stroke text-orange"></i>
                                            <span>4.0</span>
                                        </td>
                                        <td>
                                            <span>Geeta Marry</span>
                                        </td>
                                        <td>
                                            <span>14 Feb 2023</span>
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script src="{{ getFileVersion('/assets/admin/vendor/bootstrap-datetimepicker/js/moment.js') }}"></script>
<script src="{{ getFileVersion('/assets/admin/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
@endpush
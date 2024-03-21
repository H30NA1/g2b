@extends('layouts.master')

@section('title', 'Server Info')

@push('css')

@endpush

@section('content')
<div class="content-body">
    <!-- row -->
    <div class="page-titles">
        <ol class="breadcrumb">
            <li>
                <h5 class="bc-title">Task</h5>
            </li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Home </a>
            </li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Task Summary</a></li>
        </ol>
        <a class="text-primary fs-13" data-bs-toggle="offcanvas" href="#offcanvasExample1" role="button" aria-controls="offcanvasExample1">+ Add Task</a>
    </div>
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h5 class="mb-0">Tasks Summary</h5>
            <div class="d-flex align-items-center">
                <div class="icon-box  icon-box-sm task-tab me-2">
                    <a href="task.html">
                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.8335 5.5H17.6668" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M6.8335 10.5H17.6668" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M6.8335 15.5H17.6668" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M2.66699 5.5H2.67699" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M2.66699 10.5H2.67699" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M2.66699 15.5H2.67699" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
                <a href="javascript:void(0)" class="btn btn-primary btn-sm ms-2">+ Add Task</a>
            </div>
        </div>
        <div class="row kanban-bx">
            <div class="col">
                <div class="card kanbanPreview-bx">
                    <div class="card-body draggable-zone dropzoneContainer">
                        <div class="sub-card border-primary">
                            <div class="sub-card-2">
                                <div>
                                    <h5 class="mb-0">Not Started</h5>
                                    <span>Tasks assigned to me: 18</span>
                                </div>
                                <div class="icon-box bg-primary-light rounded-circle">
                                    <h5 class="text-primary totalCount">18</h5>
                                </div>
                            </div>
                        </div>
                        <div class="sub-card draggable-handle draggable p-0">
                            <div class="task-card-data">
                                <div class="products">
                                    <div>
                                        <h6>HTML template Issue Complete</h6>
                                        <span>INV-100023456</span>
                                    </div>
                                </div>
                                <div class="avatar-list avatar-list-stacked my-2">
                                    <img src="images/contacts/pic666.jpg" class="avatar rounded-circle" alt="">
                                    <img src="images/contacts/pic555.jpg" class="avatar rounded-circle" alt="">
                                    <img src="images/contacts/pic1.jpg" class="avatar rounded-circle" alt="">
                                    <img src="images/contacts/pic666.jpg" class="avatar rounded-circle" alt="">
                                    <img src="images/contacts/pic666.jpg" class="avatar rounded-circle" alt="">
                                </div>
                                <div class="my-2">
                                    <span class="badge badge-primary light border-0 me-1">Issue</span>
                                    <span class="badge badge-primary light border-0 ms-1">HTML</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <p class="mb-0 font-w500 text-secondary me-2">Status</p>
                                    <select class="default-select status-select">
                                        <option value="testing">Testing</option>
                                        <option value="pending">Pending</option>
                                        <option value="complete">Complete</option>
                                        <option value="progress">In Progress</option>
                                    </select>
                                </div>

                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="footer-data">
                                    <span>Start Date</span>
                                    <p>06 Feb 2023</p>
                                </div>
                                <div class="footer-data">
                                    <span>End Date</span>
                                    <p>06 Feb 2023</p>
                                </div>
                                <div class="footer-data">
                                    <span class="d-block">Priority</span>
                                    <select class="default-select status-select">
                                        <option value="High">High</option>
                                        <option value="Medium">Medium</option>
                                        <option value="Low">Low</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="sub-card draggable-handle draggable p-0">
                            <div class="task-card-data">
                                <div class="products">
                                    <div>
                                        <h6>HTML template Issue Complete</h6>
                                        <span>INV-100023456</span>
                                    </div>
                                </div>
                                <div class="avatar-list avatar-list-stacked my-2">
                                    <img src="images/contacts/pic666.jpg" class="avatar rounded-circle" alt="">
                                    <img src="images/contacts/pic555.jpg" class="avatar rounded-circle" alt="">
                                    <img src="images/contacts/pic1.jpg" class="avatar rounded-circle" alt="">
                                </div>
                                <div class="my-2">
                                    <span class="badge badge-primary light border-0 me-1">Issue</span>
                                    <span class="badge badge-primary light border-0 ms-1">HTML</span>
                                </div>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="footer-data">
                                    <span>Start Date</span>
                                    <p>06 Feb 2023</p>
                                </div>
                                <div class="footer-data">
                                    <span>End Date</span>
                                    <p>06 Feb 2023</p>
                                </div>
                                <div class="footer-data">
                                    <span class="d-block">Priority</span>
                                    <select class="default-select status-select">
                                        <option value="High">High</option>
                                        <option value="Medium">Medium</option>
                                        <option value="Low">Low</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="sub-card draggable-handle draggable p-0">
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="footer-data">
                                    <span>Start Date</span>
                                    <p>06 Feb 2023</p>
                                </div>
                                <div class="footer-data">
                                    <span>End Date</span>
                                    <p>06 Feb 2023</p>
                                </div>
                                <div class="footer-data">
                                    <span class="d-block">Priority</span>
                                    <select class="default-select status-select">
                                        <option value="Low">Low</option>
                                        <option value="High">High</option>
                                        <option value="Medium">Medium</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card kanbanPreview-bx">
                    <div class="card-body draggable-zone dropzoneContainer">
                        <div class="sub-card border-purple">
                            <div class="sub-card-2">
                                <div>
                                    <h5 class="mb-0">Not Started</h5>
                                    <span>Tasks assigned to me: 18</span>
                                </div>
                                <div class="icon-box bg-purple-light rounded-circle">
                                    <h5 class="text-purple totalCount">18</h5>
                                </div>
                            </div>
                        </div>
                        <div class="sub-card draggable-handle draggable p-0">
                            <div class="task-card-data">
                                <div class="products">
                                    <div>
                                        <h6>HTML template Issue Complete</h6>
                                        <span>INV-100023456</span>
                                    </div>
                                </div>
                                <div class="avatar-list avatar-list-stacked my-2">
                                    <img src="images/contacts/pic666.jpg" class="avatar rounded-circle" alt="">
                                    <img src="images/contacts/pic555.jpg" class="avatar rounded-circle" alt="">
                                    <img src="images/contacts/pic1.jpg" class="avatar rounded-circle" alt="">
                                    <img src="images/contacts/pic666.jpg" class="avatar rounded-circle" alt="">
                                </div>
                                <div class="my-2">
                                    <span class="badge badge-primary light border-0 me-1">Issue</span>
                                    <span class="badge badge-primary light border-0 ms-1">HTML</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <p class="mb-0 font-w500 text-secondary me-2">Status</p>
                                    <select class="default-select status-select">
                                        <option value="pending">Pending</option>
                                        <option value="testing">Testing</option>
                                        <option value="complete">Complete</option>
                                        <option value="progress">In Progress</option>
                                    </select>
                                </div>

                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="footer-data">
                                    <span>Start Date</span>
                                    <p>06 Feb 2023</p>
                                </div>
                                <div class="footer-data">
                                    <span>End Date</span>
                                    <p>06 Feb 2023</p>
                                </div>
                                <div class="footer-data">
                                    <span class="d-block">Priority</span>
                                    <select class="default-select status-select">
                                        <option value="High">High</option>
                                        <option value="Medium">Medium</option>
                                        <option value="Low">Low</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="sub-card draggable-handle draggable p-0">
                            <div class="task-card-data">
                                <div class="products">
                                    <div>
                                        <h6>HTML template Issue Complete</h6>
                                        <span>INV-100023456</span>
                                    </div>
                                </div>
                                <div class="avatar-list avatar-list-stacked my-2">
                                    <img src="images/contacts/pic666.jpg" class="avatar rounded-circle" alt="">
                                    <img src="images/contacts/pic555.jpg" class="avatar rounded-circle" alt="">
                                    <img src="images/contacts/pic1.jpg" class="avatar rounded-circle" alt="">
                                    <img src="images/contacts/pic666.jpg" class="avatar rounded-circle" alt="">
                                </div>
                                <div class="my-2">
                                    <span class="badge badge-primary light border-0 me-1">Issue</span>
                                    <span class="badge badge-primary light border-0 ms-1">HTML</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <p class="mb-0 font-w500 text-secondary me-2">Status</p>
                                    <select class="default-select status-select">
                                        <option value="pending">Pending</option>
                                        <option value="testing">Testing</option>
                                        <option value="complete">Complete</option>
                                        <option value="progress">In Progress</option>
                                    </select>
                                </div>

                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="footer-data">
                                    <span>Start Date</span>
                                    <p>06 Feb 2023</p>
                                </div>
                                <div class="footer-data">
                                    <span>End Date</span>
                                    <p>06 Feb 2023</p>
                                </div>
                                <div class="footer-data">
                                    <span class="d-block">Priority</span>
                                    <select class="default-select status-select">
                                        <option value="Medium">Medium</option>
                                        <option value="Low">Low</option>
                                        <option value="High">High</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="sub-card draggable-handle draggable p-0">
                            <div class="task-card-data">
                                <div class="products">
                                    <div>
                                        <h6>HTML template Issue Complete</h6>
                                        <span>INV-100023456</span>
                                    </div>
                                </div>
                                <div class="avatar-list avatar-list-stacked my-2">
                                    <img src="images/contacts/pic666.jpg" class="avatar rounded-circle" alt="">
                                    <img src="images/contacts/pic555.jpg" class="avatar rounded-circle" alt="">
                                    <img src="images/contacts/pic1.jpg" class="avatar rounded-circle" alt="">
                                    <img src="images/contacts/pic666.jpg" class="avatar rounded-circle" alt="">
                                </div>
                                <div class="my-2">
                                    <span class="badge badge-primary light border-0 me-1">Issue</span>
                                    <span class="badge badge-primary light border-0 ms-1">HTML</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <p class="mb-0 font-w500 text-secondary me-2">Status</p>
                                    <select class="default-select status-select">
                                        <option value="pending">Pending</option>
                                        <option value="testing">Testing</option>
                                        <option value="complete">Complete</option>
                                        <option value="progress">In Progress</option>
                                    </select>
                                </div>

                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="footer-data">
                                    <span>Start Date</span>
                                    <p>06 Feb 2023</p>
                                </div>
                                <div class="footer-data">
                                    <span>End Date</span>
                                    <p>06 Feb 2023</p>
                                </div>
                                <div class="footer-data">
                                    <span class="d-block">Priority</span>
                                    <select class="default-select status-select">
                                        <option value="High">High</option>
                                        <option value="Medium">Medium</option>
                                        <option value="Low">Low</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card kanbanPreview-bx">
                    <div class="card-body draggable-zone dropzoneContainer">
                        <div class="sub-card border-warning">
                            <div class="sub-card-2">
                                <div>
                                    <h5 class="mb-0">Not Started</h5>
                                    <span>Tasks assigned to me: 18</span>
                                </div>
                                <div class="icon-box bg-warning-light rounded-circle">
                                    <h5 class="text-warning totalCount">18</h5>
                                </div>
                            </div>
                        </div>
                        <div class="sub-card draggable-handle draggable p-0">
                            <div class="task-card-data">
                                <div class="products">
                                    <div>
                                        <h6>HTML template Issue Complete</h6>
                                        <span>INV-100023456</span>
                                    </div>
                                </div>
                                <div class="avatar-list avatar-list-stacked my-2">
                                    <img src="images/contacts/pic666.jpg" class="avatar rounded-circle" alt="">
                                    <img src="images/contacts/pic555.jpg" class="avatar rounded-circle" alt="">
                                    <img src="images/contacts/pic1.jpg" class="avatar rounded-circle" alt="">
                                    <img src="images/contacts/pic666.jpg" class="avatar rounded-circle" alt="">
                                    <img src="images/contacts/pic666.jpg" class="avatar rounded-circle" alt="">
                                </div>
                                <div class="my-2">
                                    <span class="badge badge-primary light border-0 me-1">Issue</span>
                                    <span class="badge badge-primary light border-0 ms-1">HTML</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <p class="mb-0 font-w500 text-secondary me-2">Status</p>
                                    <select class="default-select status-select">
                                        <option value="testing">Testing</option>
                                        <option value="pending">Pending</option>
                                        <option value="complete">Complete</option>
                                        <option value="progress">In Progress</option>
                                    </select>
                                </div>

                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="footer-data">
                                    <span>Start Date</span>
                                    <p>06 Feb 2023</p>
                                </div>
                                <div class="footer-data">
                                    <span>End Date</span>
                                    <p>06 Feb 2023</p>
                                </div>
                                <div class="footer-data">
                                    <span class="d-block">Priority</span>
                                    <select class="default-select status-select">
                                        <option value="High">High</option>
                                        <option value="Medium">Medium</option>
                                        <option value="Low">Low</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="sub-card draggable-handle draggable p-0">
                            <div class="task-card-data">
                                <div class="products">
                                    <div>
                                        <h6>HTML template Issue Complete</h6>
                                        <span>INV-100023456</span>
                                    </div>
                                </div>
                                <div class="avatar-list avatar-list-stacked my-2">
                                    <img src="images/contacts/pic666.jpg" class="avatar rounded-circle" alt="">
                                    <img src="images/contacts/pic555.jpg" class="avatar rounded-circle" alt="">
                                    <img src="images/contacts/pic1.jpg" class="avatar rounded-circle" alt="">
                                </div>
                                <div class="my-2">
                                    <span class="badge badge-primary light border-0 me-1">Issue</span>
                                    <span class="badge badge-primary light border-0 ms-1">HTML</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <p class="mb-0 font-w500 text-secondary me-2">Status</p>
                                    <select class="default-select status-select">
                                        <option value="complete">Complete</option>
                                        <option value="pending">Pending</option>
                                        <option value="testing">Testing</option>
                                        <option value="progress">In Progress</option>
                                    </select>
                                </div>

                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="footer-data">
                                    <span>Start Date</span>
                                    <p>06 Feb 2023</p>
                                </div>
                                <div class="footer-data">
                                    <span>End Date</span>
                                    <p>06 Feb 2023</p>
                                </div>
                                <div class="footer-data">
                                    <span class="d-block">Priority</span>
                                    <select class="default-select status-select">
                                        <option value="High">High</option>
                                        <option value="Medium">Medium</option>
                                        <option value="Low">Low</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="sub-card draggable-handle draggable p-0">
                            <div class="task-card-data">
                                <div class="products">
                                    <div>
                                        <h6>HTML template Issue Complete</h6>
                                        <span>INV-100023456</span>
                                    </div>
                                </div>
                                <div class="avatar-list avatar-list-stacked my-2">
                                    <img src="images/contacts/pic666.jpg" class="avatar rounded-circle" alt="">
                                    <img src="images/contacts/pic555.jpg" class="avatar rounded-circle" alt="">
                                    <img src="images/contacts/pic1.jpg" class="avatar rounded-circle" alt="">
                                    <img src="images/contacts/pic666.jpg" class="avatar rounded-circle" alt="">
                                    <img src="images/contacts/pic555.jpg" class="avatar rounded-circle" alt="">
                                </div>
                                <div class="my-2">
                                    <span class="badge badge-primary light border-0 me-1">Issue</span>
                                    <span class="badge badge-primary light border-0 ms-1">HTML</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <p class="mb-0 font-w500 text-secondary me-2">Status</p>
                                    <select class="default-select status-select">
                                        <option value="progress">In Progress</option>
                                        <option value="testing">Testing</option>
                                        <option value="pending">Pending</option>
                                        <option value="complete">Complete</option>
                                    </select>
                                </div>

                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="footer-data">
                                    <span>Start Date</span>
                                    <p>06 Feb 2023</p>
                                </div>
                                <div class="footer-data">
                                    <span>End Date</span>
                                    <p>06 Feb 2023</p>
                                </div>
                                <div class="footer-data">
                                    <span class="d-block">Priority</span>
                                    <select class="default-select status-select">
                                        <option value="Low">Low</option>
                                        <option value="High">High</option>
                                        <option value="Medium">Medium</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card kanbanPreview-bx">
                    <div class="card-body draggable-zone dropzoneContainer">
                        <div class="sub-card border-danger">
                            <div class="sub-card-2">
                                <div>
                                    <h5 class="mb-0">Not Started</h5>
                                    <span>Tasks assigned to me: 13</span>
                                </div>
                                <div class="icon-box bg-danger-light rounded-circle">
                                    <h5 class="text-danger totalCount">13</h5>
                                </div>
                            </div>
                        </div>
                        <div class="sub-card draggable-handle draggable p-0">
                            <div class="task-card-data">
                                <div class="products">
                                    <div>
                                        <h6>HTML template Issue Complete</h6>
                                        <span>INV-100023456</span>
                                    </div>
                                </div>
                                <div class="avatar-list avatar-list-stacked my-2">
                                    <img src="images/contacts/pic666.jpg" class="avatar rounded-circle" alt="">
                                    <img src="images/contacts/pic555.jpg" class="avatar rounded-circle" alt="">
                                    <img src="images/contacts/pic1.jpg" class="avatar rounded-circle" alt="">
                                    <img src="images/contacts/pic666.jpg" class="avatar rounded-circle" alt="">
                                </div>
                                <div class="my-2">
                                    <span class="badge badge-primary light border-0 me-1">Issue</span>
                                    <span class="badge badge-primary light border-0 ms-1">HTML</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <p class="mb-0 font-w500 text-secondary me-2">Status</p>
                                    <select class="default-select status-select">
                                        <option value="pending">Pending</option>
                                        <option value="testing">Testing</option>
                                        <option value="complete">Complete</option>
                                        <option value="progress">In Progress</option>
                                    </select>
                                </div>

                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="footer-data">
                                    <span>Start Date</span>
                                    <p>06 Feb 2023</p>
                                </div>
                                <div class="footer-data">
                                    <span>End Date</span>
                                    <p>06 Feb 2023</p>
                                </div>
                                <div class="footer-data">
                                    <span class="d-block">Priority</span>
                                    <select class="default-select status-select">
                                        <option value="High">High</option>
                                        <option value="Medium">Medium</option>
                                        <option value="Low">Low</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="sub-card draggable-handle draggable p-0">
                            <div class="task-card-data">
                                <div class="products">
                                    <div>
                                        <h6>HTML template Issue Complete</h6>
                                        <span>INV-100023456</span>
                                    </div>
                                </div>
                                <div class="avatar-list avatar-list-stacked my-2">
                                    <img src="images/contacts/pic666.jpg" class="avatar rounded-circle" alt="">
                                    <img src="images/contacts/pic555.jpg" class="avatar rounded-circle" alt="">
                                    <img src="images/contacts/pic1.jpg" class="avatar rounded-circle" alt="">
                                    <img src="images/contacts/pic666.jpg" class="avatar rounded-circle" alt="">
                                </div>
                                <div class="my-2">
                                    <span class="badge badge-primary light border-0 me-1">Issue</span>
                                    <span class="badge badge-primary light border-0 ms-1">HTML</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <p class="mb-0 font-w500 text-secondary me-2">Status</p>
                                    <select class="default-select status-select">
                                        <option value="pending">Pending</option>
                                        <option value="testing">Testing</option>
                                        <option value="complete">Complete</option>
                                        <option value="progress">In Progress</option>
                                    </select>
                                </div>

                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="footer-data">
                                    <span>Start Date</span>
                                    <p>06 Feb 2023</p>
                                </div>
                                <div class="footer-data">
                                    <span>End Date</span>
                                    <p>06 Feb 2023</p>
                                </div>
                                <div class="footer-data">
                                    <span class="d-block">Priority</span>
                                    <select class="default-select status-select">
                                        <option value="Medium">Medium</option>
                                        <option value="Low">Low</option>
                                        <option value="High">High</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card kanbanPreview-bx">
                    <div class="card-body draggable-zone dropzoneContainer">
                        <div class="sub-card border-success">
                            <div class="sub-card-2">
                                <div>
                                    <h5 class="mb-0">Complete</h5>
                                    <span>Tasks assigned to me: 21</span>
                                </div>
                                <div class="icon-box bg-success-light rounded-circle">
                                    <h5 class="text-success totalCount">13</h5>
                                </div>
                            </div>
                        </div>
                        <div class="sub-card draggable-handle draggable p-0">
                            <div class="task-card-data">
                                <div class="products">
                                    <div>
                                        <h6>HTML template Issue Complete</h6>
                                        <span>INV-100023456</span>
                                    </div>
                                </div>
                                <div class="avatar-list avatar-list-stacked my-2">
                                    <img src="images/contacts/pic666.jpg" class="avatar rounded-circle" alt="">
                                    <img src="images/contacts/pic555.jpg" class="avatar rounded-circle" alt="">
                                    <img src="images/contacts/pic1.jpg" class="avatar rounded-circle" alt="">
                                    <img src="images/contacts/pic666.jpg" class="avatar rounded-circle" alt="">
                                </div>
                                <div class="my-2">
                                    <span class="badge badge-primary light border-0 me-1">Issue</span>
                                    <span class="badge badge-primary light border-0 ms-1">HTML</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <p class="mb-0 font-w500 text-secondary me-2">Status</p>
                                    <select class="default-select status-select">
                                        <option value="pending">Pending</option>
                                        <option value="testing">Testing</option>
                                        <option value="complete">Complete</option>
                                        <option value="progress">In Progress</option>
                                    </select>
                                </div>

                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="footer-data">
                                    <span>Start Date</span>
                                    <p>06 Feb 2023</p>
                                </div>
                                <div class="footer-data">
                                    <span>End Date</span>
                                    <p>06 Feb 2023</p>
                                </div>
                                <div class="footer-data">
                                    <span class="d-block">Priority</span>
                                    <select class="default-select status-select">
                                        <option value="High">High</option>
                                        <option value="Medium">Medium</option>
                                        <option value="Low">Low</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="sub-card draggable-handle draggable p-0">
                            <div class="task-card-data">
                                <div class="products">
                                    <div>
                                        <h6>HTML template Issue Complete</h6>
                                        <span>INV-100023456</span>
                                    </div>
                                </div>
                                <div class="avatar-list avatar-list-stacked my-2">
                                    <img src="images/contacts/pic666.jpg" class="avatar rounded-circle" alt="">
                                    <img src="images/contacts/pic555.jpg" class="avatar rounded-circle" alt="">
                                    <img src="images/contacts/pic1.jpg" class="avatar rounded-circle" alt="">
                                    <img src="images/contacts/pic666.jpg" class="avatar rounded-circle" alt="">
                                </div>
                                <div class="my-2">
                                    <span class="badge badge-primary light border-0 me-1">Issue</span>
                                    <span class="badge badge-primary light border-0 ms-1">HTML</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <p class="mb-0 font-w500 text-secondary me-2">Status</p>
                                    <select class="default-select status-select">
                                        <option value="pending">Pending</option>
                                        <option value="testing">Testing</option>
                                        <option value="complete">Complete</option>
                                        <option value="progress">In Progress</option>
                                    </select>
                                </div>

                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="footer-data">
                                    <span>Start Date</span>
                                    <p>06 Feb 2023</p>
                                </div>
                                <div class="footer-data">
                                    <span>End Date</span>
                                    <p>06 Feb 2023</p>
                                </div>
                                <div class="footer-data">
                                    <span class="d-block">Priority</span>
                                    <select class="default-select status-select">
                                        <option value="Medium">Medium</option>
                                        <option value="Low">Low</option>
                                        <option value="High">High</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="sub-card draggable-handle draggable p-0">
                            <div class="task-card-data">
                                <div class="products">
                                    <div>
                                        <h6>HTML template Issue Complete</h6>
                                        <span>INV-100023456</span>
                                    </div>
                                </div>
                                <div class="avatar-list avatar-list-stacked my-2">
                                    <img src="images/contacts/pic666.jpg" class="avatar rounded-circle" alt="">
                                    <img src="images/contacts/pic555.jpg" class="avatar rounded-circle" alt="">
                                    <img src="images/contacts/pic1.jpg" class="avatar rounded-circle" alt="">
                                    <img src="images/contacts/pic666.jpg" class="avatar rounded-circle" alt="">
                                </div>
                                <div class="my-2">
                                    <span class="badge badge-primary light border-0 me-1">Issue</span>
                                    <span class="badge badge-primary light border-0 ms-1">HTML</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <p class="mb-0 font-w500 text-secondary me-2">Status</p>
                                    <select class="default-select status-select">
                                        <option value="pending">Pending</option>
                                        <option value="testing">Testing</option>
                                        <option value="complete">Complete</option>
                                        <option value="progress">In Progress</option>
                                    </select>
                                </div>

                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="footer-data">
                                    <span>Start Date</span>
                                    <p>06 Feb 2023</p>
                                </div>
                                <div class="footer-data">
                                    <span>End Date</span>
                                    <p>06 Feb 2023</p>
                                </div>
                                <div class="footer-data">
                                    <span class="d-block">Priority</span>
                                    <select class="default-select status-select">
                                        <option value="High">High</option>
                                        <option value="Medium">Medium</option>
                                        <option value="Low">Low</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@push('js')

@endpush
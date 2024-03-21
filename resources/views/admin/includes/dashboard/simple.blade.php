<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 wid-100">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header border-0">
                            <h4 class="heading mb-0">My To Do Items</h4>
                            <div>
                                <a href="javascript:void(0);" class="text-primary me-2">View All</a>
                                <a href="javascript:void(0);" class="text-black"> + Add To Do</a>
                            </div>
                        </div>
                        @if (isset($tasks) && $tasks->count() > 0)
                        <div class="card-body p-0">
                            <div class="dt-do-bx">
                                <div class="draggable-zone dropzoneContainer to-dodroup dz-scroll">
                                    @foreach ($tasks as $task)
                                    <div class="sub-card draggable-handle draggable">
                                        <div class="d-items">
                                            <span class="text-warning dang d-block mb-2">
                                                <svg class="me-1" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.61051 15.3276H14.3978C15.5843 15.3276 16.329 14.0451 15.7395 13.0146L10.35 3.59085C9.75676 2.5536 8.26126 2.55285 7.66726 3.5901L2.26876 13.0139C1.67926 14.0444 2.42326 15.3276 3.61051 15.3276Z" stroke="#FF9F00" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M9.00189 10.0611V7.7361" stroke="#FF9F00" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M8.99625 12.375H9.00375" stroke="#FF9F00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                Latest to do's
                                            </span>
                                            <div class="d-flex justify-content-between flex-wrap">
                                                <div class="d-items-2">
                                                    <div>
                                                        <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="1" height="1" fill="#888888" />
                                                            <rect y="3" width="1" height="1" fill="#888888" />
                                                            <rect y="6" width="1" height="1" fill="#888888" />
                                                            <rect y="9" width="1" height="1" fill="#888888" />
                                                            <rect y="12" width="1" height="1" fill="#888888" />
                                                            <rect y="15" width="1" height="1" fill="#888888" />
                                                            <rect x="4" width="1" height="1" fill="#888888" />
                                                            <rect x="4" y="3" width="1" height="1" fill="#888888" />
                                                            <rect x="4" y="6" width="1" height="1" fill="#888888" />
                                                            <rect x="4" y="9" width="1" height="1" fill="#888888" />
                                                            <rect x="4" y="12" width="1" height="1" fill="#888888" />
                                                            <rect x="4" y="15" width="1" height="1" fill="#888888" />
                                                            <rect x="8" width="1" height="1" fill="#888888" />
                                                            <rect x="8" y="3" width="1" height="1" fill="#888888" />
                                                            <rect x="8" y="6" width="1" height="1" fill="#888888" />
                                                            <rect x="8" y="9" width="1" height="1" fill="#888888" />
                                                            <rect x="8" y="12" width="1" height="1" fill="#888888" />
                                                            <rect x="8" y="15" width="1" height="1" fill="#888888" />
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <div class="form-check custom-checkbox">
                                                            <input type="checkbox" class="form-check-input" id="customCheckBox1" required>
                                                            <label class="form-check-label" for="customCheckBox1">{{ $task->name }}</label>
                                                        </div>
                                                        <span>{{ $task->created_at }}</span>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="icon-box icon-box-md bg-danger-light me-1">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12.8833 6.31213C12.8833 6.31213 12.5213 10.8021 12.3113 12.6935C12.2113 13.5968 11.6533 14.1261 10.7393 14.1428C8.99994 14.1741 7.25861 14.1761 5.51994 14.1395C4.64061 14.1215 4.09194 13.5855 3.99394 12.6981C3.78261 10.7901 3.42261 6.31213 3.42261 6.31213" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M13.8055 4.1598H2.50012" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M11.6271 4.1598C11.1037 4.1598 10.6531 3.7898 10.5504 3.27713L10.3884 2.46647C10.2884 2.09247 9.94974 1.8338 9.56374 1.8338H6.74174C6.35574 1.8338 6.01707 2.09247 5.91707 2.46647L5.75507 3.27713C5.65241 3.7898 5.20174 4.1598 4.67841 4.1598" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </div>
                                                    <div class="icon-box icon-box-md bg-primary-light">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M9.16492 13.6286H14" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.52001 2.52986C9.0371 1.91186 9.96666 1.82124 10.5975 2.32782C10.6324 2.35531 11.753 3.22586 11.753 3.22586C12.446 3.64479 12.6613 4.5354 12.2329 5.21506C12.2102 5.25146 5.87463 13.1763 5.87463 13.1763C5.66385 13.4393 5.34389 13.5945 5.00194 13.5982L2.57569 13.6287L2.02902 11.3149C1.95244 10.9895 2.02902 10.6478 2.2398 10.3849L8.52001 2.52986Z" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M7.34723 4.00059L10.9821 6.79201" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="card-body p-0">
                            <p>No Tasks available</p>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 active-p">
            <div class="card">
                <div class="card-body p-0">
                    <div class="table-responsive active-projects shorting">

                        <div class="tbl-caption">
                            <h4 class="heading mb-0">Active Projects</h4>
                        </div>
                        <table id="projects-tbl" class="table ItemsCheckboxSec">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="form-check custom-checkbox ms-0">
                                            <input type="checkbox" class="form-check-input checkAllInput" id="checkAll" required="">
                                            <label class="form-check-label" for="checkAll"></label>
                                        </div>
                                    </th>
                                    <th>Project Name</th>
                                    <th>Project Lead</th>
                                    <th>Progress</th>
                                    <th>Assignee</th>
                                    <th>Status</th>
                                    <th>Due Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($projects) && $projects->count() > 0)
                                @foreach ($projects as $project)
                                <tr>
                                    <td>
                                        <div class="form-check custom-checkbox">
                                            <input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
                                            <label class="form-check-label" for="customCheckBox2"></label>
                                        </div>
                                    </td>
                                    <td>{{ @$project->name }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ getFileVersion('/assets/images/contacts/pic1.jpg') }}" class="avatar rounded-circle" alt="">
                                            <p class="mb-0 ms-2">Liam Risher</p>
                                        </div>
                                    </td>
                                    <td class="pe-0">
                                        <div class="tbl-progress-box">
                                            <div class="progress">
                                                <div class="progress-bar bg-primary" style="width:{{ calculateProjectPercent($project) }}%; height:5px; border-radius:4px;" role="progressbar"></div>
                                            </div>
                                            <span class="text-primary">{{ calculateProjectPercent($project) }}%</span>
                                        </div>
                                    </td>
                                    <td class="pe-0">
                                        <div class="avatar-list avatar-list-stacked">
                                            @foreach ($project->users as $projectUser)
                                            <img src="{{ isset($projectUser->user->profile->avatar) ? $projectUser->user->profile->avatar : getFileVersion('/assets/images/contacts/pic1.jpg') }}" class="avatar rounded-circle" alt="">
                                            @endforeach
                                        </div>
                                    </td>
                                    <td class="pe-0">
                                        @if (@$project->setting->status == 'open')
                                        <span class="badge badge-info light border-0">Open</span>
                                        @else
                                        <span class="badge badge-primary light border-0">Inprogress</span>
                                        @endif
                                    </td>
                                    <td>
                                        <span>{{ formatDate($project->deadline_at) }}</span>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td>
                                        <span>No Projects Available</span>
                                    </td>
                                </tr>
                                @endif
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6 up-shd">
            <div class="card">
                <div class="card-header border-0 pb-1">
                    <h4 class="heading mb-0">Upcoming Schedules</h4>
                </div>
                <div class="card-body schedules-cal p-2">
                    <input type="text" class="form-control d-none" id="datetimepicker1">
                    <div class="events">
                        <h6>events</h6>
                        <div class="dz-scroll event-scroll">
                            <div class="event-media">
                                <div class="d-flex align-items-center">
                                    <div class="event-box">
                                        <h5 class="mb-0">20</h5>
                                        <span>Mon</span>
                                    </div>
                                    <div class="event-data ms-2">
                                        <h5 class="mb-0"><a href="javascript:void(0)">Development planning</a></h5>
                                        <span>w3it Technologies</span>
                                    </div>
                                </div>
                                <span class="text-secondary">12:05 PM</span>
                            </div>
                            <div class="event-media">
                                <div class="d-flex align-items-center">
                                    <div class="event-box">
                                        <h5 class="mb-0">20</h5>
                                        <span>Mon</span>
                                    </div>
                                    <div class="event-data ms-2">
                                        <h5 class="mb-0"><a href="javascript:void(0)">Development planning</a></h5>
                                        <span>w3it Technologies</span>
                                    </div>
                                </div>
                                <span class="text-secondary">12:05 PM</span>
                            </div>
                            <div class="event-media">
                                <div class="d-flex align-items-center">
                                    <div class="event-box">
                                        <h5 class="mb-0">20</h5>
                                        <span>Mon</span>
                                    </div>
                                    <div class="event-data ms-2">
                                        <h5 class="mb-0"><a href="javascript:void(0)">Development planning</a></h5>
                                        <span>w3it Technologies</span>
                                    </div>
                                </div>
                                <span class="text-secondary">12:05 PM</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6 up-shd">
            <div class="card">
                <div class="card-header pb-0 border-0">
                    <h4 class="heading mb-0">Projects Status</h4>
                    <select class="default-select status-select normal-select">
                        <option value="Today">Today</option>
                        <option value="Week">Week</option>
                        <option value="Month">Month</option>
                    </select>
                </div>
                <div class="card-body">
                    <div id="projectChart" class="project-chart"></div>
                    <div class="project-date">
                        <div class="project-media">
                            <p class="mb-0">
                                <svg class="me-2" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect y="0.5" width="12" height="12" rx="3" fill="var(--primary)" />
                                </svg>
                                Completed Projects
                            </p>
                            <span>{{ isset($projects) ? $projects->where('status', 'completed')->count() : 0 }} Projects</span>
                        </div>
                        <div class="project-media">
                            <p class="mb-0">
                                <svg class="me-2" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect y="0.5" width="12" height="12" rx="3" fill="#3AC977" />
                                </svg>
                                Progress Projects
                            </p>
                            <span>{{ isset($projects) ? $projects->where('status', 'in_progress')->count() : 0 }} Projects</span>
                        </div>
                        <div class="project-media">
                            <p class="mb-0">
                                <svg class="me-2" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect y="0.5" width="12" height="12" rx="3" fill="#FF5E5E" />
                                </svg>
                                Cancelled
                            </p>
                            <span>{{ isset($projects) ? $projects->where('status', 'completed')->count() : 0 }} Projects</span>
                        </div>
                        <div class="project-media">
                            <p class="mb-0">
                                <svg class="me-2" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect y="0.5" width="12" height="12" rx="3" fill="#FF9F00" />
                                </svg>
                                Yet to Start
                            </p>
                            <span>125 Projects</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>

<!-- Institution -->
<li class="treeview">
    <a href="#"><i class="fa fa-university"></i> <span>Institution</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
        <li><a href="{{ backpack_url('academicdetail') }}"><i class="fa fa-edit"></i> <span>Academic Details</span></a></li>
        <li><a href="{{ backpack_url('faculty') }}"><i class="fa fa-address-book"></i> <span>Faculties</span></a></li>
        <li><a href="{{ backpack_url('department') }}"><i class="fa fa-bars"></i> <span>Departments</span></a></li>
        <li><a href="{{ backpack_url('syllabus') }}"><i class="fa fa-archive"></i> <span>Syllabi</span></a></li>
        <li><a href="{{ backpack_url('course') }}"><i class="fa fa-list-ol"></i> <span>Courses</span></a></li>
        <li><a href="{{ backpack_url('batch') }}"><i class="fa fa-bar-chart"></i> <span>Batches</span></a></li>
        <li><a href="{{ backpack_url('subject') }}"><i class="fa fa-book"></i> <span>Subjects</span></a></li>
    </ul>
</li>

<!-- Students -->
<li class="treeview">
    <a href="#"><i class="fa fa-group"></i> <span>Students</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
        <li><a href="{{ backpack_url('studentcategory') }}"><i class="fa fa-share"></i> <span>Student Category</span></a></li>
        <li><a href="{{ backpack_url('student') }}"><i class="fa fa-users"></i> <span>Students</span></a></li>
    </ul>
</li>

<!-- Users, Roles Permissions -->
<li class="treeview">
    <a href="#"><i class="fa fa-group"></i> <span>Users, Roles, Permissions</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
        <li><a href="{{ backpack_url('user') }}"><i class="fa fa-user"></i> <span>Users</span></a></li>
        <li><a href="{{ backpack_url('role') }}"><i class="fa fa-group"></i> <span>Roles</span></a></li>
        <li><a href="{{ backpack_url('permission') }}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
    </ul>
</li>

<li class="treeview">
    <a href="#"><i class="fa fa-cogs"></i> <span>Advanced</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
        <li><a href="{{ backpack_url('elfinder') }}"><i class="fa fa-files-o"></i> <span>File manager</span></a></li>
        <li><a href="{{ backpack_url('backup') }}"><i class="fa fa-hdd-o"></i> <span>Backups</span></a></li>
        <li><a href="{{ backpack_url('log') }}"><i class="fa fa-terminal"></i> <span>Logs</span></a></li>
        <li><a href="{{ backpack_url('setting') }}"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
    </ul>
</li>
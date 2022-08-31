<div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text">
                MINI CRM
            </a>
        </div>
        <ul class="nav">
            <li class="nav-item  {{Request::is( 'dashboard' ) ? 'active' : '' }}">
                <a class="nav-link" href="dashboard">
                    <p>Dashboard</p>
                </a>
            </li>


            <li class= "{{Request::is( 'company' ) ? 'active' : '' }} ">
                <a class="nav-link" href="{{url('company')}}">
                    <p>Company</p>
                </a>
            </li>


            <li class= "{{Request::is( 'add-company' ) ? 'active' : '' }} ">
                <a class="nav-link" href="{{url('add-company')}}">
                    <p>Add Company</p>
                </a>
            </li>


            <li class= "{{Request::is( 'employe' ) ? 'active' : '' }} ">
                <a class="nav-link" href="{{url('employe')}}">
                    <p>Employe</p>
                </a>
            </li>


            <li class= "{{Request::is( 'add-employe' ) ? 'active' : '' }} ">
                <a class="nav-link" href="{{url('add-employe')}}">
                    <p>Add Employees</p>
                </a>
            </li>


            <li class= "{{Request::is( 'Users' ) ? 'active' : '' }} ">
                <a class="nav-link" href="{{url('Users')}}">
                    <p>Users</p>
                </a>
            </li>

            <li class= "{{Request::is( 'payment' ) ? 'active' : '' }} ">
                <a class="nav-link" href="{{url('payment')}}">
                    <p>Stripe</p>
                </a>
            </li>

        </ul>
    </div>
</div>

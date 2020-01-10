<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        Customers <span class="caret"></span>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('admin.customers.dashboard') }}">Dashboard</a>
        <a class="dropdown-item" href="{{ route('admin.customers.create') }}">Create Customer</a>
    </div>
</li>

<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        Invoicing <span class="caret"></span>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Dashboard</a>
        <a class="dropdown-item" href="#">Create Invoice</a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">Recent Invoices</a>
        <a href="#" class="dropdown-item">Overdue Invoices</a>
        <div class="dropdown-divider"></div>
        <a href="{{ route('admin.invoicing.settings.dashboard') }}" class="dropdown-item">Settings</a>
    </div>                 
</li>

<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        Payments <span class="caret"></span>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Dashboard</a>
        <a class="dropdown-item" href="#">Log a Payment</a>
        <a class="dropdown-item" href="#">Recent Payments</a>
        <a class="dropdown-item" href="#">Overdue Payments</a>
    </div>                 
</li>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.jsdelivr.net/npm/qrious@4.0.2/dist/browser/qrious.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js" integrity="sha512-pUhApVQtLbnpLtJn6DuzDD5o2xtmLJnJ7oBoMsBnzOkVkpqofGLGPaBJ6ayD2zQe3lCgCibhJBi4cj5wAxwVKA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.js" integrity="sha512-8nOl9ysfbFHP5BXuJ4s0tnBjGIRuuzdV3AmW2lT83aCO9FY0B+zhEx5PIEpp/hUX4WhhlOB0TXu2XZfAQugbeQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">
	<style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@400;500;600;700&display=swap');

* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

a {
	text-decoration: none;
}

li {
	list-style: none;
}

:root {
	--poppins: 'Poppins', sans-serif;
	--lato: 'Lato', sans-serif;

	--light: #F9F9F9;
	--blue: #3C91E6;
	--light-blue: #CFE8FF;
	--grey: #eee;
	--dark-grey: #AAAAAA;
	--dark: #342E37;
	--red: #DB504A;
	--yellow: #FFCE26;
	--light-yellow: #FFF2C6;
	--orange: #FD7238;
	--light-orange: #FFE0D3;
}

html {
	overflow-x: hidden;
}

body.dark {
	--light: #0C0C1E;
	--grey: #060714;
	--dark: #FBFBFB;
}

body {
	background: var(--grey);
	overflow-x: hidden;
}





/* SIDEBAR */
#sidebar {
	position: fixed;
	top: 0;
	left: 0;
	width: 280px;
	height: 100%;
	background: var(--light);
	z-index: 2000;
	font-family: var(--lato);
	transition: .3s ease;
	overflow-x: hidden;
	scrollbar-width: none;
}
#sidebar::--webkit-scrollbar {
	display: none;
}
#sidebar.hide {
	width: 60px;
}
#sidebar .brand {
	font-size: 24px;
	font-weight: 700;
	height: 56px;
	display: flex;
	align-items: center;
	color: var(--blue);
	position: sticky;
	top: 0;
	left: 0;
	background: var(--light);
	z-index: 500;
	padding-bottom: 20px;
	box-sizing: content-box;
}
#sidebar .brand .bx {
	min-width: 60px;
	display: flex;
	justify-content: center;
}
#sidebar .side-menu {
	width: 100%;
	margin-top: 48px;
}
#sidebar .side-menu li {
	height: 48px;
	background: transparent;
	margin-left: 6px;
	border-radius: 48px 0 0 48px;
	padding: 4px;
}
#sidebar .side-menu li.active {
	background: var(--grey);
	position: relative;
}
#sidebar .side-menu li.active::before {
	content: '';
	position: absolute;
	width: 40px;
	height: 40px;
	border-radius: 50%;
	top: -40px;
	right: 0;
	box-shadow: 20px 20px 0 var(--grey);
	z-index: -1;
}
#sidebar .side-menu li.active::after {
	content: '';
	position: absolute;
	width: 40px;
	height: 40px;
	border-radius: 50%;
	bottom: -40px;
	right: 0;
	box-shadow: 20px -20px 0 var(--grey);
	z-index: -1;
}
#sidebar .side-menu li a {
	width: 100%;
	height: 100%;
	background: var(--light);
	display: flex;
	align-items: center;
	border-radius: 48px;
	font-size: 16px;
	color: var(--dark);
	white-space: nowrap;
	overflow-x: hidden;
}
#sidebar .side-menu.top li.active a {
	color: var(--blue);
}
#sidebar.hide .side-menu li a {
	width: calc(48px - (4px * 2));
	transition: width .3s ease;
}
#sidebar .side-menu li a.logout {
	color: var(--red);
}
#sidebar .side-menu.top li a:hover {
	color: var(--blue);
}
#sidebar .side-menu li a .bx {
	min-width: calc(60px  - ((4px + 6px) * 2));
	display: flex;
	justify-content: center;
}
/* SIDEBAR */





/* CONTENT */
#content {
	position: relative;
	width: calc(100% - 280px);
	left: 280px;
	transition: .3s ease;
}
#sidebar.hide ~ #content {
	width: calc(100% - 60px);
	left: 60px;
}




/* NAVBAR */
#content nav {
	height: 56px;
	background: var(--light);
	padding: 0 24px;
	display: flex;
	align-items: center;
	grid-gap: 24px;
	font-family: var(--lato);
	position: sticky;
	top: 0;
	left: 0;
	z-index: 1000;
}
#content nav::before {
	content: '';
	position: absolute;
	width: 40px;
	height: 40px;
	bottom: -40px;
	left: 0;
	border-radius: 50%;
	box-shadow: -20px -20px 0 var(--light);
}
#content nav a {
	color: var(--dark);
}
#content nav .bx.bx-menu {
	cursor: pointer;
	color: var(--dark);
}
#content nav .nav-link {
	font-size: 16px;
	transition: .3s ease;
}
#content nav .nav-link:hover {
	color: var(--blue);
}
#content nav form {
	max-width: 400px;
	width: 100%;
	margin-right: auto;
}
#content nav form .form-input {
	display: flex;
	align-items: center;
	height: 36px;
}
#content nav form .form-input input {
	flex-grow: 1;
	padding: 0 16px;
	height: 100%;
	border: none;
	background: var(--grey);
	border-radius: 36px 0 0 36px;
	outline: none;
	width: 100%;
	color: var(--dark);
}
#content nav form .form-input button {
	width: 36px;
	height: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	background: var(--blue);
	color: var(--light);
	font-size: 18px;
	border: none;
	outline: none;
	border-radius: 0 36px 36px 0;
	cursor: pointer;
}
#content nav .notification {
	font-size: 20px;
	position: relative;
}
#content nav .notification .num {
	position: absolute;
	top: -6px;
	right: -6px;
	width: 20px;
	height: 20px;
	border-radius: 50%;
	border: 2px solid var(--light);
	background: var(--red);
	color: var(--light);
	font-weight: 700;
	font-size: 12px;
	display: flex;
	justify-content: center;
	align-items: center;
}
#content nav .profile img {
	width: 36px;
	height: 36px;
	object-fit: cover;
	border-radius: 50%;
}
#content nav .switch-mode {
	display: block;
	min-width: 50px;
	height: 25px;
	border-radius: 25px;
	background: var(--grey);
	cursor: pointer;
	position: relative;
}
#content nav .switch-mode::before {
	content: '';
	position: absolute;
	top: 2px;
	left: 2px;
	bottom: 2px;
	width: calc(25px - 4px);
	background: var(--blue);
	border-radius: 50%;
	transition: all .3s ease;
}
#content nav #switch-mode:checked + .switch-mode::before {
	left: calc(100% - (25px - 4px) - 2px);
}
/* NAVBAR */





/* MAIN */
#content main {
	width: 100%;
	padding: 36px 24px;
	font-family: var(--poppins);
	max-height: calc(100vh - 56px);
	overflow-y: auto;
}
#content main .head-title {
	display: flex;
	align-items: center;
	justify-content: space-between;
	grid-gap: 16px;
	flex-wrap: wrap;
}
#content main .head-title .left h1 {
	font-size: 36px;
	font-weight: 600;
	margin-bottom: 10px;
	color: var(--dark);
}
#content main .head-title .left .breadcrumb {
	display: flex;
	align-items: center;
	grid-gap: 16px;
}
#content main .head-title .left .breadcrumb li {
	color: var(--dark);
}
#content main .head-title .left .breadcrumb li a {
	color: var(--dark-grey);
	pointer-events: none;
}
#content main .head-title .left .breadcrumb li a.active {
	color: var(--blue);
	pointer-events: unset;
}
#content main .head-title .btn-download {
	height: 36px;
	padding: 0 16px;
	border-radius: 36px;
	background: var(--blue);
	color: var(--light);
	display: flex;
	justify-content: center;
	align-items: center;
	grid-gap: 10px;
	font-weight: 500;
}




#content main .box-info {
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
	grid-gap: 24px;
	margin-top: 36px;
}
#content main .box-info li {
	padding: 24px;
	background: var(--light);
	border-radius: 20px;
	display: flex;
	align-items: center;
	grid-gap: 24px;
}
#content main .box-info li .bx {
	width: 80px;
	height: 80px;
	border-radius: 10px;
	font-size: 36px;
	display: flex;
	justify-content: center;
	align-items: center;
}
#content main .box-info li:nth-child(1) .bx {
	background: var(--light-blue);
	color: var(--blue);
}
#content main .box-info li:nth-child(2) .bx {
	background: var(--light-yellow);
	color: var(--yellow);
}
#content main .box-info li:nth-child(3) .bx {
	background: var(--light-orange);
	color: var(--orange);
}
#content main .box-info li .text h3 {
	font-size: 24px;
	font-weight: 600;
	color: var(--dark);
}
#content main .box-info li .text p {
	color: var(--dark);	
}





#content main .table-data {
	display: flex;
	flex-wrap: wrap;
	grid-gap: 24px;
	margin-top: 24px;
	width: 100%;
	color: var(--dark);
}
#content main .table-data > div {
	border-radius: 20px;
	background: var(--light);
	padding: 24px;
	overflow-x: auto;
}
#content main .table-data .head {
	display: flex;
	align-items: center;
	grid-gap: 16px;
	margin-bottom: 24px;
}
#content main .table-data .head h3 {
	margin-right: auto;
	font-size: 24px;
	font-weight: 600;
}
#content main .table-data .head .bx {
	cursor: pointer;
}

#content main .table-data .order {
	flex-grow: 1;
	flex-basis: 500px;
}
#content main .table-data .order table {
	width: 100%;
	border-collapse: collapse;
}
#content main .table-data .order table th {
	padding-bottom: 12px;
	font-size: 13px;
	text-align: left;
	border-bottom: 1px solid var(--grey);
}
#content main .table-data .order table td {
	padding: 16px 0;
}
#content main .table-data .order table tr td:first-child {
	display: flex;
	align-items: center;
	grid-gap: 12px;
	padding-left: 6px;
}
#content main .table-data .order table td img {
	width: 36px;
	height: 36px;
	border-radius: 50%;
	object-fit: cover;
}
#content main .table-data .order table tbody tr:hover {
	background: var(--grey);
}
#content main .table-data .order table tr td .status {
	font-size: 10px;
	padding: 6px 16px;
	color: var(--light);
	border-radius: 20px;
	font-weight: 700;
}
#content main .table-data .order table tr td .status.completed {
	background: var(--blue);
}
#content main .table-data .order table tr td .status.process {
	background: var(--yellow);
}
#content main .table-data .order table tr td .status.pending {
	background: var(--orange);
}


#content main .table-data .todo {
	flex-grow: 1;
	flex-basis: 300px;
}
#content main .table-data .todo .todo-list {
	width: 100%;
}
#content main .table-data .todo .todo-list li {
	width: 100%;
	margin-bottom: 16px;
	background: var(--grey);
	border-radius: 10px;
	padding: 14px 20px;
	display: flex;
	justify-content: space-between;
	align-items: center;
}
#content main .table-data .todo .todo-list li .bx {
	cursor: pointer;
}
#content main .table-data .todo .todo-list li.completed {
	border-left: 10px solid var(--blue);
}
#content main .table-data .todo .todo-list li.not-completed {
	border-left: 10px solid var(--orange);
}
#content main .table-data .todo .todo-list li:last-child {
	margin-bottom: 0;
}
/* MAIN */
/* CONTENT */









@media screen and (max-width: 768px) {
	#sidebar {
		width: 200px;
	}

	#content {
		width: calc(100% - 60px);
		left: 200px;
	}

	#content nav .nav-link {
		display: none;
	}
}






@media screen and (max-width: 576px) {
	#content nav form .form-input input {
		display: none;
	}

	#content nav form .form-input button {
		width: auto;
		height: auto;
		background: transparent;
		border-radius: none;
		color: var(--dark);
	}

	#content nav form.show .form-input input {
		display: block;
		width: 100%;
	}
	#content nav form.show .form-input button {
		width: 36px;
		height: 100%;
		border-radius: 0 36px 36px 0;
		color: var(--light);
		background: var(--red);
	}

	#content nav form.show ~ .notification,
	#content nav form.show ~ .profile {
		display: none;
	}

	#content main .box-info {
		grid-template-columns: 1fr;
	}

	#content main .table-data .head {
		min-width: 420px;
	}
	#content main .table-data .order table {
		min-width: 420px;
	}
	#content main .table-data .todo .todo-list {
		min-width: 420px;
	}
}
.head-title {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.search-bar {
    display: flex;
    align-items: center;
    margin-right: 2rem;
}

.search-bar input {
    width: 20rem;
    padding: 0.5rem;
    border: 1px solid #ccc;
    border-radius: 0.5rem;
}

.search-bar button {
    padding: 0.5rem;
    background-color: #4caf50;
    color: white;
    border: none;
    border-radius: 0.5rem;
    cursor: pointer;
}

.search-bar button:hover {
    background-color: #45a049;
}
.add-patient-button {
	display: block;
	margin: 20px auto;
	padding: 10px;
	background-color: #4CAF50;
	color: white;
	border: none;
	cursor: pointer;
   }
   table { font-family: arial, sans-serif; border-collapse: collapse; width: 100%; } 
    td, th { border: 1px solid #dddddd; text-align: left; padding: 8px; } 
    tr:nth-child(even) { background-color: #dddddd; } 
    
    </style>
	<style> 
      body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        table {
            font-family: Arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 12px;
        }

        th {
            background-color: #f1f1f1;
            color: black;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .btn {
            display: inline-block;
            padding: 8px 12px;
            margin: 5px;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s, transform 0.2s;
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .btn-info {
            background-color: #17a2b8;
            color: white;
        }

        .btn-info:hover {
            background-color: #138496;
            transform: scale(1.05);
        }

        .btn-warning {
            background-color: #ffc107;
            color: black;
        }

        .btn-warning:hover {
            background-color: #e0a800;
            transform: scale(1.05);
        }

        .btn-danger {
            background-color: #dc3545;
            color: white;
        }

        .btn-danger:hover {
            background-color: #c82333;
            transform: scale(1.05);
        }
        /* General Container */
.container {
    max-width: 800px; /* Adjust for desired width */
    margin: 0 auto; /* Center the container */
    padding: 20px;
    background-color: #f9f9f9; /* Light background */
    border-radius: 8px; /* Rounded corners */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
}

/* Header */
header {
    font-size: 24px; /* Header size */
    font-weight: bold;
    margin-bottom: 20px; /* Space below header */
    text-align: center; /* Centered text */
}

/* Form Styles */
.form {
    margin-top: 20px; /* Space above forms */
}

.details {
    margin-bottom: 20px; /* Space between sections */
}

.title {
    font-size: 20px; /* Section title size */
    margin-bottom: 15px; /* Space below section title */
}

/* Input Fields */
.input-field {
    margin-bottom: 15px; /* Space below input fields */
}

.label {
    display: block; /* Block display for labels */
    margin-bottom: 5px; /* Space below label */
    font-weight: 600; /* Bold labels */
}

input[type="text"],
input[type="email"],
input[type="password"] {
    width: 100%; /* Full width */
    padding: 10px; /* Padding for comfort */
    border: 1px solid #ccc; /* Light border */
    border-radius: 4px; /* Rounded borders */
    transition: border 0.3s; /* Smooth border transition */
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="password"]:focus {
    border-color: #007bff; /* Highlight on focus */
    outline: none; /* Remove default outline */
}

/* Button Styles */
.saveBtn,
.btn-primary {
    background-color: #007bff; /* Primary button color */
    color: white; /* Text color */
    padding: 10px 20px; /* Button padding */
    border: none; /* Remove default border */
    border-radius: 4px; /* Rounded borders */
    cursor: pointer; /* Pointer cursor on hover */
    transition: background 0.3s; /* Smooth background transition */
}

.saveBtn:hover,
.btn-primary:hover {
    background-color: #0056b3; /* Darker shade on hover */
}

.cancel {
    background-color: #dc3545; /* Cancel button color */
    color: white; /* Text color */
    padding: 10px 20px; /* Button padding */
    border: none; /* Remove default border */
    border-radius: 4px; /* Rounded borders */
    cursor: pointer; /* Pointer cursor on hover */
    transition: background 0.3s; /* Smooth background transition */
}

.cancel:hover {
    background-color: #c82333; /* Darker shade on hover */
}

/* Alert Styles */
.alert {
    padding: 10px 20px; /* Padding for alerts */
    margin-top: 15px; /* Space above alerts */
    border-radius: 4px; /* Rounded corners */
}

.alert-success {
    background-color: #d4edda; /* Light green for success */
    color: #155724; /* Dark green text */
    border: 1px solid #c3e6cb; /* Green border */
}

/* Password Criteria Styles */
#criteria {
    display: none; /* Hidden by default */
    margin-top: 10px; /* Space above criteria */
    background-color: #f8f9fa; /* Light background */
    padding: 10px; /* Padding for criteria */
    border: 1px solid #ced4da; /* Light border */
    border-radius: 4px; /* Rounded borders */
}

.invalid {
    color: red; /* Red for invalid criteria */
}

.valid {
    color: green; /* Green for valid criteria */
}

/* Button for Back */
.backBtn {
    background-color: #6c757d; /* Grey color */
    color: white; /* Text color */
    padding: 10px 20px; /* Button padding */
    border: none; /* Remove default border */
    border-radius: 4px; /* Rounded borders */
    cursor: pointer; /* Pointer cursor on hover */
    transition: background 0.3s; /* Smooth background transition */
}

.backBtn:hover {
    background-color: #5a6268; /* Darker grey on hover */
}

/* Media Query for Responsive Design */
@media (max-width: 600px) {
    .container {
        padding: 15px; /* Less padding on small screens */
    }

    header {
        font-size: 20px; /* Smaller header size */
    }
}

    
    </style>
	<script src="https://cdn.jsdelivr.net/npm/qrious@4.0.2/dist/browser/qrious.min.js"></script>
	<title>MediAI</title>
	
</head>
<body>


<section id="sidebar">
<a href="{{ url('/redirects') }}" class="brand" style="display: flex; align-items: center; justify-content: flex-start;">
    <img src="{{ url('img/logo.png') }}" alt="Logo" style="height: 60px; width: auto; display: block;">
    <span class="text" style="
        font-size: 24px; 
        font-weight: 700; 
        color: var(--blue); 
        font-family: var(--poppins); 
        text-transform: uppercase; 
        letter-spacing: 1px; 
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        margin-left: 10px;
    ">MediAI</span>
</a>


    </a>
    <ul class="side-menu top">
        <li>
            <a href="{{ url('/redirects') }}">
                <i class='bx bxs-dashboard'></i>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ route('patients.index') }}">
                <i class='bx bxs-user'></i>
                <span class="text">Patients</span>
            </a>
        </li>
        <li>
            <a href="{{ route('drugs.index') }}">
                <i class='bx bxs-capsule'></i>
                <span class="text">Drugs</span>
            </a>
        </li>
        <li>
            <a href="{{ route('prescriptions.index') }}">
                <i class='bx bx-qr-scan'></i>
                <span class="text">Prescriptions</span>
            </a>
        </li>
        <li>
            <a href="{{ route('clinic.index') }}">
                <i class='bx bxs-group'></i>
                <span class="text">Clinic</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/medicine-usage-chart') }}">
                <i class='bx bx-line-chart'></i>
                <span class="text">Analytics</span>
            </a>
        </li>

        <!-- Only display "Users" link if the logged-in user is an admin -->
        @if(auth()->check() && auth()->user()->user_type == 'Admin')
        <li>
            <!-- Instead of going to the users list, redirect to the register page -->
            <a href="{{ route('users.index') }}">
                <i class='bx bxs-group'></i>
                <span class="text">User</span>
            </a>
        </li>
        @endif
    </ul>
    <ul class="side-menu">
        <li class="active">
            <a href="{{ url('/setting') }}">
                <i class='bx bxs-cog'></i>
                <span class="text">Settings</span>
            </a>
        </li>
        <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                             this.closest('form').submit();">
                    <i class='bx bx-log-out' style='color: red;'></i>
                    <span style='color: red;'>{{ __('Log Out') }}</span>
                </x-dropdown-link>
            </form>
        </li>
    </ul>
</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link"></a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			
			<a href="#" class="profile">
				
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					
				</div>
				
			</div>

			<div class="container">
        <h2>Update your profile</h2>
        <br>
		

        <div class="mb-4">
<div class="container">
        <header>Settings</header>
        <form action="{{ route('updatep') }}" method="POST">
    @csrf
    @method('PUT')
            <div class="form first">
                <div class="details personal">
                    <span class="title">Edit Profile</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" placeholder="Enter your first name" name="name" value="{{ $user->name }}" required>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="email" placeholder="Enter your email" name="email" value="{{ $user->email }}" required>
                        </div>
                       

                        <br><br><br>
                        <button  type="submit" class="saveBtn">
                        <span class="btnText">Save</span>
                        <i class="uil uil-navigator"></i>
                    </button>

                    </div>
               </form>
                </div>
                <form method="POST" action="{{ route('change-password', ['id' => Auth::user()->id]) }}" enctype="multipart/form-data">
        @csrf    
        <div class="modal-body">
            <!--form start -->
            <div class="mb-3">
            <label for="oldpw" class="form-label">Old Password</label>
            <input id="oldPassword" type="password" class="form-control" name = "oldpw" placeholder="Enter your old password">
            <p id="confirmOldPassword" style="color: red; display: none;">Incorrect password</p>
            </div>
            
            <div class="mb-3">
            <label for="newpw" class="form-label">New Password</label>
            <input type="password" class="form-control" id="psw" name="newpw" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required placeholder="Enter a password that meets the criteria">
            </div>
            <div id="criteria">
            New password must contain the following:
            <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
            <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
            <p id="number" class="invalid">A <b>number</b></p>
            <p id="specialChar" class="invalid">A <b>special character</b></p>
            <p id="length" class="invalid">Minimum <b>8 characters</b></p>
            </div>
            <div class="mb-3">
                <label for="cpw" class="form-label">Confirm New Password</label>
                <input type="password" class="form-control" name="cpw" id="confirmPassword" placeholder="Re-enter new password">
                <p id="confirmErrorMessage" style="color: red; display: none;">Passwords do not match</p>
            </div>

            
            <!-- end of form -->

        </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
						<i class="uil uil-navigator"></i>
					</button>
                    <button type="cancel" class="cancel"> <a href="{{url('admin')}}" style= "text-decoration: none; color: white;">
						<span >Cancel</span>
						</a>
					</button>

                    </div>
                   


                </div>
            </div>
            <button type="button" class="backBtn" onclick="goBack()">
        <span class="btnText">Back</span>
        <i class="uil uil-navigator"></i>
    </button>


            <script>
                /*===== LINK ACTIVE =====*/
const linkColor = document.querySelectorAll('.nav_link')

function colorLink() {
    if (linkColor) {
        linkColor.forEach(l => l.classList.remove('active'))
        this.classList.add('active')
    }
}
linkColor.forEach(l => l.addEventListener('click', colorLink))
      </script>
      <script>
        var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");


// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
    document.getElementById("criteria").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
    document.getElementById("criteria").style.display = "none";
}

//confirm password not matching new password error
var confirmPasswordInput = document.getElementById("confirmPassword");
var confirmErrorMessage = document.getElementById("confirmErrorMessage");

confirmPasswordInput.onkeyup = function() {
    if (confirmPasswordInput.value !== myInput.value) {
        confirmErrorMessage.style.display = "block";
    } else {
        confirmErrorMessage.style.display = "none";
    }
};


// When the user starts to type something inside the password field
myInput.onkeyup = function() {
    // console.log("passwordddd");
    // Validate lowercase letters
    var lowerCaseLetters = /[a-z]/g;
    if (myInput.value.match(lowerCaseLetters)) {
        letter.classList.remove("invalid");
        letter.classList.add("valid");
    } else {
        letter.classList.remove("valid");
        letter.classList.add("invalid");
    }

    // Validate capital letters
    var upperCaseLetters = /[A-Z]/g;
    if (myInput.value.match(upperCaseLetters)) {
        capital.classList.remove("invalid");
        capital.classList.add("valid");
    } else {
        capital.classList.remove("valid");
        capital.classList.add("invalid");
    }

    // Validate numbers
    var numbers = /[0-9]/g;
    if (myInput.value.match(numbers)) {
        number.classList.remove("invalid");
        number.classList.add("valid");
    } else {
        number.classList.remove("valid");
        number.classList.add("invalid");
    }




    // Validate length
    if (myInput.value.length >= 8) {
        length.classList.remove("invalid");
        length.classList.add("valid");
    } else {
        length.classList.remove("valid");
        length.classList.add("invalid");
    }

    var specialCharacters = /[-!$%^&*()_+|~=`{}\[\]:";'<>?,.\/@#]/g;
    if (myInput.value.match(specialCharacters)) {
        specialChar.classList.remove("invalid");
        specialChar.classList.add("valid");
    } else {
        specialChar.classList.remove("valid");
        specialChar.classList.add("invalid");
    }


}
function goBack() {
        window.history.back();
    }
    function goBack() {
        window.history.back();
    }
      </script>
            </script>

            @if(session('success'))
            <div class="alert alert-success">
              {{session('success')}}
            </div>
            @endif
           
</body>
</html>
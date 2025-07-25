<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthCare Plus - Appointment Booking</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <style>
        body {
            background: linear-gradient(to right, #e0f7fa, #b3e5fc);
        }
        .landing-card {
            background-color: #ffffff;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            animation: fadeIn 1s ease-out;
            max-width: 700px;
            width: 100%;
        }
        h1, h2 {
            font-weight: 700;
        }
        .healthcare-title {
            font-size: 2.5rem;
            font-weight: 800;
            color: #0066CC;
        }
        .subtitle {
            font-size: 1.5rem;
            font-weight: 500;
            color: #99a1ebff; /* Light Sky Blue */
        }
        .btn-landing {
            font-weight: bold;
            transition: transform 0.2s ease, box-shadow 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .btn-landing:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-30px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100 p-3">
    
    <div class="card landing-card p-4 p-md-5 text-center">
        <h1 class="healthcare-title mb-3">💙 HealthCare Plus 💙</h1>
        <h2 class="subtitle mb-4">Doctor Appointment Booking System</h2>
        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
            <a href="{{ route('login') }}" class="btn btn-primary btn-lg px-4 gap-3 btn-landing">Patient Portal</a>
            <a href="{{ route('staff.login') }}" class="btn btn-success btn-lg px-4 btn-landing">Staff Portal</a>
        </div>
    </div>

</body>
</html>
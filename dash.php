<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI-Powered Location Tracking Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Dashboard</h2>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#analytics">Analytics</a></li>
            <li><a href="#alerts">Alerts</a></li>
            <li><a href="#settings">Settings</a></li>
        </ul>
    </div>

    <!-- Main content -->
    <div class="main-content">
        <!-- Top bar -->
        <div class="top-bar">
            <h1>AI-Powered Location Tracking</h1>
            <div class="user-info">
                <span>Welcome, User</span>
                <button>Logout</button>
            </div>
        </div>

        <!-- Dashboard Content -->
        <div class="dashboard">
            <!-- Key Statistics -->
            <div class="stats">
                <div class="card">
                    <h3>Total Alerts</h3>
                    <p>23</p>
                </div>
                <div class="card">
                    <h3>Total Panic Button Triggers</h3>
                    <p>5</p>
                </div>
                <div class="card">
                    <h3>Active Users</h3>
                    <p>102</p>
                </div>
            </div>

            <!-- Analytics Chart -->
            <div class="analytics">
                <h2>Alert Statistics Over Time</h2>
                <canvas id="alertChart"></canvas>
            </div>

            <!-- Location Map -->
            <div class="map">
                <h2>Live Location</h2>
                <div id="map"></div>
            </div>
        </div>
    </div>

    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
    <script src="script.js"></script>
</body>
</html>

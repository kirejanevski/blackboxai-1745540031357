<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Table View</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .table-container {
            overflow-x: auto;
            max-width: 100vw;
        }
        th, td {
            min-width: 120px;
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="p-6">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-semibold text-gray-800">Table View</h1>
            <form method="POST" action="logout.php">
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition-colors flex items-center">
                    <i class="fas fa-sign-out-alt mr-2"></i>Logout
                </button>
            </form>
        </div>

        <!-- Table Container -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <div class="table-container">
                <table class="min-w-full border-collapse">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="border-b p-4 text-left text-sm font-semibold text-gray-600">Row</th>
                            <?php
                            for ($i = 1; $i <= 20; $i++) {
                                echo "<th class=\"border-b p-4 text-left text-sm font-semibold text-gray-600\">Column $i</th>";
                            }
                            ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($row = 1; $row <= 12; $row++) {
                            echo '<tr class="hover:bg-gray-50">';
                            echo "<td class=\"border-b p-4 text-sm text-gray-700\">Row $row</td>";
                            for ($col = 1; $col <= 20; $col++) {
                                echo "<td class=\"border-b p-4 text-sm text-gray-700\">Data $row-$col</td>";
                            }
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

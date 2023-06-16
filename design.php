<!DOCTYPE html>
<html>
<head>
    <title>Entity</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Entity</h1>
    
    <?php
        // Zavolání řídicího programu index.php
        require 'index.php';
        
        // Zobrazení dat v podobě HTML tabulky
        echo '<h2>Rodiče</h2>';
        echo '<table>';
        echo '<tr><th>ID</th><th>Jméno</th><th>Příjmení</th></tr>';
        foreach ($rodice as $rodic) {
            echo '<tr>';
            echo '<td>' . $rodic['id'] . '</td>';
            echo '<td>' . $rodic['jmeno'] . '</td>';
            echo '<td>' . $rodic['prijmeni'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
        
        echo '<h2>Děti</h2>';
        echo '<table>';
        echo '<tr><th>ID</th><th>Jméno</th><th>Rodič ID</th></tr>';
        foreach ($dite as $dite) {
            echo '<tr>';
            echo '<td>' . $dite['id'] . '</td>';
            echo '<td>' . $dite['jmeno'] . '</td>';
            echo '<td>' . $dite['rodic_id'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    ?>
</body>
</html>


    <?php
	echo "Варіант №4";
	echo " Написати сценарій виведення у вигляді таблиць інформації, взятої з файлу. Передбачити формат зберігання такої інформації, щоб її було зручно відображати як таблицю. Рекомендується познайомитися з форматом CSV (але ніхто не заважає використовувати і свої довільні роздільники).<br>";
    echo "<h2>Інформація з файлу CSV</h2>";
    function openFileCSV($csvFile) {
        $file = fopen($csvFile, 'r');

        if ($file !== false) {
            echo '<table>';
            $firstRow = true;

            while (($row = fgetcsv($file)) !== false) {
                echo '<tr>';
                foreach ($row as $value) {
                    if ($firstRow) {
                        echo '<th>' . $value . '</th>';
                    } else {
                        echo '<td>' . $value . '</td>';
                    }
                }
                echo '</tr>';
                $firstRow = false;
            }

            echo '</table>';
            fclose($file);
        } else {
            echo 'Помилка відкриття файлу';
        }
    }

    openFileCSV('lab_4.csv'); 
    ?>
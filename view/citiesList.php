 <section>
<?php
    if (!empty($countries)) {
        echo "<h2>" . count($countries) . " Results</h2>";
        foreach ($countries as $result) {
            echo "<p>{$result['name']} - Language: {$result['language']}</p>";
        }
    } else if ($name) {
        echo "<p>No Results.</p>";
    }
?>
</section>

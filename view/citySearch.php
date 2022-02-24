<section>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="GET">
        <h2 id="enter-a-language">Enter a Language:</h2>
        <input type="text" id="language" name="name" aria-labelledby="enter-a-language" required>
        <button>Submit</button>
    </form>
</section>
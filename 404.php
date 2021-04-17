<?php
get_header();

?>
<div class="container not-found__container">
    <section class="text-center">
        <h1 class="not-found__title">404</h1>
        <h2 class="not-found__subtitle"> Strony nie znaleziono!</h2>
        <p>Wygląda na to, że adres strony której szukasz jest nieprawidłowy.</p>
        <p><a class="text-secondary"
                href="/">Wróć do naszej strony</a></p>
    </section>
</div>
<?php

get_footer();
?>
<style>
.not-found__container {
    margin: 150px auto 100px;
}

.text-center {
    text-align: center !important;
}

.not-found__title {
    color: #cc273f;
    font-weight: 400;
    font-size: 5rem !important;
}

.not-found__subtitle {
    font-weight: 400;
    font-size: 2rem !important;
}
</style>
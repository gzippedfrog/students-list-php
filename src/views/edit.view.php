<?php view('partials/head', ['title' => $title]) ?>

<?php view('partials/student-form', [
    'student' => $student,
    'errors' => $errors,
]) ?>

<?php view('partials/footer') ?>
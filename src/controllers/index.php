<?php

view('index', [
    'students' => Student::get($_GET['search'] ?? ''),
]);
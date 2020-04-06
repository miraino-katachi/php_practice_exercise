<?php
$path = './images/' . $_FILES['image_file']['name'];
move_uploaded_file($_FILES['image_file']['tmp_name'], $path);

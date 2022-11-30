<?php
$category = $_POST['category_name'];
if (empty($category)) {
    $message = "
     <script>
     toastr.error('Provide the category name.');
     </script>
     ";
}

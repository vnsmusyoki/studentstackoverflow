<?php
$category = $_POST['category_name'];
$description = $_POST['category_description'];
if (empty($category) || empty($description)) {
    $message = "
     <script>
     toastr.error('Provide the details asked below.');
     </script>
     ";
} else if (!preg_match("/^[a-zA-z ]*$/", $category)) {
    $message = "
<script>
toastr.error('Category Name format is incorrect');
</script>
";
} else {
    $checkcategory = $conn->prepare("SELECT * FROM `categories` WHERE category_name=?");
    $checkcategory->execute([$category]);
    $checkcategory = $checkcategory->fetch();

    if (empty($checkcategory)) {
        $addcategory = "INSERT INTO categories (`category_name`, `description`) VALUES(?, ?)";
        $checkadd = $conn->prepare($addcategory);
        $queryadd = $checkadd->execute([$category, $description]);
        if ($queryadd === true) {

            echo "<script>
                                window.location.replace('manage-categories.php');
                                </script>";
        } else {
            $message = "
            <script>
                toastr.error('An error occurred while uploaded .');
            </script>";
        }
    } else {
        $message = "
        <script>
        toastr.error('Category Name already exists');
        </script>
        ";
    }
}

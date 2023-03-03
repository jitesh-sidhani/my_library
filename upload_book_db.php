<?php
include "db_conn.php";

if (isset($_POST['upload']))
{
    $name=$_POST['name_book'];
    $category=$_POST['Category'];
    $book=$_POST['book_file'];
    $book_temp_loc=$_FILES['book_file']['tmp_name'];
    $book_store="pdf/".$book;

    move_uploaded_file($book_temp_loc,$book_store);
    

    $sql="INSERT INTO books(name_book,Category,book_file)
          values('$name','$category','$book')";
    if(mysqli_query($conn,$sql)){

        echo"<script>alert('new record insert success')</script>";
        echo "<script>window.open('index.html','_self')</script>";
    }else
    {
        echo"error:".mysqli_error($conn);
    }
    mysqli_close($conn);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload a Book Yourself!!</title>
</head>
<body style="  background: #1690A7;
display: flex;
justify-content: center;
align-items: center;
position:fixed; left:80px; top:20px;
flex-direction: column;  
background-image: url('https://img.freepik.com/premium-photo/front-view-pile-books-with-copy-space_23-2148255858.jpg?w=1500');">

    <h1 style="color:white;">Upload a Book Yourself!!</h1>

    <h2 style="color:red;font-size: 25px;background-color: black;">(Only pdf format is accepted)</h2><br>
    <Form  Method="post" Action="upload_book_db.php" enctype="multipart/form-data">
        <label for= name style="font-size:25px ;">Name</label>
        <input style="font-size:25px;" type="text" placeholder="Enter name of book" name="name_book" ></input>
        <br><br><br>
      
        <label style="font-size:25px;" for="priority">Category</label>
        <select style="font-size:25px;" id="priority" name="Category">
            <option value="Action & Adventure">Action & Adventure</option>
            <option value="Romance Novel" selected>Romance Novel</option>
            <option value="Horror">Horror</option>
            <option value="Study">Study</option>
            <option value="Stories">Stories</option>
        </select>
        <br><br><br>

        <label style="font-size:25px;">
            <input  type="checkbox" name="terms">
            I agree to the terms and conditions
        </label>

        <br><br><br>

        <input style="font-size: 20px ;" type="File" accept=".pdf" name="book_file" ><br><br><br>

        <button name="upload" style="
        font-size:20px ;
        background: #555;
        color: #fff;
        border-radius: 5px;
        border: none;">Upload Book</button><br>

      

    </Form>
</body>
</html>
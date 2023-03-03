<!DOCTYPE html>



<head>
    
    <style>
  body {
    background-image: url("https://www.nsvrc.org/sites/default/files/2021-06/librarybloggraphic2.png");
    background-color: #cccccc;
  }
  h1 {
     
      
  text-align: left;
   
}
h2 {
         
  text-align: left;
    
}

input{
  size: 200px;
}

button{
  size: 20px;
}
</style>



  <title>Read out which Book ?</title>
  
  </head>



<body>
    
        
        
    </div>
        
  <nav>
    <ul id="MenuItems">
      <li><a href="login.php">Logout</a></li>
      <li><a href="page_3.php">Languages</a></li>
      <li><a href="favourite.html">Add to favoutrites</a></li>

      

      
      
    </ul>
    
  </nav>
  
  </div>
  
    <div class="container">
      <div id="title" class="center">
        <h1 id="header" class="text-center mt-5">Search your book!!</h1>
        <div class="row">
          <div id="input" class="input-group mx-auto col-lg-6 col-md-8 col-sm-12">
            <input id="search-box" type="text" class="form-control" placeholder="Search Book"  >
            <button id="search" class="btn btn-primary" onclick="">Search</button>

            


        </div>
        </div>
      </div>
      <div class="book-list" >
        <h2 class="text-center">Search Result</h2>
        <div id="list-output" class="">
          <div class="row">
            <!-- card  -->

          </div>

        </div>
      </div>
    </div>


</body>

</html>
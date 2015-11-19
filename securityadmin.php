<?php
	if($_SESSION['admin_username']!='Admin'){
		include 'headadmin.php';
	}else{
		include 'headmember.php';
	}
?>
<br /><h3>Mobile Security Data Management</h3>


<!-- <button class="btn btn-success admin" style="margin-left: 10px" onclick="showLibraryForm()">Book Title</button>

<form action="" method="get" class="form-inline" style="display: inline-block;margin-left: 10px">
    <input type="text" class="form-control" name="query" value="">
    <button type="submit" class="btn btn-primary">Search</button>
</form>
<div id="addBook" style="margin: 10px; display: none">
    <form action="book_add.php" method="post" class="form" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">ISBN</label>
            <input type="text" class="form-control" id="ISBN" name="ISBN" placeholder="ISBN">
        </div>
        <div class="form-group">
            <label for="address">Book Name</label>
            <input type="text" class="form-control" id="Book_title" name="Book_title" placeholder="Book_title">
        </div>
        <div class="form-group">
            <label for="address">Date of Publication</label>
            <input type="text" class="form-control" id="Date_of_publication" name="Date_of_publication" placeholder="Input Date of Publication （mm/dd/yyyy）">
        </div>
        <div class="form-group">
            <label for="address">Author Name</label>
            <input type="text" class="form-control" id="Author_name" name="Author_name">
        </div>
        <div class="form-group">
            <label for="address">Category</label>
            <input type="text" class="form-control" id="Category" name="Category" value=0>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>

--> 
<?php
include 'db.php';

//connect to database
$con = mysqli_connect($host, $username, $password, $database);
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL DB: " . mysqli_connect_error();
}

if(isset($_GET["query"])){
    $query = $_GET["query"];
    $result = mysqli_query($con, "SELECT * FROM book WHERE Book_title LIKE '%$query%'");
}
else{
    $result = mysqli_query($con, "SELECT * FROM book");
}


echo "<table class='table table-striped table-bordered' style='margin-top: 10px'><tr>
        <th>ISBN</th>
        <th>Book_title</th>
        <th>Date_of_publication</th>
        <th>Author_name</th>
        <th>Category</th>
      </tr>";
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['ISBN'] . "</td><td>"
        ."<a href='items.php?isbn=".$row['ISBN']."'>". $row['Book_title'] . "</a></td><td>"
        . $row['Date_of_publication'] . "</td><td>"
        . $row['Author_name'] . "</td><td>"
        . $row['Category'] . "</td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

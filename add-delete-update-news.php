<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Morocco Manage News</title>

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
<link rel="stylesheet" href="css/style.css">


<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<style>
#myBtn{
	position: fixed;
	bottom: 5px;
	right: 5px;
}
body {
	color: #566787;
	background: #f5f5f5;
	font-family: 'Varela Round', sans-serif;
	font-size: 20px;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
	background: #fff;
	padding: 20px 25px;
	border-radius: 3px;
	min-width: 1000px;
	box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {        
	padding-bottom: 15px;
	background: #435d7d;
	color: #fff;
	padding: 16px 30px;
	min-width: 100%;
	margin: -20px -25px 10px;
	border-radius: 3px 3px 0 0;
}
.table-title h2 {
	margin: 5px 0 0;
	font-size: 24px;
}
.table-title .btn-group {
	float: right;
}
.table-title .btn {
	color: #fff;
	float: right;
	font-size: 13px;
	border: none;
	min-width: 50px;
	border-radius: 2px;
	border: none;
	outline: none !important;
	margin-left: 10px;
}
.table-title .btn i {
	float: left;
	font-size: 21px;
	margin-right: 5px;
}
.table-title .btn span {
	float: left;
	margin-top: 2px;
}
table.table tr th, table.table tr td {
	border-color: #e9e9e9;
	padding: 12px 15px;
	vertical-align: middle;
}
table.table tr th:first-child {
	width: 60px;
}
table.table tr th:last-child {
	width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
	background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
	background: #f5f5f5;
}
table.table th i {
	font-size: 13px;
	margin: 0 5px;
	cursor: pointer;
}	
table.table td:last-child i {
	opacity: 0.9;
	font-size: 22px;
	margin: 0 5px;
}
table.table td a {
	font-weight: bold;
	color: #566787;
	display: inline-block;
	text-decoration: none;
	outline: none !important;
}
table.table td a:hover {
	color: #2196F3;
}
table.table td a.edit {
	color: #FFC107;
}
table.table td a.delete {
	color: #F44336;
}
table.table td i {
	font-size: 19px;
}
table.table .avatar {
	border-radius: 50%;
	vertical-align: middle;
	margin-right: 10px;
}
.pagination {
	float: right;
	margin: 0 0 5px;
}
.pagination li a {
	border: none;
	font-size: 13px;
	min-width: 30px;
	min-height: 30px;
	color: #999;
	margin: 0 2px;
	line-height: 30px;
	border-radius: 2px !important;
	text-align: center;
	padding: 0 6px;
}
.pagination li a:hover {
	color: #666;
}	
.pagination li.active a, .pagination li.active a.page-link {
	background: #03A9F4;
}
.pagination li.active a:hover {        
	background: #0397d6;
}
.pagination li.disabled i {
	color: #ccc;
}
.pagination li i {
	font-size: 16px;
	padding-top: 6px
}
.hint-text {
	float: left;
	margin-top: 10px;
	font-size: 13px;
}    
/* Custom checkbox */
.custom-checkbox {
	position: relative;
}
.custom-checkbox input[type="checkbox"] {    
	opacity: 0;
	position: absolute;
	margin: 5px 0 0 3px;
	z-index: 9;
}
.custom-checkbox label:before{
	width: 18px;
	height: 18px;
}
.custom-checkbox label:before {
	content: '';
	margin-right: 10px;
	display: inline-block;
	vertical-align: text-top;
	background: white;
	border: 1px solid #bbb;
	border-radius: 2px;
	box-sizing: border-box;
	z-index: 2;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	content: '';
	position: absolute;
	left: 6px;
	top: 3px;
	width: 6px;
	height: 11px;
	border: solid #000;
	border-width: 0 3px 3px 0;
	transform: inherit;
	z-index: 3;
	transform: rotateZ(45deg);
}
.custom-checkbox input[type="checkbox"]:checked + label:before {
	border-color: #03A9F4;
	background: #03A9F4;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	border-color: #fff;
}
.custom-checkbox input[type="checkbox"]:disabled + label:before {
	color: #b8b8b8;
	cursor: auto;
	box-shadow: none;
	background: #ddd;
}
/* Modal styles */
.modal .modal-dialog {
	max-width: 400px;
}
.modal .modal-header, .modal .modal-body, .modal .modal-footer {
	padding: 20px 30px;
}
.modal .modal-content {
	border-radius: 3px;
	font-size: 14px;
}
.modal .modal-footer {
	background: #ecf0f1;
	border-radius: 0 0 3px 3px;
}
.modal .modal-title {
	display: inline-block;
}
.modal .form-control {
	border-radius: 2px;
	box-shadow: none;
	border-color: #dddddd;
}
.modal textarea.form-control {
	resize: vertical;
}
.modal .btn {
	border-radius: 2px;
	min-width: 100px;
}	
.modal form label {
	font-weight: normal;
}	
</style>
</head>
<body>

    <header style="display:flex;">

        <div id="menu-bar" class="fas fa-bars" onClick="openSlideMenu()"></div>

        <nav class="navbar2" id="navbar2">
            <a href="site-monuments.php">sites & monuments</a>
            <a href="city-index.php">citys index</a>
            <a href="get-direction.php">get location</a>
            <a href="useful-links.php">useful links</a>
        </nav>

        <a href="#" class="logo"><span>M</span>orocco</a>

        <nav class="navbar1">
            <a href="home.php">home</a>
            <a href="home.php#sitemap">site plan</a>
            <a href="home.php#about">about</a>
            <a href="home.php#contact">contact</a>
        </nav>

    </header>
    <div id="go-up" style="height:82px"></div>

    <h2 class="heading">
        <span>n</span>
        <span>e</span>
        <span>w</span>
        <span>s</span>
        <span class="space"></span>
        <span>m</span>
        <span>a</span>
        <span>n</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>r</span>
    </h2>

	<a href="admin.php" style="color:white; border-radius:12px; background-color:red;padding:10px; margin-left:90%">Log Out</a>
	<a href="#_edit">scroll down to edit</a>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Manage <b>News</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addNews" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add News</span></a>					
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>image</th>
						<th>date</th>
						<th>title</th>
						<th>resume</th>
						<th>Operation</th>
					</tr>
				</thead>
				<tbody>
                	<?php
                        $bdd=mysqli_connect('localhost','root','','newsletter') or die("Connection Failed" .mysqli_connect_error());
                        $title="SELECT * FROM news ORDER BY pub_date DESC";
                        $result=$bdd->query($title) ;
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo '<tr>';
                                    echo '<td>';
                                        echo '<span class="custom-checkbox">';
                                            echo '<input type="checkbox" id="checkbox1" name="options[]" value="1">';
                                            echo '<label for="checkbox1"></label>';
                                        echo '</span>';
                                    echo '</td>';
                                    echo '<td><img src="news_images/' . $row['image'] . '" style="width:200px;height:150px;"></td>';
                                    echo '<td>' . $row['pub_date'] . '</td>';
                                    echo '<td>' . $row['title'] . '</td>';
                                    echo '<td>' . $row['resume'] . '</td>';
                                    //echo '<td>' . $row['content'] . '</td>';
                                    echo '<td>';
										echo '<form action="" method="POST">';
											echo '<input type="hidden" value="' . $row['news_id'] . '" name="_id" id="_id"></input>';
											echo '<i class="fas fa-edit" style="color:yellow;"><input type="submit" value="Edit" name="edit" id="edit"></input></i>';
										echo '</form><br>';
										echo '<form action="" method="POST">';
											echo '<input type="hidden" value="' . $row['news_id'] . '" name="_id" id="_id"></input>';
											echo '<i class="fas fa-trash-alt" style="color:red;"><input type="submit" value="Del" name="delete" id="delete"></input></i>';
										echo '</form>';
									echo '</td>';
									echo '</tr>';
								}
							}
                	?>
		
				</tbody>
			</table>
			<div class="clearfix">
				<div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">Previous</a></li>
					<li class="page-item"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item active"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">Next</a></li>
				</ul>
			</div>
		</div>
	</div>        
</div>
<!-- Add Modal HTML -->
<div id="addNews" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST">
					<div class="modal-header">		
						<h4 class="modal-title">Add News</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>title</label>
							<input type="text" class="form-control" name="title" id="title" placeholder="Title" required>
						</div>
						<div class="form-group">
							<label>Resume</label>
							<input type="text" class="form-control" name="resume" id="resume" placeholder="Resume" required>
						</div>
						<div class="form-group">
							<label>Content</label>
							<textarea class="form-control" style="height:8rem;" name="content" id="content" cols="60" rows="20" placeholder="Content" required></textarea>
						</div>
						<div class="form-group">
							<label>Date</label>
							<input type="date" class="form-control" name="date_p" id="date_p" required>
						</div>	
						<div class="form-group">
							<label>Image</label>
							<input type="file" class="form-control" name="n_image" id="n_image">
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" name="submit" id="submit" value="Insert" style="width: 30%;">
					</div>
				
			</form>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->
<?php
	if($_SERVER['REQUEST_METHOD']=='POST' && !empty($_POST['edit'])){
		$conn=mysqli_connect('localhost','root','','newsletter') or die("Connection Failed" .mysqli_connect_error());
		$id=$_POST['_id'];
		$title1="SELECT * FROM news WHERE news_id=$id";
		$result1=$bdd->query($title1) ;
		if($result1->num_rows > 0){
			while($row1 = $result1->fetch_assoc()){
			echo '<div id="editNews" style="font-size:24px;">';
			echo '<div class="modal-dialog">
					<div class="modal-content">
						<form method="POST">';
							echo '<div class="modal-header">';						
								echo '<h4 class="modal-title">Edit News</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
							<div class="modal-body">					
								<div class="form-group">
									<label>Title</label>
									<input type="text" class="form-control" name="title" id="title" value="' . $row1['title'] . '">
								</div>
								<div class="form-group">
									<label>Resume</label>
									<input type="text" class="form-control" name="resume" id="resume" value="' . $row1['resume'] . '">
								</div>
								<div class="form-group">
									<label>Content</label>
									<textarea class="form-control" style="height:8rem;" name="content" id="content" cols="60" rows="20">' . $row1['content'] . '</textarea>
								</div>
								<div class="form-group">
									<label>Date</label>
									<input type="date" class="form-control" name="date_p" id="date_p" value="' . $row1['pub_date'] . '">
								</div>			
								<input type="hidden" value="' . $row1['news_id'] . '" name="_id" id="_id"></input>
							</div>
							<div class="modal-footer">
								<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
								<input type="submit" class="btn btn-info" name="update" id="update" value="Save">
							</div>
						</form>
					</div>
				</div>
			</div>';
			}
		}
	}
?>
<div id="_edit"></div>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-alt-circle-up fa-3x" style="size: 7px;"></i></button>
<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>

		<?php
            if($_SERVER['REQUEST_METHOD']=='POST' && !empty($_POST['submit'])){

                $conn=mysqli_connect('localhost','root','','newsletter') or die("Connection Failed" .mysqli_connect_error());
                if(!empty($_POST['title']) && !empty($_POST['resume']) && !empty($_POST['content']) && !empty($_POST['date_p'])){
                    $title=$_POST['title'];
                    $content=$_POST['content'];
                    $resume=$_POST['resume'];
                    $date_p=$_POST['date_p'];
                    $url_img=$_POST['n_image'];

                    $sql="INSERT INTO news (title,resume,content,pub_date,image) VALUES ('$title','$resume','$content','$date_p','$url_img')";

                    $query=mysqli_query($conn,$sql);
                    if($query){
                        $message = "entry succesfull";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                    }
                    else{
                        $message = "Error !";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                    }
                }
            }
        ?> 

		<?php
            if($_SERVER['REQUEST_METHOD']=='POST' && !empty($_POST['delete'])){

			$conn=mysqli_connect('localhost','root','','newsletter') or die("Connection Failed" .mysqli_connect_error());
				$id=$_POST['_id'];
				$sql="DELETE FROM news WHERE news_id=$id";

				$query=mysqli_query($conn,$sql);
				if($query){
					$message = "Delete succesfull";
					echo "<script type='text/javascript'>alert('$message');</script>";
				}
				else{
					$message = "Error !";
					echo "<script type='text/javascript'>alert('$message');</script>";
				}
			}
        ?>

		<?php
            if($_SERVER['REQUEST_METHOD']=='POST' && !empty($_POST['update'])){

                $conn=mysqli_connect('localhost','root','','newsletter') or die("Connection Failed" .mysqli_connect_error());
                if(!empty($_POST['title']) && !empty($_POST['resume']) && !empty($_POST['content']) && !empty($_POST['date_p'])){
                    $title=$_POST['title'];
                    $content=$_POST['content'];
                    $resume=$_POST['resume'];
                    $date_p=$_POST['date_p'];
					$id=$_POST['_id'];

                    $sql="UPDATE news SET title='$title',content='$content',resume='$resume',pub_date='$date_p' WHERE news_id='$id'";

                    $query=mysqli_query($conn,$sql);
                    if($query){
                        $message = "Update succesfull";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                    }
                    else{
                        $message = "Error !";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                    }
                }
            }
        ?> 
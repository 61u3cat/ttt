<?php
if(isset( $_GET['id'])){
    $_id =$_GET['id'];
}


//var_dump($_GET);

//conect to database
$conn = new PDO("mysql:host=localhost;dbname=ecommerceseip",
    'root', '');
//set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION);
$query="SELECT * FROM `brands` WHERE id= :id";

$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $_id);

$result = $stmt->execute();
$brand=$stmt->fetch();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>EDIT</title>
</head>
<body>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <h1 class="text-center mb-4">EDIT</h1>
                <form method="post" action="update.php" enctype="multipart/form-data">
                    <div class="mb-3 row">
                        <label for="inputId" class="col-md-3 col-form-label"></label>
                        <div class="col-md-9">
                            <input
                                    type="hidden"
                                    class="form-control"
                                    id="inputId"
                                    name="id"
                                    value="<?=$brand['id'];?>"
                            >
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputTitle" class="col-md-3 col-form-label">Title</label>
                        <div class="col-md-9">
                            <input
                                    type="text"
                                    class="form-control"
                                    id="inputTitle"
                                    name="title"
                                    value="<?=$brand['title'];?>"
                            >
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputLink" class="col-md-3 col-form-label">Link</label>
                        <div class="col-md-9">
                            <input
                                    type="text"
                                    class="form-control"
                                    id="inputLink"
                                    name="link"
                                    value="<?=$brand['link'];?>"
                            >
                        </div>
                    </div
                    <div class="mb-3 row">
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-3">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>

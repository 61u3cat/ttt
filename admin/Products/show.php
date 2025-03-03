<?php
include_once($_SERVER['DOCUMENT_ROOT']."/cruddb/config.php");

use Bitm\Product;

$_show = new Product();

$product = $_show->show();
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Show</title>
</head>
<body>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1 class="text-center">Show</h1>

                <dl class="row">
                    <dt class="col-md-2">ID:</dt>
                    <dd class="col-md-10"><?=$product['id']?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-2">Title:</dt>
                    <dd class="col-md-10"><?=$product['title']?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-2">Is Active:</dt>
                    <dd class="col-md-10">
                        <?php
                        if($product['is_active']==1){
                            echo "This product is active";
                        }else{
                            echo"This product is not active";
                        }
                        ?>
                    </dd>
                </dl
                <dl class="row">
                    <dt class="col-md-2">Is Deleted:</dt>
                    <dd class="col-md-10">
                        <?php
                        if($product['is_deleted']==1){
                            echo "This product is deleted";
                        }else{
                            echo"This product is not deleted";
                        }
                        ?>
                    </dd>
                </dl
                <dl class="row">
                    <dt class="col-md-2">Created At:</dt>
                    <dd class="col-md-10"><?=$product['created_at']?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-2">Modified At:</dt>
                    <dd class="col-md-10"><?=$product['modified_at']?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-2">Picture:</dt>
                    <dd class="col-md-10">

                        <img height="250px" he src="<?=$webroot?>uploads/<?=$product['picture']?>">
                    </dd>
                </dl>
            </div>
        </div>
    </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>

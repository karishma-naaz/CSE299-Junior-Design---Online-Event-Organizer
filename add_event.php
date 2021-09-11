<?php include('partials/menu.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/admin-new.css">
</head>
<body>

        <div class="container mb-5">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card bg-light mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Add Event</h3>
                        </div>
                        <div class="card-body">

                            <form action="event-insert.php" method="post" enctype="multipart/form-data">
                                <input type="text" class="form-control mb-2" placeholder=" Evente Title" name="stitle">
                                <input type="text" class="form-control mb-2" placeholder=" Description" name="discription">
                                <input type="text" class="form-control mb-2" placeholder=" Price" name="price">
                                <input type="text" class="form-control mb-2" placeholder=" Category Title" name="ctitle">

                                <div class="form-control mb-2 p-2">
                                    <label for="exampleInputImage">Select Image:</label>
                                    <input type="file" name="image">
                                </div>
                               
                                <div class="form-group p-3">
                                      <label for="exampleInputActive">Active:</label>
                                      <input type="radio" name="active" value="Yes"> Yes
                                      <input type="radio" name="active" value="No">No
                                </div>
                                <a href ="manage-event.php" class="btn btn-danger">cancel</a>
                                <button class="btn btn-primary" name="submit">Submit</button>
                            </form>                   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>
<?php include('partials/footer.php');?>
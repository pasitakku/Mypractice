<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <?php 
    if(isset($_GET['result'])){
        $result = $_GET['result'];
        $input1 = $_GET['input1'];
        $input2 = $_GET['input2'];
        $sign  = $_GET['sign'];
        
}else{
    $result = "";
    $input1 = "";
    $input2 = "";
    $sign = "";
}



    ?>

    <div class="container">
        <!-- Content here -->
        <h1>Hello, world!</h1>
        <div class="card">
            <h5 class="card-header">Featured</h5>
            <div class="card-body">
                <form action="cal.php" method="POST">

                    <div class="form-group">
                        <input type="text" class="form-control" name="input1" placeholder="input1"
                            value="<?php echo($input1 ? $input1:'')?>">
                    </div>
                    <select class="custom-select">
                        <option selected="sign" value="">เครื่องหมาย</option>
                        <option value="1">บวก</option>
                        <option value="2">ลบ</option>
                        <option value="3">คูณ</option>
                        <option value="4">หาร</option>
                    </select>
                    
                        </button>
                        <div class="form-group">
                       
                        </div>
                    
                    <div class="form-group">
                        <input type="text" class="form-control" name="input2" placeholder="input2"
                            value="<?php echo($input2 ? $input2:'')?>">
                    </div>
                    <h1>
                        <div class="text-center">
                            <?php 
                            if(!empty($result)){
                                echo "Result is " .$result;
                            }
                        ?>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Calculate </button>

                                <button type="reset" class="btn btn-danger">Cancel </button>
                            </div>
                        </div>
                    </h1>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>
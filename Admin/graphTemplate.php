<?php $message =$_POST["data"];
        $index = $_POST["index"];
?>

<link rel="stylesheet" href="../css/graficaCanvas.css">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"><?php echo $message[$index]['nombre']; ?></h6>
            <!-- <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Dropdown Header:</div>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div> -->
        </div>
        <!-- Card Body chart-pie class-->
        <div class="card-body">
            <div class="chart-pie pt-4 pb-4 ">
                <canvas id="<?php echo $message[$index]['nombre']; ?>" class="graficaCanvas col-md-12"></canvas>
            </div>
            <div class="mt-4 text-center small">
                <span class="mr-2">
                    Total: <?php echo $message[$index]['primeraVez']+$message[$index]['recurse']; ?>
                </span>
                <br>
                <span class="mr-2">
                    <i class="fas fa-circle text-success"></i> Por Primera Vez: <?php echo $message[$index]['primeraVez']; ?>
                </span>
                <br>
                <span class="mr-2">
                    <i class="fas fa-circle text-primary"></i> Recursamiento: <?php echo $message[$index]['recurse']; ?>
                </span>
            </div>
        </div>
    </div>

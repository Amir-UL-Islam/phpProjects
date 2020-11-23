<?php
require_once "./db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Your CV</title>
</head>

<body>
    <div class="container">
        <?php
        $connection_db;
        $sql = "SELECT * FROM makeCV order by id desc";
        $stmt = $connection_db->query($sql);
        while ($dataRows = $stmt->fetch()) {
            $image = $dataRows['image'];
            $titleName = $dataRows['titleName'];
            $email = $dataRows['email'];
            $phnNumber = $dataRows['phn'];
            $name = $dataRows['name'];
            $fName = $dataRows['fName'];
            $mName = $dataRows['mName'];
            $dateOf = $dataRows['dateOf'];
            $nation = $dataRows['nationality'];
            $maritial = $dataRows['maritial'];
            $religion = $dataRows['religion'];
            $blood = $dataRows['blood'];
            $degOne = $dataRows['degOne'];
            $degTwo = $dataRows['degTwo'];
            $degThree = $dataRows['degThree'];
            $degFour = $dataRows['degFour'];
            $instOne = $dataRows['instOne'];
            $instTwo = $dataRows['instTwo'];
            $instThree = $dataRows['instThree'];
            $instFour = $dataRows['instFour'];
            $passYOne = $dataRows['passOne'];
            $passYTwo = $dataRows['passTwo'];
            $passYThree = $dataRows['passThree'];
            $passYFour = $dataRows['passFour'];
        }
        ?>

        <div class="media">
            <div class="media-body">
                <h4 class="mt-0 mb-1 font-weight-bold"><?php echo $titleName; ?></h4>
                <h5 class="mt-0 mb-1"><b>E-mail:</b><?php echo $email; ?></h5>
                <h5 class="mt-0 mb-1"><b>Connect Number:</b><?php echo $phnNumber ?></h5>

            </div>
            <img src="uploads/<?php echo htmlentities($image); ?>" style="max-height:400px; max-width:400px; margin:auto" class=" img-fluid card-img-top" />
        </div>
        <hr>
        <div class="row">
            <div class="col-6">
                <ul class="list-group">
                    <h4 class="bg-primary p-2">Personal Data</h4>
                    <li class="list-group-item h5"><b>Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</b><?php echo $name; ?></>
                    <li class="list-group-item h5"><b>Father's Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</b><?php echo $fName ?></li>
                    <li class="list-group-item h5"><b>Mother's Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</b><?php echo $mName ?></li>
                    <li class="list-group-item h5"><b>Date of Birth &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</b><?php echo $dateOf ?></li>
                    <li class="list-group-item h5"><b>Nationality &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</b><?php echo $nation ?></li>
                    <li class="list-group-item h5"><b>Religion &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</b><?php echo $religion ?></li>
                    <li class="list-group-item h5"><b>Maritial Status &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</b><?php echo $maritial ?></li>
                    <li class="list-group-item h5"><b>Blood Group &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</b><?php echo $blood ?></li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-10">
                <h4 class="bg-primary p-2">Education</h4>

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Name of Degree</th>
                            <th scope="col">Institue</th>
                            <th scope="col">Passing Year</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $degOne ?></td>
                            <td><?php echo $instOne ?></td>
                            <td><?php echo $passYOne ?></td>


                        </tr>
                        <tr>
                            <td><?php echo $degTwo ?></td>
                            <td><?php echo $instTwo ?></td>
                            <td><?php echo $passYTwo ?></td>

                        </tr>
                        <tr>
                            <td><?php echo $degThree ?></td>
                            <td><?php echo $instThree ?></td>
                            <td><?php echo $passYThree ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $degFour ?></td>
                            <td><?php echo $instFour ?></td>
                            <td><?php echo $passYFour ?></td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
<?php

require_once "db.php";

//include('db.php');


?>
<?php
if (isset($_POST['submit'])) {
    
    $image = $_FILES['image']['name'];
    $imgTarget = 'uploads' . basename($_FILES['image']['name']);
    $titleName = $_POST['titleName'];
    $email = $_POST['mail'];
    $phnNumber = $_POST['phnNumber'];
    $name = $_POST['Name'];
    $fName = $_POST['Father'];
    $mName = $_POST['Mother'];
    $dateOf = $_POST['Date'];
    $nation = $_POST['Nationality'];
    $maritial = $_POST['Maritial'];
    $religion = $_POST['Religion'];
    $blood = $_POST['Blood'];
    $degOne = $_POST['degreeOne'];
    $degTwo = $_POST['degreeTwo'];
    $degThree = $_POST['degreeThree'];
    $degFour = $_POST['degreeFour'];
    $instOne = $_POST['instituteOne'];
    $instTwo = $_POST['instituteTwo'];
    $instThree = $_POST['instituteThree'];
    $instFour = $_POST['instituteFour'];
    $passYOne = $_POST['passingYear'];
    $passYTwo = $_POST['passingYearTwo'];
    $passYThree = $_POST['passingYearThree'];
    $passYFour = $_POST['passingYearFour'];
    
    
    
    if (empty($image)and($titleName)and($email)and($phnNumber)and($name)and($fName)and($mName)and($dateOf)and($nation)and($maritial)and($religion)and($blood)and($degOne)and($degTwo)and($instOne)and($instTwo)and($passYOne)and($passYTwo)) {
        echo "<script>alert('You Must Fill at least the Basic Fild');location.replace('index.php');</script>";
    } else {
        $connection_db;
        $sql = "INSERT INTO makeCV(image ,titleName, email, phn, name, fName, mName, dateOf, nationality, maritial, religion, blood, degOne, degTwo, degThree, degFour, instOne, instTwo, instThree, instFour, passOne, passTwo, passThree, passFour
        ) VALUES(:imG ,:titleNamE, :emaiL, :phN, :naM, :fNamE, :mNamE, :dateOF, :nationalitY, :maritiaL, :religioN, :blooD, :degOnE, :degTwO, :degThreE, :degFouR, :instOnE, :instTwO, :instThreE, :instFouR, :passOnE,:passTwO, :passThreE,:passFouR)";
        $stmt = $connection_db->prepare($sql);
        $stmt->bindValue(':imG', $image);
        $stmt->bindValue(':titleNamE', $titleName);
        $stmt->bindValue(':emaiL', $email);
        $stmt->bindValue(':phN', $phnNumber);
        $stmt->bindValue(':naM', $name);
        $stmt->bindValue(':fNamE', $fName);
        $stmt->bindValue(':mNamE', $mName);
        $stmt->bindValue(':dateOF', $dateOf);
        $stmt->bindValue(':nationalitY', $nation);
        $stmt->bindValue(':maritiaL', $maritial);
        $stmt->bindValue(':religioN', $religion);
        $stmt->bindValue(':blooD', $blood);
        $stmt->bindValue(':degOnE', $degOne);
        $stmt->bindValue(':degTwO', $degTwo);
        $stmt->bindValue(':degThreE', $degThree);
        $stmt->bindValue(':degFouR', $degFour);
        $stmt->bindValue(':instOnE', $instOne);
        $stmt->bindValue(':instTwO', $instTwo);
        $stmt->bindValue(':instThreE', $instThree);
        $stmt->bindValue(':instFouR', $instFour);
        $stmt->bindValue(':passOnE', $passYOne);
        $stmt->bindValue(':passTwO', $passYTwo);
        $stmt->bindValue(':passThreE', $passYThree);
        $stmt->bindValue(':passFouR', $passYFour);
        $execute = $stmt->execute();
        move_uploaded_file($_FILES["image"]["tmp_name"], $imgTarget);
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>CV</title>
</head>

<body>
    <div class="container">
        <h3 class="text-center">Make Your CV</h3>
        <hr>
        <form action="YourCv.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-7">
                    <h4>Personal Details</h4>
                    <hr>
                    <div class="form-group">
                        <div class="custom-file">
                            <input class="custom-file-input" type="file" name="image" id="imageSelection">
                            <label for="imageSelection" class="custom-file-label">Select Image</label>
                        </div>
                    </div>
                    <input class="form-control" type="text" required  placeholder="Name" name="titleName"><br>
                    <input class="form-control" type="text" placeholder="E-mail" name="mail"><br>
                    <input class="form-control" type="text" placeholder="Connect Number" name="phnNumber"><br>
                    <h4>Personal Data</h4>
                    <input class="form-control" type="text" placeholder="Name" name="Name"><br>
                    <input class="form-control" type="text" placeholder="Father's Name" name="Father"><br>
                    <input class="form-control" type="text" placeholder="Mother's Name" name="Mother"><br>
                    <input class="form-control" type="text" placeholder="Date Of Birth" name="Date"><br>
                    <input class="form-control" type="text" placeholder="Nationality" name="Nationality"><br>
                    <input class="form-control" type="text" placeholder="Religion" name="Religion"><br>
                    <input class="form-control" type="text" placeholder="Maritial Status" name="Maritial"><br>
                    <input class="form-control" type="text" placeholder="Blood Group" name="Blood">
                    <br>
                </div>
                <div class="col-5">
                    <h4>Education</h4>
                    <hr>
                    <h4>Name of Degree</h4>
                    <input class="form-control" type="text" name="degreeOne" placeholder="Most Recent Degree"><br>
                    <input class="form-control" type="text" name="degreeTwo" placeholder="Second Most Recent Degree"><br>
                    <input class="form-control" type="text" name="degreeThree" placeholder="Third Most Recent Degree"><br>
                    <input class="form-control" type="text" name="degreeFour" placeholder="Forth Most Recent Degree"><br>
                    <h4>Name of Institute</h4>
                    <input type="text" class="form-control" name="instituteOne" placeholder="Name of Institute"><br>
                    <input type="text" class="form-control" name="instituteTwo" placeholder="Name of Institute"><br>
                    <input type="text" class="form-control" name="instituteThree" placeholder="Name of Institute"><br>
                    <input type="text" class="form-control" name="instituteFour" placeholder="Name of Institute"><br>
                    <h4>Year of Passing</h4>
                    <input type="text" class="form-control" name="passingYear" placeholder="Passing Year"><br>
                    <input type="text" class="form-control" name="passingYearTwo" placeholder="Passing Year"><br>
                    <input type="text" class="form-control" name="passingYearThree" placeholder="Passing Year"><br>
                    <input type="text" class="form-control" name="passingYearFour" placeholder="Passing Year">
                    <br>
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-outline-success col-6" type="submit" name="submit">Show Me</button>
            </div>
            <br>
        </form>
    </div>
</body>

</html>
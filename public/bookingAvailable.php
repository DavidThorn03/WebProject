<?php
require_once "templates/booking.php";

?>
<br>
<form method="post">
    <input type="submit" name=1 value="Monday">
    <input type="submit" name=2 value="Tuesday">
    <input type="submit" name=3 value="Wednesday">
    <input type="submit" name=4 value="Thursday">
    <input type="submit" name=5 value="Friday">
    <input type="submit" name=6 value="Saturday">
    <input type="submit" name=7 value="Sunday">
    <br>
</form>
<?php
if (count($_POST) == 0) {
    foreach ($lessonTimes as $lessonTime) {
        if ($lessonTime->getDay() == date("w")) {
            generateLesson($lessonTime);
        }
    }
}
else {
    for ($i = 1; $i < 8; $i++) {
        if (isset($_POST[$i])) {
            foreach ($lessonTimes as $lessonTime) {
                if ($lessonTime->getDay() == $i) {
                    generateLesson($lessonTime);
                }
            }
        }
    }
}


if(isset($_POST['lessonTimeID'])){
    foreach ($lessonTimes as $lessonTime){
        if($lessonTime->getLessonTimeID() == $_POST['lessonTimeID']){
            $newBooking = new BookedLesson(null);
            $newBooking->makeBooking(2, $lessonTime);
            $newBooking->LessonTime = $lessonTime;
            enterBooking($newBooking->getDate(), $lessonTime->getLessonTimeID(), $newBooking->getUserID());
        }
        if($lessonTime->getDay() == $i){
            generateLesson($lessonTime);
        }
    }
    header("Refresh:0");
}
    function generateLesson($lessonTime){
    ?>
    Name: <?php echo $lessonTime->Lesson->getLessonName(); ?>
    <br>
    Duration: <?php echo $lessonTime->Lesson->getDurationMin(); ?> Minutes
    <br>
    Number of places: <?php echo $lessonTime->Lesson->getNumPlaces(); ?>
    <br>
    Trainer: <?php echo $lessonTime->Lesson->getTrainer(); ?>
    <br>
    Time: <?php echo $lessonTime->getTime(); ?>
    <br>
    <img src= "<?php echo $lessonTime->Lesson->getImageLink() ?>" alt="Image" width="300px" length="300px">
    <br>
    <a href="bookingInfo.php">MoreInfo</a>
    <form method="post">
        <input type="hidden" name="lessonTimeID" value="<?php echo $lessonTime->getLessonTimeID(); ?>">
        <input type="submit" value="Book">
    </form>
    <br>
    <br>
<?php } ?>
<a href="index.php">Back to home</a>

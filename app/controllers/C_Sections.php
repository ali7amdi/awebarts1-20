<h3>
    Sections    
</h3>
<h2><a href="?page=Sections&action=add">Add New Sections</a></h2>

<?php
if ($_POST OR @$_GET['action']) {
    if (isset($_GET['action']) AND $_GET['action'] == "add")
        include 'veiws/addSection.php';
    if (isset($_POST['submit']) && $_POST['submit'] == "Add") {
        //sections: sectionId, sectionName, sectionStaus, sectionLocation, sectionDesc, sectionDate, username        
        $newSecData['sectionName'] = $_POST['sectionName'];
        $newSecData['sectionStaus'] = $_POST['sectionStaus'];
        $newSecData['sectionLocation'] = $_POST['sectionLocation'];
        $newSecData['sectionDesc'] = $_POST['sectionDesc'];
        $newSecData['username'] = $_SESSION['username'];

        try {

            include 'models/Awebarts.php';
            include 'models/Add.php';
            $tablename = "sections";
            $addNewSec = new Add($newSecData, $tablename);

            if ($addNewSec) {
                echo '<script type="text/javascript"> alert("the new section added successfully.");</script>';
                // header("Location:index.php?page=Sections");
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }    
    
} else {
    
    include 'models/Awebarts.php';
    include 'models/Display.php';
    $tablename = "sections";
    $displySec = new Display($tablename);
    
    $allSecData = $displySec->getData();
    
    include 'veiws/sections.php';
}
?>
<?php
$con = mysqli_connect("localhost","root","","chatbot");
if(!$con){
    echo "Error connecting";
}
if(isset($_POST['submit'])){

    if(!($_POST['name'] == " " && $_POST['email'] == " " && $_POST['mobile'] == " "&& $_POST['edu'] == " " && $_POST['category'] == " ")){

        $insert = "INSERT INTO `user`(`name`, `email`, `mobile`, `edu`, `category`) VALUES ('$_POST[name]','$_POST[email]','$_POST[mobile]','$_POST[edu]','$_POST[category]')";
        $result = mysqli_query($con,$insert);
        if($result){
            echo "<alert>$result</alert>";
            header("Location:chat.html");
        }
    }
else{
    echo "<alert>The record has not inserted...!</alert>";
}
}

?>
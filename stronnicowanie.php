<?php
    $connect = mysqli_connect("localhost", "root", "", "pagination1");  
    $record_per_page = 7;  
    $page = '';  
    $output = '';  
    if(isset($_POST["page"])) {  
        $page = $_POST["page"];  
    }  
    else {  
        $page = 1;  
    }  
    $start_from = ($page - 1)*$record_per_page;  
    $query = "SELECT * FROM ulice LIMIT $start_from, $record_per_page";  
    $result = mysqli_query($connect, $query);  
    $output .= "  
        <table class='page_table'>  
            <tr>  
                    <th>ID</th>
                    <th>Ulica</th>    
            </tr>  
    ";  
    while($row = mysqli_fetch_array($result)) {  
        $output .= '  
            <tr>  
                    <td>'.$row["id"].'</td>  
                    <td>'.$row["nazwa"].'</td>  
            </tr>  
        ';  
    }  
    $output .= '</table><br><div class="button_align">';  
    $page_query = "SELECT * FROM ulice";  
    $page_result = mysqli_query($connect, $page_query);  
    $total_records = mysqli_num_rows($page_result);  
    $total_pages = ceil($total_records/$record_per_page);  
    for($i=1; $i<=$total_pages; $i++)  
    {  
        $output .= "<div class='strona' id='".$i."'>".$i."</div>";  
    }  
    $output .= '</div><br><br>';  
    echo $output;  
 ?>
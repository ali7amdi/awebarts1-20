<!-- display all sections ::
sections: id, sectionName, sectionStaus, sectionLocation, sectionDesc, sectionDate, username
-->

<table class="table table-bordered table-hover sectionTable">
    <tr class="danger">
        <th>Id</th>
        <th>Section Name</th>
        <th>Section Staus</th>
        <th>Section Location</th>
        <th>Section Desc</th>
        <th>Section Date</th>
        <th>User Name</th>
        <th>Action</th>
    </tr>
    <?php
    for ($i = 0; $i < count($allSecData); $i++) {
        echo "
            <tr>
                <td>{$allSecData[$i]['id']}</td>
                <td>{$allSecData[$i]['sectionName']}</td>
                <td>{$allSecData[$i]['sectionStaus']}</td>
                <td>{$allSecData[$i]['sectionLocation']}</td>
                <td>{$allSecData[$i]['sectionDesc']}</td>
                <td>{$allSecData[$i]['sectionDate']}</td>
                <td>{$allSecData[$i]['username']}</td>
                <td>
                    <img src='resources/images/edit.png'>
                    <img src='resources/images/delete.png'>            
                </td>
             </tr>
            ";
    }
    ?>

</table>
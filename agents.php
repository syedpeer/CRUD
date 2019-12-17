<?php include "./header.html" ?>

<h2>Agents</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Forname</th>
        <th>Surname</th>
        <th>Address</th>
        <th>Phone number</th>
        <th>Turnover</th>
        <?php showAllAgents(); ?>
</table>

<form action="includes/database.php" method="post">
    <br>
    <br>
    <b> Insert agent: </b>
    <input type="text" name="insert_forname" placeholder="agent forname">
    <input type="text" name="insert_surname" placeholder="agent surname">
    <input type="text" name="insert_address" placeholder="address">
    <input type="text" name="insert_phone" placeholder="phone number">
    <input type="text" name="insert_turnover" placeholder="turnover">
    <button type="submit" name="insert_submitAgent">Insert</button>
    <br>
    <br>
    <b> Update agent: </b>
    <input type="text" name="update_id" placeholder="id">
    <input type="text" name="update_forname" placeholder="agent forname">
    <input type="text" name="update_surname" placeholder="agent surname">
    <input type="text" name="update_address" placeholder="address">
    <input type="text" name="update_phone" placeholder="phone number">
    <input type="text" name="update_turnover" placeholder="turnover">
    <button type="submit" name="update_submitAgent">Update</button>
    <br>
    <br>
    <b> Delete agent: </b>
    <input type="text" name="delete_id" placeholder="id">
    <button type="submit" name="delete_submitAgent">Delete</button>
</form>

<?php include "./footerDB.html" ?>
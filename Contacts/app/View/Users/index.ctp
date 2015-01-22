<h1>Users</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Address</th>
        <th>City</th>
        <th>Colour</th>
    </tr>
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
        <td><?php echo $user['User']['user_name']; ?></td>
        <td><?php echo $user['User']['address']; ?></td>
        <td><?php echo $user['Cities']['cities_name']; ?></td>
        <td><?php echo $user['Colours']['colour_name']; ?></td>
    </tr>
    <?php endforeach; ?>    
</table>
<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $team->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $team->getName() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('team/edit?id='.$team->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('team/index') ?>">List</a>

<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $bracket->getId() ?></td>
    </tr>
    <tr>
      <th>User:</th>
      <td><?php echo $bracket->getUserId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $bracket->getName() ?></td>
    </tr>
    <tr>
      <th>Score:</th>
      <td><?php echo $bracket->getScore() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $bracket->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $bracket->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('bracket/edit?id='.$bracket->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('bracket/index') ?>">List</a>

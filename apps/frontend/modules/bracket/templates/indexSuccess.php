<h1>Brackets List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>User</th>
      <th>Name</th>
      <th>Score</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($brackets as $bracket): ?>
    <tr>
      <td><a href="<?php echo url_for('bracket/show?id='.$bracket->getId()) ?>"><?php echo $bracket->getId() ?></a></td>
      <td><?php echo $bracket->getUserId() ?></td>
      <td><?php echo $bracket->getName() ?></td>
      <td><?php echo $bracket->getScore() ?></td>
      <td><?php echo $bracket->getCreatedAt() ?></td>
      <td><?php echo $bracket->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('bracket/new') ?>">New</a>

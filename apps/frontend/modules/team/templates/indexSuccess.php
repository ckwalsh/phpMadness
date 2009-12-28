<h1>Teams List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($teams as $team): ?>
    <tr>
      <td><a href="<?php echo url_for('team/show?id='.$team->getId()) ?>"><?php echo $team->getId() ?></a></td>
      <td><?php echo $team->getName() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('team/new') ?>">New</a>

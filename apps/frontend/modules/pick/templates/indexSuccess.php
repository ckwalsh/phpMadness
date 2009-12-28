<h1>Picks List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Bracket</th>
      <th>Game</th>
      <th>Team</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($picks as $pick): ?>
    <tr>
      <td><a href="<?php echo url_for('pick/show?id='.$pick->getId()) ?>"><?php echo $pick->getId() ?></a></td>
      <td><?php echo $pick->getBracketId() ?></td>
      <td><?php echo $pick->getGameId() ?></td>
      <td><?php echo $pick->getTeamId() ?></td>
      <td><?php echo $pick->getCreatedAt() ?></td>
      <td><?php echo $pick->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('pick/new') ?>">New</a>

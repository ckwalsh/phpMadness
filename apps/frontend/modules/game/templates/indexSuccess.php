<h1>Games List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Home</th>
      <th>Away</th>
      <th>Due</th>
      <th>Home score</th>
      <th>Away score</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($games as $game): ?>
    <tr>
      <td><a href="<?php echo url_for('game/show?id='.$game->getId()) ?>"><?php echo $game->getId() ?></a></td>
      <td><?php echo $game->getHome()->getName() ?></td>
      <td><?php echo $game->getAway()->getName() ?></td>
      <td><?php echo $game->getDue() ?></td>
      <td><?php echo $game->getHomeScore() ?></td>
      <td><?php echo $game->getAwayScore() ?></td>
      <td><?php echo $game->getCreatedAt() ?></td>
      <td><?php echo $game->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('game/new') ?>">New</a>

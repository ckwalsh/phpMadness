<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $game->getId() ?></td>
    </tr>
    <tr>
      <th>Home:</th>
      <td><?php echo $game->getHomeId() ?></td>
    </tr>
    <tr>
      <th>Away:</th>
      <td><?php echo $game->getAwayId() ?></td>
    </tr>
    <tr>
      <th>Due:</th>
      <td><?php echo $game->getDue() ?></td>
    </tr>
    <tr>
      <th>Home score:</th>
      <td><?php echo $game->getHomeScore() ?></td>
    </tr>
    <tr>
      <th>Away score:</th>
      <td><?php echo $game->getAwayScore() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $game->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $game->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('game/edit?id='.$game->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('game/index') ?>">List</a>

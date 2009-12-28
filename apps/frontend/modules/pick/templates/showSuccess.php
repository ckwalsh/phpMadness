<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $pick->getId() ?></td>
    </tr>
    <tr>
      <th>Bracket:</th>
      <td><?php echo $pick->getBracketId() ?></td>
    </tr>
    <tr>
      <th>Game:</th>
      <td><?php echo $pick->getGameId() ?></td>
    </tr>
    <tr>
      <th>Team:</th>
      <td><?php echo $pick->getTeamId() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $pick->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $pick->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('pick/edit?id='.$pick->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('pick/index') ?>">List</a>

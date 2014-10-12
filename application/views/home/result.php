<div class="container">
  <h2>Here are the results so far.</h2>
  <!-- main content output -->
  <!-- Could show all the data, if anybody wanted to see it.
  <div class="result">
    <h3>List of voters</h3>
    <table>
      <thead style="background-color: #ddd; font-weight: bold;">
        <tr>
          <td>Id</td>
          <td>Is voting</td>
          <td>For</td>
          <td>State</td>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($voters as $voter) { ?>
        <tr>
          <td><?php if (isset($voter->id)) echo $voter->id; ?></td>
          <td><?php if (isset($voter->isVoting)) echo $voter->isVoting; ?></td>
          <td><?php if (isset($voter->forWhom)) echo $voter->forWhom; ?></td>
          <td><?php if (isset($voter->state)) echo $voter->state; ?></td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>
  -->
  
  <div class="result">
    <h3>Votes by state</h3>
    <table>
      <tbody>
      <?php $currState = '';
      foreach ($votesByState as $voteCount) { 
        if ($voteCount->state_name != $currState) { ?>
          <tr>
            <td colspan="3" class="state-head"><?php echo 'State: ' . $voteCount->state_name; ?></td>
          </tr>
          <tr class="head">
            <td>Is voting</td>
            <td>For</td>
            <td>Count</td>
          </tr>
        <?php $currState = $voteCount->state_name;
        } ?>
        <tr>
          <td><?php if (isset($voteCount->isVoting)) echo $voteCount->isVoting; ?></td>
          <td><?php if (isset($voteCount->forWhom)) echo $voteCount->forWhom; ?></td>
          <td><?php if (isset($voteCount->numVotes)) echo $voteCount->numVotes; ?></td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>
  
  <div class="result">
    <h3>Votes nationwide</h3>
    <table>
      <thead style="background-color: #ddd; font-weight: bold;">
      <tr>
        <td>Is voting</td>
        <td>For</td>
        <td>Count</td>
      </tr>
      </thead>
      <tbody>
      <?php foreach ($votesAll as $voteCount) { ?>
        <tr>
          <td><?php if (isset($voteCount->isVoting)) echo $voteCount->isVoting; ?></td>
          <td><?php if (isset($voteCount->forWhom)) echo $voteCount->forWhom; ?></td>
          <td><?php if (isset($voteCount->numVotes)) echo $voteCount->numVotes; ?></td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>
</div>
<div class="container">
    <h2>You are in the View: application/views/voters/index.php (everything in this box comes from that file)</h2>
    <!-- add vote form -->
    <div>
        <h3>Cast your vote!</h3>
        <form action="<?php echo URL; ?>voters/addVoter" method="POST">
            <div>
              <label>Are you voting?</label>
              <input type="radio" name="isVoting" value="1" required />Yes
              <input type="radio" name="isVoting" value="0" required />No
            </div>
            <div class="conditional">
              <label>Who are you voting for?</label>
              <input type="text" name="forWhom" value="" required />
            </div>
            <div class="conditional">
              <label>What state are you in?</label>
              <input type="text" name="state" value="" /
            </div>
            <div>
             <input type="submit" name="submit_add_vote" value="Submit" />
            </div>
        </form>
    </div>
    <!-- main content output -->
    <div>
        <h3>List of voters (data from first model)</h3>
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>Id</td>
                <td>Is voting</td>
                <td>For</td>
                <td>State</td>
                <td>DELETE</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($voters as $voter) { ?>
                <tr>
                    <td><?php if (isset($voter->id)) echo $voter->id; ?></td>
                    <td><?php if (isset($voter->isVoting)) echo $voter->isVoting; ?></td>
                    <td><?php if (isset($voter->forWhom)) echo $voter->forWhom; ?></td>
                    <td><?php if (isset($voter->state)) echo $voter->state; ?></td>
                    <td><a href="<?php echo URL . 'songs/deletesong/' . $song->id; ?>">x</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>

    <div>
        <h3>Votes by state</h3>
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>State</td>
                <td>Is voting</td>
                <td>For</td>
                <td>Count</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($votesByState as $voteCount) { ?>
                <tr>
                    <td><?php if (isset($voteCount->state)) echo $voteCount->state; ?></td>
                    <td><?php if (isset($voteCount->isVoting)) echo $voteCount->isVoting; ?></td>
                    <td><?php if (isset($voteCount->forWhom)) echo $voteCount->forWhom; ?></td>
                    <td><?php if (isset($voteCount->numVotes)) echo $voteCount->numVotes; ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>

    <div>
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

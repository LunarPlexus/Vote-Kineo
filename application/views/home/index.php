<div class="container">
  <h2>2016 is right around the corner. Are you ready to make a difference?</h2>
  <!-- add vote form -->
  <div>
    <h3>Cast your vote!</h3>
    <form name="vote-now" id="vote-now" action="<?php echo URL; ?>home/addVoter" method="POST" data-parsley-validate>
      <div>
        <label>Are you voting?</label>
        <input type="radio" name="isVoting" value="1"/>Yes
        <input type="radio" name="isVoting" value="0"/>No
      </div>
      <div class="conditional">
        <label class="voting">Who are you voting for?</label>
        <label class="not-voting">If you were going to vote, who would you vote for?</label>
        <select name="forWhom" id="forWhom" required>
          <option value="" selected="selected">Select your candidate...</option>
          <?php foreach($candidates as $key) { ?>
            <option value="<?php echo $key->candidate; ?>"><?php echo $key->candidate; ?></option>
          <?php } ?>
            <option value="Other">Other...</option>
        </select>
        <input type="text" id="forWhomWriteIn" name="forWhomWriteIn" value="" placeholder="Write in candidate" class="write-in"/>
      </div>
      <div class="conditional state">
        <label>What state are you in?</label>
        <select name="state" id="state" required>
          <option value="" selected="selected">Select your state...</option>
          <?php foreach($states as $key=>$value) { ?>
            <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
          <?php } ?>
        </select>
      </div>
      <div>
       <input id="vote" type="submit" name="submit_add_vote" value="Vote" />
      </div>
    </form>
  </div>
</div>
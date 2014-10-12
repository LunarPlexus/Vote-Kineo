<?php

/**
 * Class Home
 *
 * This is the main class.
 */
class Home extends Controller
{
  /**
   * PAGE: index
   * This method handles what happens when you move to http://yourproject/home/index
   */
  public function index()
  {
    // load a model, perform an action, pass the returned data to a variable
    $voters_model = $this->loadModel('VotersModel');
    $voters = $voters_model->getAllVoters();
    $votesByState = $voters_model->getVoterCountByState();
    $votesAll = $voters_model->getVoterCount();
    $states = $voters_model->statesList();
    $candidates = $voters_model->getAllCandidates();
  
    // load views.
    require 'application/views/_templates/header.php';
    require 'application/views/home/index.php';
    require 'application/views/_templates/footer.php';
  }
  
  /**
   * PAGE: result
   * This method handles what happens when you move to http://yourproject/home/result
   */
  public function result()
  {
    // load a model, perform an action, pass the returned data to a variable
    // NOTE: please write the name of the model "LikeThis"
    $voters_model = $this->loadModel('VotersModel');
    $voters = $voters_model->getAllVoters();
    $votesByState = $voters_model->getVoterCountByState();
    $votesAll = $voters_model->getVoterCount();
    
    // load views.
    require 'application/views/_templates/header.php';
    require 'application/views/home/result.php';
    require 'application/views/_templates/footer.php';
  }
  
  /**
   * ACTION: addVoter
   * This method handles what happens when you move to http://yourproject/home/addVoter
   * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "add a vote" form on home/index
   * directs the user after the form submit. This method handles all the POST data from the form and then redirects
   * the user back to home/index 
   */
  public function addVoter()
  {
    // if we have POST data to create a new vote entry
    if (isset($_POST["submit_add_vote"])) {
      // load model, perform an action on the model
      $voters_model = $this->loadModel('VotersModel');
      // Get write in candidate, if set, otherwise get from candidate dropdown
      $forWhomx = ($_POST["forWhom"] == 'Other') ? $_POST["forWhomWriteIn"] : $_POST["forWhom"];
      $voters_model->addVoter($_POST["isVoting"], $forWhomx,  $_POST["state"]);
    }
  
    // where to go after vote has been added
    header('location: ' . URL . 'home/result');
  } 
}
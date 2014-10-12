<?php

/**
 * Class Songs
 * This is a demo class.
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Home extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/index
     */
    public function index()
    {
        // simple message to show where you are
/*         echo 'Message from Controller: You are in the Controller: Home, using the method index().'; */

        // load a model, perform an action, pass the returned data to a variable
        // NOTE: please write the name of the model "LikeThis"
        $voters_model = $this->loadModel('VotersModel');
        $voters = $voters_model->getAllVoters();
        $votesByState = $voters_model->getVoterCountByState();
        $votesAll = $voters_model->getVoterCount();
        $states = $voters_model->statesList();
        $candidates = $voters_model->getAllCandidates();
        // load another model, perform an action, pass the returned data to a variable
        // NOTE: please write the name of the model "LikeThis"
/*
        $stats_model = $this->loadModel('StatsModel');
        $amount_of_songs = $stats_model->getAmountOfSongs();
*/

        // load views. within the views we can echo out $songs and $amount_of_songs easily
        require 'application/views/_templates/header.php';
        require 'application/views/home/index.php';
/*         require 'application/views/voters/index.php'; */
        require 'application/views/_templates/footer.php';
    }

    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/index
     */
    public function result()
    {
        // simple message to show where you are
/*         echo 'Message from Controller: You are in the Controller: Home, using the method result().'; */

        // load a model, perform an action, pass the returned data to a variable
        // NOTE: please write the name of the model "LikeThis"
        $voters_model = $this->loadModel('VotersModel');
        $voters = $voters_model->getAllVoters();
        $votesByState = $voters_model->getVoterCountByState();
        $votesAll = $voters_model->getVoterCount();

        // load another model, perform an action, pass the returned data to a variable
        // NOTE: please write the name of the model "LikeThis"
/*
        $stats_model = $this->loadModel('StatsModel');
        $amount_of_songs = $stats_model->getAmountOfSongs();
*/

        // load views. within the views we can echo out $songs and $amount_of_songs easily
        require 'application/views/_templates/header.php';
        require 'application/views/home/result.php';
/*         require 'application/views/voters/index.php'; */
        require 'application/views/_templates/footer.php';
    }
    
       /**
     * ACTION: addVoter
     * This method handles what happens when you move to http://yourproject/songs/addVoter
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "add a song" form on songs/index
     * directs the user after the form submit. This method handles all the POST data from the form and then redirects
     * the user back to songs/index via the last line: header(...)
     * This is an example of how to handle a POST request.
     */
    public function addVoter()
    {
        // simple message to show where you are
/*         echo 'Message from Controller: You are in the Controller: Voters, using the method addVoter().'; */

        // if we have POST data to create a new vote entry
        if (isset($_POST["submit_add_vote"])) {
/*         print_r($_POST); */
            // load model, perform an action on the model
            $voters_model = $this->loadModel('VotersModel');
            // Get write in candidate, if set, otherwise get from candidate dropdown
            $forWhomx = ($_POST["forWhom"] == 'Other') ? $_POST["forWhomWriteIn"] : $_POST["forWhom"];
/*             echo($forWhomx); */
            $voters_model->addVoter($_POST["isVoting"], $forWhomx,  $_POST["state"]);
        }

        // where to go after vote has been added
        header('location: ' . URL . 'home/result');
    }
 
}

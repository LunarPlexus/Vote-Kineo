<?php

class VotersModel
{
  /**
   * Every model needs a database connection, passed to the model
   * @param object $db A PDO database connection
   */
  function __construct($db) {
    try {
      $this->db = $db;
    }
    catch (PDOException $e) {
      exit('Database connection could not be established.');
    }
  }

  /**
   * Get all candidates from database
   */
  public function getAllCandidates()
  {
    $sql = "SELECT c.`candidate`
      FROM `candidates` c
      ORDER BY c.`candidate`";
    $query = $this->db->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }

  /**
   * Get all voters from database
   */
  public function getAllVoters()
  {
    $sql = "SELECT id, isVoting, forWhom, state FROM voters";
    $query = $this->db->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }

  /**
   * Get voter count by state and candidate
   */
  public function getVoterCount()
  {
    $sql = "SELECT COUNT(v.`id`) as numVotes, CASE v.`isVoting` WHEN 0 THEN 'No' WHEN 1 THEN 'Yes' END AS isVoting, v.`forWhom` 
      FROM voters v
      GROUP BY isVoting, v.`forWhom`
      ORDER BY isVoting desc, numVotes desc, v.`forWhom`";
    $query = $this->db->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }

  /**
   * Get voter count by state and candidate
   */
  public function getVoterCountByState()
  {
    $sql = "SELECT COUNT(v.`id`) as numVotes, CASE v.`isVoting` WHEN 0 THEN 'No' WHEN 1 THEN 'Yes' END AS isVoting, v.`forWhom`, v.`state`, s.`state_name` 
      FROM voters v JOIN
      tbl_state s ON v.`state` = s.`state_abbr`
      GROUP BY isVoting, v.`forWhom`, s.`state_name` 
      ORDER BY s.`state_name`, isVoting desc, numVotes desc, v.`forWhom`";
    $query = $this->db->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }

  /**
   * Add a voter to database
   * @param tinyint $isVoting Is the user voting?
   * @param string $forWhom Who is the user voting for?
   * @param string $state User's state
   */
  public function addVoter($isVoting, $forWhom, $state)
  {
    $isVoting = strip_tags($isVoting);
    $forWhom = strip_tags($forWhom);
    $state = strip_tags($state);
  
    $sql = "INSERT INTO voters (isVoting, forWhom, state) VALUES (:isVoting, :forWhom, :state)";
    $query = $this->db->prepare($sql);
    $query->execute(array(':isVoting' => $isVoting, ':forWhom' => $forWhom, ':state' => $state));
  }

  /**
   * Get an array of states
   */
  public function statesList() {
    $states = array(
      'AL'=>"Alabama",
  		'AK'=>"Alaska",
  		'AZ'=>"Arizona",
  		'AR'=>"Arkansas",
  		'CA'=>"California",
  		'CO'=>"Colorado",
  		'CT'=>"Connecticut",
  		'DE'=>"Delaware",
  		'DC'=>"District Of Columbia",
  		'FL'=>"Florida",
  		'GA'=>"Georgia",
  		'HI'=>"Hawaii",
  		'ID'=>"Idaho",
  		'IL'=>"Illinois",
  		'IN'=>"Indiana",
  		'IA'=>"Iowa",
  		'KS'=>"Kansas",
  		'KY'=>"Kentucky",
  		'LA'=>"Louisiana",
  		'ME'=>"Maine",
  		'MD'=>"Maryland",
  		'MA'=>"Massachusetts",
  		'MI'=>"Michigan",
  		'MN'=>"Minnesota",
  		'MS'=>"Mississippi",
  		'MO'=>"Missouri",
  		'MT'=>"Montana",
  		'NE'=>"Nebraska",
  		'NV'=>"Nevada",
  		'NH'=>"New Hampshire",
  		'NJ'=>"New Jersey",
  		'NM'=>"New Mexico",
  		'NY'=>"New York",
  		'NC'=>"North Carolina",
  		'ND'=>"North Dakota",
  		'OH'=>"Ohio",
  		'OK'=>"Oklahoma",
  		'OR'=>"Oregon",
  		'PA'=>"Pennsylvania",
  		'RI'=>"Rhode Island",
  		'SC'=>"South Carolina",
  		'SD'=>"South Dakota",
  		'TN'=>"Tennessee",
  		'TX'=>"Texas",
  		'UT'=>"Utah",
  		'VT'=>"Vermont",
  		'VA'=>"Virginia",
  		'WA'=>"Washington",
  		'WV'=>"West Virginia",
  		'WI'=>"Wisconsin",
  		'WY'=>"Wyoming"
		);
    return $states;
  }
}

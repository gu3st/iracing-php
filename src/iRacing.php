<?php

namespace iRacingPHP;

use iRacingPHP\Data\Car;
use iRacingPHP\Data\CarClass;
use iRacingPHP\Data\Constants;
use iRacingPHP\Data\Hosted;
use iRacingPHP\Data\League;
use iRacingPHP\Data\Lookup;
use iRacingPHP\Data\Member;
use iRacingPHP\Data\Results;
use iRacingPHP\Data\Season;
use iRacingPHP\Data\Series;
use iRacingPHP\Data\Stats;
use iRacingPHP\Data\Team;
use iRacingPHP\Data\TimeAttack;
use iRacingPHP\Data\Track;

class iRacing
{
    /**
     * @var Api
     */
    public $api;
    /**
     * @var Car
     */
    public $car;
    /**
     * @var CarClass
     */
    public $carclass;
    /**
     * @var Constants
     */
    public $constants;
    /**
     * @var Hosted
     */
    public $hosted;
    /**
     * @var League
     */
    public $league;
    /**
     * @var Lookup
     */
    public $lookup;
    /**
     * @var Member
     */
    public $member;
    /**
     * @var Results
     */
    public $results;
    /**
     * @var Season
     */
    public $season;
    /**
     * @var Series
     */
    public $series;
    /**
     * @var Stats
     */
    public $stats;
    /**
     * @var Team
     */
    public $team;
    /**
     * @var Track
     */
    public $track;
    /**
     * @var TimeAttack
     */
    public $time_attack;
    
    function __construct($username, $password, $cookiejar = LibConstants::COOKIEJAR)
    {
        if(!is_string($username) || !is_string($password) || !is_string($cookiejar)) {
            throw new \Exception("Cannot construct iracing-php class iRacing. Missing parameters!");
        }

        $this->api = new Api($username, $password, $cookiejar);

        $this->car = new Car($this->api);
        $this->carclass = new CarClass($this->api);
        $this->constants = new Constants($this->api);
        $this->hosted = new Hosted($this->api);
        $this->league = new League($this->api);
        $this->lookup = new Lookup($this->api);
        $this->member = new Member($this->api);
        $this->results = new Results($this->api);
        $this->season = new Season($this->api);
        $this->series = new Series($this->api);
        $this->team = new Team($this->api);
        $this->track = new Track($this->api);
        $this->stats = new Stats($this->api);
        $this->time_attack = new TimeAttack($this->api);
    }
}
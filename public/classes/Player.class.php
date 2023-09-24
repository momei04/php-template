<?php

class Player{
    private $age;
    private $club;
    private $goals;
    private $name;
    private $id;
    private $redCards;
    private $yellowCards;
    private $isInjured;
    private $isSuspended;
    private $avgPoints;
    private $gesPoints;
    private $playedMatches;
    private $startedMatches;
    private $assists;
    private $isStartLineUP;
    private $IsSubstituted;
    private $isBenched;

    /**
     * @param $age
     * @param $club
     * @param $goals
     * @param $name
     * @param $id
     * @param $redCards
     * @param $yellowCards
     * @param $isInjured
     * @param $isSuspended
     * @param $avgPoints
     * @param $gesPoints
     * @param $playedMatches
     * @param $startedMatches
     * @param $assists
     * @param $isStartLineUP
     * @param $IsSubstituted
     * @param $isBenched
     */
    public function __construct($age, $club, $goals, $name, $id, $redCards, $yellowCards, $isInjured, $isSuspended, $avgPoints, $gesPoints, $playedMatches, $startedMatches, $assists, $isStartLineUP, $IsSubstituted, $isBenched)
    {
        $this->age = $age;
        $this->club = $club;
        $this->goals = $goals;
        $this->name = $name;
        $this->id = $id;
        $this->redCards = $redCards;
        $this->yellowCards = $yellowCards;
        $this->isInjured = $isInjured;
        $this->isSuspended = $isSuspended;
        $this->avgPoints = $avgPoints;
        $this->gesPoints = $gesPoints;
        $this->playedMatches = $playedMatches;
        $this->startedMatches = $startedMatches;
        $this->assists = $assists;
        $this->isStartLineUP = $isStartLineUP;
        $this->IsSubstituted = $IsSubstituted;
        $this->isBenched = $isBenched;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getClub()
    {
        return $this->club;
    }

    /**
     * @param mixed $club
     */
    public function setClub($club): void
    {
        $this->club = $club;
    }

    /**
     * @return mixed
     */
    public function getGoals()
    {
        return $this->goals;
    }

    /**
     * @param mixed $goals
     */
    public function setGoals($goals): void
    {
        $this->goals = $goals;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getRedCards()
    {
        return $this->redCards;
    }

    /**
     * @param mixed $redCards
     */
    public function setRedCards($redCards): void
    {
        $this->redCards = $redCards;
    }

    /**
     * @return mixed
     */
    public function getYellowCards()
    {
        return $this->yellowCards;
    }

    /**
     * @param mixed $yellowCards
     */
    public function setYellowCards($yellowCards): void
    {
        $this->yellowCards = $yellowCards;
    }

    /**
     * @return mixed
     */
    public function getIsInjured()
    {
        return $this->isInjured;
    }

    /**
     * @param mixed $isInjured
     */
    public function setIsInjured($isInjured): void
    {
        $this->isInjured = $isInjured;
    }

    /**
     * @return mixed
     */
    public function getIsSuspended()
    {
        return $this->isSuspended;
    }

    /**
     * @param mixed $isSuspended
     */
    public function setIsSuspended($isSuspended): void
    {
        $this->isSuspended = $isSuspended;
    }

    /**
     * @return mixed
     */
    public function getAvgPoints()
    {
        return $this->avgPoints;
    }

    /**
     * @param mixed $avgPoints
     */
    public function setAvgPoints($avgPoints): void
    {
        $this->avgPoints = $avgPoints;
    }

    /**
     * @return mixed
     */
    public function getGesPoints()
    {
        return $this->gesPoints;
    }

    /**
     * @param mixed $gesPoints
     */
    public function setGesPoints($gesPoints): void
    {
        $this->gesPoints = $gesPoints;
    }

    /**
     * @return mixed
     */
    public function getPlayedMatches()
    {
        return $this->playedMatches;
    }

    /**
     * @param mixed $playedMatches
     */
    public function setPlayedMatches($playedMatches): void
    {
        $this->playedMatches = $playedMatches;
    }

    /**
     * @return mixed
     */
    public function getStartedMatches()
    {
        return $this->startedMatches;
    }

    /**
     * @param mixed $startedMatches
     */
    public function setStartedMatches($startedMatches): void
    {
        $this->startedMatches = $startedMatches;
    }

    /**
     * @return mixed
     */
    public function getAssists()
    {
        return $this->assists;
    }

    /**
     * @param mixed $assists
     */
    public function setAssists($assists): void
    {
        $this->assists = $assists;
    }

    /**
     * @return mixed
     */
    public function getIsStartLineUP()
    {
        return $this->isStartLineUP;
    }

    /**
     * @param mixed $isStartLineUP
     */
    public function setIsStartLineUP($isStartLineUP): void
    {
        $this->isStartLineUP = $isStartLineUP;
    }

    /**
     * @return mixed
     */
    public function getIsSubstituted()
    {
        return $this->IsSubstituted;
    }

    /**
     * @param mixed $IsSubstituted
     */
    public function setIsSubstituted($IsSubstituted): void
    {
        $this->IsSubstituted = $IsSubstituted;
    }

    /**
     * @return mixed
     */
    public function getIsBenched()
    {
        return $this->isBenched;
    }

    /**
     * @param mixed $isBenched
     */
    public function setIsBenched($isBenched): void
    {
        $this->isBenched = $isBenched;
    }



}
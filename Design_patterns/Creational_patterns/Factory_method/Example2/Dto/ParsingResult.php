<?php

declare(strict_types=1);

namespace Dto;

class ParsingResult
{
    private string $sportName;
    private string $leagueName;
    private string $homeTeamName;
    private string $awayTeamName;
    private string $homeTeamScore;
    private string $awayTeamScore;

    public function isValid(): bool
    {
        return (
            !empty($this->sportName)
            && !empty($this->leagueName)
            && !empty($this->homeTeamName)
            && !empty($this->awayTeamName)
            && !empty($this->homeTeamScore)
            && !empty($this->awayTeamScore)
        );
    }

    public function setFromArray(array $list): void {
        $this->setSportName($list[0]);
        $this->setLeagueName($list[1]);
        $this->setHomeTeamName($list[2]);
        $this->setAwayTeamName($list[3]);
        $this->setHomeTeamScore($list[4]);
        $this->setAwayTeamScore($list[5]);
    }

    /**
     * @return string
     */
    public function getSportName(): string
    {
        return $this->sportName;
    }

    /**
     * @param string $sportName
     */
    public function setSportName(string $sportName): void
    {
        $this->sportName = $sportName;
    }

    /**
     * @return string
     */
    public function getLeagueName(): string
    {
        return $this->leagueName;
    }

    /**
     * @param string $leagueName
     */
    public function setLeagueName(string $leagueName): void
    {
        $this->leagueName = $leagueName;
    }

    /**
     * @return string
     */
    public function getHomeTeamName(): string
    {
        return $this->homeTeamName;
    }

    /**
     * @param string $homeTeamName
     */
    public function setHomeTeamName(string $homeTeamName): void
    {
        $this->homeTeamName = $homeTeamName;
    }

    /**
     * @return string
     */
    public function getAwayTeamName(): string
    {
        return $this->awayTeamName;
    }

    /**
     * @param string $awayTeamName
     */
    public function setAwayTeamName(string $awayTeamName): void
    {
        $this->awayTeamName = $awayTeamName;
    }

    /**
     * @return string
     */
    public function getHomeTeamScore(): string
    {
        return $this->homeTeamScore;
    }

    /**
     * @param string $homeTeamScore
     */
    public function setHomeTeamScore(string $homeTeamScore): void
    {
        $this->homeTeamScore = $homeTeamScore;
    }

    /**
     * @return string
     */
    public function getAwayTeamScore(): string
    {
        return $this->awayTeamScore;
    }

    /**
     * @param string $awayTeamScore
     */
    public function setAwayTeamScore(string $awayTeamScore): void
    {
        $this->awayTeamScore = $awayTeamScore;
    }

    /**
     * @return string
     */
    public function getMatchDate(): string
    {
        return $this->matchDate;
    }

    /**
     * @param string $matchDate
     */
    public function setMatchDate(string $matchDate): void
    {
        $this->matchDate = $matchDate;
    }
    private string $matchDate;

}

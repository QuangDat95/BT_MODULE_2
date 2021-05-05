<?php
const ZERO = '0';
const ONE = '1';
const TWO = '2';
const THREE = '3';
class TennisGame
{
    public string $score = '';

    public function getScore($FirstPlayer, $SecondPlayer, $ScoreFirst, $ScoreSecond)
    {
        $tempScore = 0;

        if ($ScoreFirst == $ScoreSecond) {
            switch ($ScoreFirst) {
                case ZERO:
                    $this->score = "Love-All";
                    break;
                case ONE:
                    $this->score = "Fifteen-All";
                    break;
                case TWO:
                    $this->score = "Thirty-All";
                    break;
                case THREE:
                    $this->score = "Forty-All";
                    break;
                default:
                    $this->score = "Deuce";
                    break;

            }
        } else if ($ScoreFirst >= 4 || $ScoreSecond >= 4) {
            $minusResult = $ScoreFirst - $ScoreSecond;
            if ($minusResult == 1) $this->score = "Advantage player1";
            else if ($minusResult == -1) $this->score = "Advantage player2";
            else if ($minusResult >= 2) $this->score = "Win for player1";
            else $this->score = "Win for player2";
        } else {
            for ($i = 1; $i < 3; $i++) {
                if ($i == 1) $tempScore = $ScoreFirst;
                else {
                    $this->score .= "-";
                    $tempScore = $ScoreSecond;
                }
                switch ($tempScore) {
                    case ZERO:
                        $this->score .= "Love";
                        break;
                    case ONE:
                        $this->score .= "Fifteen";
                        break;
                    case TWO:
                        $this->score .= "Thirty";
                        break;
                    case THREE:
                        $this->score .= "Forty";
                        break;
                }
            }
        }
    }

    public function __toString(): string
    {
        return $this->score;
    }
}
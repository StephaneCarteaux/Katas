<?php

class Connect4 {
    private $grid;
    private $currentPlayer;
    private $gameFinished;

    function __construct() {
        $this->grid = array_fill(0, 7, array_fill(0, 6, null));
        $this->currentPlayer = 1;
        $this->gameFinished = false;
    }

    function play($col) {
        if ($this->gameFinished) {
            return "Game has finished!";
        }

        if ($col < 0 || $col >= 7) {
            return "Invalid column!";
        }

        $row = $this->getFirstEmptyRow($col);
        if ($row === null) {
            return "Column full!";
        }

        $this->grid[$col][$row] = $this->currentPlayer;

        if ($this->checkWin($col, $row)) {
            $this->gameFinished = true;
            return "Player {$this->currentPlayer} wins!";
        }

        $result = "Player {$this->currentPlayer} has a turn";
        $this->currentPlayer = 3 - $this->currentPlayer;

        return $result;

    }

    private function getFirstEmptyRow($col) {
        for ($row = 0; $row < 6; $row++) {
            if ($this->grid[$col][$row] === null) {
                return $row;
            }
        }
        return null;
    }

    private function checkWin($col, $row) {
        $player = $this->currentPlayer;

        $directions = [
            [[0,1], [0, -1]],
            [[1,0], [-1, 0]],
            [[1,1], [-1, -1]],
            [[1,-1], [-1, 1]],
        ];

        foreach ($directions as $direction) {
            $count = 1;
            foreach ($direction as $dir) {
                $dx = $dir[0];
                $dy = $dir[1];
                $count += $this->countInDirection($col, $row, $dx, $dy, $player);
            }
            if ($count >= 4) {
                return true;
            }
        }
        return false;
    }

    private function countInDirection($col, $row, $dx, $dy, $player) {
        $count = 0;
        while (true) {
            $col += $dx;
            $row += $dy;

            if ($col <0 || $col >= 7 || $row < 0 || $row >= 6 || $this->grid[$col][$row] !== $player) {
                break;
            }
            $count++;
        }
        return $count;
    }
}

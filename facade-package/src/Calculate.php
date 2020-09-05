<?php

namespace Andrelugomes\Calculate;

class Calculate
{
    private $result;

    public function __construct()
    {
        $this->result = 0;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function add(int $value)
    {
        $this->result += $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function subtract(int $value)
    {
        $this->result -= $value;

        return $this;
    }

    public function clear()
    {
        $this->result = 0;

        return $this;
    }

    /**
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }
}

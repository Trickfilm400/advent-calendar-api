<?php


class Result {
    const MAX_RESULT_DAYS = 25;
    private mixed $json;
    private int $day;
    private mixed $data;

    public function __construct(mixed $json) {
        $this->json = $json;
        $this->data = $json["data"];
        $this->day = $this->getDay();
    }

    private function getDay(): int {
        $month = (int) date("n");
        //month between 1-6 -> day 25
        if ($month <= 6 && $month >= 1) return self::MAX_RESULT_DAYS;
        //month between 7-11 -> day 0
        if ($month < 12 && $month > 6) return 0;
        return (int) date("j");
    }

    public function getDataFromArray(): array {
        $resultArray = array();
        for ($i = 0; $i < $this->day; $i++) {
            //skip if no data is available
            if (!isset($this->data[$i])) continue;
            $resultArray[$i] = $this->data[$i];
        }
        return $resultArray;
    }

    /**
     * OVERWRITE DAYS FOR TESTING
     * @param int $day
     */
    public function setDay(int $day): void {
        $this->day = $day;
    }
}
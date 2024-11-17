class TimeZoneManager {
    public function convertTime(DateTime $time, string $targetZone): DateTime {
        return $this->performTimeZoneConversion($time, $targetZone);
    }
}

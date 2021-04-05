<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A schedule defines a repeating time period used to describe a regularly
 * occurring [[Event]]. At a minimum a schedule will specify [[repeatFrequency]]
 * which describes the interval between occurences of the event. Additional
 * information can be provided to specify the schedule more precisely.
 *       This includes identifying the day(s) of the week or month when the
 * recurring event will take place, in addition to its start and end time.
 * Schedules may also
 *       have start and end dates to indicate when they are active, e.g. to define
 * a limited calendar of events.
 */
class Schedule extends Intangible
{
    /**
     * Defines the number of times a recurring [[Event]] will take place
     */
    private $repeatCount;

    /**
     * Defines the week(s) of the month on which a recurring Event takes place.
     * Specified as an Integer between 1-5. For clarity, byMonthWeek is best used in
     * conjunction with byDay to indicate concepts like the first and third Mondays of
     * a month.
     */
    private $byMonthWeek;

    /**
     * Defines the frequency at which [[Event]]s will occur according to a schedule
     * [[Schedule]]. The intervals between
     *       events should be defined as a [[Duration]] of time.
     */
    private $repeatFrequency;

    /**
     * Defines the day(s) of the month on which a recurring [[Event]] takes place.
     * Specified as an [[Integer]] between 1-31.
     */
    private $byMonthDay;

    /**
     * Defines the day(s) of the week on which a recurring [[Event]] takes place. May
     * be specified using either [[DayOfWeek]], or alternatively [[Text]] conforming to
     * iCal's syntax for byDay recurrence rules.
     */
    private $byDay;

    /**
     * Defines a [[Date]] or [[DateTime]] during which a scheduled [[Event]] will not
     * take place. The property allows exceptions to
     *       a [[Schedule]] to be specified. If an exception is specified as a
     * [[DateTime]] then only the event that would have started at that specific date
     * and time
     *       should be excluded from the schedule. If an exception is specified as a
     * [[Date]] then any event that is scheduled for that 24 hour period should be
     *       excluded from the schedule. This allows a whole day to be excluded from
     * the schedule without having to itemise every scheduled event.
     */
    private $exceptDate;

    /**
     * Indicates the timezone for which the time(s) indicated in the [[Schedule]] are
     * given. The value provided should be among those listed in the IANA Time Zone
     * Database.
     */
    private $scheduleTimezone;

    /**
     * Defines the month(s) of the year on which a recurring [[Event]] takes place.
     * Specified as an [[Integer]] between 1-12. January is 1.
     */
    private $byMonth;

    public function getRepeatCount()
    {
        return $this->repeatCount;
    }

    public function setRepeatCount($repeatCount)
    {
        $this->repeatCount = $repeatCount;
    }

    public function getByMonthWeek()
    {
        return $this->byMonthWeek;
    }

    public function setByMonthWeek($byMonthWeek)
    {
        $this->byMonthWeek = $byMonthWeek;
    }

    public function getRepeatFrequency()
    {
        return $this->repeatFrequency;
    }

    public function setRepeatFrequency($repeatFrequency)
    {
        $this->repeatFrequency = $repeatFrequency;
    }

    public function getByMonthDay()
    {
        return $this->byMonthDay;
    }

    public function setByMonthDay($byMonthDay)
    {
        $this->byMonthDay = $byMonthDay;
    }

    public function getByDay()
    {
        return $this->byDay;
    }

    public function setByDay($byDay)
    {
        $this->byDay = $byDay;
    }

    public function getExceptDate()
    {
        return $this->exceptDate;
    }

    public function setExceptDate($exceptDate)
    {
        $this->exceptDate = $exceptDate;
    }

    public function getScheduleTimezone()
    {
        return $this->scheduleTimezone;
    }

    public function setScheduleTimezone($scheduleTimezone)
    {
        $this->scheduleTimezone = $scheduleTimezone;
    }

    public function getByMonth()
    {
        return $this->byMonth;
    }

    public function setByMonth($byMonth)
    {
        $this->byMonth = $byMonth;
    }
}


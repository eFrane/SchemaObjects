<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * An event happening at a certain time and location, such as a concert, lecture,
 * or festival. Ticketing information may be added via the [[offers]] property.
 * Repeated events may be structured as separate Event objects.
 */
class Event extends Thing
{
    /**
     * The start date and time of the item (in [ISO 8601 date
     * format](http://en.wikipedia.org/wiki/ISO_8601)).
     */
    private $startDate;

    /**
     * Used in conjunction with eventStatus for rescheduled or cancelled events. This
     * property contains the previously scheduled start date. For rescheduled events,
     * the startDate property should be used for the newly scheduled start date. In the
     * (rare) case of an event that has been postponed and rescheduled multiple times,
     * this field may be repeated.
     */
    private $previousStartDate;

    /**
     * A review of the item.
     */
    private $review;

    /**
     * An organizer of an Event.
     */
    private $organizer;

    /**
     * The person or organization who wrote a composition, or who is the composer of a
     * work performed at some event.
     */
    private $composer;

    /**
     * A flag to signal that the item, event, or place is accessible for free.
     */
    private $isAccessibleForFree;

    /**
     * A secondary contributor to the CreativeWork or Event.
     */
    private $contributor;

    /**
     * Associates an [[Event]] with a [[Schedule]]. There are circumstances where it is
     * preferable to share a schedule for a series of
     *       repeating events rather than data on the individual events themselves. For
     * example, a website or application might prefer to publish a schedule for a
     * weekly
     *       gym class rather than provide data on every event. A schedule could be
     * processed by applications to add forthcoming events to a calendar. An [[Event]]
     * that
     *       is associated with a [[Schedule]] using this property should not have
     * [[startDate]] or [[endDate]] properties. These are instead defined within the
     * associated
     *       [[Schedule]], this avoids any ambiguity for clients using the data. The
     * property might have repeated values to specify different schedules, e.g. for
     * different months
     *       or seasons.
     */
    private $eventSchedule;

    /**
     * A person attending the event.
     */
    private $attendees;

    /**
     * A person or organization attending the event.
     */
    private $attendee;

    /**
     * The total number of individuals that may attend an event or venue.
     */
    private $maximumAttendeeCapacity;

    /**
     * The maximum physical attendee capacity of an [[Event]] whose
     * [[eventAttendanceMode]] is [[OnlineEventAttendanceMode]] (or the online aspects,
     * in the case of a [[MixedEventAttendanceMode]]).
     */
    private $maximumVirtualAttendeeCapacity;

    /**
     * The eventAttendanceMode of an event indicates whether it occurs online, offline,
     * or a mix.
     */
    private $eventAttendanceMode;

    /**
     * A work performed in some event, for example a play performed in a TheaterEvent.
     */
    private $workPerformed;

    /**
     * A work featured in some event, e.g. exhibited in an ExhibitionEvent.
     *        Specific subproperties are available for workPerformed (e.g. a play), or
     * a workPresented (a Movie at a ScreeningEvent).
     */
    private $workFeatured;

    /**
     * A person or organization that supports a thing through a pledge, promise, or
     * financial contribution. e.g. a sponsor of a Medical Study or a corporate sponsor
     * of an event.
     */
    private $sponsor;

    /**
     * An eventStatus of an event represents its status; particularly useful when an
     * event is cancelled or rescheduled.
     */
    private $eventStatus;

    /**
     * The main performer or performers of the event&#x2014;for example, a presenter,
     * musician, or actor.
     */
    private $performers;

    /**
     * A performer at the event&#x2014;for example, a presenter, musician, musical
     * group or actor.
     */
    private $performer;

    /**
     * Events that are a part of this event. For example, a conference event includes
     * many presentations, each subEvents of the conference.
     */
    private $subEvents;

    /**
     * An Event that is part of this event. For example, a conference event includes
     * many presentations, each of which is a subEvent of the conference.
     */
    private $subEvent;

    /**
     * The time admission will commence.
     */
    private $doorTime;

    /**
     * The maximum physical attendee capacity of an [[Event]] whose
     * [[eventAttendanceMode]] is [[OfflineEventAttendanceMode]] (or the offline
     * aspects, in the case of a [[MixedEventAttendanceMode]]).
     */
    private $maximumPhysicalAttendeeCapacity;

    /**
     * The number of attendee places for an event that remain unallocated.
     */
    private $remainingAttendeeCapacity;

    /**
     * An event that this event is a part of. For example, a collection of individual
     * music performances might each have a music festival as their superEvent.
     */
    private $superEvent;

    /**
     * The CreativeWork that captured all or part of this Event.
     */
    private $recordedIn;

    public function getStartDate()
    {
        return $this->startDate;
    }

    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    public function getPreviousStartDate()
    {
        return $this->previousStartDate;
    }

    public function setPreviousStartDate($previousStartDate)
    {
        $this->previousStartDate = $previousStartDate;
    }

    public function getReview()
    {
        return $this->review;
    }

    public function setReview($review)
    {
        $this->review = $review;
    }

    public function getOrganizer()
    {
        return $this->organizer;
    }

    public function setOrganizer($organizer)
    {
        $this->organizer = $organizer;
    }

    public function getComposer()
    {
        return $this->composer;
    }

    public function setComposer($composer)
    {
        $this->composer = $composer;
    }

    public function getIsAccessibleForFree()
    {
        return $this->isAccessibleForFree;
    }

    public function setIsAccessibleForFree($isAccessibleForFree)
    {
        $this->isAccessibleForFree = $isAccessibleForFree;
    }

    public function getContributor()
    {
        return $this->contributor;
    }

    public function setContributor($contributor)
    {
        $this->contributor = $contributor;
    }

    public function getEventSchedule()
    {
        return $this->eventSchedule;
    }

    public function setEventSchedule($eventSchedule)
    {
        $this->eventSchedule = $eventSchedule;
    }

    public function getAttendees()
    {
        return $this->attendees;
    }

    public function setAttendees($attendees)
    {
        $this->attendees = $attendees;
    }

    public function getAttendee()
    {
        return $this->attendee;
    }

    public function setAttendee($attendee)
    {
        $this->attendee = $attendee;
    }

    public function getMaximumAttendeeCapacity()
    {
        return $this->maximumAttendeeCapacity;
    }

    public function setMaximumAttendeeCapacity($maximumAttendeeCapacity)
    {
        $this->maximumAttendeeCapacity = $maximumAttendeeCapacity;
    }

    public function getMaximumVirtualAttendeeCapacity()
    {
        return $this->maximumVirtualAttendeeCapacity;
    }

    public function setMaximumVirtualAttendeeCapacity($maximumVirtualAttendeeCapacity)
    {
        $this->maximumVirtualAttendeeCapacity = $maximumVirtualAttendeeCapacity;
    }

    public function getEventAttendanceMode()
    {
        return $this->eventAttendanceMode;
    }

    public function setEventAttendanceMode($eventAttendanceMode)
    {
        $this->eventAttendanceMode = $eventAttendanceMode;
    }

    public function getWorkPerformed()
    {
        return $this->workPerformed;
    }

    public function setWorkPerformed($workPerformed)
    {
        $this->workPerformed = $workPerformed;
    }

    public function getWorkFeatured()
    {
        return $this->workFeatured;
    }

    public function setWorkFeatured($workFeatured)
    {
        $this->workFeatured = $workFeatured;
    }

    public function getSponsor()
    {
        return $this->sponsor;
    }

    public function setSponsor($sponsor)
    {
        $this->sponsor = $sponsor;
    }

    public function getEventStatus()
    {
        return $this->eventStatus;
    }

    public function setEventStatus($eventStatus)
    {
        $this->eventStatus = $eventStatus;
    }

    public function getPerformers()
    {
        return $this->performers;
    }

    public function setPerformers($performers)
    {
        $this->performers = $performers;
    }

    public function getPerformer()
    {
        return $this->performer;
    }

    public function setPerformer($performer)
    {
        $this->performer = $performer;
    }

    public function getSubEvents()
    {
        return $this->subEvents;
    }

    public function setSubEvents($subEvents)
    {
        $this->subEvents = $subEvents;
    }

    public function getSubEvent()
    {
        return $this->subEvent;
    }

    public function setSubEvent($subEvent)
    {
        $this->subEvent = $subEvent;
    }

    public function getDoorTime()
    {
        return $this->doorTime;
    }

    public function setDoorTime($doorTime)
    {
        $this->doorTime = $doorTime;
    }

    public function getMaximumPhysicalAttendeeCapacity()
    {
        return $this->maximumPhysicalAttendeeCapacity;
    }

    public function setMaximumPhysicalAttendeeCapacity($maximumPhysicalAttendeeCapacity)
    {
        $this->maximumPhysicalAttendeeCapacity = $maximumPhysicalAttendeeCapacity;
    }

    public function getRemainingAttendeeCapacity()
    {
        return $this->remainingAttendeeCapacity;
    }

    public function setRemainingAttendeeCapacity($remainingAttendeeCapacity)
    {
        $this->remainingAttendeeCapacity = $remainingAttendeeCapacity;
    }

    public function getSuperEvent()
    {
        return $this->superEvent;
    }

    public function setSuperEvent($superEvent)
    {
        $this->superEvent = $superEvent;
    }

    public function getRecordedIn()
    {
        return $this->recordedIn;
    }

    public function setRecordedIn($recordedIn)
    {
        $this->recordedIn = $recordedIn;
    }
}


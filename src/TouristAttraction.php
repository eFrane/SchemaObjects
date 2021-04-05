<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A tourist attraction.  In principle any Thing can be a [[TouristAttraction]],
 * from a [[Mountain]] and [[LandmarksOrHistoricalBuildings]] to a
 * [[LocalBusiness]].  This Type can be used on its own to describe a general
 * [[TouristAttraction]], or be used as an [[additionalType]] to add tourist
 * attraction properties to any other type.  (See examples below)
 */
class TouristAttraction extends Place
{
}


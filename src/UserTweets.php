<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * UserInteraction and its subtypes is an old way of talking about users
 * interacting with pages. It is generally better to use [[Action]]-based
 * vocabulary, alongside types such as [[Comment]].
 */
class UserTweets extends UserInteraction
{
}

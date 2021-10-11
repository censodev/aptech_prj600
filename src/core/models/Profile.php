<?php

class Profile extends Model
{
    protected function getTable(): string
    {
        return 'profiles';
    }
}

abstract class ProfileStatus
{
    const CREATED = 0;
    const CHECKED_IN = 1;
    const SCREENED = 2;
    const INJECTED = 3;
    const COMPLETED = 4;

    const REJECTED = -1;
    const FAILED = -2;
}
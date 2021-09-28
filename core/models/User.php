<?php

class User extends Model
{
    protected function getTable(): string
    {
        return 'users';
    }
}
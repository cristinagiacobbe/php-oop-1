<?php

class Genre
{

    public function __construct(public string $name, public string $slug)
    {
        $this->name = $name;
        $this->slug = $slug;
    }
}

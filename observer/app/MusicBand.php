<?php

namespace App;

use SplSubject;
use SplObserver;

class MusicBand implements SplSubject
{
    public function __construct(
        private string $name,
        private array  $concerts = [],
        private array  $observers = []
    )
    {}

    public function addNewConcertDate(string $date, string $location): void
    {
        $this->concert = [
            'date' => $date,
            'location' => $location
        ];
        $this->notify();
    }

    public function attach(SplObserver $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(SplObserver $observer): void
    {
        $this->observers = array_filter($this->observers, function ($a) use ($observer) {
            return $a !== $observer;
        });
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}
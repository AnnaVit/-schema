<?php


namespace observer\entity;


use SplObserver;

class Vacancy implements \SplSubject
{

    public /*string*/ $company;
    public /*string*/ $vacancy;
    public $status;
    public /*\SplObjectStorage*/ $observers;



    public function __construct(string $company, string $vacancy)
    {
        $this->observers = new \SplObjectStorage();
        $this->company = $company;
        $this->vacancy = $vacancy;

    }

    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function openVacancy(): void
    {
        $this->status = "open";
        $this->notify();
    }
}
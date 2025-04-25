<?php

namespace App\Livewire;

use Carbon\Carbon;
use App\Models\Meeting;
use Livewire\Component;

class MeetingForm extends Component
{
    public $selectedDate;
    public $availableTimes = [];

    public function updatedSelectedDate()
    {
        $this->getAvailableTimes($this->selectedDate);
    }

    public function getAvailableTimes($date)
    {
        if ($date != '') {

            $this->availableTimes = [];

            $meetingTimes = Meeting::where('date', $date)->pluck('time')->map(function ($t) {
                return Carbon::parse($t)->format('H:i');
            });

            $start = Carbon::createFromTime(8, 0);
            $end = Carbon::createFromTime(17, 0);

            while ($start <= $end) {
                $time = $start->format('H:i');

                if (!$meetingTimes->contains($time)) {
                    $this->availableTimes[] = $time;
                }

                $start->addMinutes(90);
            }
        } else {
            $this->availableTimes = [];
        }
    }

    public function render()
    {
        return view('livewire.meeting-form');
    }
}

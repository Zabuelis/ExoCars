@php
use Carbon\Carbon
@endphp

<div>
    <div class="row">
        <div class="col">
            <label for="date" class="form-label">Date</label>
            <div class="input-group">
                <input id="date" class="form-control" type="date" wire:model.lazy="selectedDate" name="date"
                    min="{{ Carbon::tomorrow()->toDateString() }}"
                    max="{{ Carbon::tomorrow()->addDays(30)->toDateString() }}"
                    required>
            </div>
        </div>
        <div class="col">
            <label for="time" class="form-label">Time</label>
            <div class="input-group">
                <select class="form-select" name="time" id="time">
                    <option selected disabled>Please select available time</option>
                    @foreach($availableTimes as $time)
                    <option value="{{ $time }}">{{ $time }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</div>
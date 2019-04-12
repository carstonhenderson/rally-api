@extends('layouts.app')

@section('content')
    <form action="/entries" method="POST">
        @csrf

        <p>How are you?</p>

        <div>
            <input type="radio" name="mood" id="great" value="great">

            <label for="great">Great</label>
        </div>

        <div>
            <input type="radio" name="mood" id="good" value="good">

            <label for="good">Good</label>
        </div>

        <div>
            <input type="radio" name="mood" id="fine" value="fine">

            <label for="fine">Fine</label>
        </div>

        <div>
            <input type="radio" name="mood" id="bad" value="bad">

            <label for="bad">Bad</label>
        </div>

        <div>
            <input type="radio" name="mood" id="terrible" value="terrible">

            <label for="terrible">Terrible</label>
        </div>

        <div>
            <label for="notes">What happened today?</label>
        </div>

        <div>
            <textarea name="notes" id="notes"></textarea>
        </div>

        <div>
            <label for="emotions">Which emotions have you felt today?</label>
        </div>

        <div>
            <select name="emotions" id="emotions" multiple>
                <optgroup label="Positive">
                    <option value="amazed">Amazed</option>
                    <option value="comfortable">Comfortable</option>
                    <option value="content">Content</option>
                    <option value="determined">Deterimined</option>
                    <option value="eager">Eager</option>
                    <option value="energetic">Energetic</option>
                    <option value="happy">Happy</option>
                    <option value="hopeful">Hopeful</option>
                    <option value="inspired">Inspired</option>
                    <option value="joyful">Joyful</option>
                    <option value="loving">Loving</option>
                    <option value="motivated">Motivated</option>
                    <option value="peaceful">Peaceful</option>
                    <option value="proud">Proud</option>
                    <option value="relieved">Relieved</option>
                    <option value="satisfied">Satisfied</option>
                    <option value="silly">Silly</option>
                </optgroup>

                <optgroup label="Negative">
                        <option value="angry">Angry</option>
                        <option value="annoyed">Annoyed</option>
                        <option value="anxious">Anxious</option>
                        <option value="ashamed">Ashamed</option>
                        <option value="bitter">Bitter</option>
                        <option value="bored">Bored</option>
                        <option value="confused">Confused</option>
                        <option value="depressed">depressed</option>
                        <option value="disgusted">Disgusted</option>
                        <option value="embarrassed">Embarrassed</option>
                        <option value="envious">Envious</option>
                        <option value="frustrated">Frustrated</option>
                        <option value="furious">Furious</option>
                        <option value="hurt">Hurt</option>
                        <option value="inadequate">Inadequate</option>
                        <option value="insecure">Insecure</option>
                        <option value="irritated">Irritated</option>
                        <option value="jealous">Jealous</option>
                        <option value="lonely">Lonely</option>
                        <option value="lost">Lost</option>
                        <option value="miserable">Miserable</option>
                        <option value="nervous">Nervous</option>
                        <option value="overwhelmed">Overwhelmed</option>
                        <option value="resentful">Resentful</option>
                        <option value="sad">Sad</option>
                        <option value="scared">Scared</option>
                        <option value="self-conscious">Self-conscious</option>
                        <option value="stupid">Stupid</option>
                        <option value="tense">Tense</option>
                        <option value="terrified">terrified</option>
                        <option value="trapped">Trapped</option>
                        <option value="uncomfortable">Uncomfortable</option>
                        <option value="worried">Worried</option>
                        <option value="worthless">Worthless</option>
                </optgroup>
            </select>
        </div>

        <button type="submit">Save entry</button>
    </form>
@endsection
<x-header/>

<div class="wrapper">
    <div class="row">
        <div class="logo"></div>
        <h1> Artist/Performer Submission Form</h1>
    </div>

    <p> Please fill and submit this form for applications to play at <strong>Colne R&B festival</strong> 2022.</p>

    <form action="{{ route('submission.submit') }}" enctype="multipart/form-data" method="POST" class="submission">
    @csrf <!-- {{ csrf_field() }} -->

        <div class="info">

            <div class="error">
                @if($errors->any())
                    {!! implode('', $errors->all('<div class="info__block--error">:message</div>')) !!}
                @endif
            </div>
            <div class="info__block">

                <label for="name">Band:</label>
                <input autofocus id="name" name='name' class="submission__name" type="text" placeholder="&#Xf0c0">
            </div>

            <div class="info__block info__block--contact">
                <label for="email">Email:</label>
                <input name="email" id="email" class="submission__email" type="text" placeholder="&#Xf0e0">

                <label for="number">Number:</label>
                <input name="number" id="number" class="submission__number" type="text"
                       placeholder="&#Xf095">
            </div>

            <div class="info__block">
                <label for="link">Link:</label>
                <input name="link" id="link" class="submission__link" type="text"
                       placeholder="&#Xf0c1;">

            </div>

            <div class="info__block">
                <label for="file">Mp3:</label>
                <input name="file" id="file" class="submission__mp3" type="file" accept=".mp3,audio/*">
            </div>

            <p>
                Please select the times you are available.
                <br>
                <span class="footnote">
                    Please understand we cannot guarantee this will be your slot
                    to perform, however we will do our best to give artists times that match availability
                </span>
            </p>

            <h3>August</h3>
            <div class="container">

                <div class="submission__dates">
                    <div class="submission__dates--container">
                        <h4>Friday</h4>
                        <h5>26<span>th</span></h5>
                        <div class="tod">
                            <label>Day
                                <input class="tod__day" type="checkbox" name="fri-day">
                            </label>
                            <label>Night
                                <input class="tod__night" type="checkbox" name="fri-night">
                            </label>
                        </div>
                    </div>
                    <div class="submission__dates--container">
                        <h4>Saturday</h4>
                        <h5>27<span>th</span></h5>
                        <div class="tod">
                            <label>Day
                                <input class="tod__day" type="checkbox" name="sat-day">
                            </label>
                            <label>Night
                                <input class="tod__night" type="checkbox" name="sat-night">
                            </label>
                        </div>
                    </div>
                    <div class="submission__dates--container">
                        <h4>Sunday</h4>
                        <h5>28<span>th</span></h5>
                        <div class="tod">
                            <label>Day
                                <input class="tod__day" type="checkbox" name="sun-day">
                            </label>
                            <label>Night
                                <input class="tod__night" type="checkbox" name="sun-night">
                            </label>
                        </div>
                    </div>
                    <div class="submission__dates--container">
                        <h4>Monday</h4>
                        <h5>29<span>th</span></h5>
                        <div class="tod">
                            <label>Day
                                <input class="tod__day" type="checkbox" name="mon-day">
                            </label>
                            <label>Night
                                <input class="tod__night" type="checkbox" name="sat-night">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="submission__submit">Submit</button>
        </div>
    </form>

    <x-footer/>

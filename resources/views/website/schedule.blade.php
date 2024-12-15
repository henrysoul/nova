<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/schedule.css') }}">
</head>

<body>
    @include('includes.header')
    <div class="info">
        <h3 style="font-weight: bold;">What comes in a NOVA asssement?</h3>
        <p>Qualitive and Quantitative questions to learn about the athlete</p>
        <p>If in person: <br>We will come to you and be able to be hands on in peson with you to do the assesment. You
            will then recieve the results back to you through your client portal<br>If remote: <br>You will get a list
            of directions and you will record the videos on your own. Upload them to your file and then recieve the data
            back</p>
        <h3>What we test for currently: </h3>
        <h4 style="font-weight: bold;">Range of motion: </h4>
        <p class="colum"> -Ankle Flexion, Extension, Lateral -Knee Extension, Flexion -Spine Extension, Flexion, Lateral
            Tilt -Elbow Flexion <br>-Shoulder Internal rotation, External rotation -Scap range of motion -Hip abduction,
            abbduction</p>
        <h4 style="font-weight: bold;">Strength tests</h4>
        <p class="colum"> -Reverse Lunge -Squat -Hinge -Bench press -Vertical Jump -Side Lunge -Plank -Pushup -Pullup
            -Isometric rear foot elevated split squat hold -Bicep Curl -Tricep Extension -10 yard sprint -10 yard walk
            -Skater Jump</p>
        <button class="button" id="contact" style="cursor:pointer">Contact today</button>
    </div>
    <div class="container">
        <h2>Book your assessment today</h2>
        <form method="post" action="saveSchedule" id="form">
            @csrf
            <label for="name">Name</label>
            <input type="text" id="name" required placeholder="Enter your full name"
                value="{{ old('name') ? old('name') : Auth::user()->name }}">

            <label for="email">Email</label>
            <input type="email" id="email" required placeholder="Enter your email"
                value="{{ old('email') ? old('email') : Auth::user()->email }}">

            <label>Need of assesment</label>
            <!-- Radio buttons for 'Individual' and 'Group' -->
            <div class="button-row">
                <button class="setting" id="individual" type="button">Individual</button>
                <button class="setting" id="group" type="button">Group or team</button>
            </div>


            <!-- This field will appear if "Group" is selected -->
            <label id="numberofath" for="number">Number of Athletes</label>
            <input type="text" id="athletes" placeholder="Enter the number of athletes">
            <label id="location" for="location">Assesment Location</label>
            <input type="text" id="location" placeholder="Where do you want to do the assesment">
            <label for="number">Phone Number</label>
            <input type="text" id="number" required placeholder="Enter your phone number">
            <label for="date">Preferred Date of assesment</label>
            <input type="date" id="date" name="date" required>
            <input type="hidden" id="type" name="type" value="0"/>
            <button type="button" id="submit">Submit</button>

        </form>

    </div>
    <div class="popup-overlay"></div>
    <div class="popup">
        <h2>We will be in touch soon!</h2>
        <p>One of our team members will be reaching out to you to give you a quote and set up a specific date and time
            to run an assessment.</p>
        <p>Until then, learn more about our process and how we evaluate athletes.</p><br>
        <a href="{{url('/about')}}">Learn more about NOVA software</a>
        <button id="cancel">X</button>
    </div>

    <script src="{{ asset('assets/js/schedule.js') }}"></script>
</body>

</html>

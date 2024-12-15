
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/css/about.css')}}">
</head>
<body style="background:#222222;">
    @include('includes.header')
    <h1 style="color: white;"><Br><br>The story of NOVA</h1>
    <video id="lunge1" src="{{asset('assets/img/lunge1.mp4')}}" type="video/mp4" width="85%" height="60%" autoplay muted loop style="position: relative; left: -18%; top: 5%; "></video>
    <p id="subtext">Where we started (First Edition)</p>
    <div class="container">
        <div class="firstbox">
            <h3>What is Nova?</h3>
            <p>Nova is an advanced software solution designed to track and analyze joint movements and various biomechanical metrics with precision. What sets NOVA apart from other biometric movement platforms is its sophisticated data analysis capabilities. The software seamlessly connects data points across a wide range of factors, including athletic performance, gender, body symmetry, timeframes (days, weeks, months), sports, and injury history. By identifying correlations between these interconnected traits, NOVA delivers unparalleled insights for optimizing performance and understanding movement dynamics.</p>
            <h3>How does NOVA work?</h3>
            <p>Through machine learning, NOVA can recognize all parts of the body and track the angles, distances, and speed of the athlete. After raw data collection, the data gets run through a series of algorithms that find correlations, discrepancies, and overall efficiency for each movement depending on close to 30 different factors.</p>
            <h3>How accurate are the algorithms?</h3>
            <p>In phase one, we back-tested our algorithms by running them through simulated cases and found that it could identify risk patterns at 78% accuracy, far outperforming initial expectations. With the new refined algorithms, our goal is to be able to recognize patterns and risk factors at a much higher rate. Initial back testing shows an 89% accuracy rating, once again far outperforming initial sentiment.</p>
        </div>
    </div>    
    <ul>
        <li style="--accent-color:#13114d">
            <div class="date">Creation</div>
            <div class="title">A dream</div>
            <div class="descr">From scratch NOVA took close to six months to complete. There were many variations and growing pains that we went through to build the software you have today. Extensive input was given by top strength coaches around the country. Truly being an athletes truth detecor and a coaches second set of eyes.</div>
        </li>
        <li style="--accent-color:#404040">
            <div class="date">Machine Learning</div>
            <div class="title">Beta version</div>
            <div class="descr">The inital creation involved the user selecting what points needed to be measured and that's how the tracing would be done. It was the easier path, the shroter path but at the end of the day, it was going to be just another software application. We wanted to shake up the indusrtry and make a change. While the industry already has software that can dynamically pick up points, no one does it to the accuracy or depth that we have trained our model to do</div>
        </li>
        <li style="--accent-color:#757575">
            <div class="date">Algorithims</div>
            <div class="title">Analyzing Data</div>
            <div class="descr">Numbers are just numbers, but when the knowledge of how to apply it is lacking then at best the data is useless, and at worst the data is very harmful. To seperate ourselves even farther from the industry, state of the art algorithims were created from empirical data to properly determine the quality and meaning of the measurements. Now, athletes are able to get real, effective data and apply it to their program.</div>
        </li>
        <li style="--accent-color:#111769">
            <div class="date">Refined Algorithims </div>
            <div class="title">Volume II</div>
            <div class="descr">To enhance the equations, we expanded data collection, incorporating a more diverse athlete population. With the new data, we adjusted coefficients and improved the accuracy percentage by 10%.</div>
        </li>
        <li style="--accent-color:#dbdbdb">
            <div class="date">Our Future</div>
            <div class="descr">In this moment, our goal is to gather even more data to enhance the athletes experience. We look forward to seeing you in the future.</div>
        </li>
    </ul>
</body>
</html>
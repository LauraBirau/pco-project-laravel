@extends('layout');
@section('content');
<main class="editmain">
    <h1>Dashboard</h1>
    <table class="dashboard">
        <thead>
        <tr>
            <th>Quarter</th>
            <th>Course</th>
            <th>Exam</th>
            <th>Credits</th>
            <th>Grades</th>
            <th>Credits Earned</th>
        </tr>
        </thead>
        <tr>
            <td rowspan="5">1</td>
            <td>Program & Career Orientation</td>
            <td>Assessment website (Individual process assessment)</td>
            <td>2.5</td>
            <td>-</td>
            <td>0</td>
        </tr>
        <tr>
            <!-- Quarter 1-->
            <td>Computer Science Basics</td>
            <td>Written knowledge test</td>
            <td>5</td>
            <td>-</td>
            <td>0</td>
        </tr>
        <tr>
            <!-- Quarter 1-->
            <td>Programming Basics</td>
            <td>Case study exam</td>
            <td>5</td>
            <td>-</td>
            <td>0</td>
        </tr>
        <tr>
            <!-- Quarter 1-->
            <td>IT Personality Project Week 1</td>
            <td>Portfolio</td>
            <td>1.25</td>
            <td>-</td>
            <td>0</td>
        </tr>
        <tr>
            <!-- Quarter 1-->
            <td>IT Personality 1</td>
            <td>Portfolio</td>
            <td>1.25</td>
            <td>-</td>
            <td>0</td>
        </tr>
        <tr>
            <td rowspan="2">2</td>
            <td rowspan="2">Object-Oriented programming</td>
            <td>Presentation</td>
            <td rowspan="2">10</td>
            <td>-</td>
            <td rowspan="2">0</td>
        </tr>
        <tr>
            <td>Case study exam</td>
            <td>-</td>
        </tr>
        <tr>
            <td rowspan="4">3</th>
            <td>Framework Development 1</th>
            <td>Case study exam</th>
            <td>5</th>
            <td>-</th>
            <td>0</td>
        </tr>
        <tr>
            <!-- Quarter 3-->
            <td rowspan="3">Framework Project 1</td>
            <td>Criterium based interview</td>
            <td rowspan="3">7.5</td>
            <td>-</td>
            <td rowspan="3">0</td>
        </tr>
        <tr>
            <!-- Quarter 3-->
            <td>Assignment</td>
            <td>-</td>
        </tr>
        <tr>
            <!-- Quarter 3-->
            <td>Case study exam</td>
            <td>-</td>
        </tr>
        <tr>
            <td rowspan="3">4</td>
            <td rowspan="3">Framework Project 2</td>
            <td>Final delivery</td>
            <td rowspan="3">10</td>
            <td>-</td>
            <td rowspan="3">0</td>
        </tr>
        <tr>
            <td>Report of acceptance tests and optional assessments</td>
            <td>-</td>
        </tr>
        <tr>
            <td>IT Development portfolio</td>
            <td>-</td>
        </tr>
        <tr>
            <!-- Year 1-->
            <td rowspan="2">Year 1</td>
            <td rowspan="2">Personal Professional Development: Exploration</td>
            <td>English Test</td>
            <td rowspan="2">12.5</td>
            <td>-</td>
            <td rowspan="2">0</td>
        </tr>
        <tr>
            <!-- Quarter 4-->
            <td>Criterium focused interview</td>
            <td>-</td>
        </tr>
    </table>
    <br />
    <h3>NBSA</h3>
    <div class="progress-bar">
        <div class="bar">0%</div>

        <ul class="marker-list">
            <li class="marker" style="left: 75%">45EC</li>
        </ul>
    </div>
    <br />
    <br />
</main>
@endsection;

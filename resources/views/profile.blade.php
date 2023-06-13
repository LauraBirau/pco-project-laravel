@extends('layout');
@section('content');
<main class="editmain"  style = "padding-bottom: 30px;">
    <h1>Profile</h1>
    <section class="editprofile">
        <div class="left-half">
            <h3>Personal Information</h3>
            <table class="info">
                <tr>
                    <td>Name</td>
                    <td>Elena-Laura Birău</td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>Nationality</td>
                    <td>Romanian</td>
                </tr>
                <tr>
                    <td>Pre-education</td>
                    <td>National College "Dr. Ioan Mesota" Brasov</td>
                </tr>
                <tr>
                    <td>Profile/subjects followed during previous education</td>
                    <td>
                        Mathematics and Computer Science, intensive computer science
                    </td>
                </tr>
            </table>
            <h3>About me</h3>
            <p class="edit-aboutme">
                As you can see in the first picture, I'm from a very beautiful city,
                located in the center of Romania. It is one of the most known
                tourist locations, so some of you might have visited it. The area is
                also known for the Bran(Dracula) Castle, Peles Palace and skiing. I
                moved there about 8 years ago, so I'm quite used to being "the new
                kid". Therefore, I managed to get a couple of friends here quite
                quickly, as you can see in the next photo.
            </p>
            <p class="edit-aboutme">
                I'm also a movie enthusiast and a movie I have seen recently and is
                now on my "Best movies I have watched" list is "Identity". You can
                click the link and read more about it. The next photo shows a
                romanian traditional dessert that I have made (and I'm really proud
                about it). It is considered a hard to make dish that is usually
                baked around Christmas or Easter. The last picture represents one of
                my favorite activities (especially before the pandemic),
                volunteering. I have been a volunteer for Hospice for about 3 years
                now and it is one of my dearest organizations.
            </p>
        </div>
        <div class="right-half">
            <div class="my-characteristics">
                <p>Some of my characteristics are:</p>
                <style>
                    tr,
                    td {
                        border: 10px;
                        text-align: center;
                    }
                </style>
                <table class="table-my-characteristics">
                    <tr>
                        <td>Positive ones</td>
                        <td>Negative ones</td>
                    </tr>
                    <tr>
                        <td>
                            <ul>
                                <li>Patient</li>
                                <li>Organized</li>
                                <li>Reliable</li>
                                <li>Adaptable</li>
                                <li>Symphatetic</li>
                                <li>Funny :)</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>Perfectionist</li>
                                <li>Overachiever</li>
                                <li>Self-doubt</li>
                                <li>Overthinker</li>
                                <li>Bossy</li>
                                <li>Overcritical</li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="imgalign">
                <a
                    target="_blank"
                    href="https://en.wikipedia.org/wiki/Ioan_Me%C8%99ot%C4%83_National_College"
                ><img src="img/bv.jpg" alt="Brasov"
                    /></a>
                <img src="img/party.jpeg" alt="A gathering with friends" />
                <a target="_blank" href="https://www.imdb.com/title/tt0309698/">
                    <img
                        src="img/identity.jpg"
                        alt="Movie Identity"
                        id="img-identity"
                    /></a>
                <img src="img/food.jpeg" alt="A cake I have done" />
                <img src="img/hospice.jpeg" alt="Volunteering at Hospice" />
            </div>
        </div>
    </section>
</main>
@endsection;

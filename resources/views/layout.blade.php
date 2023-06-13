<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Index</title>
</head>

<body>
<header>
    <ul class="navigation">
        <img class="logo" src="/img/hz.png">
        <li class="list1"><a class="{{ Request::path() === '/' ? 'active' : '' }}" href="/">Index</a></li>
        <li class="list1"><a class="{{ Request::path() === 'profile' ? 'active' : '' }}" href="/profile">Profile</a></li>
        <li class="list1"><a class="{{ Request::path() === 'blog' ? 'active' : '' }}" href="/blog">Blog</a></li>
        <li class="list1"><a class="{{ Request::path() === 'faq' ? 'active' : '' }}" href="/faq">FAQ</a></li>
        <li class="list1"><a class="{{ Request::path() === 'dashboard' ? 'active' : '' }}" href="/dashboard">Dashboard</a></li>
    </ul>
    <ul class="importantlinks">
        <li class="list2"><a target="_blank" href="HZlinks/CER.pdf">CER</a></li>
        <li class="list2"><a target="_blank" href="HZlinks/IR.pdf">IR</a></li>
        <li class="list2"><a target="_blank" href="https://learn.hz.nl/my/">Learn</a></li>
        <li class="list2"><a target="_blank" href="https://portal.hz.nl/en/">MyHZ</a></li>
        <li class="list2"><a target="_blank" href="https://github.com/HZ-HBO-ICT">GitHub</a></li>
    </ul>
</header>
@yield('content');
<footer>
    <a target="_blank" href="https://www.instagram.com/laura_birau/"><img src="/img/instagram.png"></a>
    <a target="_blank" href="https://github.com/settings/profile"><img src="/img/github.png"></a>
    <a target="_blank" href="https://www.linkedin.com/in/elena-laura-birau-573932209/"><img
            src="/img/linkedin.png"></a>
    <p>Contact me:</p>
</footer>
</body>

</html>

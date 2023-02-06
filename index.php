<?php

error_reporting(E_USER_WARNING || E_WARNING);

session_start();

if(count($_GET) < 1) {
    $_SESSION['page'] = 'bio';
}

if ($_GET['bio'] == 'bio') {
    $_SESSION['page'] = 'bio';
} elseif ($_GET['study'] == 'study') {
    $_SESSION['page'] = 'study';
} elseif ($_GET['projects'] == 'projects') {
    $_SESSION['page'] = 'projects';
} elseif ($_GET['contacts'] == 'contacts') {
    $_SESSION['page'] = 'contacts';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Evgeny Vakhrushev WebDev portfolio page web developper developpeur web programmeur">
    <title>Evgeny Vakhrushev WebDev</title>
    <link rel="shortcut icon" href="./img/E.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/cf646263c8.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Solitreo&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./styleMedia1024.css">
    <link rel="stylesheet" href="./styleMedia768.css">
    <link rel="stylesheet" href="./styleMedia430.css">
</head>

<body class="min-h-screen w-full">
    <header class="py-4">
        <div class="header-container flex justify-between items-center w-4/6 m-auto text-zinc-50">
            <div class="header-logo flex items-center w-2/12 md:w-1/12">
                <img class="w-1/2" src="./img/E.png" alt="">
            </div>
            <nav>
                <ul class="flex justify-end items-start space-x-10 text-l sm:text-xl">
                    <li class="relative -z-1">
                        <div class="fakeborder absolute -top-1 left-0"></div>
                        <a href="https://github.com/Evgvakh?tab=repositories" class="z-20" target="_blank">
                            <i class="fa-brands fa-github mr-1"></i>GitHub</a>
                    </li>
                    <li class="relative z-1">
                        <div class="fakeborder absolute -top-1 left-0"></div>
                        <a href="https://www.linkedin.com/in/ev-va-347866261/" target="_blank">
                            <i class="fa-brands fa-linkedin-in mr-1"></i>LinkedIn</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="main-container w-5/6 m-auto mt-10">
            <div class="main-card mb-12">
                <div class="main-card__head w-11/12 m-auto p-1 text-slate-50">
                    <form action="" method="get">
                        <ul class="flex justify-between md:justify-around text-[10px] sm:text-[16px] md:text-xl tracking-tight">
                            <li class="w-1/6 <?= $_SESSION['page'] == 'bio' ? 'active' : '' ?>"><button type="submit"
                                    name="bio" value="bio" class="uppercase">bio</button></li>
                            <li class="w-1/6 <?= $_SESSION['page'] == 'study' ? 'active' : '' ?>">
                                <button type="submit" name="study" value="study" class="uppercase">study</button>
                            </li>
                            <li class="w-1/6 <?= $_SESSION['page'] == 'projects' ? 'active' : '' ?>">
                                <button type="submit" name="projects" value="projects" class="uppercase w-full">projects</button>
                            </li>
                            <li class="w-1/6 <?= $_SESSION['page'] == 'contacts' ? 'active' : '' ?>">
                                <button type="submit" name="contacts" value="contacts" class="uppercase w-full">contacts</button>
                            </li>
                        </ul>
                    </form>
                </div>
                <div class="main-card__content flex">
                    <div class="main-card__content-side w-full lg:w-1/3 xl:w-1/4 px-2 py-2 xl:py-10 text-slate-50 text-20px sm:text-xl xl:text-2xl text-center font-bold flex lg:flex-col justify-center items-center">
                        <h2 class="uppercase mr-2 md:mr-10 lg:mr-0 xl:mb-4">Evgeny</h2>
                        <div class="main-card__content-side__img lg:w-10/12 xl:w-11/12 my-0 xl:m-auto">                            
                            <img src="./img/Vakhrushev (5).png" alt="" class="w-full">                            
                        </div>
                        <h2 class="uppercase ml-2 md:ml-10 lg:ml-0 xl:mt-4">Vakhrushev</h2>
                    </div>
                    <div class="main-card__content-main w-full xl:w-3/4 p-2 h-full">
                        <?php if (count($_GET) < 1 || (isset($_GET['bio']) && $_GET['bio'] == 'bio')): ?>
                            <div class="content-wrapper capitalize text-slate-300 overflow-y-auto">
                                <div class="content-wrapper__item head flex text-slate-50">
                                    <div class="font-bold w-1/2">
                                        <p>INDEX</p>
                                    </div>
                                    <div class="font-bold w-1/2">
                                        <p>VALUE</p>
                                    </div>
                                </div>
                                <div class="content-wrapper__item flex">
                                    <div class="w-1/2">
                                        <p>Date of birth</p>
                                    </div>
                                    <div class="w-1/2">
                                        <p>18.05.1986</p>
                                    </div>
                                </div>
                                <div class="content-wrapper__item flex">
                                    <div class="w-1/2">
                                        <p>place of birth</p>
                                    </div>
                                    <div class="w-1/2">
                                        <p>Orenburg, Russia</p>
                                    </div>
                                </div>
                                <div class="content-wrapper__item flex">
                                    <div class="w-1/2">
                                        <p>Location</p>
                                    </div>
                                    <div class="w-1/2">
                                        <p>Nice, France</p>
                                    </div>
                                </div>
                                <div class="content-wrapper__item flex">
                                    <div class="w-1/2">
                                        <p>Education</p>
                                    </div>
                                    <div class="w-1/2">
                                        <p>Orenburg State pedagogical university. Foreign languages: French, English</p>
                                    </div>
                                </div>
                                <div class="content-wrapper__item flex">
                                    <div class="w-1/2">
                                        <p>Work permit</p>
                                    </div>
                                    <div class="w-1/2">
                                        <p>EU, Russia</p>
                                    </div>
                                </div>
                                <div class="content-wrapper__item flex">
                                    <div class="w-1/2">
                                        <p>Driver licence</p>
                                    </div>
                                    <div class="w-1/2">
                                        <p>Cat. B</p>
                                    </div>
                                </div>
                                <div class="content-wrapper__item flex">
                                    <div class="w-1/2">
                                        <p>Languages spoken</p>
                                    </div>
                                    <div class="w-1/2">
                                        <p>Russian - Native</p><p></p>
                                        <p>French - Fluent (C1)</p><p></p>
                                        <p>English - Intermediate (B1)</p><p></p>
                                        <p>Spanish - Rookie (A1)</p><p></p>       
                                    </div>
                                </div>
                            </div>
                        <?php elseif ($_GET['study'] == 'study'): ?>
                            <div class="content-wrapper capitalize text-slate-300">
                                <div class="content-wrapper__item head flex text-slate-50">
                                    <div class="font-bold w-1/2">
                                        <p>INDEX</p>
                                    </div>
                                    <div class="font-bold w-1/2">
                                        <p>VALUE</p>
                                    </div>
                                </div>
                                <div class="content-wrapper__item flex">
                                    <div class="w-1/2">
                                        <p>SkillFactory (Moscow, Russia, online)</p>
                                    </div>
                                    <div class="w-1/2">
                                        <p>WebDev Front-end (HTML/CSS, JS, PHP)</p>
                                        <p>nov. 2021 - mar. 2023</p>
                                    </div>
                                </div>
                                <div class="content-wrapper__item flex">
                                    <div class="w-1/2">
                                        <p>BrynoYam (St. Petersburg, Russia, online)</p>
                                    </div>
                                    <div class="w-1/2">
                                        <p>WebDev Front-end (HTML/CSS, JS, PHP)</p>
                                        <p>jun. 2022 - apr. 2023</p>
                                    </div>
                                </div>
                                <div class="content-wrapper__item flex">
                                    <div class="w-1/2">
                                        <p>LaPlateforme_ (Toulon, France, offline)</p>
                                    </div>
                                    <div class="w-1/2">
                                        <p>WebDev Full-stack (code a la carte) (HTML/CSS, JS, PHP, python)</p>
                                        <p>dec. 2022 - apr. 2023</p>
                                    </div>
                                </div>
                            </div>
                        <?php elseif ($_GET['projects'] == 'projects'): ?>
                            <div class="content-wrapper capitalize text-slate-300 overflow-y-hidden">
                                <div class="content-wrapper__item head flex text-slate-50">
                                    <div class="font-bold w-1/2">
                                        <p>INDEX</p>
                                    </div>
                                    <div class="font-bold w-1/2">
                                        <p>VALUE</p>
                                    </div>
                                </div>
                                <div class="content-wrapper__item flex">
                                    <div class="w-1/2">
                                        <p>PHP based projects</p>
                                    </div>
                                    <div class="w-1/2">
                                        <p>Language: PHP</p>
                                        <p>Visit my PHP projects page</p>
                                    </div>
                                </div>
                                <div class="content-wrapper__item flex">
                                    <div class="w-1/2">
                                        <p>JavaScript-based projects</p>
                                    </div>
                                    <div class="w-1/2">
                                        <p>Language: JS</p>
                                        <p>Visit my JS projects page</p>
                                    </div>
                                </div>
                                <div class="content-wrapper__item flex">
                                    <div class="w-1/2">
                                        <p>HTML/CSS</p>
                                    </div>
                                    <div class="w-1/2">
                                        <p>Language: HTML/CSS</p>
                                        <p>Visit my pure HTML/CSS projects page</p>
                                    </div>
                                </div>
                            </div>
                        <?php elseif ($_GET['contacts'] == 'contacts'): ?>
                            <div class="content-wrapper capitalize text-slate-300 overflow-y-hidden">
                                <div class="content-wrapper__item head flex text-slate-50">
                                    <div class="font-bold w-1/2">
                                        <p>INDEX</p>
                                    </div>
                                    <div class="font-bold w-1/2">
                                        <p>VALUE</p>
                                    </div>
                                </div>
                                <div class="content-wrapper__item flex">
                                    <div class="w-1/2">
                                        <p>Phone</p>
                                    </div>
                                    <div class="w-1/2">
                                        <p>+33 (0) 6 82 40 17 08</p>
                                        <p><a href="tel: +33 (0) 6 82 40 17 08">Call</a></p>
                                    </div>
                                </div>
                                <div class="content-wrapper__item flex">
                                    <div class="w-1/2">
                                        <p>Email</p>
                                    </div>
                                    <div class="w-1/2">
                                        <p style="text-transform: none;">evgvakh@gmail.com</p>
                                        <p><a href="mailto:evgvakh@gmail.com">Send email</a></p>
                                    </div>
                                </div>
                                <div class="content-wrapper__item flex">
                                    <div class="w-1/2">
                                        <p>Adress</p>
                                    </div>
                                    <div class="w-1/2">
                                        <p>3 Impasse du Mont Rabeau, 06200, Nice</p>
                                        <p><a href="https://fr.mappy.com/plan#/3%20Impasse%20du%20Mont%20Rabeau%2006200%20Nice" target="_blank">Look on Mappy</a></p>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>
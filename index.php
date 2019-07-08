<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,600,700&display=swap" rel="stylesheet">
    <style type="text/css">
        body {
            font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
            font-size: 1rem;
            line-height: 1.5;
            background-color: #fff;
            color: #718096;
            margin: 0;
            padding: 0;
            max-width: 100vw;
        }
        h1,h2,h3,h4,h5,h6 {
            margin: 0;
            color: #2C5282;
            font-family: 'Fira Sans', sans-serif;
            font-weight: 600;
        }
        a,button {
            text-decoration: none;
            border: 0;
            background: none;
            color: inherit;
            cursor: pointer;
        }
        ul,ol {
            display: block;
            margin: 0;
            padding: 0;
            list-style: none;
        }
        svg {
            display: inline-flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            width: 1rem;
            height: 1rem;
            stroke: currentColor;
            fill: transparent;
        }

        .container {
            width: calc(100% - 2rem);
            max-width: calc(1440px - 2rem);
            margin: 0 auto;
            padding: 0 1rem;
        }

        #header,
        #header .container {
            display: flex;
            flex-direction: row;
            align-items: center;
            height: 4rem;
        }
        #header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            padding: 0.5rem 0;
            color: #fff;
            transition: .25s;
            z-index: 2;
        }
        #header.--white-bg {
            background-color: #fff;
            color: #2C5282;
            -webkit-box-shadow: rgba(116,129,141,.1) 0 3px 8px 0;
            box-shadow: 0 3px 8px 0 rgba(116,129,141,.1);
        }
        #header .nav,
        #header .nav-menu {
            display: flex;
            flex-direction: row;
            align-items: center;
            width: 100%;
        }
        #header .nav:first-child>.nav-menu {justify-content: space-between}
        #header .logo {
            display: inline-flex;
            flex-direction: row;
            align-items: center;
            padding: 0 1rem;
            font-weight: 700;
            font-size: 1.5rem;
            font-family: 'Fira Sans', sans-serif;
        }
        #header.--white-bg .logo {
            color: #3182CE;
        }
        #header .nav#menu {
            position: fixed;
            top: 0;
            left: -500%;
            right: -400%;
            bottom: 0;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            background-color: rgba(44,82,206,0.95);
            transition: .25s;
            color: inherit;
            z-index: 3;
        }
        #header .nav#menu[data-state="expanded"] {
            left: 0;
            right: 0;
        }
        #header .nav#menu[data-state="expanded"] .menu-item {
            color: #fff;
        }
        #header #menu>.nav-menu {
            flex-direction: column;
            justify-content: center;
        }
        #menu .menu-item {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            font-family: 'Fira Sans', sans-serif;
            font-size: 1.5rem;
            font-weight: 400;
            padding: 1rem;
            color: inherit;
        }
        #menu .menu-item.--icon {
            display: inline-flex;
            padding: 1rem 0.5rem;
        }
        #menu .menu-item.--icon>svg {
            stroke: none;
            fill: currentColor;
            width: 1.5rem;
            height: 1.5rem;
        }
        #menu .menu-item.--icon>.icon-label {
            margin-left: 1rem;
        }
        .hmbgr {
            font: inherit;
            display: inline-block;
            overflow: visible;
            margin: 0;
            padding: 15px;
            cursor: pointer;
            transition-timing-function: linear;
            transition-duration: .15s;
            _transition-property: opacity,filter;
            text-transform: none;
            color: inherit;
            border: 0;
            background-color: transparent;
        }
        .hmbgr>.b {
            position: relative;
            display: inline-block;
            width: 40px;
            height: 24px;
        }
        .hmbgr .i {
            top: 2px;
            display: block;
            margin-top: -2px;
        }
        .hmbgr .i,
        .hmbgr .i::before,
        .hmbgr .i::after {
            position: absolute;
            width: 40px;
            height: 4px;
            transition-timing-function: ease;
            transition-duration: .15s;
            transition-property: transform;
            border-radius: 4px;
            background-color: currentColor;
        }
        .hmbgr .i::before,
        .hmbgr .i::after {
            display: block;
            content: "";
        }
        .hmbgr .i::before {
            top: 10px;
            transition-timing-function: ease;
            transition-duration: .15s;
            transition-property: transform,opacity;
        }
        .hmbgr .i::after {
            bottom: -10px;
            top: 20px;
        }
        .hmbgr.--active {
            position: fixed;
            right: 1rem;
            top: 0.5rem;
            color: #fff;
            z-index: 4;
        }
        .hmbgr.--active .i {
            transform: translate3d(0,10px,0) rotate(45deg);
        }
        .hmbgr.--active .i::before {
            transform: rotate(-45deg) translate3d(-5.71429px,-6px,0);
            opacity: 0;
        }
        .hmbgr.--active .i::after {
            transform: translate3d(0,-20px,0) rotate(-90deg);
        }

        #content {
            position: relative;
            z-index: 1;
        }

        section#welcome {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: calc(100vh - 1.5rem);
            padding-top: 1.5rem;
            background: rgba(49,130,206,0.9) url('/assets/img/code_bg.jpg');
            background: -moz-linear-gradient(90deg, rgba(49,130,206,0.9) 0%, rgba(44,82,130,0.9) 100%), url('/assets/img/code_bg.jpg');
            background: -webkit-linear-gradient(90deg, rgba(49,130,206,0.9) 0%, rgba(44,82,130,0.9) 100%), url('/assets/img/code_bg.jpg');
            background: linear-gradient(90deg, rgba(49,130,206,0.9) 0%, rgba(44,82,130,0.9) 100%), url('/assets/img/code_bg.jpg');
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#3182ce",endColorstr="#2c5282",GradientType=1);
            color: #BEE3F8;
            text-align: center;
            position: relative;
            z-index: 2;
        }
        section#welcome h1 {
            color: #fff;
            margin: 0 0 0.15rem;
            font-size: 2rem;
            font-weight: 700;
            line-height: 1.4;
        }
        section#welcome h2 {
            color: inherit;
            margin: 0 0 0.75rem;
            font-size: 1.25rem;
            line-height: 1.5;
        }
        section#welcome p {
            font-size: 1.125rem;
            font-weight: 400;
            color: inherit;
            margin: 0 0 2rem;
        }
        section#welcome span.more {
            position: absolute;
            bottom: 0.5rem;
            font-size: 1.25rem;
        }
        section#welcome .contact-btn {
            display: inline-flex;
            flex-direction: row;
            align-items: center;
            background-color: #D53F8C;
            color: #EBF4FF;
            padding: 0.75rem 2rem;
            font-size: 0.938rem;
            font-weight: 600;
            text-transform: uppercase;
            cursor: pointer;
            border-radius: 10rem;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
        }
        section#welcome .contact-btn>svg {
            width: 1.5rem;
            height: 1.5rem;
            fill: currentColor;
            stroke: none;
            margin-right: 0.5rem;
        }

        section#about {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 10vh 0;
            background: rgb(255,255,255);
            background-image: -moz-linear-gradient(180deg, rgba(255,255,255,1) 0%, rgba(247,250,252,0.9) 100%), url('/assets/img/bricks_bg.jpg');
            background-image: -webkit-linear-gradient(180deg, rgba(255,255,255,1) 0%, rgba(247,250,252,0.9) 100%), url('/assets/img/bricks_bg.jpg');
            background-image: linear-gradient(180deg, rgba(255,255,255,1) 0%, rgba(247,250,252,0.9) 100%), url('/assets/img/bricks_bg.jpg');
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#ffffff",endColorstr="#f7fafc",GradientType=1);
            background-repeat: repeat;
            background-position: bottom center;
            background-size: cover;
        }
        section#about .mini-bio {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            align-items: center;
            width: 100%;
            margin: 0 auto 10vh;
            text-align: center;
        }
        section#about .profile-photo {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            width: 100%;
        }
        section#about .profile-photo>img {
            display: block;
            margin: 0;
            padding: 0;
            border: 4px solid #3182CE;
            width: 150px;
            height:150px;
            border-radius: 10rem;
        }
        section#about .skill-sets {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            width: 100%;
            margin: 0 auto;
        }
        section#about .skill-set {
            background-color: #fff;
            -webkit-box-shadow: rgba(116,129,141,.1) 0 3px 8px 0;
            box-shadow: 0 3px 8px 0 rgba(116,129,141,.1);
            border: 1px solid #edf2f7;
            padding: 1.25rem;
            border-radius: 0.375rem;
            margin-bottom: 1rem;
            width: 100%;
            text-align: center;
        }
        section#about .skill-set>h3 {
            margin-bottom: 0.5rem;
        }

        section#recent-work {
            padding: 5rem 0;
            text-align: center;
        }
        section#recent-work h2 {
            margin-bottom: 1rem;
        }
        section#recent-work nav.work-tabs,
        section#recent-work .work-tabs>ul {
            margin: 0 auto;
            display: inline-flex;
            flex-direction: row;
            justify-content: center;
        }
        section#recent-work nav.work-tabs{margin-bottom:2rem}
        section#recent-work .tab-filter {
            display: flex;
            flex-direction: row;
            align-items: center;
            padding: 0.75rem 1.5rem;
            color: #718096;
            font-size: 1.125rem;
            font-weight: 400;
            border-bottom: 2px solid #E2E8F0;
            line-height: 1;
        }
        section#recent-work .tab-filter.active {
            color: #3182CE;
            border-color: #3182CE;
        }

        section#recent-work .works {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            width: 100%;
            margin: 0 auto;
        }
        section#recent-work .work {
            width: 100%;
            max-width: 300px;
            margin-bottom: 1rem;
            -webkit-box-shadow: rgba(116,129,141,.1) 0 3px 8px 0;
            box-shadow: 0 3px 8px 0 rgba(116,129,141,.1);
            border-radius: 0.25rem;
            overflow: hidden;
            transition: .25s ease-in-out;
        }
        section#recent-work .work.hide {
            width: 0;
            height: 0;
            opacity: 0;
        }
        section#recent-work .work>figure {margin:0}
        section#recent-work .work img {
            display: block;
            width: 100%;
            max-width: 300px;
            height: auto;
        }

        #footer {
            background-color: #2C5282;
            color: #BEE3F8;
            padding: 2.5rem 0;
        }
        .social-label {
            font-size: 1.25rem;
            font-weight: 600;
            margin: 0 auto 1rem;
            text-align: center;
        }
        .social-links>ul {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
        }
        .social-links__item {
            display: inline-flex;
            flex-direction: row;
            padding: 0 0.5rem;
            color: #3182CE;
        }
        .social-links svg {
            width: 2rem;
            height: 2rem;
            fill: #fff;
            stroke: none;
        }
        p.legal {
            font-size: 0.938rem;
            text-align: center;
        }

        @media (min-width: 600px) {
            .hmbgr {display: none}
            #header .nav#menu,
            #header .nav#menu[data-state="expanded"] {
                position: relative;
                top: unset;
                left: unset;
                right: unset;
            }
            #header .nav#menu {
                margin: 0 0 0 auto;
                background-color: transparent;
            }
            #header #menu>.nav-menu {
                justify-content: flex-end;
                flex-direction: row;
            }
            #menu .menu-item {
                font-size: 1.125rem;
                font-weight: 400;
                color: inherit;
            }
            #menu .menu-item.--icon>.icon-label {display: none}

            section#about {padding: 5rem 0}
            section#recent-work .work {
                width: calc(50% - 0.5rem);
                margin: 0 1rem 1rem 0;
            }
            section#recent-work .work:nth-child(2n) {margin-right:0}
            section#recent-work .work:last-child {margin-right:0!important}
        }

        @media (min-width: 660px) {
            section#about .skill-set {flex:1}
            section#about .skill-set:nth-child(2) {margin: 0 1rem 1rem}
        }

        @media (min-width: 768px) {
            section#welcome h1 {font-size:3rem}
            section#welcome h2 {font-size:1.75rem}
            section#welcome p {font-size:1.25rem}

            section#about .mini-bio {
                max-width: 800px;
                margin-bottom: 3rem;
            }
            section#about .about-me,
            section#about .profile-photo {
                flex: 1;
                text-align: left;
                font-size: 1.125rem;
            }
            section#about .profile-photo {max-width:250px}
            section#about .profile-photo>img {
                width: 200px;
                height:200px;
            }
            section#about .about-me {max-width:425px}
            section#about .skill-sets {max-width:800px}
        }

        @media (min-width: 800px) {
            section#recent-work .work {width: calc(33.3333333333333333333333% - 0.66666666666666666666667rem)}
            section#recent-work .work:nth-child(2n) {margin-right:1rem}
            section#recent-work .work:nth-child(3n) {margin-right:0}
        }

        @media (min-width: 1068px) {
            section#about .about-me {max-width:475px}
        }

        @media (min-width: 1200px) {
            section#about .skill-sets {
                max-width: 960px
            }
            section#recent-work .work {width: calc(25% - 0.75rem)}
            section#recent-work .work:nth-child(3n) {margin-right:1rem}
            section#recent-work .work:nth-child(4n) {margin-right:0}
        }
    </style>
</head>
<body>
<header id="header">
    <div class="container">
        <nav class="nav">
            <ul class="nav-menu">
                <li><a href="/" class="logo">I'm Rene</a></li>
                <li>
                    <button class="hmbgr" type="button" aria-haspopup="true" aria-expanded="false" data-toggle-menu>
                        <span class="b"><span class="i"></span></span>
                    </button>
                </li>
            </ul>
        </nav>
        <nav id="menu" class="nav" data-state="collapsed">
            <ul class="nav-menu">
                <li><a href="#about" class="menu-item">About</a></li>
                <li><a href="#recent-work" class="menu-item">Work</a></li>
                <li><a href="#get-in-touch" class="menu-item">Contact</a></li>
                <li>
                    <a href="https://github.com/renepeter" class="menu-item --icon" target="_blank" rel="nofollow">
                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                        <span class="icon-label">GitHub</span>
                    </a>
                </li>
                <!--<li>
                    <a href="#" class="menu-item --icon" target="_blank" rel="nofollow">
                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 24C5.385 24 0 18.615 0 12S5.385 0 12 0s12 5.385 12 12-5.385 12-12 12zm10.12-10.358c-.35-.11-3.17-.953-6.384-.438 1.34 3.684 1.887 6.684 1.992 7.308 2.3-1.555 3.936-4.02 4.395-6.87zm-6.115 7.808c-.153-.9-.75-4.032-2.19-7.77l-.066.02c-5.79 2.015-7.86 6.025-8.04 6.4 1.73 1.358 3.92 2.166 6.29 2.166 1.42 0 2.77-.29 4-.814zm-11.62-2.58c.232-.4 3.045-5.055 8.332-6.765.135-.045.27-.084.405-.12-.26-.585-.54-1.167-.832-1.74C7.17 11.775 2.206 11.71 1.756 11.7l-.004.312c0 2.633.998 5.037 2.634 6.855zm-2.42-8.955c.46.008 4.683.026 9.477-1.248-1.698-3.018-3.53-5.558-3.8-5.928-2.868 1.35-5.01 3.99-5.676 7.17zM9.6 2.052c.282.38 2.145 2.914 3.822 6 3.645-1.365 5.19-3.44 5.373-3.702-1.81-1.61-4.19-2.586-6.795-2.586-.825 0-1.63.1-2.4.285zm10.335 3.483c-.218.29-1.935 2.493-5.724 4.04.24.49.47.985.68 1.486.08.18.15.36.22.53 3.41-.43 6.8.26 7.14.33-.02-2.42-.88-4.64-2.31-6.38z"/></svg>
                        <span class="icon-label">Dribbble</span>
                    </a>
                </li>-->
                <li>
                    <a href="#" class="menu-item --icon" target="_blank" rel="nofollow">
                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        <span class="icon-label">LinkedIn</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<main id="content">
    <section id="welcome">
        <div class="container">
            <h1>Hey there! I'm René</h1>
            <h2>Full Stack Web Developer</h2>
            <p>With a focus on PHP, Laravel, semantic HTML and web performance.<br>I build bespoke solutions using modern technologies that are both scalable and performant.</p>
            <p>
                <a href="bWFpbHRvOnJlbmUucGV0ZXIxOEBnbWFpbC5jb20=" class="contact-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                    <span>Get in touch</span>
                </a>
            </p>
            <span class="more">&#8675;</span>
        </div>
    </section>
    <!-- ./welcome -->

    <section id="about">
        <div class="container">
            <div class="mini-bio">
                <figure class="profile-photo">
                    <img src="assets/img/me.jpg" alt="profile photo">
                </figure>
                <div class="about-me">
                    <h2>My name is René Peter</h2>
                    <p>I live in the beautiful twin island republic of Trinidad and Tobago. I enjoy reading, cooking and trying different cuisines from around the world</p>
                    <p>I have been involved with PHP web development for almost a decade, and my current frameworks of choice are Laravel and Tailwind. With the ever changing landscape of the web, I'm always looking to expand my skill set with new technologies and projects.</p>
                </div>
            </div>
            <div class="skill-sets">
                <div class="skill-set">
                    <h3>Languages</h3>
                    <ul>
                        <li>PHP</li>
                        <li>Python</li>
                        <li>Linux Bash</li>
                        <li>HTML5</li>
                        <li>CSS3</li>
                        <li>JavaScript</li>
                    </ul>
                </div>
                <div class="skill-set">
                    <h3>Frameworks</h3>
                    <ul>
                        <li>Laravel</li>
                        <li>jQuery</li>
                        <li>Bootstrap</li>
                        <li>TailwindCSS</li>
                    </ul>
                </div>
                <div class="skill-set">
                    <h3>Other Skills</h3>
                    <ul>
                        <li>Semantic HTML</li>
                        <li>Web Performance</li>
                        <li>Scalable Infrastructure Design</li>
                        <li>RESTful Design</li>
                        <li>AGILE Development</li>
                        <li>DevOps</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ./about -->

    <section id="recent-work">
        <div class="container">
            <h2>Some of my recent work</h2>
            <nav class="work-tabs">
                <ul>
                    <li><button type="button" class="tab-filter active" data-toggle-filter data-filter="">All</button></li>
                    <li><button type="button" class="tab-filter" data-toggle-filter data-filter="design">Design</button></li>
                    <li><button type="button" class="tab-filter" data-toggle-filter data-filter="development">Dev</button></li>
                </ul>
            </nav>
            <div class="works">
                <article class="work design" data-type="design">
                    <figure>
                        <img src="/assets/img/shot_easy_listening.jpg" alt="easy listening promotions logo">
                    </figure>
                </article>
                <article class="work design development" data-type="development design">
                    <figure>
                        <img src="/assets/img/shot_ecm.jpg" alt="ecm site">
                    </figure>
                </article>
                <article class="work design development" data-type="development design">
                    <figure>
                        <img src="/assets/img/shot_streamlurkers.jpg" alt="streamlurkers site">
                    </figure>
                </article>
                <article class="work design development" data-type="development design">
                    <figure>
                        <img src="/assets/img/shot_ezpoll.jpg" alt="ezpoll site">
                    </figure>
                </article>
                <article class="work design" data-type="design">
                    <figure>
                        <img src="/assets/img/shot_ream.jpg" alt="ream logo">
                    </figure>
                </article>
                <article class="work design development" data-type="development design">
                    <figure>
                        <img src="/assets/img/shot_venuestop.jpg" alt="venuestop site">
                    </figure>
                </article>
                <article class="work design" data-type="design">
                    <figure>
                        <img src="/assets/img/shot_webnix.jpg" alt="webnix logo">
                    </figure>
                </article>
            </div>
        </div>
    </section>
    <!-- ./work -->
</main>
<footer id="footer">
    <div class="container">
        <section id="get-in-touch">
            <p class="social-label">Find me via</p>
            <nav class="social-links">
                <ul>
                    <li>
                        <a href="bWFpbHRvOnJlbmUucGV0ZXIxOEBnbWFpbC5jb20=" class="social-links__item contact-btn" rel="nofollow" title="E-Mail">
                            <svg role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="social-links__item" target="_blank" rel="nofollow" title="GitHub">
                            <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                        </a>
                    </li>
                    <!--<li>
                        <a href="#" class="social-links__item" target="_blank" rel="nofollow" title="Dribbble">
                            <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 24C5.385 24 0 18.615 0 12S5.385 0 12 0s12 5.385 12 12-5.385 12-12 12zm10.12-10.358c-.35-.11-3.17-.953-6.384-.438 1.34 3.684 1.887 6.684 1.992 7.308 2.3-1.555 3.936-4.02 4.395-6.87zm-6.115 7.808c-.153-.9-.75-4.032-2.19-7.77l-.066.02c-5.79 2.015-7.86 6.025-8.04 6.4 1.73 1.358 3.92 2.166 6.29 2.166 1.42 0 2.77-.29 4-.814zm-11.62-2.58c.232-.4 3.045-5.055 8.332-6.765.135-.045.27-.084.405-.12-.26-.585-.54-1.167-.832-1.74C7.17 11.775 2.206 11.71 1.756 11.7l-.004.312c0 2.633.998 5.037 2.634 6.855zm-2.42-8.955c.46.008 4.683.026 9.477-1.248-1.698-3.018-3.53-5.558-3.8-5.928-2.868 1.35-5.01 3.99-5.676 7.17zM9.6 2.052c.282.38 2.145 2.914 3.822 6 3.645-1.365 5.19-3.44 5.373-3.702-1.81-1.61-4.19-2.586-6.795-2.586-.825 0-1.63.1-2.4.285zm10.335 3.483c-.218.29-1.935 2.493-5.724 4.04.24.49.47.985.68 1.486.08.18.15.36.22.53 3.41-.43 6.8.26 7.14.33-.02-2.42-.88-4.64-2.31-6.38z"/></svg>
                        </a>
                    </li>-->
                    <!--<li>
                        <a href="#" class="social-links__item" target="_blank" rel="nofollow" title="Facebook">
                            <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M23.9981 11.9991C23.9981 5.37216 18.626 0 11.9991 0C5.37216 0 0 5.37216 0 11.9991C0 17.9882 4.38789 22.9522 10.1242 23.8524V15.4676H7.07758V11.9991H10.1242V9.35553C10.1242 6.34826 11.9156 4.68714 14.6564 4.68714C15.9692 4.68714 17.3424 4.92149 17.3424 4.92149V7.87439H15.8294C14.3388 7.87439 13.8739 8.79933 13.8739 9.74824V11.9991H17.2018L16.6698 15.4676H13.8739V23.8524C19.6103 22.9522 23.9981 17.9882 23.9981 11.9991Z"/></svg>
                        </a>
                    </li>-->
                    <!--<li>
                        <a href="#" class="social-links__item" target="_blank" rel="nofollow" title="Twitter">
                            <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"/></svg>
                        </a>
                    </li>-->
                    <li>
                        <a href="#" class="social-links__item" target="_blank" rel="nofollow" title="LinkedIn">
                            <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </section>
        <p class="legal">&copy;2019 René Peter. All rights reserved.</p>
    </div>
</footer>
<script>
    (function() {
        'use strict';

        let i,ii,
            Base64 = {
            _keyStr: "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",
            encode: function(input) {
                let output = "";
                let chr1, chr2, chr3, enc1, enc2, enc3, enc4;
                let i = 0;
                input = Base64._utf8_encode(input);
                while (i < input.length) {
                    chr1 = input.charCodeAt(i++);
                    chr2 = input.charCodeAt(i++);
                    chr3 = input.charCodeAt(i++);
                    enc1 = chr1 >> 2;
                    enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
                    enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
                    enc4 = chr3 & 63;
                    if (isNaN(chr2)) {
                        enc3 = enc4 = 64;
                    } else if (isNaN(chr3)) {
                        enc4 = 64;
                    }
                    output = output + this._keyStr.charAt(enc1) + this._keyStr.charAt(enc2) + this._keyStr.charAt(enc3) + this._keyStr.charAt(enc4);
                }
                return output;
            },
            decode: function(input) {
                let output = "";
                let chr1, chr2, chr3;
                let enc1, enc2, enc3, enc4;
                let i = 0;
                input = input.replace(/[^A-Za-z0-9\+\/\=]/g, "");
                while (i < input.length) {
                    enc1 = this._keyStr.indexOf(input.charAt(i++));
                    enc2 = this._keyStr.indexOf(input.charAt(i++));
                    enc3 = this._keyStr.indexOf(input.charAt(i++));
                    enc4 = this._keyStr.indexOf(input.charAt(i++));
                    chr1 = (enc1 << 2) | (enc2 >> 4);
                    chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
                    chr3 = ((enc3 & 3) << 6) | enc4;
                    output = output + String.fromCharCode(chr1);
                    if (enc3 != 64) {
                        output = output + String.fromCharCode(chr2);
                    }
                    if (enc4 != 64) {
                        output = output + String.fromCharCode(chr3);
                    }
                }
                output = Base64._utf8_decode(output);
                return output;
            },
            _utf8_encode: function(string) {
                string = string.replace(/\r\n/g, "\n");
                let utftext = "";
                for (let n = 0; n < string.length; n++) {
                    let c = string.charCodeAt(n);
                    if (c < 128) {
                        utftext += String.fromCharCode(c);
                    }
                    else if ((c > 127) && (c < 2048)) {
                        utftext += String.fromCharCode((c >> 6) | 192);
                        utftext += String.fromCharCode((c & 63) | 128);
                    }
                    else {
                        utftext += String.fromCharCode((c >> 12) | 224);
                        utftext += String.fromCharCode(((c >> 6) & 63) | 128);
                        utftext += String.fromCharCode((c & 63) | 128);
                    }
                }
                return utftext;
            },
            _utf8_decode: function(utftext) {
                let string = "";
                let i = 0,c1,c2,c3;
                let c = c1 = c2 = 0;
                while (i < utftext.length) {
                    c = utftext.charCodeAt(i);
                    if (c < 128) {
                        string += String.fromCharCode(c);
                        i++;
                    }
                    else if ((c > 191) && (c < 224)) {
                        c2 = utftext.charCodeAt(i + 1);
                        string += String.fromCharCode(((c & 31) << 6) | (c2 & 63));
                        i += 2;
                    }
                    else {
                        c2 = utftext.charCodeAt(i + 1);
                        c3 = utftext.charCodeAt(i + 2);
                        string += String.fromCharCode(((c & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));
                        i += 3;
                    }
                }
                return string;
            }
        };

        const cbtn = document.querySelectorAll('.contact-btn');
        for (i=0; i<cbtn.length; ++i) {
            cbtn[i].setAttribute('href', Base64.decode(cbtn[i].getAttribute('href')));
        }

        window.addEventListener('scroll', function(){
            let header = document.getElementById('header'),
                scroll = window.pageYOffset || (document.documentElement || document.body.parentNode || document.body).scrollTop;

            header.classList.toggle('--white-bg', scroll > 200);
        }, false);

        document.querySelector('[data-toggle-menu]').addEventListener('click', function() {
            let menu = document.getElementById('menu'),
                state = menu.getAttribute('data-state');
            menu.setAttribute('data-state', state == 'collapsed' ? 'expanded' : 'collapsed');
            this.classList.toggle('--active', state == 'collapsed');
        });

        const workFilters  = document.querySelectorAll('[data-toggle-filter]');
        const works = document.querySelectorAll('article.work');
        for (i=0; i<workFilters.length; ++i) {
            workFilters[i].addEventListener('click', function() {
                if (!this.classList.contains('active')) {
                    // toggle active class on tab control
                    for (ii=0; ii<workFilters.length; ++ii) {
                        workFilters[ii].classList.remove('active');
                    }
                    this.classList.add('active');

                    // toggle work items
                    let type = this.getAttribute('data-filter');
                    for (ii=0; ii<works.length; ++ii) {
                        works[ii].classList.remove('hide');
                        if (type.length > 0 && !works[ii].classList.contains(type)) {
                            works[ii].classList.add('hide');
                        }
                    }
                }
            });
        }
    })()
</script>
</body>
</html>
<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Yasir M Dahir</title>
        <link rel="stylesheet" href="./css/reset.css">
        <link rel="stylesheet" href="./css/navbar.css">
        <link rel="stylesheet" href="./css/index.css">
        <link rel="stylesheet" href="./css/transition.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    </head>
    <body onload="loadFunction()">
        <?php include "./navbar.php"; ?>
        <main>
            <?php
                // A little popup appears to inform that the user has logged in, logged out or posted a blog.
                if (isset($_SESSION["posted"]) && $_SESSION["posted"] == true) {
                    echo "<div id='notification' class='notification'>
                        <i class='fas fa-paper-plane fa-3x'></i>
                        <p>Blog posted.</p>
                    </div>";
                    $_SESSION["posted"] = false;
                }
                elseif (isset($_SESSION["logged-in-notification"]) && $_SESSION["logged-in-notification"] == true) {
                    echo "<div id='notification' class='notification'>
                        <i class='fas fa-check-circle fa-3x'></i>
                        <p>Logged in.</p>
                    </div>";
                }
                elseif (isset($_SESSION["logged-out-notification"]) && $_SESSION["logged-out-notification"] == true) {
                    echo "<div id='notification' class='notification'>
                    <i class='fas fa-times-circle fa-3x'></i>
                        <p>Logged out.</p>
                    </div>";
                    $_SESSION["logged-out-notification"] = false;
                }
            ?>
            <div class="hero-container">
                <div class="parallax"></div>
                <div class="hero-text-container">
                    <h1>Yasir M Dahir</h1>
                    <p>Computer Science Student at QMUL</p>
                </div>
            </div>
            <article class="about-me" id="about-me">
                <h1>About Me</h1>
                <div class="row">
                    <div class="column">
                        <h3>
                            My name is Yasir Mohamed Dahir and I am an undergraduate computer science student within the School
                            of Electronic Engineering and Computer Science at Queen Mary University of London.
                        </h3>
                        <p>
                            I currently also work as a math tutor, working with skilled teachers, providing a proficient learning experience
                            for eager students. I aspire to become a fully-qualified software engineer, as computers have become a desire and
                            a necessity in the world from a range of fundamental fields. I hope to become an expert in computing systems and
                            software structure, as from an early age, I have always had a keen interest in designing and implementing programs.
                        </p>
                        <div class="links">
                            <a href="https://www.linkedin.com/in/yasir-dahir-0b54451b8/" target="_blank"><i class="fab fa-linkedin fa-3x"></i></a>
                            <a href="https://github.com/ydairz" target="_blank"><i class="fab fa-github fa-3x"></i></a>
                        </div>
                    </div>
                    <div class="column">
                        <figure>
                            <img src="./resources/portrait.jpg">
                        </figure>
                    </div>
                </div>
            </article>
            <article class="skills" id="skills">
                <div class="parallax-2">
                    <div class="skills-content">
                        <h1 class="heading-1">My Skills and Achievements</h1>
                        <h1 class="heading-2">My Skills</h1>
                        <p>I have learnt a couple of programming languages, markup languages and scripting languages. A couple of examples include:
                            Java, HTML, CCS, JavaScript and PHP. I first learnt how to program during my time in sixth form and from then on have
                            improve on my weaknesses. I use Java quite often, as it is the first programming language I picked up.
                        </p>
                        <div class="row">
                            <div class="column-3">
                                <h3>Programming</h3>
                                <p>As a programmer, I am able to create programs that utilise concepts from both procedural programming and object-oriented
                                    programming. Skills that I have include, identifing problems and coming up with effective solutions and having an
                                    in-depth understanding of logic, algebra and arithmetics. As a result, I am confident in my programming skills.
                                </p>
                            </div>
                            <div class="column-3">
                                <h3>Attentive Learner</h3>
                                <p>I am always open to learn new things, discerningly observing to make rational judgements about issues and predicaments.
                                    It is a necessity for me to be perceptive, as I aim to not only to have great impact on my own achievements but also
                                    the achievements of my peers. 
                                </p>
                            </div>
                            <div class="column-3">
                                <h3>Problem Solving</h3>
                                <p>I push to share information and knowledge amongst peers, using constructive criticism to welcome refinements to pass ideas.
                                    I drive myself to work on a problem until I am satisfied that the solution is to the highest quality attainable.
                                </p>
                            </div>
                        </div>
                        <div class="row" id="skills-row">
                            <div class="column-5">
                                <i class="fas fa-laptop-code fa-4x"></i>
                                <p>Proficient in programming</p>
                            </div>
                            <div class="column-5">
                                <i class="far fa-comments fa-4x"></i>
                                <p>Great communicator</p>
                            </div>
                            <div class="column-5">
                                <i class="fas fa-eye fa-4x"></i>
                                <p>Open to constructive criticism</p>
                            </div>
                            <div class="column-5">
                                <i class="fas fa-search fa-4x"></i>
                                <p>Skillful & prompt problem solver</p>
                            </div>
                            <div class="column-5">
                                <i class="fas fa-running fa-4x"></i>
                                <p>Initiative to bring results</p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="education" id="education">
                <h1 class="heading-1">Education & Qualifications</h1>
                <h1 class="heading-2">Study</h1>
                <table>
                    <tr>
                        <td>2019 - Present</td>
                        <td><h2>BSc Computer Science - Queen Mary University of London</h2></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><h3>Modules that I have covered include:</h3>Procedural programming, Object-oriented programming, Software Engineering,
                            Algorithms & Data Structures, Fundamental of web technology, Logic & discrete structures, Automata & formal languages and more.
                        </td>
                    </tr>
                    <tr>
                        <td>2015 - 2017</td>
                        <td><h2>Sixth Form - Edmonton County School</h2></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><h3>Subjects that I completed include:</h3>Maths, Further maths, Physics</td>
                    </tr>
                    <tr>
                        <td>2010 - 2015</td>
                        <td><h2>Secondary School - Edmonton County School</h2></td>
                    </tr>
                </table>
            </article>
            <article class="projects" id="projects">
                <div class="parallax-3">
                    <div class="projects-content">
                        <h1>Projects</h1>
                        <div class="row">
                            <div class="column">
                                <h3>Hoursglass Timesheets System</h3>
                                <p>Under a team of 5 members, we created a timesheet application utilising common software engineering
                                    pratices and acclimatise to requirements to meet the supervising companies expectations. The goal of
                                    the project was to create an application that allow FDM consultants to submit a weekly timesheet, which
                                    in turn links into the daily rate they receive for their time on client site. Throughout the project's
                                    lifecycle, the team carried out various prerequisites (such as: domain analysis, requirement elicitation and
                                    a design concept) to ensure that the product being built was to acceptable standards. Our team implemented a
                                    working prototype during the 12-week period. 
                                </p>
                            </div>
                            <div class="column">
                                <figure>
                                    <img src="./resources/hts.png">
                                    <figcaption>Hourglass timesheet system (HTS)</figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="row">
                            <div class="column">
                                <h3>Java Mini Game</h3>
                                <p>A short, dungeon-based minigame that utilises the concepts found in object-oriented programming.
                                    The aim of this project was to create a running game applying common concepts found in object-oriented
                                    programming (written in Java) and to create a simple GUI for the player to interact with different
                                    components of the game. 
                                </p>
                                <figure>
                                    <img src="./resources/java-game.png">
                                    <figcaption>Java Mini Game</figcaption>
                                </figure>
                            </div>
                            <div class="column">
                                <h3>Database Project</h3>
                                <p>A short database project that was designed and implemented by using Oracle Live SQL, utilising database
                                    design concepts. The project contains example basic, intermediate, and advanced level queries that stores
                                    and retrieves data from the database. Each query utilising different SQL concepts.</p>
                                <figure>
                                    <img src="./resources/database.png">
                                    <figcaption>Database Project</figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="experiences" id="experiences">
                <h1 class="heading-1">Work and Experiences</h1>
                <h1 class="heading-2">Work</h1>
                <table>
                    <tr>
                        <td>2018 - Present</td>
                        <td><h3>Mathematics Tutor at Best Tutors - A-level Department</h3></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>I have been working part-time as an A-level maths tutor for almost 3 years now, developing my
                            teaching and communication skills.</td>
                    </tr>
                    <tr>
                        <td>2017 - 2018</td>
                        <td><h3>Assistant Teacher at Strömberg Primary School</h3></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Tasks mainly included administrative work, and supervision of a classroom and group activities,
                            helping to provide an enriching environment for students to learn in.</td>
                    </tr>
                </table>
            </article>
            <article class="blog" id="blog">
                <div class="parallax-4">
                    <div class="blog-content">
                        <h1>Blog</h1>
                        <div class="blog-buttons">
                            <a href="./blog-archive.php"><i class="fas fa-archive fa-3x"></i></a>
                            <?php
                            // You must be logged in to create a new post.
                                if (isset($_SESSION["logged-in"]) && $_SESSION["logged-in"] == true) {
                                    echo "<a href='javascript:openForm()'><i class='fas fa-plus-circle fa-3x'></i></a>";
                                }
                                else {
                                    echo "<a href='./login.php'><i class='fas fa-plus-circle fa-3x'></i></a>";
                                }
                            ?>
                        </div>
                        <h2>Most recent blog posts</h2>
                        <section id="blog-form">
                            <h1>Add Post</h1>
                            <p>What are you going to write about today?</p>
                            <form action="<?php echo htmlspecialchars("post-blog.php");?>" method="post">
                                <label for="title"><b>Blog title</b></label>
                                <input type="text" name="title" maxlength="50" required>
                                <label for="paragraph"><b>Blog text</b></label>
                                <textarea type="text" name="paragraph" rows="5" maxlength="1000" required></textarea>
                                <button type="submit">Create</button>
                            </form>
                        </section>
                        <div class="blog-posts">
                        <?php
                            $conn = new mysqli("localhost", "root", "", "portfolio");
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }
                            $sql = "SELECT id, title, paragraph, date FROM blog ORDER BY date DESC, id DESC LIMIT 5";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // Prints out the 5 most recent blog posts.
                                while($row = $result->fetch_assoc()) {
                                    echo "<div class='blog-post' id='blogpost-".$row["id"]."' onclick=\"javascript:expandParagraph(".$row["id"].")\"'>
                                        <p class='date'>".date("dS M Y", strtotime($row["date"]))."</p>
                                        <h3>".$row["title"]."</h3>
                                        <p id='blog-paragraph-".$row["id"]."'>".$row["paragraph"]."</p>
                                    </div>";
                                }
                            }
                            else {
                                echo "<p class='no-posts'>No posts have been created...</p>";
                            }
                        ?>
                        </div>
                    </div>
                </div>
            </article>
        </main>
        <?php include "./footer.php"; ?>
    </body>
    <script src="main.js"></script>
</html>
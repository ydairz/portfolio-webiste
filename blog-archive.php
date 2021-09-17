<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Yasir M Dahir - Blog Archive</title>
        <link rel="stylesheet" href="./css/reset.css">
        <link rel="stylesheet" href="./css/blog-archive.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    </head>
    <body>
        <nav class='navbar'>
            <ul>
                <li><a href="javascript:history.go(-1)"><i class="fas fa-arrow-circle-left fa-2x"></i></a></li>
                <li>Yasir M Dahir</li>
            </ul>
            <?php
            if (isset($_SESSION["logged-in"])) {
                echo "<button type='button' onclick='logoutFunction()'>Sign Out</button>";
            }
            else {
                echo "<button type='button' onclick='loginFunction()'>Sign In</button>";
            }
            ?>
        </nav>
        <main>
            <div class="image-container">
                <div class="blog-content">
                    <h1>Blog Archive</h1>
                    <div class="blog-buttons">
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
                    <h2>All blog posts by date</h2>
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
                    <div class="blog-posts" id="blog-posts">
                    <?php
                        $conn = new mysqli("localhost", "root", "", "portfolio");
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        $sql = "SELECT id, title, paragraph, date FROM blog ORDER BY date DESC, id DESC";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // Prints out all blog posts.
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
        </main>
        <?php include "./footer.php"; ?>
    </body>
    <script src="main.js"></script>
</html>
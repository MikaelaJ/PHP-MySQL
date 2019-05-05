<?php
if ((isset($_GET['action']) && $_GET['action'] == 'greeting') && ($_POST['title'] != "") && ($_POST['content'] != "")) {
    $query = 'INSERT INTO entries (title, content, createdAt, userID) VALUES (:title, :content, NOW(), :userID)';
    $statement = $pdo->prepare($query);
    $statement->execute([
        'title' => $_POST['title'],
        'content' => $_POST['content'],
        'userID' => $_SESSION['userID']
    ]);
    echo "<div class=container><h6 class=green-text lighten-1>Your blogpost with title: {$_POST['title']} has been posted successfully!</h6></div>";
} else if (isset($_GET['action']) && ($_GET['action'] == 'greeting') && (count($_POST) > 0)) {
    echo "<div class=container><h6 class=pink-text accent-2>Something went wrong. Please fill in all the fields</h6></div>";
}
?>

<br>
<div class="row container">
    <div class="col s12 m6 l6 offset-l1">
        <h5>Welcome <?= $_SESSION['username']; ?>!</h5>
        <form action="?action=greeting" method="POST">
            <div class="row">
                <div class="input-field col s12 m12 l12">
                    <legend for="title">Title</legend>
                    <input placeholder="Title" type="text" name="title" id="title" class="validate">
                </div>
                <div class="input-field col s12 m12 l12">
                    <legend for="content">Content</legend>
                    <textarea placeholder="Message...." type="text" name="content" id="content" class="materialize-textarea"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m6 l6">
                    <button class="btn waves-effect waves-light pink accent-1" type="submit" value="POST">Submit post</button> <br> <br>
                    <a class="waves-effect waves-light btn orange darken-3" href="views/logout.php">Log out</a>
                </div>
            </div>
        </form>
    </div>
</div>



<?php
/* $query = "SELECT * FROM enteries"; */
$query = "SELECT * FROM entries WHERE userID = {$_SESSION["userID"]}";

$statement = $pdo->prepare($query); // Nu har vi kör query mot databasen
$statement->execute();

$blogPosts = $statement->fetchAll(PDO::FETCH_ASSOC); //Varje produkt i sig kommer att vara accociative array.
?>
<div class="row container">
    <div class="col s12 m12 l10 offset-l1">
        <table class="striped">
            <thead>
                <th class="pink-text text-accent-1 col s12 m4 l4">Title</th>
                <th class="pink-text text-accent-2 col s12 m4 l4">Content</th>
                <th class="pink-text text-accent-3 col s12 m4 l4">Date</th>

                <?php
                // Loop through all products
                foreach ($blogPosts as $blogPost) {
                    ?>
                    <tr>
                        <td class="col s12 m2 l2"><?= $blogPost['title'] ?></td>
                        <td class="col s12 m7 l7"><?= $blogPost['content'] ?></td>
                        <td class="col s12 m3 l3"><?= $blogPost['createdAt'] ?></td>
                       

                        <!-- A link to the update product page, send model and type as querystring  -->
                        <td><a class="btn-floating btn-large pulse orange accent-3" href="../login/views/delete.php?id=<?= $blogPost['entryID'] ?>">delete</a></td>

                    </tr>
                <?php
            }
            ?>
            </thead>
        </table>
    </div>
</div>
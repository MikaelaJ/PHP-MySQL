<div class="row container">
    <div class="col s12 m6 l6 offset-l3">
        <h3 class="orange-text darken-3">Register</h3>
        <h6 class="orange-text darken-3">New user? Please register and start blogging!</h6>
        <!-- Querystring för att hålla reda på vad användaren ska göra för något -->
        <form action="?action=register" method="POST">
            <label>Username:</label>
            <input type="text" name="username">
            <br>
            <label>Password:</label>
            <input type="password" name="password">
            <br>
            <input class="waves-effect waves-light btn orange darken-3" type="submit" value="Send">
        </form>
    </div>
</div>
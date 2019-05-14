<div class="row container">
    <div class="col s12 m6 l6 offset-l3">
        <h3 class="pink-text accent-2">Login</h3>
        <h6 class="pink-text accent-2">Already a frekvent blogger? Please login!</h6>
        <!-- Querystring för att hålla reda på vad användaren ska göra för något -->
        <form action="?action=login" method="POST">
            <label>Username:</label>
            <input type="text" name="username">
            <br>
            <label>Password:</label>
            <input type="password" name="password">
            <br>
            <input class="waves-effect waves-light btn pink accent-2" type="submit" value="Send">
        </form>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
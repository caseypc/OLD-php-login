<div class="content">

    <h1>Change your email adress</h1>

    <?php 

    if (isset($this->errors)) {

        foreach ($this->errors as $error) {
            echo '<div class="system_message">'.$error.'</div>';
        }

    }

    ?>

    <form action="edituseremail_action" method="post">
        <label>New email adress:</label>
        <input type="text" name="user_email" />
        <input type="submit" value="Submit" />
    </form>
    
</div>
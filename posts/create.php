<?php include "elements/header.php";
$posts = GetPosts();
$games = GetGamesById($_SESSION['user']['id'])
?>

    <form>
        <div class="mb-3">
            <label for="disabledSelect" class="form-label">Select Your Game</label>
            <select id="disabledSelect" class="form-select">
                <?php foreach ($games as $game): ?>
                <option>Disabled select</option>
                <?php endforeach; ?>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <textarea class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



<?php include "elements/footer.php"; ?>
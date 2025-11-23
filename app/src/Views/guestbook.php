<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guestbook</title>
    <link rel="stylesheet" href="/assets/css/main.css">
</head>
<body>
    <?php if(!empty($posts)){ ?>
    <h1>Guestbook Entries</h1>
    <ul>
        <?php foreach($posts as $post){ ?>
        <div>
        <h3>
            <?= $post['name']; ?>
        </h3>
        <p>
            <?= $post['message']; ?>
        </p>
        </div>
        <br><br><br><br><br><?php }?>
    </ul>
            
    <?php } else { ?>
    <p>No entries found in the guestbook.</p>
    <?php }?>

    <form action="/guestbook" method="post">

    <label for="name">Name</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email (optional)</label>
    <input type="email" id="email" name="email" placeholder="name@example.com">

    <label for="message">Message</label>
    <textarea id="message" name="message" rows="4" required></textarea>

    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</body>
</html>
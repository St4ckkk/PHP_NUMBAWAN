<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP FORM HANDLER | KAD-F</title>
    <link rel="stylesheet" href="./css/style.css" />
  </head>
  <body>
    <main>
      <form action="./includes/formhandler.php" method="post">
        <label for="firstname">Firstname</label>
        <input
          required
          type="text"
          id="firstname"
          name="firstname"
          placeholder="Firstname..."
        />

        <label for="lastname">lasttname</label>
        <input
          required
          type="text"
          id="lastname"
          name="lastname"
          placeholder="Lastname..."
        />

        <label for="favouritePet">Favourite Pet</label>
        <select name="favouritePet" id="favouritePet">
          <option value="none">none</option>
          <option value="dog">Dog</option>
          <option value="cat">Cat</option>
          <option value="bird">Bird</option>
        </select>

        <button type="submit" name="submit">Submit</button>
      </form>
    </main>
  </body>
</html>

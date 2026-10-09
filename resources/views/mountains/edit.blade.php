<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mountain</title>
</head>
<body>
    <h1>Edit Mountain</h1>
    <form>
        <label for="name">Mountain Name:</label>
        <input type="text" id="name" name="name" value="Sample Mountain">
        <br><br>
        <label for="description">Description:</label>
        <textarea id="description" name="description">Sample description</textarea>
        <br><br>
        <button type="submit">Update</button>
    </form>
    <a href="/mountains/1">Cancel</a>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="result.php" method="post">
        <label for="multitude1"> Множество №1
            <input type="text" name="multitude1" id="multitude1" value="">
        </label>
        
        <label for="multitude1"> Множество №2
            <input type="text" name="multitude2" id="multitude2" value="">
        </label>

        <label for="sort"> Сортировка
            <select name="sort" id="sort">
                <option value="desc">По убыванию</option>
                <option value="asc">По возрастанию</option>
            </select>
        </label>
        <input type="submit" value="принять">
    </form>
</body>
</html>

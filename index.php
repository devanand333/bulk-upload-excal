<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insights</title>
    <style>
        .container{
            padding: 60px 100px;
        }
        .form-class{
            margin-bottom: 40px;
        }
        .btn{

            background-color: #225fac;
            font-size: 0.875rem;
            display: flex;
            font-weight: 500;
            align-items: center;
            padding: 0.5rem 1rem;
            border-radius: 2rem;
            color: white;
            cursor: pointer;
            border: none;
            outline: none;
            box-shadow: inset 0 0 10px rgb(0 0 0 / 10%);
            white-space: nowrap;
            font-family: "Outfit", sans-serif;
        }
        .a-btn{
            text-decoration: none;
            max-width: fit-content;
        }
    </style>
</head>
<body>

    <div class="container">
        <form action="file.csv" method="post" class="form-class">
            <button type="submit" class="btn" name="with_profit">Download CSV</button>
        </form>
		
		<form action="split.php" method="post" class="form-class">
            <button type="submit" class="btn" name="with_profit">Split file</button>
        </form>

    </div>
</body>

</html>


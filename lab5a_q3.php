<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Area of Rectangle</title>
    <style>
        body .result{
            font-family: Times New Roman, serifArial, sans-serif;
            text-align: left;
            margin-top: 50px;
            font-size: 1.2em;
            font-weight: bold;
            color: black;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <?php
        // Function to calculate the area of a rectangle
        function calculateArea($width1, $width2) {
            return $width1 * $width2;
        }

        // Values for the rectangle's width1 and width2
        $width1 = 4; // Example width1
        $width2 = 2;  // Example width2

        // Call the function and store the result
        $area = calculateArea($width1, $width2);
    ?>

    <p class="result">The area of a rectangle with a width of <?php echo $width1; ?> and <?php echo $width2; ?> is <?php echo $area; ?>
</body>
</html>
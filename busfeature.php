<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
       
        .image-grid {
            display: flex;
            justify-content: space-between;
            width: 100%;
            max-width: 100%;
            margin: 0 auto;
        }

  
        .image-container {
            flex-basis: calc(33.33% - 10px); 
            margin: 5px;
            border: 1px solid #ddd; 
            padding: 10px;
            box-sizing: border-box;
            text-align: center;
        }

        .image-container img {
            width: 100%;
            display: block;
        }
    </style>
</head>
<body>
    <div class="image-grid">
        <div class="image-container">
            <img src="t.jpg" alt="Image 1">
            <div class="image-description">
                <h2>Tourist bus</h2>
                <h3>
                    Full Air Condition and fan service <br>
                    charging ports <br>
                    full time water supply <br>
                    comfortabe and bending seats <br>
                    full led tv <br>
                    limited snaks and cold drink <br>

        
    </h3>
            </div>
        </div>
        <div class="image-container">
            <img src="semi.jpg" alt="Image 2">
            <div class="image-description">
                <h2>semi luxury bus</h2>
                <h3>
                    Air condition <br>
                    music system <br>
                    watre supply <br>
                    mobile charging port <br>
                    television <br>

    </h3>
            </div>
        </div>
        <div class="image-container">
            <img src="lbus.jpg" alt="Image 3">
            <div class="image-description">
                <h2>local bus</h2>
                <h3>
                    fan service <br>
                    music system <br>
    </h3>
            </div>
        </div>
    </div>
</body>
</html>

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
            <img src="mt.jpg" alt="Image 1">
            <div class="image-description">
                <h3>Mountains of Nepal</h3>
                <p>The Himalayan region of Nepal presents a range of trekking routes suitable for all levels of fitness and experience. 
                    From the famous Everest Base Camp trek, which takes you through picturesque Sherpa villages and breathtaking landscapes, to the serene Annapurna Circuit, where you can witness diverse cultures and terrains, Nepal's mountains offer unparalleled diversity.</p>
            </div>
        </div>
        <div class="image-container">
            <img src="pokhara.jpg" alt="Image 2">
            <div class="image-description">
                <h3>Pokhara city of Nepal</h3>
                <p>Pokhara, Nepal's enchanting city, invites travelers with its stunning blend of mountain vistas, adventure, and tranquility.
                     Gaze upon the mighty Himalayas reflected in the calm waters of Phewa Lake, a picture-perfect scene. Embark on thrilling treks to Annapurna's foothills or engage in exhilarating activities like paragliding and white-water rafting.
                     </p>
            </div>
        </div>
        <div class="image-container">
            <img src="3.jpg" alt="Image 3">
            <div class="image-description">
                <h3>Culutural diversity</h3>
                <p>Nepal's landscape is adorned with a diverse array of monasteries and temples, each offering a glimpse into the nation's rich spiritual and cultural heritage.
                    Monasteries, often perched in serene mountain locales, exude tranquility and provide sanctuaries for meditation and contemplation. Temples, intricately designed and adorned, are vibrant centers of worship and devotion, where ancient traditions come to life.
                     </p>
            </div>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: #111;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            color: #fff;
            font-family: 'Arial', sans-serif;
        }

        .sun {
            width: 100px;
            height: 100px;
            background-color: #ffcc00;
            border-radius: 50%;
            position: relative;
            animation: rotate 10s linear infinite;
        }

        .planet {
            width: 30px;
            height: 30px;
            background-color: #3498db;
            border-radius: 50%;
            position: absolute;
            cursor: pointer;
            transition: transform 0.5s ease-in-out;
        }

        #mercury { left: 50px; top: 10px; animation: orbit 3s linear infinite; }
        #venus { left: 120px; top: 50px; animation: orbit 7s linear infinite; }
        #earth { left: 200px; top: 120px; animation: orbit 10s linear infinite; }
        #mars { left: 300px; top: 200px; animation: orbit 15s linear infinite; }
        #jupiter { left: 450px; top: 300px; animation: orbit 20s linear infinite; }
        #saturn { left: 600px; top: 450px; animation: orbit 25s linear infinite; }
        #uranus { left: 750px; top: 600px; animation: orbit 30s linear infinite; }
        #neptune { left: 900px; top: 750px; animation: orbit 35s linear infinite; }

        @keyframes rotate {
            100% { transform: rotate(360deg); }
        }

        @keyframes orbit {
            100% { transform: rotate(360deg); }
        }

        #planet-info {
            position: fixed;
            top: 10px;
            right: 10px;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 10px;
            border-radius: 5px;
            display: none;
        }

        #planet-info a {
            color: #3498db;
            text-decoration: none;
        }

        #planet-info a:hover {
            text-decoration: underline;
        }
    </style>
    <title>Solar System Explorer</title>
</head>
<body>
    <div class="sun">
        <div class="planet" id="mercury" onclick="showInfo('Mercury')" onmouseover="highlightPlanet('Mercury')" onmouseout="unhighlightPlanet('Mercury')"></div>
        <div class="planet" id="venus" onclick="showInfo('Venus')" onmouseover="highlightPlanet('Venus')" onmouseout="unhighlightPlanet('Venus')"></div>
        <div class="planet" id="earth" onclick="showInfo('Earth')" onmouseover="highlightPlanet('Earth')" onmouseout="unhighlightPlanet('Earth')"></div>
        <div class="planet" id="mars" onclick="showInfo('Mars')" onmouseover="highlightPlanet('Mars')" onmouseout="unhighlightPlanet('Mars')"></div>
        <div class="planet" id="jupiter" onclick="showInfo('Jupiter')" onmouseover="highlightPlanet('Jupiter')" onmouseout="unhighlightPlanet('Jupiter')"></div>
        <div class="planet" id="saturn" onclick="showInfo('Saturn')" onmouseover="highlightPlanet('Saturn')" onmouseout="unhighlightPlanet('Saturn')"></div>
        <div class="planet" id="uranus" onclick="showInfo('Uranus')" onmouseover="highlightPlanet('Uranus')" onmouseout="unhighlightPlanet('Uranus')"></div>
        <div class="planet" id="neptune" onclick="showInfo('Neptune')" onmouseover="highlightPlanet('Neptune')" onmouseout="unhighlightPlanet('Neptune')"></div>
    </div>

    <div id="planet-info">
        <p id="info-content"></p>
        <p>Explore more: <a href="#" id="planet-link" target="_blank">Wikipedia</a></p>
    </div>

    <script>
        function showInfo(planetName) {
            const infoDiv = document.getElementById('planet-info');
            const infoContent = document.getElementById('info-content');
            const planetLink = document.getElementById('planet-link');

            infoContent.innerHTML = `You selected ${planetName}.`;
            planetLink.href = getPlanetLink(planetName);
            infoDiv.style.display = 'block';
        }

        function hideInfo() {
            const infoDiv = document.getElementById('planet-info');
            infoDiv.style.display = 'none';
        }

        function highlightPlanet(planetName) {
            const planet = document.getElementById(planetName.toLowerCase());
            planet.style.transform = 'scale(1.5)';
        }

        function unhighlightPlanet(planetName) {
            const planet = document.getElementById(planetName.toLowerCase());
            planet.style.transform = 'scale(1)';
        }

        function getPlanetLink(planetName) {
            // You can replace these links with actual links to more information about each planet.
            const planetLinks = {
                Mercury: 'https://en.wikipedia.org/wiki/Mercury_(planet)',
                Venus: 'https://en.wikipedia.org/wiki/Venus',
                Earth: 'https://en.wikipedia.org/wiki/Earth',
                Mars: 'https://en.wikipedia.org/wiki/Mars',
                Jupiter: 'https://en.wikipedia.org/wiki/Jupiter',
                Saturn: 'https://en.wikipedia.org/wiki/Saturn',
                Uranus: 'https://en.wikipedia.org/wiki/Uranus',
                Neptune: 'https://en.wikipedia.org/wiki/Neptune'
            };

            return planetLinks[planetName];
        }
    </script>
</body>
</html>

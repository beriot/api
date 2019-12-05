const weatherIcons = {
    "Rain": "wi wi-day-rain",
    "Clouds": "wi wi-day-cloudy",
    "Clear": "wi wi-day-sunny",
    "Snow": "wi wi-day-snow",
    "Mist": "wi wi-day-fog",
    "Drizzle": "wi wi-day-sleet",
}

function capitalize(str){
    return str[0].toUpperCase() + str.slice(1)
}

async function main(withIP = true) {
    let ville;
    if (withIP) {
        const ip = await fetch('https://api.ipify.org?format=json')
            .then(result => result.json())
            .then(json => json.ip)


        ville = await fetch(`http://api.ipstack.com/${ip}?access_key=e265e355633a0bed4b33561ba756555d`)
            .then(result => result.json())
            .then(json => json.city)
    } else {
        ville = document.querySelector('#ville').textContent;
    }
   const meteo = await fetch(`http://api.openweathermap.org/data/2.5/weather?q=${ville}&appid=5866781a01d72fb432febce70faf4ca2&lang=fr&units=metric`)
                       .then(result => result.json())
                       .then(json => json)
                       

        displayWeatherInfos(meteo)
}

function displayWeatherInfos(data) {
    const name = data.name;
    const temperature = data.main.temp;
    const conditions = data.weather[0].main;
    const description = data.weather[0].description;

    document.querySelector('#ville').textContent = name;
    document.querySelector('#temperature').textContent = Math.round(temperature);
    document.querySelector('#conditions').textContent = capitalize(description);
    document.querySelector('#wi').className = weatherIcons[conditions];


}

const ville = document.querySelector('#ville');

ville.addEventListener('click', () => {
    ville.contentEditable = true;
});

ville.addEventListener('keydown', (e) => {
    if(e.keyCode === 13){
        e.preventDefault();
        ville.contentEditable = false;
        main(false);
    }
})

main();
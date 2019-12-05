function getApiData() {
    const paris = new XMLHttpRequest();
    const marseille = new XMLHttpRequest();
    const lyon = new XMLHttpRequest();
    const toulouse = new XMLHttpRequest();
    const nice = new XMLHttpRequest();
    const nantes = new XMLHttpRequest();
    const montpellier = new XMLHttpRequest();
    const strasbourg = new XMLHttpRequest();
    const bordeaux = new XMLHttpRequest();
    const lille = new XMLHttpRequest();

    paris.onreadystatechange = function () {
        if (paris.readyState === 4) {
            const data = JSON.parse(paris.responseText);
            info(data)
        }
    }

    marseille.onreadystatechange = function () {
        if (marseille.readyState === 4) {
            const dataMarseille = JSON.parse(marseille.responseText);
            infoMarseille(dataMarseille)
        }
    }

    lyon.onreadystatechange = function () {
        if (lyon.readyState === 4) {
            const dataLyon = JSON.parse(lyon.responseText);
            infoLyon(dataLyon)
        }
    }

    toulouse.onreadystatechange = function () {
        if (toulouse.readyState === 4) {
            const dataToulouse = JSON.parse(toulouse.responseText);
            infoToulouse(dataToulouse)
        }
    }

    nice.onreadystatechange = function () {
        if (nice.readyState === 4) {
            const dataNice = JSON.parse(nice.responseText);
            infoNice(dataNice)
        }
    }

    nantes.onreadystatechange = function () {
        if (nantes.readyState === 4) {
            const dataNantes = JSON.parse(nantes.responseText);
            infoNantes(dataNantes)
        }
    }

    montpellier.onreadystatechange = function () {
        if (montpellier.readyState === 4) {
            const dataMontpellier = JSON.parse(montpellier.responseText);
            infoMontpellier(dataMontpellier)
        }
    }

    strasbourg.onreadystatechange = function () {
        if (strasbourg.readyState === 4) {
            const dataStrasbourg = JSON.parse(strasbourg.responseText);
            infoStrasbourg(dataStrasbourg)
        }
    }

    bordeaux.onreadystatechange = function () {
        if (bordeaux.readyState === 4) {
            const dataBordeaux = JSON.parse(bordeaux.responseText);
            infoBordeaux(dataBordeaux)
        }
    }

    lille.onreadystatechange = function () {
        if (lille.readyState === 4) {
            const dataLille = JSON.parse(lille.responseText);
            infoLille(dataLille)
        }
    }

    paris.open('GET', 'https://api.waqi.info/feed/paris/?token=b9d6ae1a5164a3951401b77bdd2661e9509b8be4')
    paris.send()

    marseille.open('GET', 'https://api.waqi.info/feed/marseille/?token=b9d6ae1a5164a3951401b77bdd2661e9509b8be4')
    marseille.send()

    lyon.open('GET', 'https://api.waqi.info/feed/lyon/?token=b9d6ae1a5164a3951401b77bdd2661e9509b8be4')
    lyon.send()

    toulouse.open('GET', 'https://api.waqi.info/feed/toulouse/?token=b9d6ae1a5164a3951401b77bdd2661e9509b8be4')
    toulouse.send()

    nice.open('GET', 'https://api.waqi.info/feed/nice/?token=b9d6ae1a5164a3951401b77bdd2661e9509b8be4')
    nice.send()

    nantes.open('GET', 'https://api.waqi.info/feed/nantes/?token=b9d6ae1a5164a3951401b77bdd2661e9509b8be4')
    nantes.send()

    montpellier.open('GET', 'https://api.waqi.info/feed/montpellier/?token=b9d6ae1a5164a3951401b77bdd2661e9509b8be4')
    montpellier.send()

    strasbourg.open('GET', 'https://api.waqi.info/feed/strasbourg/?token=b9d6ae1a5164a3951401b77bdd2661e9509b8be4')
    strasbourg.send()

    bordeaux.open('GET', 'https://api.waqi.info/feed/bordeaux/?token=b9d6ae1a5164a3951401b77bdd2661e9509b8be4')
    bordeaux.send()

    lille.open('GET', 'https://api.waqi.info/feed/lille/?token=b9d6ae1a5164a3951401b77bdd2661e9509b8be4')
    lille.send()
}





function info(data){

    let show = document.querySelector('.paris');

    show.innerHTML = '<h2 class="cityName">Paris</h2><div style="color: #FFC107;font-size: 22px">' + data.data.aqi + '</div>';

}

function infoMarseille(dataMarseille){

    let show = document.querySelector('.marseille');

    show.innerHTML = '<h2 class="cityName">Marseille</h2><div style="color: #FFC107;font-size: 22px">' + dataMarseille.data.aqi + '</div>';

}

function infoLyon(dataLyon){

    let show = document.querySelector('.lyon');

    show.innerHTML = '<h2 class="cityName">Lyon</h2><div style="color: #FFC107;font-size: 22px">' + dataLyon.data.aqi + '</div>';

}

function infoToulouse(dataToulouse){

    let show = document.querySelector('.toulouse');

    show.innerHTML = '<h2 class="cityName">Toulouse</h2><div style="color: #FFC107;font-size: 22px">' + dataToulouse.data.aqi + '</div>';

}

function infoNice(dataNice){

    let show = document.querySelector('.nice');

    show.innerHTML = '<h2 class="cityName">Nice</h2><div style="color: #FFC107;font-size: 22px">' + dataNice.data.aqi + '</div>';

}

function infoNantes(dataNantes){

    let show = document.querySelector('.nantes');

    show.innerHTML = '<h2 class="cityName">Nantes</h2><div style="color: #FFC107;font-size: 22px">' + dataNantes.data.aqi + '</div>';

}

function infoMontpellier(dataMontpellier){

    let show = document.querySelector('.montpellier');

    show.innerHTML = '<h2 class="cityName">Montpellier</h2><div style="color: #FFC107;font-size: 22px">' + dataMontpellier.data.aqi + '</div>';

}

function infoStrasbourg(dataStrasbourg){

    let show = document.querySelector('.strasbourg');

    show.innerHTML = '<h2 class="cityName">Strasbourg</h2><div style="color: #FFC107;font-size: 22px">' + dataStrasbourg.data.aqi + '</div>';

}

function infoBordeaux(dataBordeaux){

    let show = document.querySelector('.bordeaux');

    show.innerHTML = '<h2 class="cityName">Bordeaux</h2><div style="color: #FFC107;font-size: 22px">' + dataBordeaux.data.aqi + '</div>';

}

function infoLille(dataLille){

    let show = document.querySelector('.lille');

    show.innerHTML = '<h2 class="cityName">Lille</h2><div style="color: #FFC107;font-size: 22px">' + dataLille.data.aqi + '</div>';

}










getApiData();



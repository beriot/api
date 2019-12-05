function getApiData() {
    const xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
        const data = JSON.parse(xhr.responseText);


    }



}


getApiData();

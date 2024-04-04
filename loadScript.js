window.onload = (e) => {
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById('tableBody').innerHTML = this.responseText;
            // var data = JSON.parse(JSON.stringify(this.responseText));
            // loadData(data);
        }
    };

    xhr.open("GET", "fetch_data.php", true);
    xhr.send();
};

function loadData(data){
    console.log(data);
}